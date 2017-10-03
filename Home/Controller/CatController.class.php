<?php
namespace Home\Controller;
use Think\Controller;
class CatController extends Controller {
    public function cat(){
        
        $goodsModel = D('Admin/goods');
         $catModel =  D('Admin/Cat') ;
         $this->assign('cattree',$catModel->gettree());
        $mbx= D('Admin/cat')-> find(I('cat_id'));
       //面包屑导航
        $famliy=famliy($mbx['cat_id']);

        $count = $goodsModel->field('goods_id,goods_name,goods_img,shop_price,market_price')->where('cat_id='.I('cat_id'))->count();
        
        $Page       = new \Think\Page($count,4);
        $show       = $Page->show();// 分页显示输出
        $goodslist = $goodsModel->field('goods_id,goods_name,goods_img,thumb_img,shop_price,market_price')->where('cat_id='.I('cat_id'))->limit($Page->firstRow.','.$Page->listRows)->order('goods_id desc')->select();
        $this->assign('goodslist' , $goodslist);
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('co',$count);

       $this->assign('catfamliy', $famliy);
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
      
    
     


}