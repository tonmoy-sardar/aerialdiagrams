<?php /* Smarty version Smarty-3.1.21, created on 2018-12-20 11:51:53
         compiled from "C:\xampp\htdocs\cscart-demo\design\backend\templates\addons\blog\hooks\pages\sidebar.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18301788045c1b58297ef8e6-28199365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74d33bf8ce78cf3a42cf2a46687ab4031662c2ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart-demo\\design\\backend\\templates\\addons\\blog\\hooks\\pages\\sidebar.post.tpl',
      1 => 1543374418,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18301788045c1b58297ef8e6-28199365',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_managing_blog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c1b58297f75d5_00076729',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1b58297f75d5_00076729')) {function content_5c1b58297f75d5_00076729($_smarty_tpl) {?><?php if (!is_callable('smarty_block_notes')) include 'C:/xampp/htdocs/cscart-demo/app/functions/smarty_plugins\\block.notes.php';
?><?php if ($_smarty_tpl->tpl_vars['is_managing_blog']->value) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('notes', array()); $_block_repeat=true; echo smarty_block_notes(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="sidebar-note-item">
        <?php echo $_smarty_tpl->__('blog_functionality_notes');?>

    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_notes(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>
