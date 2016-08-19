<?php
class UserModel extends Base {
	public $table = 'user';
	public $field = array(
		'id' => array('type' => "int(11) unsigned", 'comment' => 'id'),
		'email' => array('type' => "int(11)", 'comment' => '邮箱'),
		'phone' => array('type' => "varchar(13)", 'comment' => '手机'),
		'nickname' => array('type' => "char(50)", 'comment' => '昵称'),
		'password' => array('type' => "varchat(255)", 'comment' => '密码'),
		'time' => array('type' => "int(11)", 'comment' => '创建时间'),
		'updated' => array('type' => "int(11)", 'comment' => '修改时间'),
		'img' => array('type' => "varchar(255)", 'comment' => '图片'),
		'status' => array('type' => "int(1)", 'comment' => '0:普通用户；1后台管理员'),
	);
	public $pk = 'id';

	public function LoginStatus(){
		if(!isset($_SESSION['userinfo']) && empty($_SESSION['userinfo'])){
			exit("<script>alert('请先登录！');window.location.href='/admin_login';</script>");
		}
	}
}