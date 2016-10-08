<?php

// 检测php 环境
if(version_compare(PHP_VERSION, '5.3.0', '<')) die('require PHP > 5.3.0 !');

// 开启debug
define('APP_DEBUG', true);

$_GET['m'] = (!isset($_GET['m']) || !$_GET['m']) ? 'admin' : $_GET['m'];
$_GET['c'] = (!isset($_GET['c']) || !$_GET['c']) ? 'index' : $_GET['c'];
$_GET['a'] = (!isset($_GET['a']) || !$_GET['a']) ? 'index' : $_GET['a'];




// 定义应用目录
define('APP_PATH', './Application/');



include '../ThinkPHP/ThinkPHP.php';