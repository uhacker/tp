<?php
namespace Home\Controller;
use Think\Controller;
class ItemController extends Controller {
    public function index(){
    	$Item = M('Item');
    	$data = $Item->select();
    	$this->ajaxReturn($data, 'json', header("access-control-allow-origin:*"));
    }
    public function ajax(){
    	$data['topic'] = 2;//题目编号
    	$this->ajaxReturn($data, 'json', header("access-control-allow-origin:*"));
    }
    public function dish(){
        $data['userCoin'] = 10; //用户金币数
        $data['freeChance'] = 1;//用户免费次数
        $data['userChance'] = 3;//用户抽奖次数
        $data['userPrize'] = 5; //奖品次序依次为1-8
        $this->ajaxReturn($data, 'json', header("access-control-allow-origin:*"));
    }
    public function sum(){
        $num = rand(0, 100);
        $this->ajaxReturn($num, 'json', header("access-control-allow-origin:*"));
    }
    public function search(){
        $status = true; //是否有数据
        $this->ajaxReturn($status, 'json', header("access-control-allow-origin:*"));
    }

}