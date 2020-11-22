<?php
namespace Admin\Controller;//命名空间
use Think\Controller;//加载底层类
class AboutController extends PublicController {
	
	//新闻列表
	public function index(){
        $about = D('AboutView'); // 实例化about对象
		
		
		$count      = $about->where(array('About.is_delete'=>0))->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(10)
		$show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$aboutlist = $about->where(array('About.is_delete'=>0))->order('About.id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
		//var_dump($aboutlist);die;
		$this->assign('aboutlist',$aboutlist);// 抛给视图数据
		$this->assign('page',$show);// 赋值分页输出
     //echo M('news')->getlastsql();die;
       $this->view();
	}
	
	public function add(){
		if($_POST){
		 
		 $about = M('about');
		 $_POST['time']=time();//添加时间
		 $_POST['author']=session('user.username');//作者
		 if($_FILES['imgPath']['size']>0){

		 $info=$this->upload();//图片上传
		 $_POST['imgPath']=$info['imgPath']['savepath'].$info['imgPath']['savename'];
		 }
		 
		 $res=$about->data($_POST)->add();
		 //var_dump($_POST);die;
		 if($res){
			$this->success('操作成功',U('about/index'));
			exit;
		}else{
			$this->error('操作失败');
		  }
	}
	$catlist=M('category')->where(array('pid'=>'4','is_delete'=>0))->select();
	//var_dump($catlist);die;
	$this->assign('catlist',$catlist);
    $this->view();
	}
	
	public function update(){
		 $about = M('about');
		if($_POST){
			
			if($_FILES['imgPath']['size']>0){
            $info=$this->upload();//图片修改
		    $_POST['imgPath']=$info['imgPath']['savepath'].$info['imgPath']['savename'];
		   }
		   
	      $res=$about->where(array('id'=>I('id')))->data($_POST)->save();
		  if($res){
			$this->success('操作成功',U('about/index'));
			exit;
		 }else{
			$this->error('操作失败');
		  }
	}
	$id=I('id')?I('id'):'0';
	$row=$about->where(array('id'=>$id,'id_delete'=>0))->find();
	$this->assign('row',$row);
	$catlist=M('category')->where(array('pid'=>'4','is_delete'=>0))->select();
	$this->assign('catlist',$catlist);
    $this->view();
	}
	
	public function delete(){
		$id=I('id')?I('id'):'0';
		$about = M('about');
		$res=$about->where(array('id'=>$id))->delete();
		if($res){
			$this->success('删除成功',U('about/index'));
		}else{
			$this->error('删除失败');
		}
	}
	
	public function log_delete(){
		$id=I('id')?I('id'):'0';
		$about = M('about');
		$data['is_delete']=1;
		$res=$about->where(array('id'=>$id))->save($data);
		if($res){
			$this->success('删除成功',U('about/index'));
		}else{
			$this->error('删除失败');
		}
	}
		
}