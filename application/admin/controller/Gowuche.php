<?php 
    namespace app\admin\controller;
    use app\admin\controller\Base;
    //use think\Db;
    //use app\admin\model\LoginModel;
    /*
     2020年9月1日
            详情
     */
    class Gowuche extends Base{
        public function index(){
            $data=parseParams(input('data'));
            //var_dump($data['edition_id']);
            var_dump($data['edition_id']);
        } 
        
    }
?>