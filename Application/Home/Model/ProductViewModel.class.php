<?php
namespace Home\Model;
use Think\Model\ViewModel;
//ģ�͡�˫������
class ProductViewModel extends ViewModel {   
	public $viewFields = array(    
	'Product'=>array('id','time','content','imgpath','time','author','title','_type'=>'INNER'),     
	'category'=>array('name'=>'category_name', 'id'=>'pid','_on'=>'Product.category=category.id','_type'=>'INNER') 
    
	);
}
