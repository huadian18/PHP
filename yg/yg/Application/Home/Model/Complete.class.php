<?php

namespace Home\Model;

use Think\Log;
use Think\Model;

class Complete extends Model
{
    protected $tableName = 'complete';


    /**
     * 保存单条数据
     */
    public function addOne($params, $department, $year = '')
    {
        if (count($params) && $department) {
            $year = is_numeric($year) ? $year : date('Y');
            $data= array(
                'department' => $department,
                'output' => $params['output'],
                'output_value' => $params['output_value'],
                'profit' => $params['profit'],
                'payment' => $params['payment'],
                'year' => $year,
                'interval_type' => $params['interval_type'],
                'interval_value' => $params['interval_value'],
            );
            //新录入数据检验并修改父级数据
//            week->month->season->year
            $this->add($data);
            $this->handleParentData($data,$department, $year);
            return true;
        }
        return false;
    }

    private function handleParentData($params,$department, $year = ''){
        $month = getMonth($params['interval_value']);
        $season = getMonth($month);
        $year = is_numeric($year) ? $year : date('Y');
        $where = array(
            'department'=>$department,
            'year'=>$year,
        );
        $arr = array(
            array('interval_type'=>'3','interval_value'=>$month),
            array('interval_type'=>'2','interval_value'=>$season),
            array('interval_type'=>'1','interval_value'=>$year),
        );
        $plan = new Plan();
        $revise = new Revise();
        foreach ($arr as $k=>$v){
            $where['interval_type'] = $v['interval_type'];
            $where['interval_value'] = $v['interval_value'];
            $find = $this->where($where)->find();
            $data = array(
                'output' => bcadd($find['output'],$params['output'],5),
                'output_value' => bcadd($find['output_value'],$params['output_value'],5),
                'profit' => bcadd($find['profit'],$params['profit'],5),
                'payment' => bcadd($find['payment'],$params['payment'],5),
            );
            $this->where($where)->save($data);//更新当前表的数据
            //更新计划表和修正表中数据完成率
            $data = array_merge($data,$where);
            Log::record(json_encode($data));
            $plan->updateRate($data,$department, $year);
            $revise->updateRate($data,$department, $year);
        }
    }

    /**
     * 获取数据列表
     */
    public function getWeekList($department, $page = 1, $limit = 10, $year = '')
    {
        $year = is_numeric($year) ? $year : date('Y');
        $where = array(
            'department' => $department,
            'year' => $year,
            'interval_type'=>4
        );
        $list = $this->where($where)->page($page)->order('id DESC')->limit($limit)->select();
        if(!$list){
            $this->copyPlan($department,$year);
        }
        return $list;
    }

    //计划表中将周以上的数据填入完成表
    private function copyPlan($department, $year = '')
    {
        $where = array(
            'department'=>$department,
            'year'=>$year
        );
        $find = $this->where($where)->select();
        if($find){
            return true;
        }
        $plan = new Plan();
        $list = $plan->getList($department, $year);
        $data = array();
        foreach ($list as $k=>$v){
            if($v['interval_type'] == '4'){
                continue;
            }
            $v['output'] = '';
            $v['output_value'] = '';
            $v['profit'] = '';
            $v['payment'] = '';
            $data[] = $v;
        }
        $this->addAll($data);
    }

    //获取插入最大周数
    public function getMaxWeekNum($department, $year = '')
    {
        $year = is_numeric($year) ? $year : date('Y');
        $where = array(
            'department' => $department,
            'year' => $year,
            'interval_type' => '4',
        );

        $res = $this->where($where)->order('id DESC')->limit(1)->select();
        return $res ? $res['0']['interval_value'] : 0;
    }

    //获取当年部门的录入的总周数
    public function getCount($department,$intervalType = '4',$year= '')
    {
        $year = is_numeric($year) ? $year : date('Y');
        $where = array(
            'department' => $department,
            'year' => $year,
            'interval_type' => $intervalType,
        );

        return $this->where($where)->count('1');
    }

    //获取各部门最新一周的数据
    public function getLastWeek($year = '')
    {
        $year = is_numeric($year) ? $year : date('Y');
        $where = array(
            'year' => $year,
            'interval_type' => '4',
        );
        $subQuery = $this->where($where)->order('id DESC')->buildSql();
        $res = $this->table($subQuery.' a')->group('a.department')->select();
        return $res?:array();
    }


}