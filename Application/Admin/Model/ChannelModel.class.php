<?php

namespace Admin\Model;
use Think\Model;


class ChannelModel extends Model {

    protected $_validate = array(
        // array('nickname', '1,16', '昵称长度为1-16个字符', self::EXISTS_VALIDATE, 'length'),
        array('url', '', 'URL已经存在', self::EXISTS_VALIDATE, 'unique'), //用户名被占用
    );

    protected $_auto = array(
        array('status','1',self::MODEL_INSERT),
    );

    /**
     * 数据集 
     */
    public function lists($fields='', $map = '') {
        $fields = empty($fields) ? $this->getDbFields() : $fields;
        $map = empty($map) ? '1=1': $map;


        $lists = $this->field($fields)->where($map)->select();


        return $lists;

    }

}
