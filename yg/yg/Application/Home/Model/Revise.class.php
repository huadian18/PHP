<?php

namespace Home\Model;

use Think\Model;

class Revise extends Model
{
    protected $tableName = 'revise';

    private function copyPlan($department, $year = '')
    {
        $plan = new Plan();
        $list = $plan->getList($department, $year);
        $this->addAll($list);
    }

    /**
     * 批量修改数据
     * 存在修改数据，不存在新增数据
     */
    public function editMultiple($data, $department, $year = '')
    {
        $count = 0;
        if (count($data)) {
            $year = is_numeric($year) ? $year : date('Y');
            foreach ($data as $key => $row) {
                $where = array(
                    'department' => $department,
                    'year' => $year,
                    'interval_type' => $row['interval_type'],
                    'interval_value' => $row['interval_value'],
                );
                $find = $this->where($where)->find();
                $newSign = $find['sign'];
                if ($find && !$this->checkSign($row, $find['sign'], $newSign)) {
                    $save = array(
                        'output' => $row['output'],
                        'output_value' => $row['output_value'],
                        'profit' => $row['profit'],
                        'payment' => $row['payment'],
                        'sign' => $newSign,
                    );
                    $res = $this->where($where)->save($save);
                    $res = $res ? 1 : 0;
                    $count += $res;
                }
            }
        }
        return $count;
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
        $data = array(
            'output_rate' => bcdiv($params['output'],$find['output'],2),
            'output_value_rate' => bcdiv($params['output_value'],$find['output_value'],2),
            'profit_rate' => bcdiv($params['profit'],$find['profit'],2),
            'payment_rate' => bcdiv($params['payment'],$find['payment'],2),
        );
        $this->where($where)->save($data);
    }

    /**
     *
     */
    private function checkSign($row, $sign, &$newSign)
    {
        $arr = array(
            'output' => $row['output'],
            'output_value' => $row['output_value'],
            'profit' => $row['profit'],
            'payment' => $row['payment'],
        );
        $str = json_encode($arr);
        $newSign = str2sign($str);
        return $sign == $newSign;
    }

    /**
     * 保存单条数据
     */
    public function addOne($data)
    {
        return $this->add($data);
    }

    /**
     * 获取数据列表
     */
    public function getList($department, $year)
    {
        $year = is_numeric($year) ? $year : date('Y');
        $where = array(
            'department' => $department,
            'year' => $year
        );
        $list = $this->where($where)->select();
        if (!$list) {
            $this->copyPlan($department, $year);
            $list = $this->where($where)->select();
        }
        return $list;
    }

    public function test()
    {
        return $this->limit(2)->select();
    }


}