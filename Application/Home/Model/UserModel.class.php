<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model{
protected $patchValidate = true;	
protected $_validate = array(     
	array('email','require','邮箱不能为空！',1,'',3),
    array('phone','require','手机号不能为空！',1,'',3),	
	array('password','require','密码不能为空！',1,'',3),
	array('cp_password','require','确认密码不能为空！',1,'',3),
	array('email','require','邮箱已经存在！',1,'unique',3),
	array('password','6,12','密码长度不符！',1,'length'),
    array('cp_password','password','确认密码不正确！',0,'confirm'),	
    array('email','/^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/','邮箱的格式不对！',1,'regex',3),
   array('phone','/^1[3|4|5|7|8][0-9]{9}$/','手机格式不对！',1,'regex',3),
   array('phone','','手机号已经存在！',1,'unique',3),
  );
}