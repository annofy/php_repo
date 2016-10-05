<?php
require_once './config/dbconfig.php';
function getPdo(){
	$pdo = new PDO(DSN,USERNAME,PASSWORD);
	$pdo->exec("set names 'utf8'");
	return $pdo;
}
/**
 * 查询用户通过用户名
 * @param unknown $username
 */
function query_user_by_username($username){
	$pdo = getPdo();
	$sql = "select * from user_info where username=?";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(1, $username,PDO::PARAM_STR);
	$stmt->execute();
	return $stmt->fetch(PDO::FETCH_ASSOC);
}

function query_username($uid){
	$pdo = getPdo();
	$sql = "select * from user_info where uid=?";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(1, $uid,PDO::PARAM_INT);
	$stmt->execute();
	return $stmt->fetch(PDO::FETCH_ASSOC);
}
/**
 * 
 */
function query_chat_contents(){
	$pdo = getPdo();
	$sql = "select * from chat_contents";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}