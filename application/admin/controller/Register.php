<?php 
    namespace app\admin\controller;
    use app\admin\controller\Base;
    //验证账号密码
    use app\admin\model\LoginModel;
    class Register extends Base{
        public function index(){
            return $this->fetch('./register');
        } 
    }
?>