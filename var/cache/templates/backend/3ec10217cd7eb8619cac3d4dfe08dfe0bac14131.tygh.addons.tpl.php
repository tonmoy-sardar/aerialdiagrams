<?php /* Smarty version Smarty-3.1.21, created on 2018-12-15 08:54:16
         compiled from "C:\xampp\htdocs\cscart-demo\design\backend\templates\views\settings_wizard\components\addons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7184596135c1497083d68d0-64452826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ec10217cd7eb8619cac3d4dfe08dfe0bac14131' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart-demo\\design\\backend\\templates\\views\\settings_wizard\\components\\addons.tpl',
      1 => 1543374418,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7184596135c1497083d68d0-64452826',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wizard_addons_list' => 0,
    'addon' => 0,
    'images_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c149708411206_06383905',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c149708411206_06383905')) {function content_5c149708411206_06383905($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('install'));
?>
<?php  $_smarty_tpl->tpl_vars["addon"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["addon"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wizard_addons_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["addon"]->key => $_smarty_tpl->tpl_vars["addon"]->value) {
$_smarty_tpl->tpl_vars["addon"]->_loop = true;
?>
	<div class="table-wrapper">
		<table class="table table-addons table-wizard">
		    <tr>
		        <td class="addon-icon">
		            <div class="bg-icon">
		                <?php if ($_smarty_tpl->tpl_vars['addon']->value['has_icon']) {?>
		                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
/icon.png" width="38" height="38" border="0" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>
" >
		                <?php }?>
		            </div>
		        </td>
		        <td width="95%">
		            <div class="object-group-link-wrap">
		                <span class="unedited-element block"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span><br>
		                <span class="row-status object-group-details"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['description'], ENT_QUOTES, 'UTF-8');?>
</span>
		            </div>
		        </td>
		        <td width="5%">
		            <input type="hidden" name="addons[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
]" value="N">
		            <label for="addon_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox">
		                <input id="addon_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="addons[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['addon_name'], ENT_QUOTES, 'UTF-8');?>
]" value="Y">
		                <?php echo $_smarty_tpl->__("install");?>

		            </label>     
		        </td>
		    </tr>
		</table>
	</div>
<?php } ?><?php }} ?>
