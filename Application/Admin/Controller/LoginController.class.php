<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $this->display('login');
    }
    public function login(){
        $admin = M('admin');
        $userEmail = I('email');
        $userPassword = I('password');
        $ajaxAccount = $admin->where(array('email'=>$userEmail))->find();
        if($ajaxAccount){
            $userPassword = md5($userPassword);
            $ajaxPassword = $admin->where(array('password'=>$userPassword))->find();
            if($ajaxPassword){
                $this->ajaxReturn(true);
            }else{
                $this->ajaxReturn(false);
            }
        }else{
            $this->ajaxReturn(false);
        }
        
    }
}