<?php
namespace Admin\Model;
use Think\Model\ViewModel;
//ģ�͡�˫������
class NewsViewModel extends ViewModel {   
	public $viewFields = array(     
	'News'=>array('id','title','category','time','author','tuijian','imgPath','_type'=>'INNER'),     
	'Category'=>array('name'=>'category_name', '_on'=>'News.category=Category.id','_type'=>'INNER')      
	); 
}
