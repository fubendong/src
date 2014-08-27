<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-23 21:39:59
         compiled from "/Users/fubendong/Sites/bzfshop/src/src/protected/Plugin/QQAuth/manage/Tpl/qqauth_configure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32957717953f899afecb507-59792240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0bed57e6fcbef7f557be4ab3676e094075bc340' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/src/protected/Plugin/QQAuth/manage/Tpl/qqauth_configure.tpl',
      1 => 1408786203,
      2 => 'file',
    ),
    '2225ee17c5dc84de5a4afd8b0017437c9fb2c5dc' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Manage/Tpl/plugin_layout.tpl',
      1 => 1408786193,
      2 => 'file',
    ),
    '5ab88ed415c6fcbba954dd25876d140ea416cb19' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Manage/Tpl/layout.tpl',
      1 => 1408786193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32957717953f899afecb507-59792240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DEBUG' => 0,
    'authAdminUser' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53f899aff3d980_80112929',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f899aff3d980_80112929')) {function content_53f899aff3d980_80112929($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/fubendong/Sites/bzfshop/src/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <!-- 让 IE 使用最新模式 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <title>试客联盟管理后台</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="试客联盟商城管理后台">
    <meta name="author" content="试客联盟">

    <!-- 指定360浏览器使用极速模式 -->
    <meta name="renderer" content="webkit"/>
    <!-- /指定360浏览器使用极速模式 -->

    <!-- 引入 CSS 文件 -->
    <?php echo $_smarty_tpl->getSubTemplate ("layout_block_link_css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- /引入 CSS 文件 -->

    <!-- 这里是页面专用的 css 代码 -->
    
    <!-- 这里是页面专用的 css 代码 -->

</head>

<body>
<!-- 用 JS 设置页面的导航菜单 -->
<script type="text/javascript">
    window.bz_set_nav_status = []; // 用于设置导航栏状态的数组，里面是很多设置 function()
    window.bz_set_breadcrumb_status = []; // 用于设置 breadcrumb 的数组，里面是很多设置 {index:1, text:'商品编辑', link:'http://...'}
</script>

<?php if ($_smarty_tpl->tpl_vars['DEBUG']->value>0) {?>
    <!-- 调试提醒 -->
    <div class="navbar navbar-inverse navbar-static-top">
        <div class="navbar-inner">
            <div class="container" style="text-align:center;">
                <h5>注意：现在是 DEBUG (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['DEBUG']->value, ENT_QUOTES, 'UTF-8');?>
) 模式</h5>
            </div>
        </div>
    </div>
    <!-- /调试提醒 -->
<?php }?>

<!-- 顶部导航菜单 -->
<div id="system_top_navbar" class="navbar navbar-static-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" target="_blank" href="http://www.bzfshop.net">试客联盟</a>
            <ul class="nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['authAdminUser']->value['user_name'], ENT_QUOTES, 'UTF-8');?>
]
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/My/Profile'),$_smarty_tpl);?>
">我的资料</a></li>
                        <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/User/Logout'),$_smarty_tpl);?>
">退出登陆</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Index'),$_smarty_tpl);?>
">商品管理</a></li>
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Order/Index'),$_smarty_tpl);?>
">订单管理</a></li>
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Article/Index'),$_smarty_tpl);?>
">文章管理</a></li>
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Account/Index'),$_smarty_tpl);?>
">账号管理</a></li>
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Misc/Index'),$_smarty_tpl);?>
">杂项管理</a></li>
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Stat/Index'),$_smarty_tpl);?>
">数据统计</a></li>
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Plugin/Index'),$_smarty_tpl);?>
">插件主题</a></li>
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Community/Announce'),$_smarty_tpl);?>
">开源社区</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- /顶部导航菜单 -->

<!-- main_body -->
<div id="main_body" class="container" style="margin-top: 10px;">

    <!-- breadcrumb 导航-->
    <div id="main_body_breadcrumb" class="row">
    </div>
    <!-- /breadcrumb 导航-->

    <!-- ====================================== 这里是页面的主体内容 ============================================ -->

    

    <!-- 用 JS 设置页面的导航菜单 -->
    <script type="text/javascript">
        window.bz_set_nav_status.push(function ($) {
            $("#system_top_navbar li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Plugin/Index'),$_smarty_tpl);?>
'])").addClass("active");
        });
    </script>
    <div class="row bz_basic_content_block bz_box_shadow" style="padding:10px 10px 10px 10px;">

        <!-- 页面上方导航条 -->
        <div class="row">
            <ul id="plugin_tabbar" class="nav nav-tabs">
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Plugin/Plugin/ListPlugin'),$_smarty_tpl);?>
">插件管理</a></li>
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Plugin/Theme/ListTheme'),$_smarty_tpl);?>
">主题管理</a></li>
            </ul>
        </div>
        <!-- /页面上方导航条 -->

        <!-- 插件管理主体内容 -->
        
    <!-- 页面主体内容 -->
    <div class="row">
        <h4>QQ登陆插件配置</h4>
        <br/>
        <!-- 更新管理员信息的表单  -->
        <form class="form-horizontal form-horizontal-inline form-dirty-check" method="POST"
              style="margin: 0px 0px 0px 0px;">

            <div class="well">

                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">AppID</span>
                        <input class="span6" type="text" name="qqauth_appid" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['qqauth_appid']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                               data-validation-required="data-validation-required"/>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">AppKey</span>
                        <input class="span6" type="text" name="qqauth_appkey"
                               value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['qqauth_appkey']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                               data-validation-required="data-validation-required"/>
                    </div>
                </div>

            </div>

            <div class="control-group">
                <label class="control-label">&nbsp; </label>

                <div class="controls">
                    <button type="submit" class="btn btn-success">
                        保存设置
                    </button>
                </div>
            </div>

        </form>
        <!-- /更新管理员信息的表单  -->

    </div>
    <!-- /页面主体内容 -->


        <!-- /插件管理主体内容 -->

    </div>


    <!-- ====================================== /这里是页面的主体内容 ============================================ -->

</div>
<!-- /main_body -->

<!-- 让 main_body 和下面的 footer 中间隔离出一段距离 -->
<div id="main_body_tail" class="container">
    <!-- 调用 Cron 执行，用于驱动系统的 Cron 去执行一些周期性的任务 -->
    <img style="width:1px;height:1px;" src="<?php echo smarty_helper_function_make_url(array('controller'=>'/Cron/Run','static'=>false),$_smarty_tpl);?>
"/>
</div>
<!-- /让 main_body 和下面的 footer 中间隔离出一段距离 -->

<!-- 引入 JS 文件 -->
<?php echo $_smarty_tpl->getSubTemplate ("layout_block_link_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- /引入 JS 文件 -->

<!-- 这里是页面专用的 JS 代码 -->

<!-- 这里是页面专用的 JS 代码 -->

<?php if (0==$_smarty_tpl->tpl_vars['DEBUG']->value) {?>
    <!-- 尾部 footer -->
    <div class="navbar navbar-fixed-bottom">
        <div class="navbar-inner">
            <div class="container">
                <div class="row" style="text-align:center;">
                    <span>版权所有：bzfshop 2010-<?php echo htmlspecialchars(smarty_modifier_date_format(time(),"%Y"), ENT_QUOTES, 'UTF-8');?>
</span>
                </div>
            </div>
        </div>
    </div>
    <!-- /尾部 footer -->
<?php }?>

</body>
</html><?php }} ?>
