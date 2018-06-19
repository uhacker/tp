<?php
namespace Admin\Controller;
use Think\Controller;
class EssayController extends Controller {
    public function index(){
        $essay = M('essay');
        $data = $essay->select();
        $this->assign('list', $data);
        $this->display('essay');
    }
}