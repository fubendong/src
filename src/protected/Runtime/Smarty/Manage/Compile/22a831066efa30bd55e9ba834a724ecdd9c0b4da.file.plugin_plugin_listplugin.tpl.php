<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-24 13:27:11
         compiled from "/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Manage/Tpl/plugin_plugin_listplugin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37616749153f899a82c4710-83696332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22a831066efa30bd55e9ba834a724ecdd9c0b4da' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Manage/Tpl/plugin_plugin_listplugin.tpl',
      1 => 1408786193,
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
      1 => 1408858022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37616749153f899a82c4710-83696332',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53f899a837f162_48382818',
  'variables' => 
  array (
    'DEBUG' => 0,
    'authAdminUser' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f899a837f162_48382818')) {function content_53f899a837f162_48382818($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/fubendong/Sites/bzfshop/src/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
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
        
    <script type="text/javascript">
        window.bz_set_nav_status.push(function ($) {
            $("#plugin_tabbar li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Plugin/Plugin/ListPlugin'),$_smarty_tpl);?>
'])").addClass("active");
        });
        window.bz_set_breadcrumb_status.push({index: 1, text: '插件管理', link: window.location.href});
    </script>
    <!-- 页面主体内容 -->
    <div class="row">

        <?php if (isset($_smarty_tpl->tpl_vars['pluginArray']->value)) {?>
            <?php  $_smarty_tpl->tpl_vars['pluginItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pluginItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pluginArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pluginItem']->key => $_smarty_tpl->tpl_vars['pluginItem']->value) {
$_smarty_tpl->tpl_vars['pluginItem']->_loop = true;
?>
                <!-- 一个插件 -->
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr class="well">
                        <th>插件</th>
                        <th width="70%">插件描述</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pluginItem']->value['pluginDirName'], ENT_QUOTES, 'UTF-8');?>
]&nbsp;&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pluginItem']->value['pluginDisplayName'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td rowspan="3" style="text-align: left;"><?php echo $_smarty_tpl->tpl_vars['pluginItem']->value['pluginDescText'];?>
</td>
                    </tr>
                    <tr>
                        <td>
                            已安装版本：<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pluginItem']->value['installVersion'], ENT_QUOTES, 'UTF-8');?>
&lt;----代码版本：<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pluginItem']->value['pluginVersion'], ENT_QUOTES, 'UTF-8');?>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['pluginItem']->value['pluginIsInstall']) {?>
                                <?php if ($_smarty_tpl->tpl_vars['pluginItem']->value['pluginIsActive']) {?>
                                    <a class="btn btn-danger" onclick="return confirm('你确定要停用这个插件吗？');"
                                       href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Plugin/Plugin/DeactivatePlugin','pluginDirName'=>$_smarty_tpl->tpl_vars['pluginItem']->value['pluginDirName']),$_smarty_tpl);?>
">停用</a>
                                <?php } else { ?>
                                    <a class="btn" onclick="return confirm('你确定要启用这个插件吗？');"
                                       href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Plugin/Plugin/ActivatePlugin','pluginDirName'=>$_smarty_tpl->tpl_vars['pluginItem']->value['pluginDirName']),$_smarty_tpl);?>
">启用</a>
                                    <a class="btn btn-danger" onclick="return confirm('你确定要卸载这个插件吗？');"
                                       href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Plugin/Plugin/UninstallPlugin','pluginDirName'=>$_smarty_tpl->tpl_vars['pluginItem']->value['pluginDirName']),$_smarty_tpl);?>
">卸载</a>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['pluginItem']->value['pluginIsNeedUpdate']) {?>
                                    <a class="btn btn-warning" onclick="return confirm('你确定要升级这个插件吗？');"
                                       href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Plugin/Plugin/UpdatePlugin','pluginDirName'=>$_smarty_tpl->tpl_vars['pluginItem']->value['pluginDirName']),$_smarty_tpl);?>
">升级</a>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['pluginItem']->value['pluginIsActive']&&$_smarty_tpl->tpl_vars['pluginItem']->value['pluginConfigureUrl']) {?>
                                    <a class="btn btn-success"
                                       href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pluginItem']->value['pluginConfigureUrl'], ENT_QUOTES, 'UTF-8');?>
">设置</a>
                                <?php }?>
                            <?php } else { ?>
                                <a class="btn" onclick="return confirm('你确定要安装这个插件吗？');"
                                   href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Plugin/Plugin/InstallPlugin','pluginDirName'=>$_smarty_tpl->tpl_vars['pluginItem']->value['pluginDirName']),$_smarty_tpl);?>
">安装</a>
                            <?php }?>

                            <!-- a class="btn btn-small btn-danger" onclick="return confirm('你确定要删除这个插件吗？');" href="#">删除</a -->

                        </td>
                    </tr>
                    </tbody>
                </table>
                <!-- /一个插件 -->
            <?php } ?>
        <?php }?>

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
</html>
<?php }} ?>
