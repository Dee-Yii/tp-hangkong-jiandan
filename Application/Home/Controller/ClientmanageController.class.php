<?php
namespace Home\Controller;
use Think\Controller;
//use Think\Controller\restController;
class ClientmanageController extends Controller {
    /*
    *
    *
    */
     public function __construct()
    {
      # code...
      parent::__construct();

    }
    public function clientList(){
        $this->display('clientManage/clientList');
    }
    public function userManage(){
      $this->display('accountManage/userManage');
    }
    public function brokerManage(){
      $this->display('accountManage/brokerManage');
    }
    public function buyLog(){
        $phone= "18657195470";
        $user_info = M('user_info');
        $map['phoneNum'] = $phone;
        $userInfo = $user_info->where($map)->find();
        $this->assign('userInfo',$userInfo);
        $this->display('clientManage/clientListView/buyLog');
    }
}
