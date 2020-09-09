<?php 
    namespace app\admin\controller;
    use app\admin\controller\Base;
    use think\Db;
    use think\Session;
    use app\admin\model\GouwucheModel;
    /*
     2020年9月1日
            详情
     */
    class Gouwuche extends Base{
        public function index(){
            $name=session::get('name');
            $result=Db::name('order')
            ->field('a.order_id,a.order_zt,a.name,b.id,b.commodity_name,b.commodity_class,commodity_money,commodity_edition,b.commodity_img')
            ->alias('a')
            ->join('edition_money b','a.order_id=b.id')
            ->where('a.name',$name)
            ->where('a.order_zt',1)
            ->limit(0,10)
            ->select();
            //return var_dump($result);
            $this->assign('result',$result);
            return $this->fetch('./gouwuche');
        }
        public function submit_order(){
            /*$name_id=session::get('name_id');
            $yes=Db::name('order')->where('name_id',$name_id)->where('order_zt',1)->count();
            //echo $yes;
            if($yes==10){
                return json(['code' => 500, 'data' => url('admin/Gouwuche/index'), 'msg' => '添加购物车满了']);
            }*/
            
            $data=parseParams(input('data'));
            //订单id
            $id=$data['edition_id'];
            //$id=1;
            $obj=new GouwucheModel();
            $result=$obj->order($id);
            
            if($result==1){
                return json(['code' => 404, 'data' => '', 'msg' => '添加购物车成功']);
            }else{
                return json(['code' => 404, 'data' => '', 'msg' => '添加购物车失败']);
            }
            
            //var_dump($result);
        } 
        
    }
?>