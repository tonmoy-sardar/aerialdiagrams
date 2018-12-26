<?php /* Smarty version Smarty-3.1.21, created on 2018-12-20 11:52:02
         compiled from "C:\xampp\htdocs\cscart-demo\design\backend\templates\addons\blog\hooks\pages\detailed_description.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19083646045c1b5832b51403-81278882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00e816e892f0398a8484812807b74f2e394eb161' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart-demo\\design\\backend\\templates\\addons\\blog\\hooks\\pages\\detailed_description.override.tpl',
      1 => 1543374418,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19083646045c1b5832b51403-81278882',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_type' => 0,
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c1b5832b60de2_30195136',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1b5832b60de2_30195136')) {function content_5c1b5832b60de2_30195136($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('post_description','ttc_post_description','description'));
?>
        <?php if ($_smarty_tpl->tpl_vars['page_type']->value!=@constant('PAGE_TYPE_LINK')) {?>
        <div class="control-group">
            <?php if ($_smarty_tpl->tpl_vars['page_type']->value==@constant('PAGE_TYPE_BLOG')) {?>
            <label class="control-label" for="elm_page_descr"><?php echo $_smarty_tpl->__("post_description");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_post_description")), 0);?>
:</label>
            <?php } else { ?>
            <label class="control-label" for="elm_page_descr"><?php echo $_smarty_tpl->__("description");?>
:</label>
            <?php }?>
            <div class="controls">
                <textarea id="elm_page_descr" name="page_data[description]" cols="55" rows="8" class="cm-wysiwyg input-large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_data']->value['description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
        </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['page_type']->value==@constant('PAGE_TYPE_LINK')) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/pages/components/pages_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>
<?php }} ?>
