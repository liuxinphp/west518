<?php
namespace Admin\Controller;//命名空间
use Think\Controller;//加载底层类
class BannerController extends PublicController {
	
	//新闻列表
	public function index(){
        $Banner = D('Banner'); // 实例化news对象
		$count      = $Banner->where(array('is_delete'=>0))->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(10)
		$show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$Productlist = $Banner->where(array('is_delete'=>0))->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
		
		//var_dump($img);die;
		$this->assign('Banner',$Productlist);// 抛给视图数据
		$this->assign('page',$show);// 赋值分页输出
     //echo M('Banner')->getlastsql();die;
       $this->view();
	}
	
	public function add(){
		if($_POST){
		 
		 $Banner = M('Banner');
		 $_POST['time']=time();//添加时间
		 if($_FILES['imgpath']['size']>0){

		 $info=$this->upload();//图片上传
		 $_POST['imgpath']=$info['imgpath']['savepath'].$info['imgpath']['savename'];
		 }

		 $res=$Banner->data($_POST)->add();
		 if($res){
			$this->success('操作成功',U('Banner/index'));
			exit;
		}else{
			$this->error('操作失败');
		  }
	}
	
    $this->view();
	}

	public function update(){
		 $Banner = M('Banner');
		if($_POST){
			
		if($_FILES['imgpath']['size']>0){

		 $info=$this->upload();//图片上传
		 
		 
			 
		 $_POST['imgpath']=$info['imgpath']['savepath'].$info['imgpath']['savename'];
		
		
		 }
	      $res=$Banner->where(array('id'=>I('id')))->data($_POST)->save();
	      //var_dump($_POST);die;
		 if($res){
			$this->success('操作成功',U('Banner/index'));
			exit;
		 }else{
			$this->error('操作失败');
		  }
	}
	$id=I('id')?I('id'):'0';
	$row=$Banner->where(array('id'=>$id,'id_delete'=>0))->find();
	$this->assign('row',$row);// 抛给视图数据
   
    $this->view();
	}
	public function delete(){
		$id=I('id')?I('id'):'0';
		$Banner = M('Banner');
		$res=$Banner->where(array('id'=>$id))->delete();
		if($res){
			$this->success('删除成功',U('Banner/index'));
		}else{
			$this->error('删除失败');
		}
	}
	
	public function log_delete(){
		$id=I('id')?I('id'):'0';
		$Banner = M('Banner');
		$data['is_delete']=1;
		$res=$Banner->where(array('id'=>$id))->save($data);
		if($res){
			$this->success('删除成功',U('Banner/index'));
		}else{
			$this->error('删除失败');
		}
	}
		
}