<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 08:59:51
         compiled from "9087133a2c7889ee96ec1b00a81c3bc178e7bb07" */ ?>
<?php /*%%SmartyHeaderCode:1398962945c2318d74a67a3-91976141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9087133a2c7889ee96ec1b00a81c3bc178e7bb07' => 
    array (
      0 => '9087133a2c7889ee96ec1b00a81c3bc178e7bb07',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1398962945c2318d74a67a3-91976141',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth' => 0,
    'return_current_url' => 0,
    'runtime' => 0,
    'config' => 0,
    'settings' => 0,
    'block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c2318d74eccc6_44615130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c2318d74eccc6_44615130')) {function content_5c2318d74eccc6_44615130($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('sign_out','sign_in','register','sign_in'));
?>
<div class="ty-account-info__buttons buttons-container">
        <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
            <a href="<?php echo htmlspecialchars(fn_url("auth.logout?redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__primary"><?php echo $_smarty_tpl->__("sign_out");?>
</a>
        <?php } else { ?>
            <a href="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="auth"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="login_form") {
echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(fn_url("auth.login_form?return_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'UTF-8');
}?>" <?php if ($_smarty_tpl->tpl_vars['settings']->value['Security']['secure_storefront']!="partial") {?> data-ca-target-id="login_block<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__secondary"<?php } else { ?> class="ty-btn ty-btn__primary"<?php }?> rel="nofollow"><?php echo $_smarty_tpl->__("sign_in");?>
</a><a href="<?php echo htmlspecialchars(fn_url("profiles.add"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__primary"><?php echo $_smarty_tpl->__("register");?>
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
