<?php /* Smarty version Smarty-3.1.21, created on 2018-12-20 15:59:47
         compiled from "C:\xampp\htdocs\cscart-demo\design\backend\templates\addons\banners\pickers\banners\picker_contents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1388644615c1b92439cba31-18191630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6be514e45a6205b2a22e24b4bf98abc35a55fda5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart-demo\\design\\backend\\templates\\addons\\banners\\pickers\\banners\\picker_contents.tpl',
      1 => 1543374418,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1388644615c1b92439cba31-18191630',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banners' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c1b9243a35360_12772442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1b9243a35360_12772442')) {function content_5c1b9243a35360_12772442($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cscart-demo/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
fn_preload_lang_vars(array('text_items_added','add_banners','add_banners_and_close'));
?>
<?php if (!$_REQUEST['extra']) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
(function(_, $) {
    _.tr('text_items_added', '<?php echo strtr($_smarty_tpl->__("text_items_added"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');

    $.ceEvent('on', 'ce.formpost_banners_form', function(frm, elm) {

        var banners = {};

        if ($('input.cm-item:checked', frm).length > 0) {
            $('input.cm-item:checked', frm).each( function() {
                var id = $(this).val();
                banners[id] = $('#banner_' + id).text();
            });

            
            $.cePicker('add_js_item', frm.data('caResultId'), banners, 'b', {
                '{banner_id}': '%id',
                '{banner}': '%item'
            });
            

            $.ceNotification('show', {
                type: 'N', 
                title: _.tr('notice'), 
                message: _.tr('text_items_added'), 
                message_state: 'I'
            });
        }

        return false;
    });

}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
</head>

<?php echo $_smarty_tpl->getSubTemplate ("addons/banners/views/banners/components/banners_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"banners.picker",'extra'=>"<input type=\"hidden\" name=\"result_ids\" value=\"pagination_".((string)$_REQUEST['data_id'])."\">",'put_request_vars'=>true,'form_meta'=>"cm-ajax",'in_popup'=>true), 0);?>


<form action="<?php echo htmlspecialchars(fn_url($_REQUEST['extra']), ENT_QUOTES, 'UTF-8');?>
" data-ca-result-id="<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
" method="post" name="banners_form" enctype="multipart/form-data">

<?php echo $_smarty_tpl->getSubTemplate ("addons/banners/views/banners/components/banners_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('banners'=>$_smarty_tpl->tpl_vars['banners']->value,'form_name'=>"banners_form"), 0);?>


<?php if ($_smarty_tpl->tpl_vars['banners']->value) {?>
<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("add_banners"),'but_close_text'=>$_smarty_tpl->__("add_banners_and_close"),'is_js'=>fn_is_empty($_REQUEST['extra'])), 0);?>

</div>
<?php }?>

</form>
<?php }} ?>
