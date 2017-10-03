<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    
    public function drag(){
    $this->display();
        
    }
   
    public function index(){
     
        $this->display();
    }

    public function left(){
        $this->display();
        
    }
   
    public function main(){
       
       
        $this->assign('server',$_SERVER);
       
       $this->display();
    }
     
    public function top(){
        $this->display();
    }
  
  
    
}

?>