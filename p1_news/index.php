<?php

// 检测php 环境
if(version_compare(PHP_VERSION, '5.3.0', '<')) die('require PHP > 5.3.0 !');

// 开启debug
define('APP_DEBUG', true);
// 定义应用目录
define('APP_PATH', '../p1_news/Application/');



include '../ThinkPHP/ThinkPHP.php';
