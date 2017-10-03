<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends Controller {
    //实例化Model
    public $gm;   
    public function __construct(){
        parent::__construct();
        $this->gm = D('goods');
    }

    //商品添加
    public function goodsadd(){
       if(IS_POST){
           //自动验证
           if(!$this->gm->create($_POST)){
           echo $this->gm->getError();
           exit;
        }
        //goods_sn为空则生成一个6位随机数
        if(empty($_POST['goods_sn'])){
           
              $this->gm->goods_sn = sn.rand(100000,999999) ;
         } 
      
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Upload/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
    // 上传文件 
    $info   =   $upload->upload();
    if(!$info) {// 上传错误提示错误信息
        $this->error($upload->getError());
    }else{// 上传成功
        $img_path = './Upload/'.$info['goods_img']['savepath'].$info['goods_img']['savename'];

        $image = new \Think\Image(); 
        $image->open($img_path);
        // 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.jpg
        $img_xiao = './Upload/thumb/'.$info['goods_img']['savename'];
        $image->thumb(230, 200)->save($img_xiao);

        $this->gm->thumb_img = $img_xiao;
        $this->gm->goods_img = $img_path;
    }



         if($this->gm->add()){
             $this->redirect('Admin/Goods/goodslist');
         }
         
    }
         $catModel = D('Cat');
        //缓存
        $cat = S('cat');
        if(!$cat){
            echo 'from mysql';
            $cat = $catModel->gettree();
            S('cat',$cat,5);
        }
       // S('cat',null);
        $this->assign('catlist',$cat );

         $this->display();
          
      
    }
    
    public function goodslist(){
        
        $p = I('p')?I('p'):1;
        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $list = $this->gm->join('cat  as  cat_name  on cat_name.cat_id = goods.cat_id')->order('goods_id')->page($p.',8')->select();
        $this->assign('goodslist',$list);// 赋值数据集
        $count      = $this->gm->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数
        $show       = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出
        //无限级分类
         $catModel = D('Cat');
        //缓存
        $cat = S('cat');
        if(!$cat){
            echo 'from mysql';
            $cat = $catModel->gettree();
            S('cat',$cat,5);
        }
       // S('cat',null);
        $this->assign('catlist',$cat );
       
        $this->display(); // 输出模板

        //$this->assign('goodslist',$this->gm->select());
        //$this->display();
        
        

    }

     public function goodsdel(){
        
      
        if( $this->gm->delete(I('get.goods_id'))){
              $this->redirect('Admin/Goods/goodslist');
            $this->display();
             
          }
    }

     public function goodsedit(){
       
          if(IS_POST){
              if(!$this->gm->create($_POST)){
           echo $this->gm->getError();
           exit;
          }
          
          if( $this->gm->save()){
            $this->redirect('Admin/Goods/goodslist');
               }
          }

        $this->assign('gsedit', $this->gm->find(I('goods_id')));
       //缓存
        $catModel = D('Cat');
        $cat = S('cat');
        if(!$cat){
            echo 'from mysql';
            $cat = $catModel->gettree();
            S('cat',$cat,5);
        }
        //默认分类
       $data = $this->gm->join('cat  as  cat_name  on cat_name.cat_id = goods.cat_id')->field('cat_name,goods.cat_id')->find(I('goods_id'));
        $this->assign('dfcat', $data);
       
       // S('cat',null);
        $this->assign('catlist',$cat );
       
        $this->display();
         
         
     }
}
?>