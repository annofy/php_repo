<?php
require_once './smartylib/Smarty.class.php';

header("Content-Type:text/html;charset=utf-8");

$smarty = new Smarty();

$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;





$smarty->assign("name","Me");
$smarty->assign("title","Smarty Test");
$smarty->assign("date",date("Y-m-d",time()));
$smarty->assign("hello","test");
$smarty->assign("time",time());
$smarty->assign("str","sdjksfjdkslfjdklsfjdklsfjdls");
$smarty->assign("numbers",array(1,2,3,4,5,6,7,8,9,10));
$smarty->assign("persons",array(
		array(
				"name"=>"tomcat",
				"age"=>"23"
		),
		array(
				"name"=>"apache",
				"age"=>"23"
		),
));

//获取模板并输出
$smarty->display("demo.tpl");