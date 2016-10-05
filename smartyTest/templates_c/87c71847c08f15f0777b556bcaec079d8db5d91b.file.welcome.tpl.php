<?php /* Smarty version Smarty 3.1.0, created on 2016-04-27 14:49:17
         compiled from ".\templates\welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23027572060ed566a65-86197558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87c71847c08f15f0777b556bcaec079d8db5d91b' => 
    array (
      0 => '.\\templates\\welcome.tpl',
      1 => 1461548048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23027572060ed566a65-86197558',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_572060ed58664',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572060ed58664')) {function content_572060ed58664($_smarty_tpl) {?><html>
	<head> 
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	</head>
	<body>
		<p>
			Hi,<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
. Hello World!
		</p>
	
	</body>
</html><?php }} ?>