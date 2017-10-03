<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function login(){
      if(IS_POST){
      $username = I('username');
      $pwd= I('password');
      $code = I('yzm');
    
      //验证码
     // $verify = new \Think\Verify();
     
       //if(!$verify->check($code)){
       //     $this->error('验证码错误','',3);
      //}

      $userModel = D('user');
      $userinfo = $userModel -> where(array('username'=>$username))->find();
      
      if(!$userinfo){
      $this->error('用户名错误','',3);

         }
      if($userinfo['password']!==md5($pwd.$userinfo['salt'])){
             $this->error('密码错误','',3);
      }else{
           cookie('userid',$userinfo['password']);  //设置cookie
           cookie('username',$userinfo['username']); 
           $cookie = jm($userinfo['username'].$userinfo['password'].C('salt'));//加密cookie
           cookie('key',$cookie);
           $this->success('登陆成功','/',2);
      }
   }
         $this->display();
   
 }

      public function logout(){
          cookie('username',null);
          cookie('userid',null);
          cookie('key',null);
          $this->success('退出成功','/shop/',2);
      }
  

       
       public function yzm(){
         $Verify = new \Think\Verify();
         $Verify->entry();
         $Verify->imageW =0;
         
   }



    public function msg(){
         
         $this->display();
   }

    public function reg(){
         
         if(IS_POST){
         $userModel = D('User');
         if(!$userModel->create()){
                echo $userModel->getError();
               exit;

             }
         $s = salt();
         
         $userModel->password = md5($userModel->password.$s);
         $userModel->salt =$s;
         $userModel->add();
         
       }

        $this->display();
   }



}