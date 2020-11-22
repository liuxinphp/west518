<?php
namespace Admin\Model;
use Think\Model\ViewModel;
//模型。双表联查
class FwViewModel extends ViewModel {   
	public $viewFields = array(     
	'Fw'=>array('id','title','category','time','author','tuijian','imgPath','_type'=>'INNER'),     
	'Category'=>array('name'=>'category_name', '_on'=>'Fw.category=Category.id','_type'=>'INNER')      
	); 
}
