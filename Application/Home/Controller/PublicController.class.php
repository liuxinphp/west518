<?php
namespace Home\Controller;//命名空间
use Think\Controller;//加载底层类
class PublicController extends Controller {
	//构造方法 验证登录,自动执行
	public function __construct(){
		parent::__construct();
		//公司文化
		$about_list=M('about')->where(array('is_delete'=>0,'category'=>15))->order('id DESC')->find();
	    $this->assign('about_list',$about_list);
		//新闻
		$news_list=M('news')->where(array('is_delete'=>0,'tuijian'=>1))->order('id DESC')->limit(4)->select();
		//dump($news_list);die;
	    $this->assign('news_list',$news_list);
		//轮播
		$banner_list=M('banner')->where(array('is_delete'=>0))->order('id DESC')->select();
		
	    $this->assign('banner_list',$banner_list);
	
	}
	public function massage(){
		
		if($_POST){
		  if(!$this->check_verify(I('yzm'))){
				echo 3;die;
		  }
	      $_POST['time']=time();
		  $res=M('message')->add($_POST);
		  if($res){
			echo 1;die;
		  }else{
			 echo 2; die;
		  }
		}
	}
  
	//图片上传
	 public function upload(){
	$upload = new \Think\Upload();// 实例化上传类    
	$upload->maxSize   =     2097152 ;// 设置附件上传大小  （2M）  
	$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型 
    $upload->rootPath    =     './Public';	//创建根目录
	$upload->savePath  =      '/Uploads/'; // 设置附件上传目录    // 上传文件     
	$info   =   $upload->upload();
	if(!$info) {// 上传错误提示错误信息        
	$this->error($upload->getError());    
	}else{// 上传成功          
	 return $info;
	}
	}
	//模糊查询
	 public function search(){
	    $Product=M('Product');
		$keywords='%'.trim(I('name')).'%';
		$wherel['title|content']=array('like',$keywords);
		$wherel['is_delete']=0;
		$count= $Product->where($wherel)->count();
		$Page       = new \Think\Page($count,9);

		if($keywords){
			$Page->parameter=I('get.p');
			$Page->parameter .="&name=".$keywords;
			
		}
		$goshow       = $Page->show();	
		$data =$Product->where($wherel)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();

		if($data){
			$this->assign(array('page'=>$goshow,'res'=>$data));
			$this->view('Product:index');
			exit;
		}else{
		   $News=M('News');
		   $keywords='%'.trim(I('name')).'%'; 
		   $where['title|content|author']=array('like',$keywords);
		   $where['is_delete']=0;
		   $count=$News->where($where)->count();
		   $Page=new \Think\HomePage($count,9);
		   if($keywords){
			   $Page->parameter=I('get.p');
			   $Page->parameter.="&name=".$keywords;
		   }
		   $show       = $Page->show();
		   $data=$News->where($where)->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
		   if($data){
		   $this->assign('res',$data);
		   $this->assign('page',$show);
		   $this->view('News:index');
			exit;
			}
		  }
	 }
	 //验证码
	public function Verify(){
		$config =    array(    
		'fontSize'    =>    15,    // 验证码字体大小    
		'length'      =>    4,     // 验证码位数    
		'useNoise'    =>    false, // 关闭验证码杂点
		);
		
		$Verify = new \Think\Verify($config );
		$Verify->entry();
	}
	//验证码检测
	public function check_verify($code, $id = ''){    
	$verify = new \Think\Verify();    
	return $verify->check($code, $id);
	}
}













