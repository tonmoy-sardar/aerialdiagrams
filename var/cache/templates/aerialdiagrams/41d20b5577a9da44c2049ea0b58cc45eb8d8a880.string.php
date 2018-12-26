<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 10:19:32
         compiled from "41d20b5577a9da44c2049ea0b58cc45eb8d8a880" */ ?>
<?php /*%%SmartyHeaderCode:21025965715c232b847b50b0-54811210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41d20b5577a9da44c2049ea0b58cc45eb8d8a880' => 
    array (
      0 => '41d20b5577a9da44c2049ea0b58cc45eb8d8a880',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '21025965715c232b847b50b0-54811210',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth' => 0,
    'runtime' => 0,
    'config' => 0,
    'return_current_url' => 0,
    'settings' => 0,
    'block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c232b847efa37_84443501',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c232b847efa37_84443501')) {function content_5c232b847efa37_84443501($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('Login','SignUp','sign_in'));
?>
<div class="ty-account-info__buttons">
        <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
           
        <?php } else { ?>
            <a href="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="auth"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="login_form") {
echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(fn_url("auth.login_form?return_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'UTF-8');
}?>" <?php if ($_smarty_tpl->tpl_vars['settings']->value['Security']['secure_storefront']!="partial") {?> data-ca-target-id="login_block<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__secondary"<?php } else { ?> class="ty-btn ty-btn__primary"<?php }?> rel="nofollow"><?php echo $_smarty_tpl->__("Login");?>
</a><a href="<?php echo htmlspecialchars(fn_url("profiles.add"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__primary"><?php echo $_smarty_tpl->__("SignUp");?>
</a>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['Security']['secure_storefront']!="partial") {?>
                <div  id="login_block<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden" title="<?php echo $_smarty_tpl->__("sign_in");?>
">
                    <div class="ty-login-popup">
                        <?php echo $_smarty_tpl->getSubTemplate ("views/auth/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"popup",'id'=>"popup".((string)$_smarty_tpl->tpl_vars['block']->value['snapping_id'])), 0);?>

                    </div>
                </div>
            <?php }?>
        <?php }?>
    </div><?php }} ?>
