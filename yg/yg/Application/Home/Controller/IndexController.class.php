<?php
namespace Home\Controller;
use Home\Model\Department;
use Home\Model\Plan;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $navList = array_merge(array(array('id'=>'0','name'=>'集团汇总')),Department::getList());
        $year = date('Y');
        $this->assign('year',$year);
        $this->assign('navList',$navList);
        $this->display();
    }

    public function getNavList()
    {
        $year = date('Y');
        $navList = array_merge(array(array('id'=>'0','name'=>'集团汇总')),Department::getList());
        $return = array(
            'status' => 1,
            'message' => '',
            'year'=>$year,
            'data' => $navList,
        );
        $this->ajaxReturn($return);
    }
}