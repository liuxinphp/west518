<?php
namespace Home\Controller;//命名空间
use Think\Controller;//
class NewsController extends PublicController {
	
    public function news(){
		$id=I('id');
		$News = M('News');
        if($id){
		 $count      = $News->where(array('is_delete'=>0,'category'=>$id))->count();
		$Page       = new \Think\Page($count,9);
		$goshow       = $Page->show();
		$res = $News->where(array('is_delete'=>0,'category'=>$id))->order('id DESC')->limit($Page->
		firstRow.','.$Page->listRows)->select();
        $this->assign(array('res'=>$res));
		$this->assign('page',$goshow);	
		}else{
		  $count      = $News->where(array('is_delete'=>0))->count();
		$Page       = new \Think\Page($count,9);
		$goshow       = $Page->show();
		$res = $News->where(array('is_delete'=>0))->order('id DESC')->limit($Page->
		firstRow.','.$Page->listRows)->select();
        $this->assign(array('res'=>$res));
		$this->assign('page',$goshow);	
		}		
		
		$news_cata=M('category')->where(['is_delete'=>0,'pid'=>1])->select();
		$this->assign('news_cata',$news_cata);
        $this->display();
    }
	  
	public function info(){
        $id=I('id');
		$res=M('News')->where(array('id'=>$id))->setInc('liulan',1);
        $res=M('News')->where(array('id'=>$id,'is_delete'=>0))->find();
        $prev=M('News')->where(array('id'=>array('GT',$id),'is_delete'=>0))->find();
		$next=M('News')->where(array('id'=>array('LT',$id),'is_delete'=>0))->order('id DESC')->find();
		$this->assign(array('res'=>$res,"prev"=>$prev,'next'=>$next));
		 $this->display();
	}
	
}




