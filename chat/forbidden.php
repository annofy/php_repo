<?php

require_once 'dboperate.php';

// $forbiddenfile = "./config/forbidden.config";
$whostop = $_REQUEST["whostop"];
if(!isset($whostop)) return;
$sql = "select * from where username = ?";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(1, $whostop);
if(!$stmt->execute()){
	echo "<script>alert('禁言失败!');</script>";
}

// if(!file_put_contents($forbiddenfile, $whostop."\n",FILE_APPEND)){
// 	echo "<script>alert('添加失败');</script>";
// }
