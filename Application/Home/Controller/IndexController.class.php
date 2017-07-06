<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends PublicController {
    public function index(){
    	$list = D('Product')->where("`wsid`=1232")->relation(true)->select();
    	$this->assign('list',$list);
    	$anli = D('Case')->relation(true)->select();
    	$this->assign('anli',$anli);
        $this->view();
    }

    public function Detail(){
      $pro_id = I('get.pro_id');
      $one = D('Product')->where("`id`=$pro_id")->relation(true)->find();
      $this->assign('one',$one);
      $this->view('./Product/detail');
    }
    public function caseDetail(){
      $case_id = I('get.case_id');
      $one = D('Case')->where("`id`=$case_id")->relation(true)->find();
      $this->assign('one',$one);
      // print_r($one);die;
      $this->view('./Case/detail');
    }
   
}