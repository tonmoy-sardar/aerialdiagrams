<?php /* Smarty version Smarty-3.1.21, created on 2018-12-24 14:35:34
         compiled from "C:\xampp\htdocs\cscart-demo\design\themes\aerialdiagrams\templates\views\block_manager\render\container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8470717115c20c4864e51f6-63461002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06330a4816a158af6c816f670502d126596e614a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart-demo\\design\\themes\\aerialdiagrams\\templates\\views\\block_manager\\render\\container.tpl',
      1 => 1545651331,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8470717115c20c4864e51f6-63461002',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout_data' => 0,
    'container' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c20c486510171_13063744',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c20c486510171_13063744')) {function content_5c20c486510171_13063744($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>container-fluid <?php } else { ?>container<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div><?php }} ?>
