<?php /* Smarty version Smarty-3.1.21, created on 2018-12-17 12:42:24
         compiled from "C:\xampp\htdocs\cscart-demo\design\themes\tutorial_theme\templates\views\block_manager\render\container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18243713535c176f80217314-80363736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3ced8eb0c126f36fe5f5a77f0dfc07cf3d0b7ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart-demo\\design\\themes\\tutorial_theme\\templates\\views\\block_manager\\render\\container.tpl',
      1 => 1544853072,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18243713535c176f80217314-80363736',
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
  'unifunc' => 'content_5c176f8021a7f2_60346999',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c176f8021a7f2_60346999')) {function content_5c176f8021a7f2_60346999($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>container-fluid <?php } else { ?>container<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div><?php }} ?>
