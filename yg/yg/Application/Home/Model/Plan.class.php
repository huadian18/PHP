<?php

namespace Home\Model;

use Think\Log;
use Think\Model;

class Plan extends Model
{
    protected $tableName = 'plan';

    /**
     * 批量保存数据
     */
    public function saveMultiple($params, $department, $year = '')
    {

        if (count($params)) {
            $data = $this->format($params, $department, $year);
            \Think\Log::record(json_encode($data));
            $res = $this->addAll($data);
            \Think\Log::record($this->getLastSql());
            return $res;
        }
        return false;
    }

    public function updateRate($params,$department, $year= '')
    {
        $year = is_numeric($year) ? $year : date('Y');
        $where = array(
            'department'=>$department,
            'year'=>$year,
            'interval_type'=>$params['interval_type'],
            'interval_value'=>$params['interval_value'],
        );
        $find = $this->where($where)->find();
        Log::record(json_encode($find));
        $data = array(
            'output_rate' => bcdiv($params['output'],$find['output'],2),
            'output_value_rate' => bcdiv($params['output_value'],$find['output_value'],2),
            'profit_rate' => bcdiv($params['profit'],$find['profit'],2),
            'payment_rate' => bcdiv($params['payment'],$find['payment'],2),
        );
        $this->where($where)->save($data);
    }

    public function format($params, $department, $year = '')
    {
        if (count($params) && $department) {
            $year = is_numeric($year) ? $year : date('Y');
            $data = array();
            foreach ($params as $k => $v) {
                $data[] = array(
                    'department' => $department,
                    'output' => $v['output'],
                    'output_value' => $v['output_value'],
                    'profit' => $v['profit'],
                    'payment' => $v['payment'],
                    'year' => $year,
                    'interval_type' => $v['interval_type'],
                    'interval_value' => $v['interval_value'],
                );
            }
            return $data;
        }
        return array();
    }

    public function getList($department,$year = '')
    {
        if($department){
            $year = is_numeric($year) ? $year : date('Y');
            $where = array(
                'department'=>$department,
                'year'=>$year
            );

            return $this->where($where)->select();
        }
        return array();
    }

    public function getLastOne()
    {
        $res = $this->order('id DESC')->select();
        return $res ? $res['0'] : array();
    }

}