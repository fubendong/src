<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-23 11:01:32
         compiled from "/Users/fubendong/Sites/bzfshop/src/protected/Theme/Shop/manage/Tpl/theme_shop_footnav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186149963253f8040c3fb438-44132351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20568be2f9e53911d333a15614d9603bcf5a9604' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/protected/Theme/Shop/manage/Tpl/theme_shop_footnav.tpl',
      1 => 1408717014,
      2 => 'file',
    ),
    '7566ce2a169168bc58c1c85073ee7e00c7fcd529' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/protected/Theme/Shop/manage/Tpl/theme_shop_layout.tpl',
      1 => 1408717014,
      2 => 'file',
    ),
    'db3694b0e1b08b39130f820414ca6dddb53af871' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/protected/Theme/Manage/Tpl/layout.tpl',
      1 => 1408717013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186149963253f8040c3fb438-44132351',
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
  'unifunc' => 'content_53f8040c616eb8_47868781',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f8040c616eb8_47868781')) {function content_53f8040c616eb8_47868781($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/fubendong/Sites/bzfshop/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
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
            <ul id="theme_shop_tabbar" class="nav nav-tabs">
                <li>
                    <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Theme/Shop/Basic'),$_smarty_tpl);?>
">基本信息</a>
                </li>
                <li>
                    <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Theme/Shop/AdvShopSlider'),$_smarty_tpl);?>
">首页广告</a>
                </li>
                <li>
                    <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Theme/Shop/GoodsSearchSlider'),$_smarty_tpl);?>
">搜索页广告</a>
                </li>
                <li>
                    <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Theme/Shop/GoodsViewSlider'),$_smarty_tpl);?>
">详情页广告</a>
                </li>
                <li>
                    <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Theme/Shop/HeadNav'),$_smarty_tpl);?>
">头部导航</a>
                </li>
                <li>
                    <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Theme/Shop/FootNav'),$_smarty_tpl);?>
