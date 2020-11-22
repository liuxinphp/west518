<?php
namespace Home\Controller;//命名空间
use Think\Controller;//
class AboutController extends PublicController {
     public function about(){
        $res=M('about')->where(array('is_delete'=>0,'category'=>14))->order('id DESC')->limit('8')->select();
        $this->assign(array('res'=>$res));
		$ress=M('news')->where(array('is_delete'=>0,'category'=>3))->order('id DESC')->limit('3')->select();
        $this->assign(array('ress'=>$ress));
        $this->display();
    
    }
	
}




