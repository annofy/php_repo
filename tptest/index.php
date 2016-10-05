<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
header("content-type:text/html;charset=utf-8");
//$controller = isset($_GET['c'])? $_GET['c'] : 'test';
//$action = isset($_GET['a'])?$_GET['a']:'index';
//$th = new $controller();
//$th->$action();
//class test{
//    function __construct()
//    {
//        echo "调用了test的控制<br/>";
//    }
//    function index(){
//        echo "test的index方法";
//    }
//    function test(){
//        echo "test的test方法";
//    }
//}
//
//
//
//
//exit;
// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',true);

define('APP_NAME','App');
define('APP_PATH','./App/');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单