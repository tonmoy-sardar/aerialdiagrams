<?php /* Smarty version Smarty-3.1.21, created on 2018-12-15 09:07:48
         compiled from "C:\xampp\htdocs\cscart-demo\design\themes\responsive\templates\addons\image_zoom\hooks\products\product_images.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15856076305c149a34b212f5-79188847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87e7c6579419ad4ec7badfe0626ba7de02dd0dd4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart-demo\\design\\themes\\responsive\\templates\\addons\\image_zoom\\hooks\\products\\product_images.post.tpl',
      1 => 1544854013,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15856076305c149a34b212f5-79188847',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5c149a34b6b641_82666781',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c149a34b6b641_82666781')) {function content_5c149a34b6b641_82666781($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscart-demo/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart-demo/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_script(array('src'=>"js/addons/image_zoom/cloudzoom.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/image_zoom/func.js"),$_smarty_tpl);?>


<?php echo '<script'; ?>
 type="text/javascript">
(function(_, $) {

    $.ceEvent('on', 'ce.commoninit', function (context) {

        var mobileWidth = 767,
            imageZoomSize = 450;

        // Disable Cloud zoom on mobile devices
        if ($(window).width() > mobileWidth) {

            context.find('.cm-previewer').each(function () {

                var elm = $(this).find('img'),
                    elm_width = $(this).data('caImageWidth'),
                    elm_height = $(this).data('caImageHeight'),
                    elm_image_path = $(elm).data('caZoomImagePath') ? $(elm).data('caZoomImagePath') : $(this).prop('href');
                    
                if (elm.data('CloudZoom') == undefined) {
                    elm.attr('data-cloudzoom', 'zoomImage: "' + elm_image_path + '"')
                        .CloudZoom({
                            tintColor: '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_tint_color_picker'])===null||$tmp==='' ? "#ffffff" : $tmp), ENT_QUOTES, 'UTF-8');?>
',
                            tintOpacity: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_opacity'])===null||$tmp==='' ? 0.6 : $tmp), ENT_QUOTES, 'UTF-8');?>
,
                            animationTime: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_animation_time'])===null||$tmp==='' ? 200 : $tmp), ENT_QUOTES, 'UTF-8');?>
,
                            easeTime: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_ease_time'])===null||$tmp==='' ? 200 : $tmp), ENT_QUOTES, 'UTF-8');?>
,
                            zoomFlyOut: <?php if ($_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_zoom_fly_out']=='Y') {?>true<?php } else { ?>false<?php }?>,
                            zoomSizeMode: '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_zoom_size_mode'])===null||$tmp==='' ? "zoom" : $tmp), ENT_QUOTES, 'UTF-8');?>
',
                            captionPosition: '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_caption_position'])===null||$tmp==='' ? "bottom" : $tmp), ENT_QUOTES, 'UTF-8');?>
',
                            <?php if ($_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_zoom_position']=='inside') {?>zoomOffsetX: 0,<?php }?>
                            zoomPosition: '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_zoom_position'])===null||$tmp==='' ? 3 : $tmp), ENT_QUOTES, 'UTF-8');?>
',
                            autoInside: mobileWidth,
                            disableOnScreenWidth: mobileWidth,
                            zoomWidth: elm_width < imageZoomSize ? elm_width : imageZoomSize,
                            zoomHeight: elm_height < imageZoomSize ? elm_height : imageZoomSize
                        });
                }
            });

        }
    });

}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/image_zoom/hooks/products/product_images.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/image_zoom/hooks/products/product_images.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_script(array('src'=>"js/addons/image_zoom/cloudzoom.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/image_zoom/func.js"),$_smarty_tpl);?>


<?php echo '<script'; ?>
 type="text/javascript">
(function(_, $) {

    $.ceEvent('on', 'ce.commoninit', function (context) {

        var mobileWidth = 767,
            imageZoomSize = 450;

        // Disable Cloud zoom on mobile devices
        if ($(window).width() > mobileWidth) {

            context.find('.cm-previewer').each(function () {

                var elm = $(this).find('img'),
                    elm_width = $(this).data('caImageWidth'),
                    elm_height = $(this).data('caImageHeight'),
                    elm_image_path = $(elm).data('caZoomImagePath') ? $(elm).data('caZoomImagePath') : $(this).prop('href');
                    
                if (elm.data('CloudZoom') == undefined) {
                    elm.attr('data-cloudzoom', 'zoomImage: "' + elm_image_path + '"')
                        .CloudZoom({
                            tintColor: '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_tint_color_picker'])===null||$tmp==='' ? "#ffffff" : $tmp), ENT_QUOTES, 'UTF-8');?>
',
                            tintOpacity: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_opacity'])===null||$tmp==='' ? 0.6 : $tmp), ENT_QUOTES, 'UTF-8');?>
,
                            animationTime: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_animation_time'])===null||$tmp==='' ? 200 : $tmp), ENT_QUOTES, 'UTF-8');?>
,
                            easeTime: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_ease_time'])===null||$tmp==='' ? 200 : $tmp), ENT_QUOTES, 'UTF-8');?>
,
                            zoomFlyOut: <?php if ($_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_zoom_fly_out']=='Y') {?>true<?php } else { ?>false<?php }?>,
                            zoomSizeMode: '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_zoom_size_mode'])===null||$tmp==='' ? "zoom" : $tmp), ENT_QUOTES, 'UTF-8');?>
',
                            captionPosition: '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_caption_position'])===null||$tmp==='' ? "bottom" : $tmp), ENT_QUOTES, 'UTF-8');?>
',
                            <?php if ($_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_zoom_position']=='inside') {?>zoomOffsetX: 0,<?php }?>
                            zoomPosition: '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_zoom_position'])===null||$tmp==='' ? 3 : $tmp), ENT_QUOTES, 'UTF-8');?>
',
                            autoInside: mobileWidth,
                            disableOnScreenWidth: mobileWidth,
                            zoomWidth: elm_width < imageZoomSize ? elm_width : imageZoomSize,
                            zoomHeight: elm_height < imageZoomSize ? elm_height : imageZoomSize
                        });
                }
            });

        }
    });

}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }?><?php }} ?>
