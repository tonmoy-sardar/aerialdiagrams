<?php /* Smarty version Smarty-3.1.21, created on 2018-12-15 08:58:43
         compiled from "C:\xampp\htdocs\cscart-demo\design\themes\responsive\templates\addons\gift_certificates\hooks\products\notification_items.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10593545915c1498136dda96-34006640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1f35963bd60dd986c865c899a2a3f1ba3705f7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart-demo\\design\\themes\\responsive\\templates\\addons\\gift_certificates\\hooks\\products\\notification_items.post.tpl',
      1 => 1544853077,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10593545915c1498136dda96-34006640',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'gift_cert' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c1498136f5156_12901966',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1498136f5156_12901966')) {function content_5c1498136f5156_12901966($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart-demo/app/functions/smarty_plugins\\function.set_id.php';
?><?php
fn_preload_lang_vars(array('gift_certificate','gift_certificate'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['gift_cert']->value) {?>
    <div class="ty-product-notification__item clearfix">
        <?php echo $_smarty_tpl->getSubTemplate ("addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('width'=>"50",'height'=>"50",'class'=>"ty-product-notification__image"), 0);?>

        <div class="ty-product-notification__content clearfix">
            <a href="<?php echo htmlspecialchars(fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_cert']->value['gift_cert_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-product-notification__product-name"><?php echo $_smarty_tpl->__("gift_certificate");?>
</a>
            <div class="ty-product-notification__price">
            <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift_cert']->value['display_subtotal'],'span_id'=>"price_".((string)$_smarty_tpl->tpl_vars['gift_cert']->value['gift_cert_id']),'class'=>"none"), 0);?>

            </div>
        </div>
    </div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/hooks/products/notification_items.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_certificates/hooks/products/notification_items.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['gift_cert']->value) {?>
    <div class="ty-product-notification__item clearfix">
        <?php echo $_smarty_tpl->getSubTemplate ("addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('width'=>"50",'height'=>"50",'class'=>"ty-product-notification__image"), 0);?>

        <div class="ty-product-notification__content clearfix">
            <a href="<?php echo htmlspecialchars(fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_cert']->value['gift_cert_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-product-notification__product-name"><?php echo $_smarty_tpl->__("gift_certificate");?>
</a>
            <div class="ty-product-notification__price">
            <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift_cert']->value['display_subtotal'],'span_id'=>"price_".((string)$_smarty_tpl->tpl_vars['gift_cert']->value['gift_cert_id']),'class'=>"none"), 0);?>

            </div>
        </div>
    </div>
<?php }
}?><?php }} ?>
