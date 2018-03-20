<?php
namespace Admin\Controller;
use Think\Controller;
/**
 * 通用控制器
 * 主要用于验证是否登陆 以及 用户权限
 */
class CommonController extends Controller {
    
    /**
     * 自动执行
     */
    public function _initialize()
    {
        // 判断用户是否登录
        if(session('user_id')) {
            return;
            exit;
        }else {
            $this->redirect('Manager/login','',2,'您还没有登录');
        }
    }
}
