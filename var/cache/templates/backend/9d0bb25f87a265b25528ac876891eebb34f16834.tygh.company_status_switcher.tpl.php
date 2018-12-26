<?php /* Smarty version Smarty-3.1.21, created on 2018-12-24 10:34:40
         compiled from "C:\xampp\htdocs\cscart-demo\design\backend\templates\views\companies\components\company_status_switcher.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21078855265c208c10f256e4-14115245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d0bb25f87a265b25528ac876891eebb34f16834' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart-demo\\design\\backend\\templates\\views\\companies\\components\\company_status_switcher.tpl',
      1 => 1543374418,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21078855265c208c10f256e4-14115245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
    'config' => 0,
    'checked' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c208c10f2bf32_83227999',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c208c10f2bf32_83227999')) {function content_5c208c10f2bf32_83227999($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscart-demo/app/functions/smarty_plugins\\modifier.enum.php';
?><div class="switch switch-mini cm-switch list-btns company-switch-storefront-status-button" data-ca-company-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-opened-status="<?php echo htmlspecialchars(smarty_modifier_enum("StorefrontStatuses::OPENED"), ENT_QUOTES, 'UTF-8');?>
" data-ca-closed-status="<?php echo htmlspecialchars(smarty_modifier_enum("StorefrontStatuses::CLOSED"), ENT_QUOTES, 'UTF-8');?>
" data-ca-return-url="<?php echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');?>
" id="switch_storefront_status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->tpl_vars['checked'] = new Smarty_variable($_smarty_tpl->tpl_vars['company']->value['storefront_status']==smarty_modifier_enum("StorefrontStatuses::OPENED"), null, 0);?>
    <input type="checkbox"<?php if ($_smarty_tpl->tpl_vars['checked']->value) {?> checked="checked"<?php }?>/>
</div>
<?php }} ?>
