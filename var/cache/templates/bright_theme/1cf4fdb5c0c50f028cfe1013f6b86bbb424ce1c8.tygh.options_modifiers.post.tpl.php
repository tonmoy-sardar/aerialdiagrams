<?php /* Smarty version Smarty-3.1.21, created on 2018-12-15 08:57:47
         compiled from "C:\xampp\htdocs\cscart-demo\design\themes\responsive\templates\addons\reward_points\hooks\products\options_modifiers.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14427695155c1497db634c33-12895465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cf4fdb5c0c50f028cfe1013f6b86bbb424ce1c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart-demo\\design\\themes\\responsive\\templates\\addons\\reward_points\\hooks\\products\\options_modifiers.post.tpl',
      1 => 1544853080,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14427695155c1497db634c33-12895465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'vr' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c1497db648495_46566152',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1497db648495_46566152')) {function content_5c1497db648495_46566152($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart-demo/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (floatval($_smarty_tpl->tpl_vars['vr']->value['point_modifier'])) {?>&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("addons/reward_points/common/point_modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('mod_type'=>$_smarty_tpl->tpl_vars['vr']->value['point_modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['vr']->value['point_modifier']), 0);
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/hooks/products/options_modifiers.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reward_points/hooks/products/options_modifiers.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (floatval($_smarty_tpl->tpl_vars['vr']->value['point_modifier'])) {?>&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("addons/reward_points/common/point_modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('mod_type'=>$_smarty_tpl->tpl_vars['vr']->value['point_modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['vr']->value['point_modifier']), 0);
}
}?><?php }} ?>
