<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Admin\Model;
use Think\Model;

/**
 * 用户模型
 * @author 麦当苗儿 <zuojiazi@vip.qq.com>
 */

class MemberModel extends Model {

    protected $_validate = array(
        array('nickname', '1,16', '昵称长度为1-16个字符', self::EXISTS_VALIDATE, 'length'),
        array('nickname', '', '昵称被占用', self::EXISTS_VALIDATE, 'unique'), //用户名被占用
    );

    protected $_auto = array(
    	array('reg_id','get_client_ip',self::MODEL_INSERT,'function'),
    );

    public function getUserByGroupid($groupid) {
    	if(!groupid) return false;
    	$uid = M('AuthGroupAccess')->where('group_id ='.$groupid)->getField('uid',true);
    	foreach ($uid as $key => $line) {
    		$uids .= "'".$line."',";
    	}
    	$uids = substr($uids, 0, -1);
    	$data = $this->where(" uid IN (".$uids.")")->select();
    	return $data;
    }


    public function getUser($map) {
        if($map) {
            $data = $this->where($map)->select();
        } else {
            $data = $this->select();
        }
        
        return $data;
    }

}
