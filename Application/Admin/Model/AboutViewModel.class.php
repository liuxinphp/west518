<?php
namespace Admin\Model;
use Think\Model\ViewModel;
//模型。双表联查
class AboutViewModel extends ViewModel {   
	public $viewFields = array(     
	'About'=>array('id','title','category','time','content','imgPath','titleone','_type'=>'INNER'),     
	'Category'=>array('name'=>'category_name', '_on'=>'About.category=Category.id','_type'=>'INNER')      
	); 
}
