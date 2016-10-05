<?php
require_once './config/dbconfig.php';
$pdo = null;
$username = null;
try{
	$pdo = new PDO(DSN,USERNAME,PASSWORD);
// 	$sql = "select * from user_info where uid=?";
// 	$stmt = $pdo->prepare($sql);
// 	$stmt->bindValue(1, 2 ,PDO::PARAM_INT);
// 	$stmt->execute();
// 	$result = $stmt->fetch(PDO::FETCH_ASSOC);
// 	var_dump($result);
	$sql = "select username from user_info where user_ip=?";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(1, $_SERVER["REMOTE_ADDR"]);
	$stmt->execute();
	$result = $stmt->fetch(PDO::FETCH_ASSOC);
	$username = $result["username"];
}catch (PDOException $e){
	echo "Connection fail:".$e->getMessage();
}

