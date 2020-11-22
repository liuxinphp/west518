<?php
namespace Admin\Controller;//命名空间
use Think\Controller;//加载底层类
class ContactController extends PublicController {
	
	//新闻列表
	public function index(){
        $Contact = M('contact'); // 实例化news对象
		$count      = $Contact->where(array('is_delete'=>0))->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(10)
		$show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$Contactlist = $Contact->where(array('is_delete'=>0))->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
		//var_dump($Contactlist);die;
		$this->assign('contact',$Contactlist);
		$this->assign('page',$show);
    
       $this->view();
	}
	
	
	public function update(){
		 $Contact = M('contact');
		if($_POST){
			
		   if($_FILES['imgPath']['size']>0){
            $info=$this->upload();
		    $_POST['imgPath']=$info['imgPath']['savepath'].$info['imgPath']['savename'];
		   }
	      $res=$Contact->where(array('id'=>I('id')))->data($_POST)->save();
		  if($res){
			$this->success('操作成功',U('Contact/index'));
			exit;
		 }else{
			$this->error('操作失败');
		  }
	}
	$id=I('id')?I('id'):'0';
	$row=$Contact->where(array('id'=>$id,'id_delete'=>0))->find();
	$this->assign('row',$row);
    $this->view();
	}
	
	
}




