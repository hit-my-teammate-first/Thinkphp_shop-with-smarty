<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends Controller{
    
    //购物车信息展示
    public function checkout(){
        if(session('user')==null){
            $this->redirect('User/login');
        }
        $car = session('car');
        $tool = \Tools\AddTool::getIns();
        $this->assign('total',$tool->calcMoney());
        $this->assign('car',$car);
        $this->display();
    }
    
    public function done(){
        $this->display();
    }
}

