<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-23 11:01:06
         compiled from "/Users/fubendong/Sites/bzfshop/src/protected/Theme/Shop/manage/Tpl/theme_shop_advshop_block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98885081253f803f259a176-56833655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b5994ec251e28753d9f08e0b8bc85c075f4a7ec' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/protected/Theme/Shop/manage/Tpl/theme_shop_advshop_block.tpl',
      1 => 1408717014,
      2 => 'file',
    ),
    'f382d1ae0ff985bbc128a4fd2a2a545fe2c60e59' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/protected/Theme/Shop/manage/Tpl/theme_shop_advshop_layout.tpl',
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
  'nocache_hash' => '98885081253f803f259a176-56833655',
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
  'unifunc' => 'content_53f803f26b1933_39152058',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f803f26b1933_39152058')) {function content_53f803f26b1933_39152058($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/fubendong/Sites/bzfshop/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
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
            $("#theme_shop_tabbar li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Theme/Shop/AdvShopSlider'),$_smarty_tpl);?>
'])").addClass("active");
        });

        window.bz_set_breadcrumb_status.push({index: 1, text: '首页广告', link: window.location.href});
    </script>
    <!-- 首页广告设置 -->
    <div class="tabbable tabs-left">

        <!-- 页面左侧标签导航 -->
        <ul id="theme_shop_advindex_left_tabbar" class="nav nav-tabs">
            <li class=""><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Theme/Shop/AdvShopSlider'),$_smarty_tpl);?>
">滑动图片</a></li>
            <li class=""><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Theme/Shop/AdvShopBlock'),$_smarty_tpl);?>
