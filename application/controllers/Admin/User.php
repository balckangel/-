<?php
class Admin_UserController extends Yaf_Controller_Abstract {
    public function init(){
        //验证登陆
        UserModel::getInstance()->LoginStatus();
        $this->getView()->assign('members',$_SESSION['userinfo']);
    }
    public function indexAction() {
        //用户列表
        $user = new UserModel();
        $list = $user->where('')->fList();
//        var_dump($list);
    }

    public function editAction(){

    }
}