<?php /* Smarty version Smarty-3.1.21, created on 2018-12-15 09:10:18
         compiled from "C:\xampp\htdocs\cscart-demo\design\themes\responsive\templates\views\checkout\components\checkout_steps.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11486677505c149acae86099-13933504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd892531e55f509c5f61a7f9d5d282cdf3e0ede5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart-demo\\design\\themes\\responsive\\templates\\views\\checkout\\components\\checkout_steps.tpl',
      1 => 1544853072,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11486677505c149acae86099-13933504',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'display_steps' => 0,
    'cart' => 0,
    'number_of_step' => 0,
    'completed_steps' => 0,
    'edit' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c149acaec0a21_27984438',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c149acaec0a21_27984438')) {function content_5c149acaec0a21_27984438($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart-demo/app/functions/smarty_plugins\\function.set_id.php';
?><?php
fn_preload_lang_vars(array('continue','continue','continue','continue','continue','continue'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars["ajax_form"] = new Smarty_variable("cm-ajax", null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="checkout-steps cm-save-fields clearfix" id="checkout_steps">
    <?php $_smarty_tpl->tpl_vars['number_of_step'] = new Smarty_variable(0, null, 0);?>
    
    <?php if ($_smarty_tpl->tpl_vars['display_steps']->value['step_one']||$_smarty_tpl->tpl_vars['cart']->value['edit_step']=="step_one") {?>
        <?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['edit_step']=="step_one", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['number_of_step'] = new Smarty_variable($_smarty_tpl->tpl_vars['number_of_step']->value+1, null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_one.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('step'=>"one",'complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_one'],'edit'=>$_smarty_tpl->tpl_vars['edit']->value,'but_text'=>$_smarty_tpl->__("continue")), 0);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['display_steps']->value['step_two']) {?>
        <?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['edit_step']=="step_two", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['number_of_step'] = new Smarty_variable($_smarty_tpl->tpl_vars['number_of_step']->value+1, null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_two.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('step'=>"two",'complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_two'],'edit'=>$_smarty_tpl->tpl_vars['edit']->value,'but_text'=>$_smarty_tpl->__("continue")), 0);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['display_steps']->value['step_three']||$_smarty_tpl->tpl_vars['cart']->value['edit_step']=="step_three") {?>
        <?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['edit_step']=="step_three", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['number_of_step'] = new Smarty_variable($_smarty_tpl->tpl_vars['number_of_step']->value+1, null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_three.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('step'=>"three",'complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_three'],'edit'=>$_smarty_tpl->tpl_vars['edit']->value,'but_text'=>$_smarty_tpl->__("continue")), 0);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['display_steps']->value['step_four']||$_smarty_tpl->tpl_vars['cart']->value['edit_step']=="step_four") {?>
        <?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['edit_step']=="step_four", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['number_of_step'] = new Smarty_variable($_smarty_tpl->tpl_vars['number_of_step']->value+1, null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_four.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('step'=>"four",'edit'=>$_smarty_tpl->tpl_vars['edit']->value,'complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_four']), 0);?>

    <?php }?>

<!--checkout_steps--></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/checkout_steps.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/checkout_steps.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars["ajax_form"] = new Smarty_variable("cm-ajax", null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="checkout-steps cm-save-fields clearfix" id="checkout_steps">
    <?php $_smarty_tpl->tpl_vars['number_of_step'] = new Smarty_variable(0, null, 0);?>
    
    <?php if ($_smarty_tpl->tpl_vars['display_steps']->value['step_one']||$_smarty_tpl->tpl_vars['cart']->value['edit_step']=="step_one") {?>
        <?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['edit_step']=="step_one", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['number_of_step'] = new Smarty_variable($_smarty_tpl->tpl_vars['number_of_step']->value+1, null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_one.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('step'=>"one",'complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_one'],'edit'=>$_smarty_tpl->tpl_vars['edit']->value,'but_text'=>$_smarty_tpl->__("continue")), 0);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['display_steps']->value['step_two']) {?>
        <?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['edit_step']=="step_two", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['number_of_step'] = new Smarty_variable($_smarty_tpl->tpl_vars['number_of_step']->value+1, null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_two.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('step'=>"two",'complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_two'],'edit'=>$_smarty_tpl->tpl_vars['edit']->value,'but_text'=>$_smarty_tpl->__("continue")), 0);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['display_steps']->value['step_three']||$_smarty_tpl->tpl_vars['cart']->value['edit_step']=="step_three") {?>
        <?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['edit_step']=="step_three", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['number_of_step'] = new Smarty_variable($_smarty_tpl->tpl_vars['number_of_step']->value+1, null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_three.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('step'=>"three",'complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_three'],'edit'=>$_smarty_tpl->tpl_vars['edit']->value,'but_text'=>$_smarty_tpl->__("continue")), 0);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['display_steps']->value['step_four']||$_smarty_tpl->tpl_vars['cart']->value['edit_step']=="step_four") {?>
        <?php $_smarty_tpl->tpl_vars['edit'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['edit_step']=="step_four", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['number_of_step'] = new Smarty_variable($_smarty_tpl->tpl_vars['number_of_step']->value+1, null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/steps/step_four.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('step'=>"four",'edit'=>$_smarty_tpl->tpl_vars['edit']->value,'complete'=>$_smarty_tpl->tpl_vars['completed_steps']->value['step_four']), 0);?>

    <?php }?>

<!--checkout_steps--></div><?php }?><?php }} ?>
