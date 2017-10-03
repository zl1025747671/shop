<?php

//面包屑函数
 function famliy($cat_id){
       $catModel = D('Amind/Cat');
       $fm = array();
       while($cat_id > 0){
           foreach($catModel->select() as $k => $c){
               if($c['cat_id'] == $cat_id) {
                $fm[] = $c;
                $cat_id = $c['parent_id'];
                break;

           }

     }
       
 }    
   return array_reverse($fm);   

}
        //加密
     function jm($a){
            return md5($a);
        }

     function check(){

     return  jm(cookie('username').cookie('userid').C('salt')) === cookie('key');

}

     function salt(){

        $str = '1fdfko30912-0*()*JNBKJnmc;a';
        return substr(str_shuffle($str),0,8);
        
 }



?>