<?php /* Smarty version Smarty-3.1.21, created on 2018-12-15 09:02:53
         compiled from "C:\xampp\htdocs\cscart-demo\design\backend\templates\common\status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19039632155c14990de2beb9-86132710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd32432c6fbf07b1e8ef1f08673693ad591af5ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart-demo\\design\\backend\\templates\\common\\status.tpl',
      1 => 1543374418,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19039632155c14990de2beb9-86132710',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_status_descr' => 0,
    'status_type' => 0,
    'display' => 0,
    'status' => 0,
    'name' => 0,
    'select_id' => 0,
    'columns' => 0,
    '_html_checkboxes' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c14990de3f7b4_87520274',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c14990de3f7b4_87520274')) {function content_5c14990de3f7b4_87520274($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\cscart-demo\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php';
if (!is_callable('smarty_function_html_checkboxes')) include 'C:\\xampp\\htdocs\\cscart-demo\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_checkboxes.php';
?><?php if (!$_smarty_tpl->tpl_vars['order_status_descr']->value) {?>
    <?php if (!$_smarty_tpl->tpl_vars['status_type']->value) {
$_smarty_tpl->tpl_vars["status_type"] = new Smarty_variable(@constant('STATUSES_ORDER'), null, 0);
}?>
    <?php $_smarty_tpl->tpl_vars["order_status_descr"] = new Smarty_variable(fn_get_simple_statuses($_smarty_tpl->tpl_vars['status_type']->value), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display']->value=="view") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status_descr']->value[$_smarty_tpl->tpl_vars['status']->value], ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['display']->value=="select") {
echo smarty_function_html_options(array('name'=>$_smarty_tpl->tpl_vars['name']->value,'options'=>$_smarty_tpl->tpl_vars['order_status_descr']->value,'selected'=>$_smarty_tpl->tpl_vars['status']->value,'id'=>$_smarty_tpl->tpl_vars['select_id']->value),$_smarty_tpl);
} elseif ($_smarty_tpl->tpl_vars['display']->value=="checkboxes") {
echo smarty_function_html_checkboxes(array('name'=>$_smarty_tpl->tpl_vars['name']->value,'options'=>$_smarty_tpl->tpl_vars['order_status_descr']->value,'selected'=>$_smarty_tpl->tpl_vars['status']->value,'columns'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? 4 : $tmp),'assign'=>'_html_checkboxes','labels'=>false),$_smarty_tpl);
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_html_checkboxes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><label><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</label><?php }
}?>
<?php }} ?>
