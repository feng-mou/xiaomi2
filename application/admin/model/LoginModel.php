<?php 
    namespace app\admin\Model;
    use think\Model;
    use think\Db;
    class LoginModel extends Model{
        //验证账号是否存在
        public function loginYz($name,$pass){
            //判断账号是否存在
            $result=Db::name('user')->where('name',$name)->count();
            if($result==0){
                //账号不存在
                return '1';
            }
            
            $loginData=[
                'name'=>$name,
                'pass'=>$pass
            ];
            $result2=Db::name('user')->where($loginData)->count();
            
            if($result2==0){
                //密码错误
                return '2';
            }else{
                //账号密码正确
                return '3';
            }
        } 
    }
?>