<?php

namespace Home\Controller;

use Home\Model\Complete;
use Home\Model\Department;
use Home\Model\Plan;
use Home\Model\Revise;
use Think\Controller;
use Think\Log;

class OperateController extends Controller
{

    public function _initialize()
    {
        $department = Department::getList();
        $this->assign('departmentList', $department);
    }

    public function index()
    {
        $plan = new Plan();
        $last = $plan->getLastOne();
        if(!$last){
            $showContent = "<p>未录入任何数据</p>";
        }else{
            $showContent = "<p>{$last['year']}年计划已录入</p></p>";
            $complete = new Complete();
            $lastWeek = $complete->getLastWeek();
            if($lastWeek){
                foreach ($lastWeek as $k=>$v){
                    $name = Department::getDepartmentName($v['department']);
                    $showContent .= "<p>{$last['year']}年完成任务<a>{$name}</a>已录入到第{$v['interval_value']}周</p>";
                }
            }

        }
        $this->assign('showContent',$showContent);
        $this->display();
    }

    /**
     * 年计划录入
     */
    public function plan()
    {
        $year = date('Y');
        $department = I('department');
        $plan = new Plan();
        $list = $plan->getList($department,$year);
        $weekNum = $this->getWeekNum();
        $weekNum = 2;
        $departmentName = Department::getDepartmentName($department);
        $this->assign('weekNum', $weekNum);
        $this->assign('department', $department);
        $this->assign('departmentName', $departmentName);
        $this->assign('year', $year);
        $this->assign('list', $list);
        $this->display();
    }

    /**
     * 年计划录入 ajax
     */
    public function planSave()
    {
        $post = I('post.');
        \Think\Log::record(json_encode($post));
        //检验数据
        $yearPost = $this->checkPost(I('post.year'), 'year');
        $seasonPost = $this->checkPost(I('post.season'), 'season');
        $monthPost = $this->checkPost(I('post.month'), 'month');
        $weekPost = $this->checkPost(I('post.week'), 'week');
        $department = I('post.department');

        if (!$yearPost || !$seasonPost || !$monthPost || !$weekPost || !$department) {
            $return = array(
                'status' => '0',
                'message' => '所有单元必填',
                'data' => array(),
            );
            $this->ajaxReturn($return);
        }

        //组装数据
        $data = array_merge($yearPost, $seasonPost, $monthPost, $weekPost);
        \Think\Log::record(json_encode($data));
        //保存数据
        $plan = new Plan();
        $res = $plan->saveMultiple($data, $department);
        $return = array(
            'status' => $res ? '1' : '0',
            'message' => $res ? '保存成功' : '保存失败',
            'data' => $res
        );
        $this->ajaxReturn($return);
    }

    /**
     * 修正计划
     */
    public function revise()
    {

        $year = date('Y');
        $department = I('department');
        //初始化数据
        $revise = new Revise();
        $list = $revise->getList($department,$year);
        $weekNum = $this->getWeekNum();
        $weekNum = 2;
        $departmentName = Department::getDepartmentName($department);
        $this->assign('weekNum', $weekNum);
        $this->assign('department', $department);
        $this->assign('departmentName', $departmentName);
        $this->assign('year', $year);
        $this->assign('list', $list);
        $this->display();
    }

    public function reviseSave()
    {
        $post = I('post.');
        \Think\Log::record(json_encode($post));
        //检验数据
        $yearPost = $this->checkPost(I('post.year'), 'year');
        $seasonPost = $this->checkPost(I('post.season'), 'season');
        $monthPost = $this->checkPost(I('post.month'), 'month');
        $weekPost = $this->checkPost(I('post.week'), 'week');
        $department = I('post.department');

        if (!$yearPost || !$seasonPost || !$monthPost || !$weekPost || !$department) {
            $return = array(
                'status' => '0',
                'message' => '所有单元必填',
                'data' => array(),
            );
            $this->ajaxReturn($return);
        }

        //组装数据
        $data = array_merge($yearPost, $seasonPost, $monthPost, $weekPost);
        \Think\Log::record(json_encode($data));
        //保存数据
        $revise = new Revise();
        $res = $revise->editMultiple($data, $department);
        $return = array(
            'status' => $res ? '1' : '0',
            'message' => $res ? '修改成功' : '修改失败',
            'data' => array(
                'count'=>$res
            ),
        );
        $this->ajaxReturn($return);
    }

