<?php
return array(
	//'配置项'=>'配置值'
	/* 模块相关配置 */
	'DEFAULT_MODULE'     => 'Home',


	/* 调试配置 */
    // 'SHOW_PAGE_TRACE' => true,


    /* 用户相关设置 */
    'USER_MAX_CACHE'     => 1000, //最大缓存用户数
    'USER_ADMINISTRATOR' => 1, //管理员用户ID
    
    /* 数据库配置 */
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => '127.0.0.1', // 服务器地址
    'DB_NAME'   => 'cjln', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'admin',  // 密码
    'DB_PORT'   => '3306', // 端口
    'DB_PREFIX' => 'cj_', // 数据库表前缀
    /* 语言包设置 */
    

    'LANG_SWITCH_ON' => true,   // 开启语言包功能
    'LANG_AUTO_DETECT' => false, // 自动侦测语言 开启多语言功能后有效
    'LANG_LIST' => 'zh-cn,en-us', // 允许切换的语言列表 用逗号分隔
    'VAR_LANGUAGE' => 'l', // 默认语言切换变量


);

?>