<?php /* Smarty version Smarty-3.1.21, created on 2018-12-20 12:52:19
         compiled from "C:\xampp\htdocs\cscart-demo\design\themes\aerialdiagrams\templates\addons\gift_certificates\hooks\index\cart_status.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18110516135c1b665375f908-13029691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a24e453eb9cb0454642135b6173e02d721830edb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart-demo\\design\\themes\\aerialdiagrams\\templates\\addons\\gift_certificates\\hooks\\index\\cart_status.post.tpl',
      1 => 1544854013,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18110516135c1b665375f908-13029691',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'gift' => 0,
    'gift_key' => 0,
    'config' => 0,
    'force_items_deletion' => 0,
    'p' => 0,
    'r_url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c1b66537925b1_98624550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1b66537925b1_98624550')) {function content_5c1b66537925b1_98624550($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart-demo/app/functions/smarty_plugins\\function.set_id.php';
?><?php
fn_preload_lang_vars(array('gift_certificate','gift_certificate','gift_certificate','gift_certificate'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_SESSION['cart']['gift_certificates']) {?>
    <?php  $_smarty_tpl->tpl_vars["gift"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["gift"]->_loop = false;
 $_smarty_tpl->tpl_vars["gift_key"] = new Smarty_Variable;
 $_from = $_SESSION['cart']['gift_certificates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["gift"]->key => $_smarty_tpl->tpl_vars["gift"]->value) {
$_smarty_tpl->tpl_vars["gift"]->_loop = true;
 $_smarty_tpl->tpl_vars["gift_key"]->value = $_smarty_tpl->tpl_vars["gift"]->key;
?>
    <li class="ty-cart-items__list-item">
        <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['products_links_type']=="thumb") {?>
        <div class="ty-cart-items__list-item-image">
            <?php echo $_smarty_tpl->getSubTemplate ("addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('width'=>"40",'height'=>"40"), 0);?>

        </div>
        <?php }?>
        <div class="ty-cart-items__list-item-desc">
            <?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?>
                <a href="<?php echo htmlspecialchars(fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("gift_certificate");?>
</a>
            <?php } else { ?>
                <span><?php echo $_smarty_tpl->__("gift_certificate");?>
</span>
            <?php }?>
        <p>
            <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal'],'span_id'=>"subtotal_gc_".((string)$_smarty_tpl->tpl_vars['gift_key']->value),'class'=>"none"), 0);?>

        </p>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['display_delete_icons']=="Y") {?>
        <?php $_smarty_tpl->tpl_vars["r_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
        <div class="ty-cart-items__list-item-tools cm-cart-item-delete">
            <?php if ((!$_smarty_tpl->tpl_vars['runtime']->value['checkout']||$_smarty_tpl->tpl_vars['force_items_deletion']->value)&&!$_smarty_tpl->tpl_vars['p']->value['extra']['exclude_from_calculate']) {
echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"gift_certificates.delete?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'but_meta'=>"cm-ajax cm-post cm-ajax-full-render",'but_target_id'=>"cart_status*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), 0);
}?>
        </div>
        <?php }?>
    </li>
    <?php } ?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/hooks/index/cart_status.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_certificates/hooks/index/cart_status.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_SESSION['cart']['gift_certificates']) {?>
    <?php  $_smarty_tpl->tpl_vars["gift"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["gift"]->_loop = false;
 $_smarty_tpl->tpl_vars["gift_key"] = new Smarty_Variable;
 $_from = $_SESSION['cart']['gift_certificates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["gift"]->key => $_smarty_tpl->tpl_vars["gift"]->value) {
$_smarty_tpl->tpl_vars["gift"]->_loop = true;
 $_smarty_tpl->tpl_vars["gift_key"]->value = $_smarty_tpl->tpl_vars["gift"]->key;
?>
    <li class="ty-cart-items__list-item">
        <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['products_links_type']=="thumb") {?>
        <div class="ty-cart-items__list-item-image">
            <?php echo $_smarty_tpl->getSubTemplate ("addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('width'=>"40",'height'=>"40"), 0);?>

        </div>
        <?php }?>
        <div class="ty-cart-items__list-item-desc">
            <?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {?>
                <a href="<?php echo htmlspecialchars(fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("gift_certificate");?>
</a>
            <?php } else { ?>
                <span><?php echo $_smarty_tpl->__("gift_certificate");?>
</span>
            <?php }?>
        <p>
            <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal'],'span_id'=>"subtotal_gc_".((string)$_smarty_tpl->tpl_vars['gift_key']->value),'class'=>"none"), 0);?>

        </p>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['display_delete_icons']=="Y") {?>
        <?php $_smarty_tpl->tpl_vars["r_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
        <div class="ty-cart-items__list-item-tools cm-cart-item-delete">
            <?php if ((!$_smarty_tpl->tpl_vars['runtime']->value['checkout']||$_smarty_tpl->tpl_vars['force_items_deletion']->value)&&!$_smarty_tpl->tpl_vars['p']->value['extra']['exclude_from_calculate']) {
echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"gift_certificates.delete?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'but_meta'=>"cm-ajax cm-post cm-ajax-full-render",'but_target_id'=>"cart_status*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), 0);
}?>
        </div>
        <?php }?>
    </li>
    <?php } ?>
<?php }?>
<?php }?><?php }} ?>
