<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {
    public function index(){
    	$admin = M('admin');
    	$adminData = $admin->select();
    	$this->assign('list', $adminData);
        $this->display('admin');
    }
    public function add(){
    	$admin = M('admin');
    	$data['type'] = I('type');
    	$data['email'] = I('email');
    	$data['password'] = md5(I('password'));
    	$admin->add($data);

        $return = $admin->where($data)->select();
        $this->ajaxReturn($return, 'json', header("access-control-allow-origin:*"));
    }
    public function del(){
        $admin = M('admin');
        $id = I('id');
        if($id != 1){
            $admin->delete($id);
            $this->ajaxReturn(true, 'json', header("access-control-allow-origin:*"));
        }else{
            $this->ajaxReturn(false, 'json', header("access-control-allow-origin:*"));
        }
    }
    public function edit(){
        $admin = M('admin');
        $id = I('id');
        $data = $admin->where('id='.$id)->select();
        $this->ajaxReturn($data, 'json', header("access-control-allow-origin:*"));
    }
    public function edit2(){
        $admin = M('admin');
        $data['id'] = I('id');
        $data['password'] = md5(I('password'));
        $admin->where('id='.$data['id'])->save($data);
    }
}