<html>
	<head>
		
		<title>{$title}</title>
		{literal}
			<style type="text/css">
				.include{color:red;}
			</style>	
		{/literal}
	</head>
	<body>
		<p>{$name} is Coming!</p>
		<p>{$date}</p>
		<p>变量修饰符:{$hello|capitalize}</p>
		<p>单词数: {$hello|count_words}</p>
		<p>时间格式化:{$time|date_format:"Y-m-d H:i:s"}</p>
		<p>默认值：{$default|default:"Anonymous"}</p>
		<p>截取字符串:{$str|truncate:10:"***"}</p>
		<p>if(
			{if $number|default:3 > 5}
				number 大于5
			{else}
				number 小于5
			{/if})
		</p>
		<p>for(
			{foreach $arr|default:[first,second,papap] as $key => $num}
				#{$key}#{$num}#
			{foreachelse}
				无数据
			{/foreach}
			)
		</p>
		<p>section(
			{section name=number loop=10 start=1 step=2}	
				{$numbers[number]}
			{/section}
			<br />
			{section name=person loop=$persons }
				name:{$persons[person].name}
				age :{$persons[person].age}
			{/section})
		</p>

		<p class="include">include(
			{include file="welcome.tpl" assign="header"}
			{$header}
			)
		</p>
	</body>
</html>