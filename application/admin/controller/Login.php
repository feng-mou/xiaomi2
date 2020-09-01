<?php 
    namespace app\admin\controller;
    use app\admin\controller\Base;
    use think\captcha\Captcha;
    //验证账号密码
    use app\admin\model\LoginModel;
    class Login extends Base{
        public function index(){
            return $this->fetch('./Login');
        } 
        public function loginYz(){
            $captcha=new Captcha();//实例化判断验证码是否一致方法
            //解析成数组
            $data=parseParams(input('post.data'));
            $name=$data['username'];
            $pass=$data['password'];
            $yzm=$data['yzm'];
            if(!$captcha->check($yzm)){
                return json(['code' => 404, 'data' => '', 'msg' => '验证码不一致']);
            }
            if($name==null){
                return json(['code' => 404, 'data' => '', 'msg' => '账号不能为空']);
            }
            if($pass==null){
                return json(['code' => 404, 'data' => '', 'msg' => '密码不能为空']);
            }
            $obj=new LoginModel();
            $result=$obj->loginYz($name,$pass);
            //var_dump($result);
            if($result=='1'){
                return json(['code' => 404, 'data' => '', 'msg' => '账号不存在']);
            }else if($result=='2'){
                return json(['code' => 404, 'data' => '', 'msg' => '密码错误']);
            }else{
                return json(['code' => 200, 'data' => url('admin/index/index'), 'msg' => '登录成功']);
            }
        }
    }
?>