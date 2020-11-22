<?php
namespace Home\Controller;//命名空间
use Think\Controller;//
class FwController extends PublicController {
     public function fw(){
        $resa=M('fw')->where(array('is_delete'=>0,'category'=>9))->order('id DESC')->find();
        $this->assign(array('resa'=>$resa));
		$resb=M('fw')->where(array('is_delete'=>0,'category'=>10))->order('id DESC')->find();
        $this->assign(array('resb'=>$resb));
		$resc=M('fw')->where(array('is_delete'=>0,'category'=>11))->order('id DESC')->find();
        $this->assign(array('resc'=>$resc));
		$resd=M('fw')->where(array('is_delete'=>0,'category'=>12))->order('id DESC')->find();
        $this->assign(array('resd'=>$resd));
		$rese=M('fw')->where(array('is_delete'=>0,'category'=>13))->order('id DESC')->find();
        $this->assign(array('rese'=>$rese));
		$row=M('news')->where(array('is_delete'=>0,'category'=>1))->order('id DESC')->limit('3')->select();
        $this->assign(array('row'=>$row));
        $this->display();
    
    }
	public function info(){
		$id=I('id');
		M('fw')->where(array('id'=>$id))->setInc('liulan',1);
        $res=M('fw')->where(array('id'=>$id,'is_delete'=>0))->find();
		//dump($res);die;
        $prev=M('fw')->where(array('id'=>array('GT',$id),'is_delete'=>0,'category'=>12))->find();
		$next=M('fw')->where(array('id'=>array('LT',$id),'is_delete'=>0,'category'=>12))->order('id DESC')->find();
		$this->assign(array('res'=>$res,"prev"=>$prev,'next'=>$next));
		$this->display();
	}
}




