<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends Controller {
    public function checkout(){
         $kache = session('kache');
         $tool =  \Home\Tool\AddTool::getIns();
          foreach( $kache  as $n=>$v ){
         $num['num'] += $v['num'];
          }
          
         $this->assign('count',$num);
         $this->assign('total',$tool->calcMoney());
         $this-> assign('kache',$kache);
         $this->display();
   }

    public function done(){
         $kache = session('kache');
         $tool =  \Home\Tool\AddTool::getIns();
         $this->assign('total',$tool->calcMoney());
          
         $this->display();
   }
}