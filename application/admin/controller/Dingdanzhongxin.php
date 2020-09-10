<?php 
    namespace app\admin\controller;
    use app\admin\controller\Base;
    use think\Db;
    //use think\Session;
    class Dingdanzhongxin extends Base{
        public function index(){
            $acg=Db::name('class')->select();
            $this->assign('acg',$acg);
            return $this->fetch('./dingdanzhongxin');
        } 
    }
?>