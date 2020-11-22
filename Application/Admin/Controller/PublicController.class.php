<?php
namespace Admin\Controller;//命名空间
use Think\Controller;//加载底层类
class PublicController extends Controller {
	//构造方法 验证登录,自动执行
	public function __construct(){
		parent::__construct();
		if(!session('?user')){
			$this->redirect('User/login');//跳转登录
		}
		$admin_nav=M('cat')->where(array('is_delete'=>0,'admin'=>0))->select();
		
		$num=M('cat')->where(array('is_delete'=>0,'admin'=>0,'url'=>CONTROLLER_NAME))->find();
		//var_dump($num);die;
		if(!in_array($num['id'],session('level'))){
			$this->error('你没有权限操作');
			exit;
		}
		
		
		$se_array=array('Admin','Banner','Catcat');//头部，判断导航字数多少
		$allow=array('Message','Contact','Cat','Catcat');//导航子菜单的显示
		
	    $this->assign(array('admin_nav'=>$admin_nav,'se_array'=>$se_array,'allow'=>$allow));  
	}
     //视图加载
	public function view($view){
	$this->display('Public:header');
    $this->display();
	$this->display('Public:footer');
	}
	//图片上传
	public function upload(){
	$upload = new \Think\Upload();// 实例化上传类    
	$upload->maxSize   =     0;// 设置附件上传大小  （2M）  
	$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg','zip','rar');// 设置附件上传类型 
    $upload->rootPath    =     './Public';	//创建根目录
	$upload->savePath  =      '/Uploads/'; // 设置附件上传目录    // 上传文件     
	$info   =   $upload->upload();    
	if(!$info) {// 上传错误提示错误信息        
	$this->error($upload->getError());    
	}else{// 上传成功          
	 return $info;
	}
	}
}