<!doctype html>
<?php 
$basePath = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/chat";
require_once 'dboperate.php';
header("Content-Type:text/html;charset=utf-8");
?>
<html>
<head>
	<meta charset="utf-8" />
	<script type="text/javascript" charset="utf-8" src="<?php echo $basePath;?>/js/utils.js"></script>
</head>
<body>

<form id="mychat" action="control.php" method="post" target="control">
姓名: <input type="text" id="whoChat" name="whoChat" value="<?php echo $username;?>" />
对 <input  type="text" id="chatTo" name="chatTo" />

动作 <select name="dz" id="dz">
	<option value="">无</option>
	<option value="[狠狠的踢了#2一脚]">踢</option>
	<option value="[在#2的头上敲了一下]">打</option>
</select>
动作 <select name="bq" id="bq">
	<option value="">无</option>
	<option value="[^_^]">微笑</option>
	<option value="[火]">愤怒</option>
</select>
说: <input type="text" id="chatWord" name="chatWord" onkeypress="inputKeyPress();"/>
<input type="hidden" id="_tosay" name="_tosay" />
<input type="button" onclick="send();" value="发送" />
</form>

<fieldset>
	<legend>额外功能</legend>
	<?php
		if($_SERVER["REMOTE_ADDR"] == "127.0.0.1"){
	?>
	<form id="mystop" action="forbidden.php" method="post" target="control">
	姓名 <input type="text" name="whostop" id="whostop"  />
	<input type="submit" name="logout" value="禁止发言" />
	</form>
	<?php }?>
	<form id="myLogout" action="deluser.php" method="post" target="control">
	姓名 <input type="text" name="whoLogout"  />
	<input type="submit" name="talk" value="注销" />
	</form>
</fieldset>


</body>
<script type="text/javascript">
	function inputKeyPress(){
		if((event.keyCode == 13) && document.all.chatWord.value != null){
			var xmlHttp = createXMLHttpRequest();
			xmlHttp.onreadystatechange = function(){
				if(xmlHttp.readyState == 4){
					if(xmlHttp.status == 200){
						parent.info.document.all.msg.innerHTML = xmlHttp.responseText;
						parent.info.window.scrollTo(0,10000);
					}
			
				}
			}
			var url = "control.php";
			
			var theForm = document.forms[0];
			var queryString = "";
			if((theForm.whoChat.value.length>0) && (theForm.chatTo.value.length>0)){
// 				theForm._tosay.value = theForm.whoChat.value + theForm.bq.value
// 				+ "对" + theForm.chatTo.value + "说:"
// 				+ theForm.chatWord.value + " ";
				queryString = "whoChat="+document.all.whoChat.value+
				 "&chatTo=" + document.all.chatTo.value + "&chatWord=" + 
				 	document.all.chatWord.value + " "+ document.all.bq.value +" " + document.all.dz.value.replace("#2",theForm.chatTo.value);
			}
			if(theForm.dz.value != "-1")
// 				theForm._tosay.value += theForm.dz.value.replace("#2",theForm.chatTo.value);
				queryString += theForm.dz.value.replace("#2",theForm.chatTo.value);
			xmlHttp.open("post",url,true);
			xmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
			xmlHttp.send(queryString);
			
// 			theForm.submit();
			document.all.chatWord.value='';
			document.all.chatWord.focus();
		}
	}

	function send(){
		var xmlHttp = createXMLHttpRequest();
		xmlHttp.onreadystatechange = function(){
			if(xmlHttp.readyState == 4){
				if(xmlHttp.status == 200){
					parent.info.document.all.msg.innerHTML = xmlHttp.responseText;
					parent.info.window.scrollTo(0,10000);
				}
		
			}
		}
		var url = "control.php";
		
		var theForm = document.forms[0];
		var queryString = "";
		if((theForm.whoChat.value.length>0) && (theForm.chatTo.value.length>0)){
			queryString = "whoChat="+document.all.whoChat.value+
			 "&chatTo=" + document.all.chatTo.value + "&chatWord=" + 
			 	document.all.chatWord.value + " "+ document.all.bq.value +" " + document.all.dz.value.replace("#2",theForm.chatTo.value);
		}
		xmlHttp.open("post",url,true);
		xmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		xmlHttp.send(queryString);
		
		document.all.chatWord.value='';
		document.all.chatWord.focus();
	}
		
</script>
</html>
