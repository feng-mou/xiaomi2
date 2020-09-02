<?php 
    namespace app\admin\controller;
    use app\admin\controller\Base;
    //use app\admin\model\LoginModel;
    /*
     2020年9月1日
            详情
     */
    class Xiangqing extends Base{
        public function index(){
            return $this->fetch('./xiangqing');
        } 
        
    }
?>