<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller {
    
       //用户评论
   public function comment(){
      if(IS_POST){
       $_POSt['pubtime'] = time();
       $commentModel =D('Comment');
    //    if(!$commentModel -> create()){
    //      echo $commentModel -> getError(); 
    //      exit;
    //    }
      if( D('comment')->add($_POST)){
      
      $this->success('评论成功','','2');
   }else{
     $this->error('评论失败','','2');
       }
   }
}
    public function goods(){
        $goods =  D('Admin/goods');
         $goodsModel =$goods ->find(I('goods_id'));
        //面包屑导航
        $this->his($goodsModel);
      $comms= $goods->relationGet('comment');

      
        $famliy=famliy($goodsModel['cat_id']);
        $this->assign('famliy',$famliy);
        $this->assign('comment',$comms);
        $this->assign('goodsinfo',$goodsModel);
       
        //购物车商品计数
        
        
       if($data = session('kache')){
        foreach( $data  as $n=>$v ){
         $num['num'] += $v['num'];
          }
        }else{
            $num['num']= 0;
        }
         $this->assign('count',$num);
         $this->display();
   }


  //商品历史记录
    public function his($goodsinfo){
        $goods_name = $goodsinfo['goods_name'];
        $shop_price = $goodsinfo['shop_price'];
        $goods_id = $goodsinfo['goods_id'];
        // $his = array();
        $his = session('?his')?session('his'):array();
        if(count($his) > 3){
            $k = key($his);
            unset($his[$k]);
        }
        $his[$goods_id] = array( 'goods_name' =>$goods_name, 'shop_price' =>$shop_price, );

        session('his',$his);
    }
  
  public function gwc(){
        if (!empty($_COOKIE['username'])){
         $goodsinfo = D('Admin/Goods')->find(I('get.goods_id'));
         $tool =  \Home\Tool\AddTool::getIns();
         $tool -> add($goodsinfo['goods_id'],$goodsinfo['goods_name'],$goodsinfo['shop_price']);
        
         $this->error('添加成功','',1);

     }else{
         $this->error('尚未登录,请先登录','/Home/User/login',3);

     }
  }
}
?>
