<?php /* Smarty version Smarty-3.1.21, created on 2018-12-15 08:57:51
         compiled from "C:\xampp\htdocs\cscart-demo\design\themes\responsive\templates\addons\product_variations\hooks\products\product_tabs.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12080028595c1497dfd0eab1-26278675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41dad3b2cf36824181ca9b925257e735774ffaa6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart-demo\\design\\themes\\responsive\\templates\\addons\\product_variations\\hooks\\products\\product_tabs.pre.tpl',
      1 => 1544853078,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12080028595c1497dfd0eab1-26278675',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'setting' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c1497dfd35c01_02811214',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1497dfd35c01_02811214')) {function content_5c1497dfd35c01_02811214($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscart-demo/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart-demo/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_CONFIGURABLE")) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/product_variations/func.js"),$_smarty_tpl);?>


    <div id="configurable_product_tabs_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">

    
    <?php if ($_REQUEST['appearance']) {?>
        <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["setting"] = new Smarty_Variable;
 $_from = $_REQUEST['appearance']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["setting"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
            <?php $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['setting']->value] = new Smarty_variable('', null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars[$_smarty_tpl->tpl_vars['setting']->value] = clone $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['setting']->value]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars[$_smarty_tpl->tpl_vars['setting']->value] = clone $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['setting']->value];?>
        <?php } ?>
    <?php }?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/products/product_tabs.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/hooks/products/product_tabs.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_CONFIGURABLE")) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/product_variations/func.js"),$_smarty_tpl);?>


    <div id="configurable_product_tabs_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">

    
    <?php if ($_REQUEST['appearance']) {?>
        <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["setting"] = new Smarty_Variable;
 $_from = $_REQUEST['appearance']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["setting"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
            <?php $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['setting']->value] = new Smarty_variable('', null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars[$_smarty_tpl->tpl_vars['setting']->value] = clone $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['setting']->value]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars[$_smarty_tpl->tpl_vars['setting']->value] = clone $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['setting']->value];?>
        <?php } ?>
    <?php }?>
<?php }
}?><?php }} ?>
