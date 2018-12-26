<?php /* Smarty version Smarty-3.1.21, created on 2018-12-15 09:04:57
         compiled from "C:\xampp\htdocs\cscart-demo\design\backend\mail\templates\common\wrap_document.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18686981305c1499893b0543-67737664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2047d6ca7d0bc1aaec3b234915c5f67ddc31c00d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart-demo\\design\\backend\\mail\\templates\\common\\wrap_document.tpl',
      1 => 1543374418,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18686981305c1499893b0543-67737664',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language_direction' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c1499893e7071_60543284',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1499893e7071_60543284')) {function content_5c1499893e7071_60543284($_smarty_tpl) {?><!DOCTYPE html>
<html dir="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
">
<head>

<style type="text/css" media="screen,print">
body {
    padding: 0;
    margin: 0;
    text-align: center;
}
a, a:link, a:visited, a:hover, a:active {
    color: #000000;
    text-decoration: underline;
}
a:hover {
    text-decoration: none;
}

#print-wrapp {
	max-width: 800px;
	width: 100%;
	margin: 0px auto;
	text-align: initial;
}

</style>

</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("common/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<table id="print-wrapp">
	<tr>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		</td>
	</tr>
</table>
</body>
</html><?php }} ?>
