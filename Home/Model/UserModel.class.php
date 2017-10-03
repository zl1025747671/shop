<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model {
    public $_validate = array (
    array('username','','用户名已存在','1','unique','3'),
    array('username','3,9','名字过长,或过短','1','length','3'),
    array('email','email','邮箱格式错误','1','','3'),
    array('password','6,18','密码过短','1','length','3'),
    array('repwd','password','两次密码不一致','1','confirm','3'),
    );
}