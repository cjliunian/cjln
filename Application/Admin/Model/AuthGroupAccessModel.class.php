<?php

namespace Admin\Model;
use Think\Model;

/**
 * 用户组模型类
 * Class AuthGroupModel 
 * @author 
 */
class AuthGroupAccessModel extends Model {
    

    public function getUid($map) {
    
        $data = $this->where($map)->select();
        return $data;
    }

    

}

