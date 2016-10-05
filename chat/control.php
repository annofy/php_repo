<?php
header("Content-Type:text/html;charset=utf-8");
$whoChat = trim($_REQUEST["whoChat"]);
$chatTo = trim($_REQUEST["chatTo"]);
$chatWord = trim($_REQUEST["chatWord"]);
//导入pdo
require_once 'dbfunction.php';
$pdo = getPdo();


$_tosay = "";
//是否禁止发言的判断
// $forbiddenfile = "./config/forbidden.config";
$forbiddensql = "select * from forbidden_user where username=?";
$stmt = $pdo->prepare($forbiddensql);
$stmt->bindParam(1, $whoChat);
$stmt->execute();
if($stmt->fetch(PDO::FETCH_ASSOC != null)){
	$_tosay .="[系统公告]".$whoChat."已被禁止发言!\n";
}else{
	$usersql = "select * from user_info where username=?";
	$stmt = $pdo->prepare($usersql);
	$stmt->bindParam(1, $whoChat);
	$stmt->execute();
	$result = $stmt->fetch(PDO::FETCH_ASSOC);
	if($result == null){
		$_tosay = "<div style='color:red;'>[系统公告]".$whoChat."来到zhenglfsir聊天室，大家欢迎</div>";
		
		$insertuser = "insert into user_info(username,user_ip,
				type,user_last_chat_time) values(?,?,?,?)";
		
		try{
			$stmt = $pdo->prepare($insertuser);
			$stmt->bindParam(1, $whoChat);
			$stmt->bindParam(2, $_SERVER["REMOTE_ADDR"]);
			$stmt->bindValue(3, 1);
			$stmt->bindValue(4, time());
			if(!$stmt->execute()){
				echo "<script>alert('添加失败');</script>";
			}
		}catch (PDOException $e){
			echo "<script>alert('".$e->getMessage()."');</script>";
		}
		
		$contents = query_chat_contents();
		$showmsg = "";
		foreach($contents as $content){
			$uid = $content["uid"];
			$username = query_username($uid);
			$showmsg .= $username.$content["chat_word"];
		}
		echo $showmsg;
	}
	$insertcontent = "insert into chat_contents(uid,chat_word)
				values(?,?)";
	$stmt = $pdo->prepare($insertcontent);
	$user = query_user_by_username($whoChat);
	
	$stmt->bindParam(1, $user["uid"],PDO::PARAM_INT);
	$content = $_tosay."<br />".$whoChat."对".$chatTo."说:".$chatWord;
	$stmt->bindValue(2, $content);
	try{
		if(!$stmt->execute()){
			echo "<script>alert('添加失败');</script>";
		}
	}catch (Exception $e)
	{
		echo $e->getMessage();
	}
	
}

// $forbiddenuser = explode("\n", file_get_contents($forbiddenfile));
// if(in_array($whoChat, $forbiddenuser)){
// 	$_tosay .="[系统公告]".$whoChat."已被禁止发言!\n";
// }else{
// 	$filelist = "./config/list.config";
// 	$userstr = file_get_contents($filelist);
// 	$userarr = explode("\n", $userstr);
// 	//当进入新用户时候添加并欢迎
// 	if(!in_array($whoChat, $userarr)){
// 		$_tosay = "[系统公告]".$whoChat."来到zhenglfsir聊天室，大家欢迎\n";
// 		if(!file_put_contents($filelist, $whoChat."\n", FILE_APPEND)){
// 			echo "<script>alert('新用户保存失败');</script>";
// 		}
// 	}
// 	$_tosay .= $whoChat . "对" . $chatTo . "说:" . $chatWord."\n";
// // 	$_tosay .= $_REQUEST["_tosay"];
// }	
// 	$filename = "./config/chat.config";
// 	if($_tosay != ""){
// 		if (! file_put_contents ( $filename, $_tosay,FILE_APPEND)) {
// 			echo "发送失败";
// 		}
// 	}
	
// 	$showmsg = "";
// 	$msgcontent = file_get_contents($filename);
// 	foreach (explode("\n", $msgcontent) as $msg){
// 		if($msg == ""){
// 			continue;
// 		}
// 		$showmsg .= ' '.$msg."<br />";
// 	}
// 	echo $showmsg;



