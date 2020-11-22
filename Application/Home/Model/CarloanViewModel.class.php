<?php
namespace Home\Model;
use Think\Model\ViewModel;
//模型。双表联查
class CarloanViewModel extends ViewModel {   
	public $viewFields = array(    
	'Carloan'=>array('id','time','content','imgPath','time','author','_type'=>'INNER'),     
	'category'=>array('name'=>'category_name', 'id'=>'pid','_on'=>'Carloan.category=category.id','_type'=>'INNER') 
    
	);
}