">区块广告</a></li>
        </ul>
        <!-- /页面左侧标签导航 -->

        <!-- 不同的设置页面 -->
        
    <!-- 用 JS 设置页面的导航菜单 -->
    <script type="text/javascript">
        window.bz_set_nav_status.push(function ($) {
            $("#theme_shop_advindex_left_tabbar li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Theme/Shop/AdvShopBlock'),$_smarty_tpl);?>
'])").addClass("active");
        });

        window.bz_set_breadcrumb_status.push({index: 2, text: '区块广告', link: window.location.href});
    </script>
    <div class="row">


    <form class="form-horizontal form-horizontal-inline" method="POST" style="margin: 0px 0px 0px 0px;">

    <!-- 左侧每个标签的具体内容 -->
    <div class="tab-content">

    <?php if (!isset($_smarty_tpl->tpl_vars['shop_index_advblock_json_data']->value)) {?>
    <!-- 一个缺省的广告设置 -->
    <div class="tab-pane active">

        <!-- 不同的广告块切换 -->
        <ul id="theme_shop_adv_block_tabbar" class="nav nav-tabs">
            <li class="active">
                <a href="#theme_shop_adv_block_1" data-toggle="tab">
                    女装系列<span class="badge badge-warning"><i class="icon-info-sign"></i></span>
                </a>
            </li>
            <li>
                <a>
                    <button type="button" class="btn btn-mini btn-info"
                            onclick="bZF.themeShop.cloneAdvBlockTab(jQuery('li',this.parentNode.parentNode.parentNode).first());">
                        <i class="icon-plus"></i>
                    </button>
                </a>
            </li>
        </ul>
        <!-- /不同的广告块切换 -->

        <div class="tab-content">

            <!-- 一个广告块内容 -->
            <div id="theme_shop_adv_block_1" class="tab-pane well active">

                <div class="row" style="padding: 0px 0px 20px 0px;">
                    <span style="float:left;font-size:14px;font-weight: bold;padding-right: 10px;">选择主题：</span>
                    <select data-initValue='bzf_shop_index_adv_block_theme_red'
                            class="span2 bzf_shop_index_adv_block_theme_select">
                        <option value="bzf_shop_index_adv_block_theme_red">红色主题</option>
                        <option value="bzf_shop_index_adv_block_theme_yellow">黄色主题</option>
                        <option value="bzf_shop_index_adv_block_theme_blue">蓝色主题</option>
                        <option value="bzf_shop_index_adv_block_theme_pink">粉红主题</option>
                    </select>
                </div>

                <!-- 一个分类展示区 -->
                <div class="row bzf_shop_index_adv_block">

                    <!-- 头部标签切换 -->
                    <ul class="nav nav-tabs">
                        <li><a class="bzf_caption" href="#" onclick="return false;"><span>1F</span>女装系列</a>
                        </li>
                        <li class="active">
                            <a href="#bzf_shop_index_adv_block_1_2" data-toggle="tab">
                                上衣裙子<span class="badge badge-warning"><i class="icon-info-sign"></i></span>
                            </a>

                        </li>
                        <li>
                            <a>
                                <button type="button" class="btn btn-mini btn-info"
                                        onclick="bZF.themeShop.cloneAdvBlockTab(jQuery('li',this.parentNode.parentNode.parentNode).first().next());">
                                    <i class="icon-plus"></i>
                                </button>
                            </a>
                        </li>
                    </ul>
                    <!-- /头部标签切换 -->

                    <!-- 标签对应内容 -->
                    <div class="tab-content">
                        <!-- 一个广告 block 的图片区 -->
                        <div id="bzf_shop_index_adv_block_1_2"
                             class="tab-pane active bzf_shop_index_adv_image_block">

                            <!-- 左侧小图片 -->
                            <div class="span3">
                                <a class="image_left" href="#"
                                   data-target="_blank" data-url="#"
                                   data-image="<?php echo theme_shop_smarty_helper_function_get_asset_url(array('asset'=>'img/placeholder_238x490.gif'),$_smarty_tpl);?>
">
                                    <img src="<?php echo theme_shop_smarty_helper_function_get_asset_url(array('asset'=>'img/placeholder_238x490.gif'),$_smarty_tpl);?>
"/>
                                </a>
                            </div>
                            <!-- /左侧小图片 -->

                            <!-- 中间大图 -->
                            <div class="span6">
                                <a class="image_center" href="#"
                                   data-target="_blank" data-url="#"
                                   data-image="<?php echo theme_shop_smarty_helper_function_get_asset_url(array('asset'=>'img/placeholder_490x490.gif'),$_smarty_tpl);?>
">
                                    <img src="<?php echo theme_shop_smarty_helper_function_get_asset_url(array('asset'=>'img/placeholder_490x490.gif'),$_smarty_tpl);?>
"/>
                                </a>
                            </div>
                            <!-- /中间大图 -->

                            <!-- 右侧小图片 -->
                            <div class="span3">
                                <a class="image_right" href="#"
                                   data-target="_blank" data-url="#"
                                   data-image="<?php echo theme_shop_smarty_helper_function_get_asset_url(array('asset'=>'img/placeholder_238x158.gif'),$_smarty_tpl);?>
">
                                    <img src="<?php echo theme_shop_smarty_helper_function_get_asset_url(array('asset'=>'img/placeholder_238x158.gif'),$_smarty_tpl);?>
"/>
                                </a>
                                <a class="image_right" href="#"
                                   data-target="_blank" data-url="#"
                                   data-image="<?php echo theme_shop_smarty_helper_function_get_asset_url(array('asset'=>'img/placeholder_238x158.gif'),$_smarty_tpl);?>
">
                                    <img src="<?php echo theme_shop_smarty_helper_function_get_asset_url(array('asset'=>'img/placeholder_238x158.gif'),$_smarty_tpl);?>
"/>
                                </a>
                                <a class="image_right" href="#"
                                   data-target="_blank" data-url="#"
                                   data-image="<?php echo theme_shop_smarty_helper_function_get_asset_url(array('asset'=>'img/placeholder_238x158.gif'),$_smarty_tpl);?>
">
                                    <img src="<?php echo theme_shop_smarty_helper_function_get_asset_url(array('asset'=>'img/placeholder_238x158.gif'),$_smarty_tpl);?>
"/>
                                </a>
                            </div>
                            <!-- /右侧小图片 -->

                        </div>
                        <!-- /一个广告 block 的图片区 -->

                    </div>
                    <!-- /标签对应内容 -->

                </div>
                <!-- /一个分类展示区 -->


            </div>
            <!-- /一个广告块内容 -->

        </div>


    </div>
    <!-- /一个缺省的广告设置 -->
    <?php } else { ?>

    <!-- 广告设置 -->
    <div class="tab-pane active">

        <!-- 不同的广告块切换 -->
        <ul id="theme_shop_adv_block_tabbar" class="nav nav-tabs">
            <?php $_smarty_tpl->tpl_vars["advBlockObjectIndex"] = new Smarty_variable(0, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['advBlockObject'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['advBlockObject']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shop_index_advblock_json_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['advBlockObject']->key => $_smarty_tpl->tpl_vars['advBlockObject']->value) {
$_smarty_tpl->tpl_vars['advBlockObject']->_loop = true;
?>
                <?php if (0==$_smarty_tpl->tpl_vars['advBlockObjectIndex']->value) {?>
                    <li class="active">
                        <?php } else { ?>
                    <li>
                <?php }?>
                <a href="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['advBlockObject']->value['id'], ENT_QUOTES, 'UTF-8');?>
" data-toggle="tab">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['advBlockObject']->value['title'], ENT_QUOTES, 'UTF-8');?>
<span class="badge badge-warning"><i class="icon-info-sign"></i></span>
                </a>
                </li>
                <?php $_smarty_tpl->tpl_vars["advBlockObjectIndex"] = new Smarty_variable($_smarty_tpl->tpl_vars['advBlockObjectIndex']->value+1, null, 0);?>
            <?php } ?>
            <li>
                <a>
                    <button type="button" class="btn btn-mini btn-info"
                            onclick="bZF.themeShop.cloneAdvBlockTab(jQuery('li',this.parentNode.parentNode.parentNode).first());">
                        <i class="icon-plus"></i>
                    </button>
                </a>
            </li>
        </ul>
        <!-- /不同的广告块切换 -->

        <div class="tab-content">

            <?php $_smarty_tpl->tpl_vars["advBlockObjectIndex"] = new Smarty_variable(0, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['advBlockObject'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['advBlockObject']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shop_index_advblock_json_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['advBlockObject']->key => $_smarty_tpl->tpl_vars['advBlockObject']->value) {
$_smarty_tpl->tpl_vars['advBlockObject']->_loop = true;
?>

            <!-- 一个广告块内容 -->
            <?php if (0==$_smarty_tpl->tpl_vars['advBlockObjectIndex']->value) {?>
            <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['advBlockObject']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="tab-pane well active">
                <?php } else { ?>
                <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['advBlockObject']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="tab-pane well">
                    <?php }?>

                    <div class="row" style="padding: 0px 0px 20px 0px;">
                        <span style="float:left;font-size:14px;font-weight: bold;padding-right: 10px;">选择主题：</span>
                        <select data-initValue="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['advBlockObject']->value['theme_class'], ENT_QUOTES, 'UTF-8');?>
"
                                class="span2 bzf_shop_index_adv_block_theme_select">
                            <option value="bzf_shop_index_adv_block_theme_red">红色主题</option>
                            <option value="bzf_shop_index_adv_block_theme_yellow">黄色主题</option>
                            <option value="bzf_shop_index_adv_block_theme_blue">蓝色主题</option>
                            <option value="bzf_shop_index_adv_block_theme_pink">粉红主题</option>
                        </select>
                    </div>

                    <!-- 一个分类展示区 -->
                    <div class="row bzf_shop_index_adv_block">

                        <!-- 头部标签切换 -->
                        <ul class="nav nav-tabs">
                            <li><a class="bzf_caption" href="#"
                                   onclick="return false;"><span>1F</span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['advBlockObject']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
                            </li>

                            <?php $_smarty_tpl->tpl_vars["advBlockImageArray"] = new Smarty_variable($_smarty_tpl->tpl_vars['advBlockObject']->value['advBlockImageArray'], null, 0);?>
                            <?php $_smarty_tpl->tpl_vars["advBlockImageArrayIndex"] = new Smarty_variable(0, null, 0);?>
                            <?php  $_smarty_tpl->tpl_vars['advBlockImageItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['advBlockImageItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['advBlockImageArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['advBlockImageItem']->key => $_smarty_tpl->tpl_vars['advBlockImageItem']->value) {
$_smarty_tpl->tpl_vars['advBlockImageItem']->_loop = true;
?>
                                <?php if (0==$_smarty_tpl->tpl_vars['advBlockImageArrayIndex']->value) {?>
                                    <li class="active">
                                        <?php } else { ?>
                                    <li>
                                <?php }?>
                                <a href="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['advBlockImageItem']->value['id'], ENT_QUOTES, 'UTF-8');?>
" data-toggle="tab">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['advBlockImageItem']->value['title'], ENT_QUOTES, 'UTF-8');?>
<span class="badge badge-warning"><i
                                                class="icon-info-sign"></i></span>
                                </a>
                                </li>
                                <?php $_smarty_tpl->tpl_vars["advBlockImageArrayIndex"] = new Smarty_variable($_smarty_tpl->tpl_vars['advBlockImageArrayIndex']->value+1, null, 0);?>
                            <?php } ?>

                            <li>
                                <a>
                                    <button type="button" class="btn btn-mini btn-info"
                                            onclick="bZF.themeShop.cloneAdvBlockTab(jQuery('li',this.parentNode.parentNode.parentNode).first().next());">
                                        <i class="icon-plus"></i>
                                    </button>
                                </a>
                            </li>
                        </ul>
                        <!-- /头部标签切换 -->

                        <!-- 标签对应内容 -->
                        <div class="tab-content">

                            <?php $_smarty_tpl->tpl_vars["advBlockImageArray"] = new Smarty_variable($_smarty_tpl->tpl_vars['advBlockObject']->value['advBlockImageArray'], null, 0);?>
                            <?php $_smarty_tpl->tpl_vars["advBlockImageArrayIndex"] = new Smarty_variable(0, null, 0);?>
                            <?php  $_smarty_tpl->tpl_vars['advBlockImageItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['advBlockImageItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['advBlockImageArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['advBlockImageItem']->key => $_smarty_tpl->tpl_vars['advBlockImageItem']->value) {
$_smarty_tpl->tpl_vars['advBlockImageItem']->_loop = true;
?>

                            <!-- 一个广告 block 的图片区 -->

                            <?php if (0==$_smarty_tpl->tpl_vars['advBlockImageArrayIndex']->value) {?>
                            <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['advBlockImageItem']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
                                 class="tab-pane active bzf_shop_index_adv_image_block">
                                <?php } else { ?>
                                <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['advBlockImageItem']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="tab-pane bzf_shop_index_adv_image_block">
                                    <?php }?>

                                    <!-- 左侧小图片 -->
                                    <div class="span3">
                                        <?php  $_smarty_tpl->tpl_vars['imageItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imageItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['advBlockImageItem']->value['image_left']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imageItem']->key => $_smarty_tpl->tpl_vars['imageItem']->value) {
$_smarty_tpl->tpl_vars['imageItem']->_loop = true;
?>
                                            <a class="image_left" href="#"
                                               data-target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageItem']->value['target'], ENT_QUOTES, 'UTF-8');?>
" data-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageItem']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
                                               data-image="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageItem']->value['image'], ENT_QUOTES, 'UTF-8');?>
">
                                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageItem']->value['image'], ENT_QUOTES, 'UTF-8');?>
"/>
                                            </a>
                                        <?php } ?>
                                    </div>
                                    <!-- /左侧小图片 -->

                                    <!-- 中间大图 -->
                                    <div class="span6">
                                        <?php  $_smarty_tpl->tpl_vars['imageItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imageItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['advBlockImageItem']->value['image_center']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imageItem']->key => $_smarty_tpl->tpl_vars['imageItem']->value) {
$_smarty_tpl->tpl_vars['imageItem']->_loop = true;
?>
                                            <a class="image_center" href="#"
                                               data-target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageItem']->value['target'], ENT_QUOTES, 'UTF-8');?>
" data-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageItem']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
                                               data-image="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageItem']->value['image'], ENT_QUOTES, 'UTF-8');?>
">
                                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageItem']->value['image'], ENT_QUOTES, 'UTF-8');?>
"/>
                                            </a>
                                        <?php } ?>
                                    </div>
                                    <!-- /中间大图 -->

                                    <!-- 右侧小图片 -->
                                    <div class="span3">
                                        <?php  $_smarty_tpl->tpl_vars['imageItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imageItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['advBlockImageItem']->value['image_right']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imageItem']->key => $_smarty_tpl->tpl_vars['imageItem']->value) {
$_smarty_tpl->tpl_vars['imageItem']->_loop = true;
?>
                                            <a class="image_right" href="#"
                                               data-target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageItem']->value['target'], ENT_QUOTES, 'UTF-8');?>
" data-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageItem']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
                                               data-image="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageItem']->value['image'], ENT_QUOTES, 'UTF-8');?>
">
                                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageItem']->value['image'], ENT_QUOTES, 'UTF-8');?>
"/>
                                            </a>
                                        <?php } ?>
                                    </div>
                                    <!-- /右侧小图片 -->

                                </div>
                                <!-- /一个广告 block 的图片区 -->

                                <?php $_smarty_tpl->tpl_vars["advBlockImageArrayIndex"] = new Smarty_variable($_smarty_tpl->tpl_vars['advBlockImageArrayIndex']->value+1, null, 0);?>
                                <?php } ?>

                            </div>
                            <!-- /标签对应内容 -->

                        </div>
                        <!-- /一个分类展示区 -->


                    </div>
                    <!-- /一个广告块内容 -->

                    <?php $_smarty_tpl->tpl_vars["advBlockObjectIndex"] = new Smarty_variable($_smarty_tpl->tpl_vars['advBlockObjectIndex']->value+1, null, 0);?>
                    <?php } ?>

                </div>


            </div>
            <!-- /广告设置 -->

            <?php }?>

        </div>
        <!-- /左侧每个标签的具体内容 -->

        <!-- 隐藏的编码值 -->
        <input id="theme_shop_advblock_json_data" type="hidden" name="shop_index_advblock_json_data" value=""/>
        <!-- /隐藏的编码值 -->

        <!-- 提交按钮 -->
        <div class="row" style="text-align: center;">
            <button type="submit" class="btn btn-success" onclick="bZF.themeShop.advblock_data_submit();">确认提交
            </button>
        </div>
        <!-- /提交按钮 -->

    </form>


    <!-- image 属性设置 -->
    <div id="theme_shop_advblock_image_property_modal"
         class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">广告属性</h3>
        </div>
        <div class="modal-body">

            <button id="theme_shop_advblock_image_upload_button"
                    class="btn btn-small btn-success" type="button">上传图片
            </button>

            <form class="form-horizontal form-horizontal-inline" method="POST">
                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">图片URL</span>
                        <input type="text" class="span4" name="image" value="#"
                               data-validation-required-message="URL不能为空"/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">跳转链接</span>
                        <input type="text" class="span4" name="url" value="#"
                               data-validation-required-message="URL不能为空"/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">新窗口打开</span>
                        <input type="checkbox" checked="checked" name="target" value="1"/>
                    </div>
                </div>
            </form>

        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
            <button class="btn btn-success"
                    onclick="bZF.themeShop.confirm_advblock_image_property_modal();return false;">
                保存
            </button>
        </div>
    </div>
    <!-- /image 属性设置 -->


    </div>

        <!-- /不同的设置页面 -->

    </div>
    <!-- 首页广告设置 -->


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
