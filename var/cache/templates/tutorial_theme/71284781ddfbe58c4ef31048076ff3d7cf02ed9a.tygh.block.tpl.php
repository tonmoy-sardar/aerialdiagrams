<?php /* Smarty version Smarty-3.1.21, created on 2018-12-17 12:42:23
         compiled from "C:\xampp\htdocs\cscart-demo\design\themes\tutorial_theme\templates\views\block_manager\render\block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6125907815c176f7f0104e7-97687208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71284781ddfbe58c4ef31048076ff3d7cf02ed9a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart-demo\\design\\themes\\tutorial_theme\\templates\\views\\block_manager\\render\\block.tpl',
      1 => 1544853072,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6125907815c176f7f0104e7-97687208',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'block' => 0,
    'content_alignment' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c176f7f019a40_31473759',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c176f7f019a40_31473759')) {function content_5c176f7f019a40_31473759($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']||$_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT'||$_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT') {?>
    <div class="<?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT') {?> ty-float-right<?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT') {?>
    ty-float-left<?php }?>">
<?php }?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']||$_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT'||$_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT') {?>
    </div>
<?php }?><?php }} ?>
