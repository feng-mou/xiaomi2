<?php 
    namespace app\admin\controller;
    use app\admin\controller\Base;
    use think\Db;
    //use app\admin\model\LoginModel;
    /*
     2020年9月1日
            详情
     */
    class Xiangqing extends Base{
        public function index(){
            $id=input('id');
            $name=input('name');
            $arr=Db::name('commodity')->where('id',$id)->select();
            $edition=Db::name('edition_money')->where('commodity_name',"$name")->select();
            $this->assign('arr',$arr);
            $this->assign('edition',$edition);
            //var_dump($edition);die;
            //$acg[]=$arr;
            //var_dump($acg['commodity_name']);die;
            return $this->fetch('./xiangqing');
        } 
        
    }
?>