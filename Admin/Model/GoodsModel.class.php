<?php

namespace Admin\Model;
use Think\Model\RelationModel;
class GoodsModel extends RelationModel{
     protected $_link = array(
    'comment'=> self::HAS_MANY,
 );

      protected $updateFields = 'goods_id,cat_id,goods_name,goods_number,goods_weight,shop_price,goods_desc,goods_sn,
      goods_brief,ori_img,goods_img,thumb_img,is_best,is_new,is_hot,is_sale,last_update';
    
    
      //array(完成字段,弯成规则,完成条件.附加规则)
       public $_auto = array(
       array('add_time','time',1,'function'),
       array('last_update','time',2,'function'),
      ); 
     
    

     public $_validate = array(
     //array(验证字段,验证规则,错误提示,[验证条件,附加规则,验证时间])
     array('goods_sn','','商品号已存在','1','unique','3'),
     array('goods_name','3,16','商品名在6-16字符之间','1','length','3'),
     array('cat_id','ckc','请先分类','1','callback','3'),
     //array('is_best','array(0,1)','精品只能是0或1','1','in','3'),
      array('shop_price','num','售价只能为数字','1','callback','3'),
        
    

    );
     
      protected function ckc(){
          $cat=D('Home/Cat');
         return $cat->find($_POST['cat_id']) ?true : false;
      }

     protected function num(){
        $n = I('shop_price'); 
        if(!is_numeric($n))
        return false;
     }

    }



?>