<?php
namespace Admin\Model;
use Think\Model\ViewModel;
//ģ�͡�˫������
class AlViewModel extends ViewModel {   
	public $viewFields = array(     
	'Al'=>array('id','title','category','time','author','tuijian','imgPath','_type'=>'INNER'),     
	'Category'=>array('name'=>'category_name', '_on'=>'Al.category=Category.id','_type'=>'INNER')      
	); 
}
