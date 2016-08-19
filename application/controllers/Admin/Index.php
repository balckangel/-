<?php
header('Content-type: text/html; charset=utf-8');
class Admin_IndexController extends Yaf_Controller_Abstract {
    public function indexAction(){
        //验证登陆
        UserModel::getInstance()->LoginStatus();
        $this->getView()->assign('members',$_SESSION['userinfo']);
    }
?>