<?php
namespace Home\Controller;//命名空间
use Think\Controller;//
class IndexController extends PublicController {
    public function index(){
        //新闻
		$news_list=M('news')->where(array('is_delete'=>0,'category'=>1))->limit('4')->order('id DESC')->select();
	    $this->assign(array('news_list'=>$news_list));
		$newss_list=M('news')->where(array('is_delete'=>0,'category'=>1,'tuijian'=>1))->order('id DESC')->find();
	    $this->assign(array('newss_list'=>$newss_list));
		$newsa_list=M('news')->where(array('is_delete'=>0,'category'=>3))->limit('7')->order('id DESC')->select();
	    $this->assign(array('newsa_list'=>$newsa_list));
        //案例
		$al_list=M('al')->where(array('is_delete'=>0))->order('id DESC')->limit('8')->select();
		//dump($contact_list);die;
	    $this->assign('al_list',$al_list);
		$link_list=M('link')->where(array('is_delete'=>0))->order('id DESC')->select();
		//dump($contact_list);die;
	    $this->assign('link_list',$link_list);
        $this->display();	
    }
	
}