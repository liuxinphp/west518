<?php
namespace Admin\Controller;//命名空间
use Think\Controller;//加载底层类
class MessageController extends PublicController {
	
	//新闻列表
	public function index(){
        $Message = D('message'); // 实例化news对象
		$count      = $Message->where(array('is_delete'=>0))->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(10)
		$show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$Messagelist = $Message->where(array('is_delete'=>0))->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('message',$Messagelist);// 抛给视图数据
		$this->assign('page',$show);// 赋值分页输出
     //echo M('Message')->getlastsql();die;
       $this->view();
	}
	
	//新闻修改
	public function update(){
		 $Message = M('message');
		if($_POST){
			
			if($_FILES['imgPath']['size']>0){
            $info=$this->upload();//图片修改
		    $_POST['imgPath']=$info['imgPath']['savepath'].$info['imgPath']['savename'];
		   } 
		   
	      $res=$Message->where(array('id'=>I('id')))->data($_POST)->save();
		  if($res){
			$this->success('操作成功',U('Message/index'));
			exit;
		 }else{
			$this->error('操作失败');
		  }
	}
	$id=I('id')?I('id'):'0';
	$row=$Message->where(array('id'=>$id,'id_delete'=>0))->find();
	$this->assign('row',$row);// 抛给视图数据
    $this->view();
	}
	//新闻物理删除
	public function delete(){
		$id=I('id')?I('id'):'0';
		$Message = M('message');
		$res=$Message->where(array('id'=>$id))->delete();
		if($res){
			$this->success('删除成功',U('Message/index'));
		}else{
			$this->error('删除失败');
		}
	}
	//新闻逻辑删除
	public function log_delete(){
		$id=I('id')?I('id'):'0';
		$Message = M('message');
		$data['is_delete']=1;
		$res=$Message->where(array('id'=>$id))->save($data);
		if($res){
			$this->success('删除成功',U('Message/index'));
		}else{
			$this->error('删除失败');
		}
	}
	
}




