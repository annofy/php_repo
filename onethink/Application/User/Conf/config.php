<?php
/**
 * Created by PhpStorm.
 * User: zhenglfsir
 * Date: 2016/10/7
 * Time: 20:55
 */

define('UC_APP_ID', 1); //应用ID
define('UC_API_TYPE', 'Model'); //可选值 Model / Service
define('UC_AUTH_KEY', '525998bd2d9bfa1d51eb4334551db88e'); //加密KEY
define('UC_DB_DSN', 'mysql://root:root@127.0.0.1:3306/onethink'); // 数据库连接，使用Model方式调用API必须配置此项
define('UC_TABLE_PREFIX', 'onethink_'); // 数据表前缀，使用Model方式调用API必须配置此项