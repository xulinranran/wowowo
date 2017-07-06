<?php
namespace Home\Controller;
use Think\Controller;
class CaseController extends PublicController {
    public function index(){
    	$list = D('Case')->relation(true)->select();
    	$this->assign('list',$list);
        $this->view();
    }
    public function Detail(){
    	$case_id = I('get.case_id');
    	$one = D('Case')->where("`id`=$case_id")->relation(true)->find();
    	$this->assign('one',$one);
    	// print_r($one);die;
    	$this->view();
    }
    
}