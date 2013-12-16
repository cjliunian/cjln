<?php

namespace Admin\Model;
use Think\Model;

/**
 * 用户组模型类
 * Class AuthGroupModel 
 * @author 
 */
class AuthGroupModel extends Model {
    // const TYPE_ADMIN                = 1;                   // 管理员用户组类型标识
    // const MEMBER                    = 'member';
    // const UCENTER_MEMBER            = 'ucenter_member';
    // const AUTH_GROUP_ACCESS         = 'auth_group_access'; // 关系表表名
    // const AUTH_EXTEND               = 'auth_extend';       // 动态权限扩展信息表
    // const AUTH_GROUP                = 'auth_group';        // 用户组表名
    // const AUTH_EXTEND_CATEGORY_TYPE = 1;              // 分类权限标识
    // const AUTH_EXTEND_MODEL_TYPE    = 2; //分类权限标识

    // protected $_validate = array(
    //     array('title','require', '必须设置用户组标题', Model::MUST_VALIDATE ,'regex',Model::MODEL_INSERT),
    //     array('title','require', '必须设置用户组标题', Model::EXISTS_VALIDATE  ,'regex',Model::MODEL_INSERT),
    //     array('description','0,80', '描述最多80字符', Model::VALUE_VALIDATE , 'length'  ,Model::MODEL_BOTH ),
    //     array('rules','/^(\d,?)+(?<!,)$/', '规则数据不合法', Model::VALUE_VALIDATE , 'regex'  ,Model::MODEL_BOTH ),
    // );

    protected $_validate = array(
        array('title','require','用户组名不能为空',Model::EXISTS_VALIDATE,'regex',Model::MODEL_INSERT),
        array('description','require','描述不能为空',Model::EXISTS_VALIDATE,'regex',Model::MODEL_INSERT),
    );

    /* 自动完成规则 */
    protected $_auto = array(
        array('type', 1, self::MODEL_INSERT, 'string'),
        array('module', 'module', self::MODEL_INSERT, 'string'),
    );

    


    

}

