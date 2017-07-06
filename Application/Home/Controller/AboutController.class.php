<?php
namespace Home\Controller;
use Think\Controller;
class AboutController extends PublicController {
    public function index(){
    	$list = D('About')->where(`id`==1)->find();
    	$this->assign('list',$list);
        $this->view();
    }
    
}