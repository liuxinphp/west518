<?php
namespace Admin\Controller;//命名空间
use Think\Controller;//加载底层类
class LinkController extends PublicController {
	
	//新闻列表
	public function index(){
        $link = M('link');
		$count      = $link->where(array('is_delete'=>0))->count();
		$Page       = new \Think\Page($count,10);
		$show       = $Page->show();
		$linklist = $link->where(array('is_delete'=>0))->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('link',$linklist);
		$this->assign('page',$show);
       $this->view();
	}
	//新闻添加
	public function add(){
		if($_POST){
		 
		 $link = M('link');
		 $_POST['time']=time();
		 $_POST['author']=session('user.username');
		 
		 $res=$link->data($_POST)->add();
		 if($res){
			$this->success('操作成功',U('link/index'));
			exit;
		}else{
			$this->error('操作失败');
		  }
	}
    $this->view();
	}
	//新闻修改
	public function update(){
		 $link = M('link');
		if($_POST){
	
	      $res=$link->where(array('id'=>I('id')))->data($_POST)->save();
		  if($res){
			$this->success('操作成功',U('link/index'));
			exit;
		 }else{
			$this->error('操作失败');
		  }
	}
	$id=I('id')?I('id'):'0';
	$row=$link->where(array('id'=>$id,'is_delete'=>0))->find();
	$this->assign('row',$row);
    $this->view();
	}
	//新闻物理删除
	public function delete(){
		$id=I('id')?I('id'):'0';
		$link = M('link');
		$res=$link->where(array('id'=>$id))->delete();
		if($res){
			$this->success('删除成功',U('link/index'));
		}else{
			$this->error('删除失败');
		}
	}
	//新闻逻辑删除
	public function log_delete(){
		$id=I('id')?I('id'):'0';
		$link = M('link');
		$data['is_delete']=1;
		$res=$link->where(array('id'=>$id))->save($data);
		if($res){
			$this->success('删除成功',U('link/index'));
		}else{
			$this->error('删除失败');
		}
	}
		
}