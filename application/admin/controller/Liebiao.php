<?php 
    namespace app\admin\controller;
    use think\Controller;
    use think\Db;
    //use app\admin\model\LoginModel;
    /*
     2020年9月1日
            小米手机列表
     */
    class Liebiao extends Controller{
        public function index(){
            //接id避免直接就进来
            $id=input('id');
            if($id==null){
                $this->success('不可以', 'admin/index/index');
            }
            
            //查数据
            $arr=Db::name('commodity')->where('commodity_class',$id)->limit(0,10)->select();
            $count=Db::name('commodity')->where('commodity_class',$id)->count();
            if($count==0){
                $this->success('没有货', 'admin/index/index');
            }
            //将导航栏放到列表上
            $liebiao=Db::name('class')->select();
            $this->assign('acg',$liebiao);
            //$counts=ceil($count/3);
            //var_dump($arr);die;
            /*$zhu=[];
            for($i=0;$i<$counts;$i++)
            {
                $zhu[] = array_slice($arr, $i * 3 ,3);
            }
            var_dump($zhu);die;*/
            $this->assign('arr',$arr);
            return $this->fetch('./liebiao');
        } 
        
    }
?>