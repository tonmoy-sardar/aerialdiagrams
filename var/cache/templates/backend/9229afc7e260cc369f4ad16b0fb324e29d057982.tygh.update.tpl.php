<?php /* Smarty version Smarty-3.1.21, created on 2018-12-24 16:14:26
         compiled from "C:\xampp\htdocs\cscart-demo\design\backend\templates\views\menus\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20533846865c20dbb2a76952-45547332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9229afc7e260cc369f4ad16b0fb324e29d057982' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart-demo\\design\\backend\\templates\\views\\menus\\update.tpl',
      1 => 1543374418,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20533846865c20dbb2a76952-45547332',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu_data' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c20dbb2aefae5_20529847',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c20dbb2aefae5_20529847')) {function content_5c20dbb2aefae5_20529847($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('name'));
?>
<?php if ($_smarty_tpl->tpl_vars['menu_data']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['menu_data']->value['menu_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>


<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data" name="update_product_menu_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" method="post" class="cm-skip-check-items  form-horizontal">
<div id="content_group_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

<input type="hidden" name="menu_data[menu_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="result_ids" value="content_group_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

<fieldset>
    <div class="control-group">
        <label class="cm-required control-label" for="elm_menu_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("name");?>
:</label>
        <div class="controls">
            <input type="text" name="menu_data[name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
" id="elm_menu_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="input-text" size="18" />
        </div>
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"menu_data[status]",'id'=>"elm_menu_status_".((string)$_smarty_tpl->tpl_vars['id']->value),'obj'=>$_smarty_tpl->tpl_vars['menu_data']->value), 0);?>


</fieldset>

<!--content_group_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[menus.update]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

</div>
</form>
<?php }} ?>
