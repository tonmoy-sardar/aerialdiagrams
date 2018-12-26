<?php /* Smarty version Smarty-3.1.21, created on 2018-12-15 08:57:24
         compiled from "C:\xampp\htdocs\cscart-demo\design\themes\responsive\templates\addons\recaptcha\hooks\index\scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9894726495c1497c4721ca8-10901075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77fa8de0497a86a32152a6267a4ea86e996e2285' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart-demo\\design\\themes\\responsive\\templates\\addons\\recaptcha\\hooks\\index\\scripts.post.tpl',
      1 => 1544853078,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9894726495c1497c4721ca8-10901075',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'app' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c1497c4750aa3_35200944',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1497c4750aa3_35200944')) {function content_5c1497c4750aa3_35200944($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscart-demo/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart-demo/app/functions/smarty_plugins\\function.set_id.php';
?><?php
fn_preload_lang_vars(array('error_validator_recaptcha','error_validator_recaptcha'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (get_class($_smarty_tpl->tpl_vars['app']->value['antibot']->getDriver())=="Tygh\Addons\Recaptcha\RecaptchaDriver") {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        (function (_, $) {
            _.tr({
                error_validator_recaptcha: '<?php echo strtr($_smarty_tpl->__("error_validator_recaptcha"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
            });

            $.extend(_, {
                recaptcha_settings: {
                    site_key: '<?php echo strtr($_smarty_tpl->tpl_vars['addons']->value['recaptcha']['recaptcha_site_key'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    theme: '<?php echo strtr($_smarty_tpl->tpl_vars['addons']->value['recaptcha']['recaptcha_theme'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    type: '<?php echo strtr($_smarty_tpl->tpl_vars['addons']->value['recaptcha']['recaptcha_type'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    size: '<?php echo strtr($_smarty_tpl->tpl_vars['addons']->value['recaptcha']['recaptcha_size'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
                }
            });
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
    <?php echo smarty_function_script(array('src'=>"js/addons/recaptcha/recaptcha.js"),$_smarty_tpl);?>

<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/recaptcha/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/recaptcha/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (get_class($_smarty_tpl->tpl_vars['app']->value['antibot']->getDriver())=="Tygh\Addons\Recaptcha\RecaptchaDriver") {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        (function (_, $) {
            _.tr({
                error_validator_recaptcha: '<?php echo strtr($_smarty_tpl->__("error_validator_recaptcha"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
            });

            $.extend(_, {
                recaptcha_settings: {
                    site_key: '<?php echo strtr($_smarty_tpl->tpl_vars['addons']->value['recaptcha']['recaptcha_site_key'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    theme: '<?php echo strtr($_smarty_tpl->tpl_vars['addons']->value['recaptcha']['recaptcha_theme'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    type: '<?php echo strtr($_smarty_tpl->tpl_vars['addons']->value['recaptcha']['recaptcha_type'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    size: '<?php echo strtr($_smarty_tpl->tpl_vars['addons']->value['recaptcha']['recaptcha_size'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
                }
            });
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
    <?php echo smarty_function_script(array('src'=>"js/addons/recaptcha/recaptcha.js"),$_smarty_tpl);?>

<?php }?>
<?php }?><?php }} ?>
