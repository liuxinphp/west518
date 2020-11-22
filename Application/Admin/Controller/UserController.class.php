<?php
/*
*
*/
namespace Admin\Controller;//命名空间
use Think\Controller;//加载底层类
class UserController extends Controller {
	//登录操作
    public function login(){
		if($_POST){
			if(!$this->check_verify(I('Code'))){
				$this->error('验证码错误',U('User/login'));
			}
			$Admin=M('admin');
			$username=I('username');//或者$username=$_POST['username'];I函数自动区分POST，GET
			$password=md5(I('password'));//或者$password=md5($_POST['password']);
			$res=$Admin->where(array('username'=>$username,'password'=>$password))->find();//find 查询一个
			//或者$res=$Admin->where("username='$username' AND password='$password'")->find();//find 查询一个
			//echo $Admin->getlastsql();die; 输出SQL语句
			
		    if($res){
				session('user',$res);  //设置session
				
				$level=M('level')->where(array('id'=>$res['level']))->find();
				session('level',json_decode($level['level']));
				
				$Admin->where(array('username'=>$res['username']))->data(array('logintime'=>date('Y-m-d H:i:s')))->save();
				
				if(I('rem')==1){
					cookie('username',$res['username']);
					cookie('password',I('password'));
					cookie('rem',1);
				}else{
				    cookie('username',null);
					cookie('password',null);
					cookie('rem',null);
				}
				$this->redirect('Index/index');//重定向,一个方法中不用写类名，类名/TEST
			}else{
				$this->error('用户名或者密码不匹配');
			}
		}
        $this->display('login');
     }
	
	//用户退出
	public function logout(){
		session('user',null);//删除session
		$this->redirect('login');//跳转登录
	}
	//验证码
	public function Verify(){
		$config =    array(    
		'fontSize'    =>    15,    // 验证码字体大小    
		'length'      =>    4,     // 验证码位数    
		'useNoise'    =>    false, // 关闭验证码杂点
		);
		ob_clean();
		$Verify = new \Think\Verify($config );
		$Verify->entry();
	}
	//验证码检测
	public function check_verify($code, $id = ''){    
	$verify = new \Think\Verify();    
	return $verify->check($code, $id);
	}
	
	
}













