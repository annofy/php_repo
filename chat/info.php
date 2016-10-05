<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<!-- <meta http-equiv="refresh" content="3;url=info.php" /> -->
<title></title>
</head>
<!-- <body onload="window.scrollTo(0,10000)"> -->
<body>

<?php 
// 	$filename = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/chat/config/chat.config";
// 	$content = file_get_contents($filename);
// 	if($content != false || $content != ""){
// 		$chatlist = explode("\n", $content);
// 		$showlist = "";
// 		foreach ($chatlist as $chat){
// 			$showlist .= $chat."<br />";
// 		}
// 		echo $showlist;
// 	}else{
// 		echo "无聊天记录";
// 	}
	//改为数据库操作
	header("Content-Type:text/html;charset=utf-8");
	require_once 'dbfunction.php';
	$contents = query_chat_contents();
	$showmsg = "";
	foreach($contents as $content){
		$uid = $content["uid"];
		$username = query_username($uid);
		$showmsg .= $content["chat_word"]."<br />";
	}	
	echo $showmsg;
	
?>
<div id="msg"></div>
</body>
</html>