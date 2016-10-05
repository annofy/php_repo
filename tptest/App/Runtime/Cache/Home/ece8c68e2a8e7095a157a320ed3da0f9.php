<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
	输出变量:  hello <?php echo ($me['name']); ?>
	<br />
	
	运算:<?php echo ($me['age']); ?>====<?php echo ($me['age'] - 100); ?>
	<br />
	直接使用方法:<?php echo (substr(md5($me['name']),0,5)); ?>
	<br />
	时间戳： <?php echo (date('Y-m-d H:i:s',$now)); ?>
	<br />
	系统自带：<?php echo (date('Y-m-d g:i a',time())); ?>
	<br />
	<?php echo ($_SERVER['HTTP_HOST']); ?>
	<br />
	volist循环 <br />
	<?php if(is_array($person)): $i = 0; $__LIST__ = array_slice($person,0,4,true);if( count($__LIST__)==0 ) : echo "我没数据" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i; echo ($data['name']); ?>----<?php echo ($data['age']); ?> <br/><?php endforeach; endif; else: echo "我没数据" ;endif; ?>
	<br />
	foreach 循环
	<br />
	<?php if(is_array($person)): foreach($person as $key=>$item): echo ($item['name']); ?>----<?php echo ($item['age']); ?> <br/><?php endforeach; endif; ?>
	<br />
	for循环
	<br />
	<?php $__FOR_START_21490__=1;$__FOR_END_21490__=10;for($i=$__FOR_START_21490__;$i < $__FOR_END_21490__;$i+=1){ echo ($i); ?>--<?php } ?>
	<br />
	if判断
	<br />
	<?php if($num > 10): ?>num大于10
	<?php elseif($num < 10): ?>num 小于10
	<?php else: ?> num 等于10<?php endif; ?>
	<br />
	swtich
	<br />
	<?php switch($name): case "laoshi": ?>小明滚出去<?php break;?>
		<?php case "xiaohong": ?>小明，你滚出去<?php break;?>
		<?php default: ?>小明，自己滚出去<?php endswitch;?>
	<br />
	<?php if(is_array($person)): foreach($person as $key=>$item): if(($item["age"]) > "18"): echo ($item["name"]); ?>已经成年
		 <?php else: echo ($item["name"]); ?>未成年<?php endif; ?><br /><?php endforeach; endif; ?>
	
	<br />
	
</body>
</html>