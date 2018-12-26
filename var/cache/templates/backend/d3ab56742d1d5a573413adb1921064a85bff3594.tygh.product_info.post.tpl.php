<?php /* Smarty version Smarty-3.1.21, created on 2018-12-15 09:02:59
         compiled from "C:\xampp\htdocs\cscart-demo\design\backend\templates\addons\reward_points\hooks\orders\product_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2045182175c1499137dea18-52414126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3ab56742d1d5a573413adb1921064a85bff3594' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart-demo\\design\\backend\\templates\\addons\\reward_points\\hooks\\orders\\product_info.post.tpl',
      1 => 1543374418,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2045182175c1499137dea18-52414126',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    'oi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c1499137e6721_68239824',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1499137e6721_68239824')) {function content_5c1499137e6721_68239824($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('price_in_points'));
?>
<!-- Hook Reward points start -->
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['price']&&$_smarty_tpl->tpl_vars['oi']->value) {?>
<p><strong><?php echo $_smarty_tpl->__("price_in_points");?>
:</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['extra']['points_info']['price'], ENT_QUOTES, 'UTF-8');?>
</p>
<?php }?>
<!-- Hook Reward points end --><?php }} ?>
