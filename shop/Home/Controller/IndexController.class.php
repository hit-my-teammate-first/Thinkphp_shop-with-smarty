<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        
        //echo $d['username'];
       // exit;
        //商城首页
        $catModel = new \Model\CatModel;
        $cattree=$catModel->getCategoryTree();
        $this->assign('cattree',$cattree);
        
        //热销
        $goodsModel = new \Model\GoodsModel();
        $hot = $goodsModel->field('goods_id','goods_price','good_img','goods_name')->select();
        $this->assign('hot',$hot);
        $this->display();
    }
}