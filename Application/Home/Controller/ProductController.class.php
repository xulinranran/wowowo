<?php
namespace Home\Controller;
use Think\Controller;
class ProductController extends PublicController {
    public function index(){
    	$list = D('Product')->where("`wsid`=1232")->relation(true)->select();
    	$this->assign('list',$list);
        $this->view();
    }
    public function Detail(){
    	$pro_id = I('get.pro_id');
    	$one = D('Product')->where("`id`=$pro_id")->relation(true)->find();
    	
    	// print_r($one);die;
        $this->assign('one',$one);
    	$this->view();
    }
}