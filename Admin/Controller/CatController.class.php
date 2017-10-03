<?php
namespace Admin\Controller;
use Think\Controller;
class CatController extends Controller {
    public function catadd(){
        if(IS_POST){
        $catModel = D('Cat');
        if($catId = $catModel -> add($_POST)){
              $this->redirect('Admin/Cat/catlist');
        }

    }
     
     $this->display();

    }

        
        
    
    public function catlist(){
        
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

    public function catedit(){
        $catModel = D('Cat');
        if(IS_POST){
         $cat_id = I('cat_id');
         if( $catModel ->where('cat_id='.$cat_id)->save($_POST)){
                $this->redirect('Admin/Cat/catlist');
                 }
         
     }   
        $this->assign('gettree', $catModel -> gettree());
         $this->assign('catinfo', $catModel -> find(I('cat_id')));
         $this->display();
         
      }

      public function catdel(){
        
        $catModel = D('Cat');
        if($catModel->delete(I('get.cat_id'))){
              $this->redirect('Admin/Cat/catlist');

          }
    }


}
?>