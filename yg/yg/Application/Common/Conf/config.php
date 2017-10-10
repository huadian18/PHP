<?php
return array(
    // ---------------------------------------------------------
    // 数据库配置
    // ---------------------------------------------------------
    'DB_TYPE'=>'mysqli',
    'DB_HOST' => '127.0.0.1',
    'DB_NAME' => 'yg',
    'DB_USER' => 'root',
    'DB_PWD' => 'root',
    'DB_PORT' => '3306',
    'DB_PREFIX' => '',

    // ---------------------------------------------------------
    // URL配置
    // ---------------------------------------------------------
    'URL_CASE_INSENSITIVE' => true, //默认false 表示URL区分大小写 true则表示不区分大小写
    'URL_MODEL'            => 2, //URL模式
    'VAR_URL_PARAMS'       => '', // PATHINFO URL参数变量
    'URL_PATHINFO_DEPR'    => '/', //PATHINFO URL分割符
);