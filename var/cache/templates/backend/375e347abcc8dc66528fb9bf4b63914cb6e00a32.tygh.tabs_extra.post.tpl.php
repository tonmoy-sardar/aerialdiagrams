<?php /* Smarty version Smarty-3.1.21, created on 2018-12-20 11:52:03
         compiled from "C:\xampp\htdocs\cscart-demo\design\backend\templates\addons\discussion\hooks\pages\tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5680538755c1b58333ecbe1-34180711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '375e347abcc8dc66528fb9bf4b63914cb6e00a32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart-demo\\design\\backend\\templates\\addons\\discussion\\hooks\\pages\\tabs_extra.post.tpl',
      1 => 1543374418,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5680538755c1b58333ecbe1-34180711',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_type' => 0,
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c1b58333f0a98_05054571',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1b58333f0a98_05054571')) {function content_5c1b58333f0a98_05054571($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['page_type']->value!=@constant('PAGE_TYPE_LINK')) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>$_smarty_tpl->tpl_vars['page_data']->value['company_id']), 0);?>

<?php }?><?php }} ?>
