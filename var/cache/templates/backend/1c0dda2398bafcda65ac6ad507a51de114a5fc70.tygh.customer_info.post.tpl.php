<?php /* Smarty version Smarty-3.1.21, created on 2018-12-15 09:03:00
         compiled from "C:\xampp\htdocs\cscart-demo\design\backend\templates\addons\discussion\hooks\orders\customer_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20513695515c149914dab031-38604446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c0dda2398bafcda65ac6ad507a51de114a5fc70' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart-demo\\design\\backend\\templates\\addons\\discussion\\hooks\\orders\\customer_info.post.tpl',
      1 => 1543374418,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20513695515c149914dab031-38604446',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'order_info' => 0,
    'discussion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c149914dd2132_46049926',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c149914dd2132_46049926')) {function content_5c149914dd2132_46049926($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscart-demo/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
fn_preload_lang_vars(array('discussion','discussion_title_order','disabled','enabled','enabled','disabled'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")||$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>

<?php $_smarty_tpl->tpl_vars["discussion"] = new Smarty_variable(fn_get_discussion($_smarty_tpl->tpl_vars['order_info']->value['order_id'],"O"), null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("discussion")), 0);?>


<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("discussion_title_order");?>
</label>
    <div class="controls">
        <?php if (fn_check_view_permissions("discussion.add")) {?>
            <input type="hidden" name="discussion[object_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="discussion[object_type]" value="O" />
            <select name="discussion[type]">
                <option <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars(smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("disabled");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION")) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars(smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("enabled");?>
</option>
            </select>
        <?php } else { ?>
            <span class="shift-input"><?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']==smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION")) {
echo $_smarty_tpl->__("enabled");
} else {
echo $_smarty_tpl->__("disabled");
}?></span>
        <?php }?>
    </div>
</div>
<?php }?><?php }} ?>
