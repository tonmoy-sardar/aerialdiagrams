<?php /* Smarty version Smarty-3.1.21, created on 2018-12-15 09:02:59
         compiled from "C:\xampp\htdocs\cscart-demo\design\backend\templates\addons\product_variations\hooks\orders\items_list_row.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3368560815c149913588fc9-93132892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3c37689391fd5a3454890341b1932bcee623dbb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart-demo\\design\\backend\\templates\\addons\\product_variations\\hooks\\orders\\items_list_row.pre.tpl',
      1 => 1543374418,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3368560815c149913588fc9-93132892',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c14991358ce39_63866209',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c14991358ce39_63866209')) {function content_5c14991358ce39_63866209($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['variation_product_id']) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('oi', null, 1);
$_smarty_tpl->tpl_vars['oi']->value['product_id'] = $_smarty_tpl->tpl_vars['oi']->value['extra']['variation_product_id'];
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['oi'] = clone $_smarty_tpl->tpl_vars['oi'];?>
<?php }?><?php }} ?>
