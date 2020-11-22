<?php
namespace Admin\Controller;//命名空间
use Think\Controller;//加载底层类
class FwController extends PublicController {
	
	//新闻列表
	public function index(){
        $Fw = D('FwView');
		$count      = $Fw->where(array('Fw.is_delete'=>0))->count();
		$Page       = new \Think\Page($count,10);
		$show       = $Page->show();
		$Fwlist = $Fw->where(array('Fw.is_delete'=>0))->order('Fw.id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('Fw',$Fwlist);
		$this->assign('page',$show);
       $this->view();
	}
	//新闻添加
	public function add(){
		if($_POST){
		 
		 $Fw = M('Fw');
		 $_POST['time']=time();
		 $_POST['author']=session('user.username');
		 
		 if($_FILES['imgPath']['size']>0){
		 $info=$this->upload();
		 $_POST['imgPath']=$info['imgPath']['savepath'].$info['imgPath']['savename'];
		 }
		 $res=$Fw->data($_POST)->add();
		 if($res){
			$this->success('操作成功',U('Fw/index'));
			exit;
		}else{
			$this->error('操作失败');
		  }
	}
	$catlist=M('category')->where(array('pid'=>'3','is_delete'=>0))->select();
	$this->assign('catlist',$catlist);
    $this->view();
	}
	//新闻修改
	public function update(){
		 $Fw = M('Fw');
		if($_POST){
			
			if($_FILES['imgPath']['size']>0){
            $info=$this->upload();
		    $_POST['imgPath']=$info['imgPath']['savepath'].$info['imgPath']['savename'];
		   }
	      $res=$Fw->where(array('id'=>I('id')))->data($_POST)->save();
		  if($res){
			$this->success('操作成功',U('Fw/index'));
			exit;
		 }else{
			$this->error('操作失败');
		  }
	}
	$id=I('id')?I('id'):'0';
	$row=$Fw->where(array('id'=>$id,'is_delete'=>0))->find();
	$this->assign('row',$row);
	$catlist=M('category')->where(array('pid'=>3,'is_delete'=>0))->select();
	$this->assign('catlist',$catlist);
    $this->view();
	}
	//新闻物理删除
	public function delete(){
		$id=I('id')?I('id'):'0';
		$Fw = M('Fw');
		$res=$Fw->where(array('id'=>$id))->delete();
		if($res){
			$this->success('删除成功',U('Fw/index'));
		}else{
			$this->error('删除失败');
		}
	}
	//新闻逻辑删除
	public function log_delete(){
		$id=I('id')?I('id'):'0';
		$Fw = M('Fw');
		$data['is_delete']=1;
		$res=$Fw->where(array('id'=>$id))->save($data);
		if($res){
			$this->success('删除成功',U('Fw/index'));
		}else{
			$this->error('删除失败');
		}
	}
		
}