">底部导航</a>
                </li>
            </ul>
        </div>
        <!-- /页面上方导航条 -->

        <!-- 商品管理主体内容 -->
        
    <!-- 用 JS 设置页面的导航菜单 -->
    <script type="text/javascript">
        window.bz_set_nav_status.push(function ($) {
            $("#theme_shop_tabbar li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Theme/Shop/FootNav'),$_smarty_tpl);?>
'])").addClass("active");
        });

        window.bz_set_breadcrumb_status.push({index: 1, text: '底部导航', link: window.location.href});
    </script>
    <div class="row">

    <form class="form-horizontal form-horizontal-inline form-dirty-check" method="POST"
          style="margin: 0px 0px 0px 0px;">

    <table class="table table-bordered table-hover table-condensed">
    <thead>
    <tr>
        <th width="33%">底部分类</th>
        <th width="33%">显示文字</th>
        <th>URL或者文章ID</th>
    </tr>
    </thead>
    <tbody>

    <tr class="well">
        <td colspan="3">底部导航</td>
    </tr>

    <!-- 一列底部导航 -->
    <tr>
        <td>
            <input name="footNav[0][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[0]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="footNav[0][item][0][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[0]['item'][0]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="footNav[0][item][0][url]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[0]['item'][0]['url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <input name="footNav[0][item][1][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[0]['item'][1]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="footNav[0][item][1][url]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[0]['item'][1]['url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <input name="footNav[0][item][2][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[0]['item'][2]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="footNav[0][item][2][url]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[0]['item'][2]['url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <input name="footNav[0][item][3][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[0]['item'][3]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="footNav[0][item][3][url]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[0]['item'][3]['url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <input name="footNav[0][item][4][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[0]['item'][4]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="footNav[0][item][4][url]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[0]['item'][4]['url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
    </tr>
    <!-- /一列底部导航 -->

    <!-- 一列底部导航 -->
    <tr>
        <td>
            <input name="footNav[1][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[1]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="footNav[1][item][0][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[1]['item'][0]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="footNav[1][item][0][url]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[1]['item'][0]['url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <input name="footNav[1][item][1][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[1]['item'][1]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="footNav[1][item][1][url]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[1]['item'][1]['url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <input name="footNav[1][item][2][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[1]['item'][2]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="footNav[1][item][2][url]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[1]['item'][2]['url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <input name="footNav[1][item][3][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[1]['item'][3]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="footNav[1][item][3][url]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[1]['item'][3]['url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <input name="footNav[1][item][4][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[1]['item'][4]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="footNav[1][item][4][url]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[1]['item'][4]['url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
    </tr>
    <!-- /一列底部导航 -->

    <!-- 一列底部导航 -->
    <tr>
        <td>
            <input name="footNav[2][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[2]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="footNav[2][item][0][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[2]['item'][0]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="footNav[2][item][0][url]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[2]['item'][0]['url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <input name="footNav[2][item][1][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[2]['item'][1]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="footNav[2][item][1][url]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[2]['item'][1]['url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <input name="footNav[2][item][2][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[2]['item'][2]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="footNav[2][item][2][url]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[2]['item'][2]['url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <input name="footNav[2][item][3][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[2]['item'][3]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="footNav[2][item][3][url]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[2]['item'][3]['url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <input name="footNav[2][item][4][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[2]['item'][4]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="footNav[2][item][4][url]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[2]['item'][4]['url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
    </tr>
    <!-- /一列底部导航 -->

    <!-- 一列底部导航 -->
    <tr>
        <td>
            <input name="footNav[3][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[3]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="footNav[3][item][0][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[3]['item'][0]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="footNav[3][item][0][url]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[3]['item'][0]['url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <input name="footNav[3][item][1][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[3]['item'][1]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="footNav[3][item][1][url]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[3]['item'][1]['url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <input name="footNav[3][item][2][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[3]['item'][2]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="footNav[3][item][2][url]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[3]['item'][2]['url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <input name="footNav[3][item][3][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[3]['item'][3]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="footNav[3][item][3][url]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[3]['item'][3]['url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <input name="footNav[3][item][4][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[3]['item'][4]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="footNav[3][item][4][url]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[3]['item'][4]['url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
    </tr>
    <!-- /一列底部导航 -->

    <!-- 一列底部导航 -->
    <tr>
        <td>
            <input name="footNav[4][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[4]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="footNav[4][item][0][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[4]['item'][0]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="footNav[4][item][0][url]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[4]['item'][0]['url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <input name="footNav[4][item][1][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[4]['item'][1]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="footNav[4][item][1][url]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[4]['item'][1]['url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <input name="footNav[4][item][2][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[4]['item'][2]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="footNav[4][item][2][url]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[4]['item'][2]['url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <input name="footNav[4][item][3][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[4]['item'][3]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="footNav[4][item][3][url]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[4]['item'][3]['url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <input name="footNav[4][item][4][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[4]['item'][4]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="footNav[4][item][4][url]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['footNav']->value[4]['item'][4]['url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
    </tr>
    <!-- /一列底部导航 -->

    <tr class="well">
        <td colspan="3">友情链接</td>
    </tr>

    <tr>
        <td>&nbsp;</td>
        <td>
            <input name="friendLink[0][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['friendLink']->value[0]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="friendLink[0][url]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['friendLink']->value[0]['url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
    </tr>

    <tr>
        <td>&nbsp;</td>
        <td>
            <input name="friendLink[1][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['friendLink']->value[1]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="friendLink[1][url]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['friendLink']->value[1]['url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
    </tr>

    <tr>
        <td>&nbsp;</td>
        <td>
            <input name="friendLink[2][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['friendLink']->value[2]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="friendLink[2][url]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['friendLink']->value[2]['url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
    </tr>

    <tr>
        <td>&nbsp;</td>
        <td>
            <input name="friendLink[3][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['friendLink']->value[3]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="friendLink[3][url]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['friendLink']->value[3]['url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
    </tr>

    <tr>
        <td>&nbsp;</td>
        <td>
            <input name="friendLink[4][title]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['friendLink']->value[4]['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
        <td>
            <input name="friendLink[4][url]" class="span2" type="text" data-no-validation="true"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['friendLink']->value[4]['url'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </td>
    </tr>

    </tbody>
    </table>

    <div class="row" style="text-align: center;">
        <button type="submit" class="btn btn-success">确认提交</button>
    </div>

    </form>
    </div>

        <!-- /商品管理主体内容 -->

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
