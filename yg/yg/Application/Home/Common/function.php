<?php

//md5 签名
function str2sign($str){
        return strtolower(md5($str));
}

function getWeekNum($year = '')
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

function getMonth($week,$year = '')
{
    $year = $year ?: date('Y');
    $year_start = $year . "-01-01";
    $startday = strtotime($year_start);
    if (intval(date('N', $startday)) != '1') {
        $startday = strtotime("next monday", strtotime($year_start)); //获取年第一周的日期 第一周必须包含周一
    }
    $year_mondy = date("Y-m-d", $startday); //获取年第一周的日期
    $month = date("m", strtotime("$year_mondy $week week "));
    return ltrim($month,'0');
}

//月份获取所属季节 1 2 3 4标识
function getSeason($month){
    return ceil($month/3);
}
