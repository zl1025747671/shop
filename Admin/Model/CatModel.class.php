<?php

namespace Admin\Model;
use Think\Model;
class CatModel extends Model{

    public function __construct() {
    parent::__construct();
    $this->cats = $this->select();
}

    public function gettree($id=0 , $lv=0) {
    $tree = array();
    
    foreach($this->cats as $v) {
        if($v['parent_id'] == $id) { 
            $v['lv'] = $lv;
            $tree[] = $v;
            $tree = array_merge($tree , $this->gettree($v['cat_id'] , $lv+1));
        }
    }
    return $tree;
}

    }



?>