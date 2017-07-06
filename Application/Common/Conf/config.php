<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_PARSE_STRING'  =>array(
    '__HOME__' => __ROOT__.'/Public/Home',  
    '__ADMIN__' => __ROOT__.'/Public/Admin',
    
),
    'DEFAULT_MODULE'        =>  'Admin',  // 默认模块
    'DEFAULT_CONTROLLER'    =>  'Index', // 默认控制器名称
    'DEFAULT_ACTION'        =>  'index', // 默认操作名称
	'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '139.224.74.98', // 服务器地址
    'DB_NAME'               =>  'wxweb',          // 数据库名
    'DB_USER'               =>  'xlr_link',      // 用户名
    'DB_PWD'                =>  'xlr123456',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
);