<?php
namespace Home\Controller;//命名空间
use Think\Controller;//
class AlController extends PublicController {
     public function al(){
		$id=I('id');
	    if($id){
			$count      = M('al')->where(array('is_delete'=>0,'category'=>$id))->count();
			$Page       = new \Think\Page($count,17);
			$goshow       = $Page->show();
			$res = M('al')->where(array('is_delete'=>0,'category'=>$id))->order('id DESC')->limit($Page->
			firstRow.','.$Page->listRows)->select();
			$this->assign(array('res'=>$res));
			$this->assign('page',$goshow);
		}else{
		$count      = M('al')->where(array('is_delete'=>0))->count();
		$Page       = new \Think\Page($count,17);
		$goshow       = $Page->show();
		$res = M('al')->where(array('is_delete'=>0))->order('id DESC')->limit($Page->
		firstRow.','.$Page->listRows)->select();
        $this->assign(array('res'=>$res));
		$this->assign('page',$goshow);	
		}
        $al_list=M('category')->where(['is_delete'=>0,'pid'=>2])->select();
		$this->assign('al_list',$al_list);	
		$row=M('news')->where(array('is_delete'=>0,'category'=>2))->order('id DESC')->limit('3')->select();
        $this->assign(array('row'=>$row));
        $this->display();
    }
	public function info(){
		$id=I('id');
		M('al')->where(array('id'=>$id))->setInc('liulan',1);
        $res=M('al')->where(array('id'=>$id,'is_delete'=>0))->find();
        $prev=M('al')->where(array('id'=>array('GT',$id),'is_delete'=>0))->find();
		$next=M('al')->where(array('id'=>array('LT',$id),'is_delete'=>0))->order('id DESC')->find();
		$this->assign(array('res'=>$res,"prev"=>$prev,'next'=>$next));
		$this->display();
	}
}




