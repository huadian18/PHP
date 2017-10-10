<?php
namespace Home\Model;
use Think\Model;

class Department extends Model {
//    protected $tableName = 'department';

    public static function getList()
    {
        return array(
            array('id'=>'1','name'=>'预制事业部'),
            array('id'=>'2','name'=>'预办事业部'),
            array('id'=>'3','name'=>'河北榆构'),
            array('id'=>'4','name'=>'北京诚丰'),
            array('id'=>'5','name'=>'榆构模板'),
        );
    }
    public static function getDepartmentName($key){
        $arr =  array(
            '1'=>'预制事业部',
            '2'=>'预办事业部',
            '3'=>'河北榆构',
            '4'=>'北京诚丰',
            '5'=>'榆构模板',
        );
        return array_key_exists($key,$arr) ? $arr[$key] : '';
    }

}