<?php /* Smarty version Smarty-3.1.21, created on 2018-12-15 09:02:59
         compiled from "C:\xampp\htdocs\cscart-demo\design\backend\templates\common\carriers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9953187035c149913391107-70638467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '412701171583b129494ea2304a4449897da1b37e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart-demo\\design\\backend\\templates\\common\\carriers.tpl',
      1 => 1543374418,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9953187035c149913391107-70638467',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'capture' => 0,
    'id' => 0,
    'name' => 0,
    'meta' => 0,
    'carriers' => 0,
    'code' => 0,
    'carrier' => 0,
    'carrier_data' => 0,
    'carrier_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c149913398e06_01218355',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c149913398e06_01218355')) {function content_5c149913398e06_01218355($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['capture']->value) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array("carrier_field", null, null); ob_start(); ?>
<?php }?>

<select <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');
}?> form-control">
    <option value="">--</option>
    <?php  $_smarty_tpl->tpl_vars["carrier_data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["carrier_data"]->_loop = false;
 $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['carriers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["carrier_data"]->key => $_smarty_tpl->tpl_vars["carrier_data"]->value) {
$_smarty_tpl->tpl_vars["carrier_data"]->_loop = true;
 $_smarty_tpl->tpl_vars["code"]->value = $_smarty_tpl->tpl_vars["carrier_data"]->key;
?>
    	<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['carrier']->value==$_smarty_tpl->tpl_vars['code']->value) {
$_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['carrier_data']->value['name'], null, 0);?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
    <?php } ?>
</select>
<?php if ($_smarty_tpl->tpl_vars['capture']->value) {?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("carrier_name", null, null); ob_start(); ?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier_name']->value, ENT_QUOTES, 'UTF-8');?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?><?php }} ?>
