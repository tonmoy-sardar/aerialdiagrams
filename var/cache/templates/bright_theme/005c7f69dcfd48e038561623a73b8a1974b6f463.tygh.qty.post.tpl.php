<?php /* Smarty version Smarty-3.1.21, created on 2018-12-15 08:57:18
         compiled from "C:\xampp\htdocs\cscart-demo\design\themes\responsive\templates\addons\product_variations\hooks\products\qty.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7884433145c1497be1ff374-31347976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '005c7f69dcfd48e038561623a73b8a1974b6f463' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart-demo\\design\\themes\\responsive\\templates\\addons\\product_variations\\hooks\\products\\qty.post.tpl',
      1 => 1544853078,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7884433145c1497be1ff374-31347976',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_product_options' => 0,
    'product' => 0,
    'product_option_id' => 0,
    'product_option' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c1497be20ed64_67218519',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1497be20ed64_67218519')) {function content_5c1497be20ed64_67218519($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart-demo/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (!$_smarty_tpl->tpl_vars['show_product_options']->value&&$_smarty_tpl->tpl_vars['product']->value['selected_options']) {?>
<?php  $_smarty_tpl->tpl_vars["product_option"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product_option"]->_loop = false;
 $_smarty_tpl->tpl_vars["product_option_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['selected_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product_option"]->key => $_smarty_tpl->tpl_vars["product_option"]->value) {
$_smarty_tpl->tpl_vars["product_option"]->_loop = true;
 $_smarty_tpl->tpl_vars["product_option_id"]->value = $_smarty_tpl->tpl_vars["product_option"]->key;
?>
    <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_option_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_option']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php } ?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/products/qty.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/hooks/products/qty.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (!$_smarty_tpl->tpl_vars['show_product_options']->value&&$_smarty_tpl->tpl_vars['product']->value['selected_options']) {?>
<?php  $_smarty_tpl->tpl_vars["product_option"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product_option"]->_loop = false;
 $_smarty_tpl->tpl_vars["product_option_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['selected_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product_option"]->key => $_smarty_tpl->tpl_vars["product_option"]->value) {
$_smarty_tpl->tpl_vars["product_option"]->_loop = true;
 $_smarty_tpl->tpl_vars["product_option_id"]->value = $_smarty_tpl->tpl_vars["product_option"]->key;
?>
    <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_option_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_option']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php } ?>
<?php }
}?><?php }} ?>
