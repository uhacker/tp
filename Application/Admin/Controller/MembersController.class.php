<?php
namespace Admin\Controller;
use Think\Controller;
class MembersController extends Controller {
    public function index(){
        $members = M('members');
        $data = $members->select();
        $this->assign('list', $data);
    	$this->display('members');
    }
    public function active(){
        $members = M('members');
        $id = I('id');
        $status = $members->where('id='.$id)->field('status')->select();
        if($status[0]['status'] == '1'){
            $data['status'] = 0;
            $members->where('id='.$id)->save($data);
            $this->ajaxReturn(0, 'json', header("access-control-allow-origin:*"));
        }else{
            $data['status'] = 1;
            $members->where('id='.$id)->save($data);
            $this->ajaxReturn(1, 'json', header("access-control-allow-origin:*"));
        }
    }
    public function del(){
        $members = M('members');
        $id = I('id');
        $members->delete($id);
        $this->ajaxReturn(true, 'json', header("access-control-allow-origin:*"));
    }
    public function edit(){
        $members = M('members');
        $id = I('id');
        $data = $members->where('id='.$id)->select();
        $this->ajaxReturn($data, 'json', header("access-control-allow-origin:*"));
    }
    public function edit2(){
        $members = M('members');
        $id = I('id');
        $data['level'] = I('level');
        $data['account'] = I('account');
        $data['password'] = md5(I('password'));
        $members->where('id='.$id)->save($data);
    }

}