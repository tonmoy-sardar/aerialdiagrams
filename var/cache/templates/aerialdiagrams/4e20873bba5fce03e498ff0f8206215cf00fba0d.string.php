<?php /* Smarty version Smarty-3.1.21, created on 2018-12-20 10:57:07
         compiled from "4e20873bba5fce03e498ff0f8206215cf00fba0d" */ ?>
<?php /*%%SmartyHeaderCode:9044846315c1b4b53080e75-34384255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e20873bba5fce03e498ff0f8206215cf00fba0d' => 
    array (
      0 => '4e20873bba5fce03e498ff0f8206215cf00fba0d',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '9044846315c1b4b53080e75-34384255',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c1b4b53084c66_48353624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1b4b53084c66_48353624')) {function content_5c1b4b53084c66_48353624($_smarty_tpl) {?>
                            <ul id="customer_service_links">
                            <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("orders.search"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">About your order</a></li>
                            <?php if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']&&$_smarty_tpl->tpl_vars['addons']->value['wishlist']['status']=='A') {?>
                                <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">Wishlist</a></li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products']=='Y') {?>
                                <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">Comparison list</a></li>
                            <?php }?>
                            </ul><?php }} ?>
