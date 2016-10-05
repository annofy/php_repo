<?php /* Smarty version Smarty 3.1.0, created on 2016-04-27 16:02:12
         compiled from ".\templates\demo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:379571f7c49a03267-29851171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a7e89e303f4de9a63afc840f5194fe561182e55' => 
    array (
      0 => '.\\templates\\demo.tpl',
      1 => 1461740174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '379571f7c49a03267-29851171',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_571f7c49c7129',
  'variables' => 
  array (
    'title' => 0,
    'name' => 0,
    'date' => 0,
    'hello' => 0,
    'time' => 0,
    'default' => 0,
    'str' => 0,
    'number' => 0,
    'arr' => 0,
    'key' => 0,
    'num' => 0,
    'numbers' => 0,
    'persons' => 0,
    'header' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571f7c49c7129')) {function content_571f7c49c7129($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'F:\xampp\htdocs\smartyTest\smartylib\plugins\modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) include 'F:\xampp\htdocs\smartyTest\smartylib\plugins\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'F:\xampp\htdocs\smartyTest\smartylib\plugins\modifier.truncate.php';
?><html>
	<head>
		
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
		
			<style type="text/css">
				.include{color:red;}
			</style>	
		
	</head>
	<body>
		<p><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 is Coming!</p>
		<p><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</p>
		<p>变量修饰符:<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['hello']->value);?>
</p>
		<p>单词数: <?php echo preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['hello']->value, $tmp);?>
</p>
		<p>时间格式化:<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time']->value,"Y-m-d H:i:s");?>
</p>
		<p>默认值：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['default']->value)===null||$tmp==='' ? "Anonymous" : $tmp);?>
</p>
		<p>截取字符串:<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['str']->value,10,"***");?>
</p>
		<p>if(
			<?php if ((($tmp = @$_smarty_tpl->tpl_vars['number']->value)===null||$tmp==='' ? 3 : $tmp)>5){?>
				number 大于5
			<?php }else{ ?>
				number 小于5
			<?php }?>)
		</p>
		<p>for(
			<?php  $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = (($tmp = @$_smarty_tpl->tpl_vars['arr']->value)===null||$tmp==='' ? array('first','second','papap') : $tmp); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
$_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->key => $_smarty_tpl->tpl_vars['num']->value){
$_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['num']->key;
?>
				#<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
#<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
#
			<?php }
if (!$_loop) {
?>
				无数据
			<?php } ?>
			)
		</p>
		<p>section(
			<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['number']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['number']['name'] = 'number';
$_smarty_tpl->tpl_vars['smarty']->value['section']['number']['loop'] = is_array($_loop=10) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['number']['start'] = (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['number']['step'] = ((int)2) == 0 ? 1 : (int)2;
$_smarty_tpl->tpl_vars['smarty']->value['section']['number']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['number']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['number']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['number']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['number']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['number']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['number']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['number']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['number']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['number']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['number']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['number']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['number']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['number']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['number']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['number']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['number']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['number']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['number']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['number']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['number']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['number']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['number']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['number']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['number']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['number']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['number']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['number']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['number']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['number']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['number']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['number']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['number']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['number']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['number']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['number']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['number']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['number']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['number']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['number']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['number']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['number']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['number']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['number']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['number']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['number']['total']);
?>	
				<?php echo $_smarty_tpl->tpl_vars['numbers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['number']['index']];?>

			<?php endfor; endif; ?>
			<br />
			<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['person']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['person']['name'] = 'person';
$_smarty_tpl->tpl_vars['smarty']->value['section']['person']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['persons']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['person']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['person']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['person']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['person']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['person']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['person']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['person']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['person']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['person']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['person']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['person']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['person']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['person']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['person']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['person']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['person']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['person']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['person']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['person']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['person']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['person']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['person']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['person']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['person']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['person']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['person']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['person']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['person']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['person']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['person']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['person']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['person']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['person']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['person']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['person']['total']);
?>
				name:<?php echo $_smarty_tpl->tpl_vars['persons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['person']['index']]['name'];?>

				age :<?php echo $_smarty_tpl->tpl_vars['persons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['person']['index']]['age'];?>

			<?php endfor; endif; ?>)
		</p>

		<p class="include">include(
			<?php $_smarty_tpl->tpl_vars["header"] = new Smarty_variable($_smarty_tpl->getSubTemplate ("welcome.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0));?>

			<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

			)
		</p>
	</body>
</html><?php }} ?>