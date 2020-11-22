<?php
namespace Admin\Controller;//命名空间
use Think\Controller;//加载底层类
class LevelController extends PublicController {
	
	//新闻列表
	public function index(){
        $Level = M('Level'); // 实例化news对象
		$count      = $Level->where(array('is_delete'=>0))->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(10)
		$show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$Levellist = $Level->where(array('is_delete'=>0))->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('level',$Levellist);// 抛给视图数据
		$this->assign('page',$show);// 赋值分页输出
     //echo M('Level')->getlastsql();die;
       $this->view();
	}
	//新闻添加
	public function add(){
		if($_POST){
		 
		 $Level = M('level');
		 $_POST['level']=json_encode($_POST['level']);
        
		 $res=$Level->data($_POST)->add();
		 //echo $Level->getlastsql();die;
		 if($res){
			$this->success('操作成功',U('Level/index'));
			exit;
		}else{
			$this->error('操作失败');
		  }
	}
	
    $this->view();
	}
	//新闻修改
	public function update(){
		 $Level = M('level');
		 
		if($_POST){
	     $_POST['level']=json_encode($_POST['level']);
         $res=$Level->where(array('id'=>I('id')))->data($_POST)->save();
		  if($res){
			$this->success('操作成功',U('Level/index'));
			exit;
		 }else{
			$this->error('操作失败');
		  }
	}
	$id=I('id')?I('id'):'0';
	$row=$Level->where(array('id'=>$id,'id_delete'=>0))->find();
	$row['level']=json_decode($row['level']);
	$this->assign('row',$row);// 抛给视图数据
    $this->view();
	}
	//新闻物理删除
	public function delete(){
		$id=I('id')?I('id'):'0';
		if($id!=1){
		$Level = M('level');
		$res=$Level->where(array('id'=>$id))->delete();
		if($res){
			$this->success('删除成功',U('Level/index'));
		}else{
			$this->error('删除失败');
		}
		}else{
			$this->error('你不能进行此操作');
		}
	}
	//新闻逻辑删除
	public function log_delete(){
		$id=I('id')?I('id'):'0';
		if($id!=1){
		$Level = M('level');
		$data['is_delete']=1;
		$res=$Level->where(array('id'=>$id))->save($data);
		if($res){
			$this->success('删除成功',U('Level/index'));
		}else{
			$this->error('删除失败');
		}
		}else{
			$this->error('你不能进行此操作');
		}
	}
	//ajax验证
	public function ajax(){
      $res=M('level')->where(array('name'=>I('name')))->find();
	  if($res){
		  $this->ajaxReturn(array(1));
	  }
	} 
}




