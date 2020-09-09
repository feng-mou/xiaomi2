<?php 
    namespace app\admin\controller;
    use app\admin\controller\Base;
    use think\Db;
    use think\session;
    class Test extends Base{
        public function index(){
            return $this->fetch('./test');
        } 
    }
?>