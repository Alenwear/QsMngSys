<?php

$arr1 =  array(
    //'配置项'=>'配置值'

    'DB_TYPE'   => 'pdo', // 数据库类型
    'DB_TYPE'   => 'pdo', // 数据库类型
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'yuanzhi', // 密码
    'DB_PREFIX' => '', // 数据库表前缀
    'DB_DSN'    => 'mysql:host=localhost;dbname=QSMngDB;charset=UTF8',
    'SHOW_PAGE_TRACE'=>false,
    'DB_FIELDS_CACHE'=>false,
    'APP_DEBUG' => true,
    'DB_PORT'   => '3306', // 端口
    'URL_ROUTER_ON'   => true,
    'URL_MODEL'=>0,
    'TOKEN_ON'=>false,  // 是否开启令牌验证
    'TOKEN_NAME'=>'__hash__',    // 令牌验证的表单隐藏字段名称
    'TOKEN_TYPE'=>'md5',  //令牌哈希验证规则 默认为MD5
    'TOKEN_RESET'=>true,  //令牌验证出错后是否重置令牌 默认为true
    'LAYOUT_ON'=>true,
    'LOAD_EXT_CONFIG' =>'UserRoles'
);

return $arr1;
