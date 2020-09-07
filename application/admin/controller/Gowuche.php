<?php 
    namespace app\admin\controller;
    use app\admin\controller\Base;
    //use think\Db;
    use app\admin\model\GowucheModel;
    /*
     2020年9月1日
            详情
     */
    class Gowuche extends Base{
        public function index(){
            return $this->fetch('./gouwuche');
        }
        public function submit_order(){
            //$data=parseParams(input('data'));
            //订单id
            //$id=$data['edition_id'];
            $id=1;
            $obj=new GowucheModel();
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