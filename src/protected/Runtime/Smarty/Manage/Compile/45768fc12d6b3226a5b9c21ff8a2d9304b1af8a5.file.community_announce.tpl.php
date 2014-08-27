<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-23 00:26:20
         compiled from "/Users/fubendong/Sites/bzfshop/src/protected/Theme/Manage/Tpl/community_announce.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168340862853f76f2c144160-69181567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45768fc12d6b3226a5b9c21ff8a2d9304b1af8a5' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/protected/Theme/Manage/Tpl/community_announce.tpl',
      1 => 1408717013,
      2 => 'file',
    ),
    '1b780547b8b18e7b639e74fec0a569490f9caf5c' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/protected/Theme/Manage/Tpl/community_layout.tpl',
      1 => 1408717013,
      2 => 'file',
    ),
    'db3694b0e1b08b39130f820414ca6dddb53af871' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/protected/Theme/Manage/Tpl/layout.tpl',
      1 => 1408717013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168340862853f76f2c144160-69181567',
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
  'unifunc' => 'content_53f76f2c1cd853_84196352',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f76f2c1cd853_84196352')) {function content_53f76f2c1cd853_84196352($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/fubendong/Sites/bzfshop/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
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
    <script>
        window.bz_set_nav_status.push(function ($) {
            $("#system_top_navbar li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Community/Announce'),$_smarty_tpl);?>
'])").addClass("active");
        });
    </script>
    <div class="row bz_basic_content_block bz_box_shadow" style="padding:10px 10px 10px 10px;">

        <!-- 页面上方导航条 -->
        <div class="row">
            <ul id="community_tabbar" class="nav nav-tabs">
                <li>
                    <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Community/Announce'),$_smarty_tpl);?>
">最新动态</a>
                </li>
                <li>
                    <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Community/Article'),$_smarty_tpl);?>
">技术文章</a>
                </li>
                <li>
                    <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Community/Group'),$_smarty_tpl);?>
">讨论组</a>
                </li>
                <li>
                    <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Community/Calendar'),$_smarty_tpl);?>
">开发日历</a>
                </li>
            </ul>
        </div>
        <!-- /页面上方导航条 -->

        <!-- 开源社区主体内容 -->
        
    <script>
        window.bz_set_nav_status.push(function ($) {
            $("#community_tabbar li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Community/Announce'),$_smarty_tpl);?>
'])").addClass("active");
        });
        window.bz_set_breadcrumb_status.push({index: 0, text: '最新动态', link: window.location.href});
    </script>
    <!-- 页面主体内容 -->
    <div class="row">

        <div class="span8">
            <iframe style="border-width:0px;"
                    src="http://www.bzfshop.net/article/224.html?utm_source=bzfshop"
                    width="780" height="600" frameborder="0" scrolling="auto"></iframe>
        </div>

        <div class="span3" style="padding-left: 20px;">

            <div class="accordion" id="accordion0">
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion0"
                           href="#collapse0">
                            试客联盟商城--v<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['version']->value, ENT_QUOTES, 'UTF-8');?>

                        </a>
                    </div>
                    <div id="collapse0" class="accordion-body collapse in">
                        <div class="accordion-inner">
                            程序发布时间：<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['release_date']->value, ENT_QUOTES, 'UTF-8');?>
<br/><br/>
                            程序更新请查看左边的最新动态
                        </div>
                    </div>
                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion0"
                           href="#collapse1">
                            试客联盟商城--技术资料
                        </a>
                    </div>
                    <div id="collapse1" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <a target="_blank"
                               href="http://www.bzfshop.net/article/category/bzfshop?utm_source=bzfshop">点击查看</a>试客联盟商城
                            相关的技术文章
                        </div>
                    </div>
                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion0"
                           href="#collapse2">
                            试客联盟商城--正式文档
                        </a>
                    </div>
                    <div id="collapse2" class="accordion-body collapse">
                        <div class="accordion-inner">

                            <div class="dropdown clearfix">
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu"
                                    style="display: block; position: static; margin-bottom: 5px; *width: 180px;">
                                    <li><a tabindex="-1" target="_blank"
                                           href="http://doc.bzfshop.net?utm_source=bzfshop">使用手册</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a tabindex="-1" target="_blank"
                                           href="http://doc.bzfshop.net?utm_source=bzfshop">开发手册</a>
                                    </li>
                                    <li><a tabindex="-1" target="_blank"
                                           href="http://doc.bzfshop.net?utm_source=bzfshop">设计手册</a>
                                    </li>
                                    <li><a tabindex="-1" target="_blank"
                                           href="http://doc.bzfshop.net?utm_source=bzfshop">部署手册</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion0"
                           href="#collapse3">
                            试客联盟商城--技术支持
                        </a>
                    </div>
                    <div id="collapse3" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <p><a target="_blank" href="https://groups.google.com/d/forum/bzfshop-group">Google
                                    Group 讨论组</a> (需要<a target="_blank"
                                                        href="https://code.google.com/p/openwrt-smarthosts-autoddvpn/">翻墙</a>)
                            </p>

                            <p>QQ群 134820563</p>

                            <p>邮件发送 <a href="mailto:bzfshop-support@bzfshop.net">bzfshop-support@bzfshop.net</a></p>

                            <p>目前主要使用 Google Group，其它方式为辅（其它辅助方式可能无人理会你的消息）</p>

                            <p>QQ群用的很少，我们是 Linux 工作环境，上 QQ 很不方便，用过 Linux 都懂的</p>

                            <p>无重大事情不要发邮件，否则会进入黑名单永不解封，切记、切记</p>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row" style="height: 30px;"></div>

    </div>
    <!-- /页面主体内容 -->


        <!-- /开源社区主体内容 -->

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
