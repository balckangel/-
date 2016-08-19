<?php
header('Content-type: text/html; charset=utf-8');
class Admin_LoginController extends Yaf_Controller_Abstract {
    public function indexAction(){
        if(isset($_SESSION['userinfo']) && !empty($_SESSION['userinfo'])){
            exit("<script>alert('您已登录，无须登录！');window.location.href='/admin_index';</script>");
        }
    }
    //登录操作
    public function loginAction(){
        if(empty($_POST['email']) || empty($_POST['password'])){
            exit("<script>alert('账号或密码错误！');window.location.href='/admin_login';</script>");
        }
        $user = new UserModel();
        $password = md5($_POST['password']);
        $userinfo = $user->where("email = '{$_POST['email']}' and password = '{$password}' and status = 1")->fRow();
        if(!$userinfo){
            exit("<script>alert('不存在该用户！');window.location.href='/admin_login';</script>");
        }
        //写入session
        $_SESSION['userinfo'] = array('id'=>$userinfo['id'],'email'=>$userinfo['email'],'img'=>$userinfo['img'],'nickname'=>$userinfo['nickname']);
        header("Location: /admin_index");
        exit;
    }

    //退出登录
    public function logoutAction(){
        if(!empty($_SESSION['userinfo'])){
            unset($_SESSION['userinfo']);
        }
        header("Location: /admin_login");
        exit;
    }

}
?>