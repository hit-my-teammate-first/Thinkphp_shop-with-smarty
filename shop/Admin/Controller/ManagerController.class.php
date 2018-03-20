<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Verify;

class ManagerController extends Controller{
    //登录控制
    public function login(){
        
        if(!empty($_POST)){
            //验证码验证
            $vry= new Verify();
            if($vry->check($_POST['captcha'])){
                //用户名和密码校验
                $user = new \Model\UserModel;
                $info=$user->checkNamePwd($_POST['username'],$_POST['password']);
                if($info){
                    //session持久化用户信息，跳转页面
                    session('user_id',$info['userid']);
                    session('user_name',$info['username']);
                    $this->redirect("Index/index");
                }
                else{
                    echo "用户名或密码错误";
                }
            }else{
            echo "验证码错误";
            }
            //dump($_POST);
        }
        
        $this->display();
    }
    
    //退出
    public function logout(){
           session_destroy();
           $this->redirect('login');
    }
    
    //输出验证码
    public function verify(){
        $config =	array(
        'fontSize'  =>  30,              // 验证码字体大小(px)
        'useCurve'  =>  false,            // 是否画混淆曲线
        'useNoise'  =>  false,            // 是否添加杂点	
        'length'    =>  4,               // 验证码位数
        'fontttf'   =>  '',              // 验证码字体，不设置随机获取
        'bg'        =>  array(243, 251, 254),  // 背景颜色
        'reset'     =>  true,           // 验证成功后是否重置
        'imageH'    =>  45,               // 验证码图片高度
        'imageW'    =>  173,               // 验证码图片宽度
        );
        ob_clean();
        $vry = new Verify();
        $vry->entry();

    }
    
}

