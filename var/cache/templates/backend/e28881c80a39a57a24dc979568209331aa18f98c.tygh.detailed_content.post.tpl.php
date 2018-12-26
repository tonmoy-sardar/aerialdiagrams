<?php /* Smarty version Smarty-3.1.21, created on 2018-12-20 11:52:02
         compiled from "C:\xampp\htdocs\cscart-demo\design\backend\templates\addons\social_buttons\hooks\pages\detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1131284715c1b5832ed5b42-15425629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e28881c80a39a57a24dc979568209331aa18f98c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart-demo\\design\\backend\\templates\\addons\\social_buttons\\hooks\\pages\\detailed_content.post.tpl',
      1 => 1543374418,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1131284715c1b5832ed5b42-15425629',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c1b5832ed9a01_29340347',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1b5832ed9a01_29340347')) {function content_5c1b5832ed9a01_29340347($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable']=="Y") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/social_buttons/common/facebook_types.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>"page_data",'object_data'=>$_smarty_tpl->tpl_vars['page_data']->value), 0);?>

<?php }?>
<?php }} ?>