    /**
     * 计划完成录入
     */
    public function complete()
    {
        $department = I('department');
        $page = I('p',1);
        $size = I('size',10);
        $complete = new Complete();

        $count = $complete->getCount($department,'4');
        $maxPage = ceil($count/$size);
        $page = min(max($page,1),$maxPage);
        $maxWeek = $complete->getMaxWeekNum($department);
        $pageList = $this->getPageList($page,$maxPage,$size);
        $list = $complete->getWeekList($department,$page,$size);
        $departmentName = Department::getDepartmentName($department);
        $this->assign('list',$list);
        $this->assign('maxWeek',$maxWeek);
        $this->assign('department',$department);
        $this->assign('departmentName',$departmentName);
        $this->assign('page',$page);
        $this->assign('maxPage',$maxPage);
        $this->assign('pageList',$pageList);
        $this->display();
    }


    public function completeSave()
    {
        $post = I('post.');
        \Think\Log::record(json_encode($post));
        //检验数据
        $weekPost = I('post.week');
        $weekNum = I('post.weekNum');
        $weekPost = $this->checkPost(array($weekNum=>$weekPost),'week');
        $department = I('post.department');
        if (!$weekPost || !$department) {
            $return = array(
                'status' => '0',
                'message' => '所有单元必填',
                'data' => array(),
            );
            $this->ajaxReturn($return);
        }

        //组装数据
        $data = $weekPost['0'];
        \Think\Log::record(json_encode($data));
        //保存数据
        $complete = new Complete();
        $res = $complete->addOne($data, $department);
        $return = array(
            'status' => $res ? '1' : '0',
            'message' => $res ? '修改成功' : '修改失败',
            'data' => array(
                'count'=>$res
            ),
        );
        $this->ajaxReturn($return);
    }


    /**
     * 获取一年内的周(星期)
     * @param string $year 'yyyy' 默认为当年
     */
    private function getWeekNum($year = '')
    {
        $year = $year ?: date('Y');
        $year_start = $year . "-01-01";
        $year_end = $year . "-12-31";
        $startday = strtotime($year_start);
        if (intval(date('N', $startday)) != '1') {
            $startday = strtotime("next monday", strtotime($year_start)); //获取年第一周的日期 第一周必须包含周一
        }


        $endday = strtotime($year_end);
        if (intval(date('W', $endday)) == '7') {
            $endday = strtotime("last sunday", strtotime($year_end));
        }

        $num = intval(date('W', $endday)) - intval(date('W', $startday)) + 1;
        return $num;
//        $year_mondy = date("Y-m-d", $startday); //获取年第一周的日期
//        for ($i = 1; $i <= $num; $i++) {
//            $j = $i -1;
//            $start_date = date("Y-m-d", strtotime("$year_mondy $j week "));
//
//            $end_day = date("Y-m-d", strtotime("$start_date +6 day"));
//
//            $week_array[$i] = array (
//                str_replace("-",
//                    ".",
//                    $start_date
//                ), str_replace("-", ".", $end_day));
//        }
//        return $week_array;
    }


    private function checkPost($params, $type)
    {
        Log::record(json_encode($params));
        if (count($params)) {
            $data = array();
            $types = C('interval_type');
            foreach ($params as $k => $v) {
                //检查包含数字 非空
                if ($res = $this->filter($v) === false) {
                    return array();
                }

                $data[] = array(
                    'output' => $v['0'],
                    'output_value' => $v['1'],
                    'profit' => $v['2'],
                    'payment' => $v['3'],
                    'interval_type' => $types[$type],
                    'interval_value' => $k,
                );
            }
            return $data;
        }
        return array();
    }

    private function filter($params)
    {
        if (count($params)) {
            foreach ($params as $k => $v) {
                if (!preg_match("/^\d+(.\d+)?$/", $v)) {
                    return false;
                }
            }
            return true;
        }
        return false;
    }


    private function getPageList($curPage,$maxPage,$size = 10){
            if($maxPage<$size){
                return range(1,$maxPage);
            }elseif(2*$curPage <= $size){
                return range(1,$size);
            }elseif ($curPage+ceil($size/2) > $maxPage){
                return range($maxPage-$size+1,$maxPage);
            }else{
                $start = $curPage - floor($size/2);
                return range($start,$start+$size-1);
            }
    }


}