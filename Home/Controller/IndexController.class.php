<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $catModel =  D('Admin/Cat') ;
        $this->assign('cattree',$catModel->gettree());
        //热销商品
        $goodsModel = D('Admin/goods');
        $hot= $goodsModel ->where('is_hot=1')->order('goods_id desc')->limit('0,3')->select();
        $this->assign('hot',$hot);
         //精品
         $goodsModel = D('Admin/goods');
         $best= $goodsModel ->where('is_best=1')->order('goods_id desc')->limit('0,3')->select();
         $this->assign('best',$best);
        //新品上市
         $goodsModel = D('Admin/goods');
         $new= $goodsModel ->where('is_new=1')->order('goods_id desc')->limit('0,3')->select();
         $this->assign('new',$new);
        //历史记录
         $his = array_reverse(session('his'),true);
         $this->assign('his',$his);

          //购物车商品计数
        
        if($data = session('kache')){
        foreach( $data  as $n=>$v ){
         $num['num'] += $v['num'];
          }
        }else{
            $num ['num']= 0;
        }
         $this->assign('count',$num);


        $this->display();
   }






   



}

?>