<?php
namespace Admin\Controller;//命名空间
use Think\Controller;//加载底层类
class AdminController extends PublicController {
	
	//新闻列表
	public function index(){
        $Admin = D('AdminView'); // 实例化news对象
		$count      = $Admin->where(array('Admin.is_delete'=>0))->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(10)
		$show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$adminlist = $Admin->where(array('Admin.is_delete'=>0))->order('Admin.id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('admin',$adminlist);// 抛给视图数据
		$this->assign('page',$show);// 赋值分页输出
     //echo M('admin')->getlastsql();die;
       $this->view();
	}
	//新闻添加
	public function add(){
		if($_POST){
		 
		 $Admin = M('admin');
		 $_POST['password']=md5($_POST['password']);
		 //var_dump($info);die;
		 $res=$Admin->data($_POST)->add();
		 if($res){
			$this->success('操作成功',U('Admin/index'));
			exit;
		}else{
			$this->error('操作失败');
		  }
	}
	$levellist=M('level')->where(array('is_delete'=>0))->select();
	$this->assign('levellist',$levellist);
    $this->view();
	}
	//新闻修改
	public function update(){
		 $Admin = M('admin');
		 $id=I('id')?I('id'):'0';
	   $row=$Admin->where(array('id'=>$id,'id_delete'=>0))->find();
		if($_POST){
			if($_POST['password']!=$row['password']){
			  $_POST['password']=md5($_POST['password']);
			}else{
				unset($_POST['password']);
			}
			unset($_POST['username']);
         $res=$Admin->where(array('id'=>I('id')))->data($_POST)->save();
		  if($res){
			$this->success('操作成功',U('Admin/index'));
			exit;
		 }else{
			$this->error('操作失败');
		  }
	}
	
	$this->assign('row',$row);// 抛给视图数据
	$levellist=M('level')->where(array('is_delete'=>0))->select();
	$this->assign('levellist',$levellist);
    $this->view();
	}
	//新闻物理删除
	public function delete(){
		$id=I('id')?I('id'):'0';
		$Admin = M('admin');
		$res=$Admin->where(array('id'=>$id))->delete();
		if($res){
			$this->success('删除成功',U('Admin/index'));
		}else{
			$this->error('删除失败');
		}
	}
	//新闻逻辑删除
	public function log_delete(){
		$id=I('id')?I('id'):'0';
		$Admin = M('admin');
		$data['is_delete']=1;
		$res=$Admin->where(array('id'=>$id))->save($data);
		if($res){
			$this->success('删除成功',U('Admin/index'));
		}else{
			$this->error('删除失败');
		}
	}
	//ajax验证
	public function ajax(){
      $res=M('admin')->where(array('username'=>I('username')))->find();
	  if($res){
		  $this->ajaxReturn(array(1));
	  }
	}
}




