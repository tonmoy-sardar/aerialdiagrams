<?php /* Smarty version Smarty-3.1.21, created on 2018-12-17 13:39:55
         compiled from "C:\xampp\htdocs\cscart-demo\design\themes\responsive\templates\common\toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1283776125c177cfbaae2d1-70857362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63f6fc62997708b5dd684b369fd44d114081dd69' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart-demo\\design\\themes\\responsive\\templates\\common\\toolbar.tpl',
      1 => 1544853071,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1283776125c177cfbaae2d1-70857362',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'title' => 0,
    'href' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c177cfbaf0ba7_95540842',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c177cfbaf0ba7_95540842')) {function content_5c177cfbaf0ba7_95540842($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart-demo/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-top-panel"><div id="minimize_block" class="ty-top-panel__wrapper"><div class="ty-top-panel__logo"><i class="ty-top-panel__icon-basket ty-icon-basket"></i></div><h4 class="ty-top-panel__title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4><div class="ty-top-panel-action"><span class="ty-top-panel-action_item">&nbsp;</span><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['href']->value), ENT_QUOTES, 'UTF-8');?>
" class="ty-top-panel__close ty-top-panel-action_item cm-confirm"><i class="ty-icon-cancel"></i></a></div></div></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/toolbar.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/toolbar.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ty-top-panel"><div id="minimize_block" class="ty-top-panel__wrapper"><div class="ty-top-panel__logo"><i class="ty-top-panel__icon-basket ty-icon-basket"></i></div><h4 class="ty-top-panel__title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4><div class="ty-top-panel-action"><span class="ty-top-panel-action_item">&nbsp;</span><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['href']->value), ENT_QUOTES, 'UTF-8');?>
" class="ty-top-panel__close ty-top-panel-action_item cm-confirm"><i class="ty-icon-cancel"></i></a></div></div></div><?php }?><?php }} ?>
