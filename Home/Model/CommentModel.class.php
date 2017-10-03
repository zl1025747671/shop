<?php

namespace Home\Model;
use Think\Model\RelationModel;
class CommentModel extends RelationModel{


  public $_validate = array (
   
     array('email','email','邮箱格式错误','1','','3'),

      array('content','6,140','内容长度不符','1','length','3')



  );

}



















?>