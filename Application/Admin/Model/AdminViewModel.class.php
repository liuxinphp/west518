<?php
namespace Admin\Model;
use Think\Model\ViewModel;
//模型。双表联查
class AdminViewModel extends ViewModel {   
	public $viewFields = array(     
	'Admin'=>array('id','username','email','logintime','_type'=>'INNER'),     
	'level'=>array('name'=>'level_name', '_on'=>'Admin.level=level.id','_type'=>'INNER')      
	); 
}
/*sql语句：
$newslist = $News->field('think_news.id,title,category,time,author,think_category.name,think_category.pid')->join('INNER JOIN think_category ON think_news.category=think_category.id')->where(array('think_news.is_delete'=>0))->order('think_news.id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
*/