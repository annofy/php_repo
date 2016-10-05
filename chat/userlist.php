<?php 
	require_once 'dboperate.php';
?>
<!doctype html>
<html>
<head>
<meta http-equiv="refresh" content="30;url=userlist.php" />
</head>
<body>
<?php
header("Content-Type:text/html;charset=utf-8");
// $filename = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/chat/config/list.config";
// $content = file_get_contents($filename);
// $userlist = explode("\n", $content);
// $showlist = "";
// foreach ($userlist as $user) {
// 	$user = trim($user);
// 	if($user == ""){
// 		continue;
// 	}
// 	$showlist .= '<a href="javascript:;" onclick=\'changeChatTo("'.$user.'")\'>'.$user.'</a><br />';
// }
// echo $showlist;


//更改数据库操作
$sql = "select username from user_info where type=1";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$userlist = $stmt->fetchAll(PDO::FETCH_ASSOC);
$showlist = null;
foreach ($userlist as $user){
	$showlist .= '<a href="javascript:;" onclick=\'changeChatTo("'.$user["username"].'")\'>'.$user["username"].'</a><br />';
}
echo $showlist;
?>



</body>
	<script type="text/javascript">
		function changeChatTo(chatName){
			parent.input.document.all.chatTo.value = chatName;
		}
	</script>
</html>