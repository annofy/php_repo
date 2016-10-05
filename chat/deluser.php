<?php
// $userfile = "./config/list.config";
// $userstr = file_get_contents($filename);
// if(!strpos($userstr, $whologout)){
// 	if(!file_put_contents($userfile, $whologout."\n",FILE_APPEND)){
// 		echo "<script>alert('用户存入失败');</script>";
// 	}
// }

//改为数据库操作
require_once 'dboperate.php';

$whologout = $_REQUEST["whologout"];
$sql = "update user_info set type=0 where uid=?";
//预处理对象
$stmt = $pdo->prepare($sql);
//给预处理sql中赋值
$stmt->bindParam(1, $uid,PDO::PARAM_INT);
if($stmt->execute()){
	echo "<script>alert('成功下线');</script>";
}
