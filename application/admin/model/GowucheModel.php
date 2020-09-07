<?php 
    namespace app\admin\Model;
    use think\Model;
    use think\Db;
    use think\Session;
    class GowucheModel extends Model{
       public function order($id){
           $result=Db::name('edition_money')->where('id',$id)->select();
           /*foreach($result as $a=>$k){
               $commodity_name=$k['commodity_name'];
               $commodity_edition=$k['commodity_edition'];
               $commodity_money=$k['commodity_money'];
           }*/
           return $this->order_add($id);
       }
       public function order_add($id){
           //return $id;
           //return session::get('name');
           $name=session::get('name');
           $name_id=session::get('name_id');
           $order_data=[
               'name'=>$name,
               'name_id'=>$name_id,
               'order_id'=>$id,
               'order_zt'=>1
           ];
           $result=Db::name('order')->insert($order_data);
           if($result){
               //添加购物车成功
               return 1;
           }else{
               //添加购物车失败
               return 2;
           }
       }
   }
?>