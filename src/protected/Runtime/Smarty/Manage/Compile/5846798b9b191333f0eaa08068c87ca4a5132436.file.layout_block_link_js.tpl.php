<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-23 21:39:36
         compiled from "/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Manage/Tpl/layout_block_link_js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195725141353f89998d02a78-14441405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5846798b9b191333f0eaa08068c87ca4a5132436' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Manage/Tpl/layout_block_link_js.tpl',
      1 => 1408786193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195725141353f89998d02a78-14441405',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WEB_ROOT_HOST' => 0,
    'WEB_ROOT_BASE' => 0,
    'WEB_ROOT_BASE_RES' => 0,
    'WEB_COOKIE_AUTH_KEY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53f89998d10c65_84090122',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f89998d10c65_84090122')) {function content_53f89998d10c65_84090122($_smarty_tpl) {?><!-- 定义网站的起始路径，用于 JavaScript 的 Ajax 操作调用 -->
<script type="text/javascript">
    var WEB_ROOT_HOST = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_HOST']->value, ENT_QUOTES, 'UTF-8');?>
';
    var WEB_ROOT_BASE = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_BASE']->value, ENT_QUOTES, 'UTF-8');?>
';
    var WEB_ROOT_BASE_RES = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_BASE_RES']->value, ENT_QUOTES, 'UTF-8');?>
';
    var WEB_COOKIE_AUTH_KEY = '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['WEB_COOKIE_AUTH_KEY']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
';
</script>

<script type="text/javascript"
        src="<?php echo smarty_helper_get_asset_url(array('asset'=>'bootstrap-custom/kindeditor/kindeditor-min.js'),$_smarty_tpl);?>
"></script>
<script type="text/javascript" src="<?php echo smarty_helper_get_asset_url(array('asset'=>'bootstrap-custom/kindeditor/lang/zh_CN.js'),$_smarty_tpl);?>
"></script>

<!-- 合并所有的 JS 文件, 使用 merge=false 参数关闭合并，这样可以对单个文件做调试 -->
<?php echo smarty_helper_function_dump_merged_asset_js_url(array('asset'=>'bootstrap-custom/js/json2.js,
       bootstrap-custom/js/jquery-1.8.3.min.js,
       bootstrap-custom/js/jquery.cookie.js,
       bootstrap-custom/js/jquery.lazyload.js,
       bootstrap-custom/js/jstorage.min.js,
       bootstrap-custom/js/bootstrap.min.js,
       bootstrap-custom/js/bootstrap.ie.js,
       bootstrap-custom/js/validator.js,
       bootstrap-custom/plugin/datetimepicker/datetimepicker.min.js,
       bootstrap-custom/plugin/select2/select2.min.js,
       bootstrap-custom/plugin/select2/select2_locale_zh-CN.js,
       bootstrap-custom/plugin/dirtyform/jquery.are-you-sure.js,
       bootstrap-custom/plugin/pretty-photo/js/jquery.prettyPhoto.js,
       bootstrap-custom/plugin/bootbox/bootbox.min.js,
       bootstrap-custom/plugin/hover-dropdown/hover-dropdown.min.js,
       bootstrap-custom/plugin/pnotify/jquery.pnotify.min.js,
       bootstrap-custom/plugin/scroll-modal/scroll-modal.js,
       bootstrap-custom/plugin/fileupload/si.files.js,
       bootstrap-custom/plugin/sort-table/bootstrap-sortable.js,
       bootstrap-custom/plugin/treetable/js/jquery.treetable.js,
       bootstrap-custom/plugin/clickover/bootstrapx-clickover.js,
       bootstrap-custom/plugin/zrssfeed/jquery.zrssfeed.min.js,
       bootstrap-custom/plugin/pretty-loader/js/jquery.prettyLoader.js,
       js/manage.js
'),$_smarty_tpl);?>

<!-- /合并所有的 JS 文件, 使用 merge=false 参数关闭合并，这样可以对单个文件做调试 -->

<!-- dump 插件注册的 js 文件 -->
<?php echo smarty_helper_function_dump_register_js(array(),$_smarty_tpl);?>

<!-- /dump 插件注册的 js -->
<?php }} ?>
