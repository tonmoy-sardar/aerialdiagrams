<?php /* Smarty version Smarty-3.1.21, created on 2018-12-17 12:42:24
         compiled from "C:\xampp\htdocs\cscart-demo\design\themes\tutorial_theme\templates\addons\call_requests\blocks\call_request.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2281776315c176f808d47f9-23802378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56cad6879d090d29c09710b0b0714df424226fd9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart-demo\\design\\themes\\tutorial_theme\\templates\\addons\\call_requests\\blocks\\call_request.tpl',
      1 => 1544854013,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2281776315c176f808d47f9-23802378',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'phone_number' => 0,
    'block' => 0,
    'obj_prefix' => 0,
    'obj_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c176f808e9662_77162936',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c176f808e9662_77162936')) {function content_5c176f808e9662_77162936($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart-demo/app/functions/smarty_plugins\\function.set_id.php';
?><?php
fn_preload_lang_vars(array('call_request.work_time','call_requests.request_call','call_requests.request_call','call_request.work_time','call_requests.request_call','call_requests.request_call'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<div class="ty-cr-phone-number-link">
    <div class="ty-cr-phone"><span><bdi><span class="ty-cr-phone-prefix"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone_number']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone_number']->value['postfix'], ENT_QUOTES, 'UTF-8');?>
</bdi></span><span class="ty-cr-work"><?php echo $_smarty_tpl->__("call_request.work_time");?>
</span></div>
    <div class="ty-cr-link">
        <?php $_smarty_tpl->tpl_vars['obj_prefix'] = new Smarty_variable('block', null, 0);?>
        <?php $_smarty_tpl->tpl_vars['obj_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['block']->value['snapping_id'])===null||$tmp==='' ? 0 : $tmp), null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('href'=>"call_requests.request?obj_prefix=".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)."&obj_id=".((string)$_smarty_tpl->tpl_vars['obj_id']->value),'link_text'=>$_smarty_tpl->__("call_requests.request_call"),'text'=>$_smarty_tpl->__("call_requests.request_call"),'id'=>"call_request_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'content'=>''), 0);?>

    </div>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/call_requests/blocks/call_request.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/call_requests/blocks/call_request.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<div class="ty-cr-phone-number-link">
    <div class="ty-cr-phone"><span><bdi><span class="ty-cr-phone-prefix"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone_number']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone_number']->value['postfix'], ENT_QUOTES, 'UTF-8');?>
</bdi></span><span class="ty-cr-work"><?php echo $_smarty_tpl->__("call_request.work_time");?>
</span></div>
    <div class="ty-cr-link">
        <?php $_smarty_tpl->tpl_vars['obj_prefix'] = new Smarty_variable('block', null, 0);?>
        <?php $_smarty_tpl->tpl_vars['obj_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['block']->value['snapping_id'])===null||$tmp==='' ? 0 : $tmp), null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('href'=>"call_requests.request?obj_prefix=".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)."&obj_id=".((string)$_smarty_tpl->tpl_vars['obj_id']->value),'link_text'=>$_smarty_tpl->__("call_requests.request_call"),'text'=>$_smarty_tpl->__("call_requests.request_call"),'id'=>"call_request_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'content'=>''), 0);?>

    </div>
</div><?php }?><?php }} ?>
