<?php /* Smarty version Smarty-3.1.21, created on 2018-12-26 08:07:26
         compiled from "C:\xampp\htdocs\cscart-demo\design\backend\templates\pickers\categories\picker_contents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8160380555c230c8e6ba0c7-37708256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70d24721a722e9634a4b70af593cb2ad2e02a741' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart-demo\\design\\backend\\templates\\pickers\\categories\\picker_contents.tpl',
      1 => 1543374418,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8160380555c230c8e6ba0c7-37708256',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories_tree' => 0,
    'category_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c230c8e863d38_30407495',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c230c8e863d38_30407495')) {function content_5c230c8e863d38_30407495($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cscart-demo/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
fn_preload_lang_vars(array('text_items_added','no_categories_available','manage_categories','choose','add_categories_and_close','add_categories'));
?>
<?php if (!$_REQUEST['extra']) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
(function(_, $) {
    _.tr('text_items_added', '<?php echo strtr($_smarty_tpl->__("text_items_added"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
    var display_type = '<?php echo strtr($_REQUEST['display'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';

    $.ceEvent('on', 'ce.formpost_categories_form', function(frm, elm) {
        var categories = {};

        if ($('input.cm-item:checked', frm).length > 0) {
            $('input.cm-item:checked', frm).each( function() {
                var id = $(this).val();
                if (display_type != 'radio') {
                    categories[id] = {
                        category: $('#category_' + id).text(),
                        path_items: ''
                    };
                    var parent = $(this).closest('.table-tree').parent().prev('.table-tree');
                    while (parent.length > 0) {
                        var path_id = $('.cm-item', parent).first().val();
                        if (path_id) {
                            var path_name = $('#category_' + path_id).text();
                            categories[id]['path_items'] =
                                '<a class="ty-breadcrumbs__a" target="_blank" href="<?php echo htmlspecialchars(fn_url("categories.update&category_id="), ENT_QUOTES, 'UTF-8');?>
'+path_id+'">'+path_name+'</a> / ' +
                                    categories[id]['path_items'];
                        }
                        parent = parent.parent().prev('.table-tree');
                    }
                }
                else {
                    categories[id] = $('#category_' + id).text()
                }
            });

            if (display_type != 'radio') {
                
                $.cePicker('add_js_item', frm.data('caResultId'), categories, 'c', {
                    '{category_id}': '%id',
                    '{category}': '%item.category',
                    '{path_items}': '%item.path_items'
                });
                
            } else {
                
                $.cePicker('add_js_item', frm.data('caResultId'), categories, 'c', {
                    '{category_id}': '%id',
                    '{category}': '%item'
                });
                
            }


            if (display_type != 'radio') {
                $.ceNotification('show', {
                    type: 'N', 
                    title: _.tr('notice'), 
                    message: _.tr('text_items_added'), 
                    message_state: 'I'
                });
            }
        }

        return false;
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<form action="<?php echo htmlspecialchars(fn_url($_REQUEST['extra']), ENT_QUOTES, 'UTF-8');?>
" data-ca-result-id="<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
" method="post" name="categories_form">

<div class="items-container multi-level">
    <?php if ($_smarty_tpl->tpl_vars['categories_tree']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/categories_tree_simple.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('header'=>true,'checkbox_name'=>(($tmp = @$_REQUEST['checkbox_name'])===null||$tmp==='' ? "categories_ids" : $tmp),'parent_id'=>$_smarty_tpl->tpl_vars['category_id']->value,'display'=>$_REQUEST['display']), 0);?>

    <?php } else { ?>
        <p class="no-items center">
            <?php echo $_smarty_tpl->__("no_categories_available");?>

            <?php if (fn_allowed_for("ULTIMATE")) {?>
                <a href="<?php echo htmlspecialchars(fn_url("categories.manage"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("manage_categories");?>
.</a>
            <?php }?>
        </p>
    <?php }?>
</div>

<div class="buttons-container">
    <?php if ($_REQUEST['display']=="radio") {?>
        <?php $_smarty_tpl->tpl_vars["but_close_text"] = new Smarty_variable($_smarty_tpl->__("choose"), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["but_close_text"] = new Smarty_variable($_smarty_tpl->__("add_categories_and_close"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["but_text"] = new Smarty_variable($_smarty_tpl->__("add_categories"), null, 0);?>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('is_js'=>fn_is_empty($_REQUEST['extra'])), 0);?>

</div>

</form>
<?php }} ?>
