<?php
namespace Admin\Controller;//命名空间
use Think\Controller;//加载底层类
class IndexController extends Controller {
	//登录成功
	public function index(){
		if(!session('?user')){
			$this->redirect('User/login');//跳转登录
		}
		
      $admin_nav=M('cat')->where(array('is_delete'=>0,'admin'=>0))->select();
	  //var_dump($admin_nav);die;
	  $se_array=array('Admin','Banner','Contact');//头部，判断导航字数多少
	  $allow=array('Message','Contact','Cat','Catcat');
	//var_dump($allow);die;
	 //导航子菜单的显示
	 $this->assign(array('admin_nav'=>$admin_nav,'se_array'=>$se_array,'allow'=>$allow));
	 
	$this->display('Public:header');
    $this->display();
	$this->display('Public:footer');//页面加载
	}
}