<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-23 20:36:02
         compiled from "/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Shop/shop/Tpl/goods_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124642694953f88ab228d126-36795065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8371de9cd54cca342f70125783d8471805747ed5' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Shop/shop/Tpl/goods_search.tpl',
      1 => 1408786197,
      2 => 'file',
    ),
    'beea494f4132b410eb51b73e109b54974ab26919' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Shop/shop/Tpl/layout.tpl',
      1 => 1408786197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124642694953f88ab228d126-36795065',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'seo_title' => 0,
    'seo_description' => 0,
    'seo_keywords' => 0,
    'currentPageMobileUrl' => 0,
    'head_nav_json_data' => 0,
    'headNavItem' => 0,
    'foot_nav_json_data' => 0,
    'navItemListFirst' => 0,
    'navItemList' => 0,
    'navItem' => 0,
    'WEB_ROOT_HOST' => 0,
    'WEB_ROOT_BASE' => 0,
    'WEB_ROOT_BASE_RES' => 0,
    'friend_link_json_data' => 0,
    'friendLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53f88ab23f0069_63091180',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f88ab23f0069_63091180')) {function content_53f88ab23f0069_63091180($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/fubendong/Sites/bzfshop/src/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>

    <!-- 让 IE 使用最新模式 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <title><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['seo_title']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</title>
    <meta name="description" content="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['seo_description']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
    <meta name="keywords" content="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['seo_keywords']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
    <meta name="author" content="walee"/>

    <!-- 指定360浏览器使用极速模式 -->
    <meta name="renderer" content="webkit"/>
    <!-- /指定360浏览器使用极速模式 -->

    <?php if (isset($_smarty_tpl->tpl_vars['currentPageMobileUrl']->value)) {?>
        <!-- baidu 的 mobile 适配 -->
        <meta name="mobile-agent" content="format=html5;url=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentPageMobileUrl']->value, ENT_QUOTES, 'UTF-8');?>
"/>
        <meta name="mobile-agent" content="format=xhtml;url=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentPageMobileUrl']->value, ENT_QUOTES, 'UTF-8');?>
"/>
        <!-- /baidu 的 mobile 适配 -->
    <?php }?>

    <link rel="stylesheet" type="text/css"
          href="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'bootstrap-custom/css/bootstrap-1002.css'),$_smarty_tpl);?>
"/>

    <!--[if lte IE 6]>
    <link rel="stylesheet" type="text/css"
          href="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'bootstrap-custom/css/bootstrap-1002.ie6.css'),$_smarty_tpl);?>
"/>
    <![endif]-->

    <!--[if lte IE 7]>
    <link rel="stylesheet" type="text/css" href="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'bootstrap-custom/css/ie.css'),$_smarty_tpl);?>
"/>
    <![endif]-->

    <!-- 合并所有的 Css 文件, 使用 merge=false 参数关闭合并，这样可以对单个文件做调试 -->
    <?php echo smarty_helper_function_dump_merged_asset_css_url(array('asset'=>'bootstrap-custom/css/bootstrap-1002.fix.css,
    bootstrap-custom/plugin/cloud-zoom/cloud-zoom.css,
    bootstrap-custom/plugin/smartspin/smartspinner.css,
    bootstrap-custom/plugin/pnotify/jquery.pnotify.default.css,
    bootstrap-custom/plugin/quake-slider/css/quake.slider.css,
    bootstrap-custom/plugin/popover-extra/popover-extra-placements.css,
    bootstrap-custom/plugin/treetable/css/jquery.treetable.css,
    css/dropdown_category.css,
    css/jcarousel.css,
    css/quake-slider/quake.skin.css,
    css/jquery.treetable.theme.bzfshop.css,
    css/shop.css,
    css/advblock.css
    '),$_smarty_tpl);?>

    <!-- /合并所有的 Css 文件, 使用 merge=false 参数关闭合并，这样可以对单个文件做调试 -->

    <!-- 这里是页面专用的 css 代码 -->
    
    <!-- 这里是页面专用的 css 代码 -->

</head>
<body>

<!-- 用 JS 设置页面的导航菜单 -->
<script type="text/javascript">
    window.bzf_set_nav_status = []; // 用于设置导航栏状态的数组，里面是很多设置 function()
</script>

<!-- QQ彩贝用户登陆显示 -->
<div id="qqcaibei_header_panel" class="navbar navbar-inverse navbar-static-top">
    <div class="navbar-inner">
        <div class="container">
            <div class="row">
                <span id="qqcaibei_header_panel_headshow">这里是用户信息显示</span>
                <span id="qqcaibei_header_panel_showmsg">这里是用户消息</span>
                <span><a id="qqcaibei_header_panel_jifenurl" target="_blank" href="#">查看彩贝积分</a></span>
            </div>
        </div>
    </div>
</div>
<!-- /QQ彩贝用户登陆显示 -->

<!-- 头部，用户登录、注册栏 -->
<div class="navbar navbar-static-top">
    <div class="navbar-inner bzf_header_login_register">
        <div class="container">

            <!-- 欢迎信息，用户登录之后会被替换掉 -->
            <span class="bzf_welcome">
            您好，欢迎来到<?php echo smarty_helper_function_get_option_value(array('optionKey'=>"site_name"),$_smarty_tpl);?>
！&nbsp;&nbsp;
            <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/User/Login'),$_smarty_tpl);?>
">登陆</a>&nbsp;|
            <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/User/Register'),$_smarty_tpl);?>
">注册</a>&nbsp;
            </span>
            <!-- /欢迎信息，用户登录之后会被替换掉 -->

            |&nbsp;<a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/My/Order'),$_smarty_tpl);?>
">个人中心</a>
            <!--
            &nbsp;|&nbsp;
           
            客服QQ&nbsp;
            <span>
                <a style="color:red;font-weight: bold;" target="_blank"
                   href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo smarty_helper_function_get_option_value(array('optionKey'=>"kefu_qq"),$_smarty_tpl);?>
&site=qq&menu=yes">
                    <?php echo smarty_helper_function_get_option_value(array('optionKey'=>"kefu_qq"),$_smarty_tpl);?>

                </a>
            </span>&nbsp;|&nbsp;客服电话&nbsp;
            <span style="color:red;font-weight: bold;"><?php echo smarty_helper_function_get_option_value(array('optionKey'=>"kefu_telephone"),$_smarty_tpl);?>
</span>
            &nbsp;&nbsp;
        -->
        </div>
    </div>
</div>
<!-- /头部，用户登录、注册栏 -->

<!-- 头部，Logo、搜索栏-->
<div class="navbar navbar-static-top">
    <div class="navbar-inner bzf_header_logo_search">
        <div class="container">
            <!-- 搜索 form -->
            <form method="GET" action="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Search','static'=>false),$_smarty_tpl);?>
">
                <div class="row">

                    <span style="width:225px; height: auto">
                        <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/'),$_smarty_tpl);?>
">
                            <img src="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/header_logo.png'),$_smarty_tpl);?>
"/>
                        </a>
                    </span>

                    <span class="bzf_header_search_block">
                        <img src="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/header_search_icon.png'),$_smarty_tpl);?>
"/>
                        <input type="text" name="keywords"/>
                        <button type="submit">搜&nbsp;索</button>
                    </span>
                  <!--
                    <span class="bzf_header_cart_block">
                        <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/My/Order'),$_smarty_tpl);?>
">
                            我的<?php echo smarty_helper_function_get_option_value(array('optionKey'=>"site_name"),$_smarty_tpl);?>

                        </a>
                    </span>

                    <span id="bzf_header_cart_block" class="bzf_header_cart_block">
                        <span class="bzf_icon_cart_red"></span>
                        <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Cart/Show'),$_smarty_tpl);?>
">
                            购物车<span id="cart_goods_count">0</span>件
                        </a>
                    </span>

                </div>
            </form>
            <!-- /搜索 form -->
        </div>
    </div>
</div>
<!-- /头部，Logo、搜索栏-->

<!-- 头部，菜单导航栏-->
<div class="navbar navbar-static-top">
    <div class="navbar-inner bzf_header_nav_menu_dropdown">
        <div class="container">
            <ul id="bzf_header_nav_menu" class="nav">
                <li>
                    <!-- 这个链接不能点击（见 JS 文件）我们在这里加上 href 目的是提供给搜索引擎抓取，起到 SEO 优化的作用 -->
                    <a id="bzf_header_dropdown_menu"
                       href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Ajax/Category','static'=>false),$_smarty_tpl);?>
">全部商品分类<span
                                class="bzf_header_dropdown_menu_icon"></span></a>
                </li>
                <li>
                    <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/'),$_smarty_tpl);?>
">首页</a>
                </li>
                <!-- 头部导航设置 -->
                <?php echo smarty_helper_function_assign_option_value(array('optionKey'=>"head_nav_json_data",'decodeJson'=>"true"),$_smarty_tpl);?>

                <?php  $_smarty_tpl->tpl_vars['headNavItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['headNavItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['head_nav_json_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['headNavItem']->key => $_smarty_tpl->tpl_vars['headNavItem']->value) {
$_smarty_tpl->tpl_vars['headNavItem']->_loop = true;
?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['headNavItem']->value['title'])) {?>
                        <li>
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['headNavItem']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['headNavItem']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
                        </li>
                    <?php }?>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<!-- /头部，菜单导航栏-->


<!-- 网页主体内容 -->
<div id="main_body" class="container">

    <!-- =============================  网页主体内容  =========================================================== -->

    

    <!-- 用 JS 设置页面的导航菜单 -->
    <script type="text/javascript">
        window.bzf_set_nav_status.push(function ($) {
            $("#bzf_header_nav_menu li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/'),$_smarty_tpl);?>
'])").addClass("active");
        });
    </script>
    <!-- 主体内容 row -->
    <div class="row" style="padding-bottom: 10px;">

    <!----------------------  网页主体内容  ---------------------->

    <?php if (isset($_smarty_tpl->tpl_vars['goods_search_adv_slider']->value)) {?>
        <!-- 广告图片轮播 -->
        <div class="row bzf_goods_view_head_slide_image_panel" style="margin-bottom: 10px;">

            <div class="quake-slider">
                <div class="quake-slider-images">
                    <?php  $_smarty_tpl->tpl_vars['sliderItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sliderItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods_search_adv_slider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sliderItem']->key => $_smarty_tpl->tpl_vars['sliderItem']->value) {
$_smarty_tpl->tpl_vars['sliderItem']->_loop = true;
?>
                        <a target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sliderItem']->value['target'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sliderItem']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sliderItem']->value['image'], ENT_QUOTES, 'UTF-8');?>
"/>
                        </a>
                    <?php } ?>
                </div>
            </div>

        </div>
        <!-- /广告图片轮播 -->
    <?php }?>

    <!-- 左侧栏 -->
    <div class="span2" style="width:192px;">

        <?php if (isset($_smarty_tpl->tpl_vars['goodsCategoryTreeArray']->value)) {?>
            <!-- 商品分类 -->
            <div id="bzf_goods_category_tree_table_panel" class="row bzf_basic_content_block">
                <table class="table table-bordered table-hover" style="margin-bottom: 0px;">
                    <tbody>
                    <?php  $_smarty_tpl->tpl_vars['goodsCategoryItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goodsCategoryItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goodsCategoryTreeArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goodsCategoryItem']->key => $_smarty_tpl->tpl_vars['goodsCategoryItem']->value) {
$_smarty_tpl->tpl_vars['goodsCategoryItem']->_loop = true;
?>
                        <tr class="bzf_parent" data-tt-id="bzf_goods_category_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsCategoryItem']->value['meta_id'], ENT_QUOTES, 'UTF-8');?>
">
                            <td>
                                <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Category','category_id'=>$_smarty_tpl->tpl_vars['goodsCategoryItem']->value['meta_id']),$_smarty_tpl);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsCategoryItem']->value['meta_name'], ENT_QUOTES, 'UTF-8');?>
</a>
                            </td>
                        </tr>
                        <?php if (isset($_smarty_tpl->tpl_vars['goodsCategoryItem']->value['child_list'])) {?>
                            <?php  $_smarty_tpl->tpl_vars['childCategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['childCategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goodsCategoryItem']->value['child_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['childCategory']->key => $_smarty_tpl->tpl_vars['childCategory']->value) {
$_smarty_tpl->tpl_vars['childCategory']->_loop = true;
?>
                                <tr data-tt-id="bzf_goods_category_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['childCategory']->value['meta_id'], ENT_QUOTES, 'UTF-8');?>
"
                                    data-tt-parent-id="bzf_goods_category_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['childCategory']->value['parent_meta_id'], ENT_QUOTES, 'UTF-8');?>
">
                                    <td>
                                        <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Category','category_id'=>$_smarty_tpl->tpl_vars['childCategory']->value['meta_id']),$_smarty_tpl);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['childCategory']->value['meta_name'], ENT_QUOTES, 'UTF-8');?>
</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php }?>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /商品分类 -->
        <?php }?>

        <!-- 商品浏览历史，由 JavaScript 生成 -->
        <div id="bzf_goods_search_history" class="bzf_goods_view_history">
            <div class="header">
                最近浏览
            </div>
        </div>
        <!-- /商品浏览历史，由 JavaScript 生成 -->

    </div>
    <!-- /左侧栏 -->


    <!-- 右侧栏 -->
    <div class="span10" style="margin-left: 6px; width:804px;">

        <!-- 上面的过滤面板 -->
        <div class="row bzf_basic_content_block">
            <form method="POST" style="margin-bottom: 0px;">

                <!-- 属性过滤面板 -->
                <?php if (isset($_smarty_tpl->tpl_vars['goodsFilterArray']->value)) {?>
                    <table class="table" id="bzf_goods_search_filter_panel" style="margin-bottom: 0px;">
                        <tbody>
                        <tr>
                            <td colspan="3" style="background-color: #F7F7F7;font-size:14px;padding: 5px 5px;">
                                商品筛选
                                <!-- 隐藏的设置 -->
                                <input type="hidden" name="filter" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['filter']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                                <input type="hidden" name="brand_id" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['brand_id']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                                <!-- /隐藏的设置 -->
                            </td>
                        </tr>
                        <?php  $_smarty_tpl->tpl_vars['filterItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filterItem']->_loop = false;
 $_smarty_tpl->tpl_vars['filterLabel'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goodsFilterArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filterItem']->key => $_smarty_tpl->tpl_vars['filterItem']->value) {
$_smarty_tpl->tpl_vars['filterItem']->_loop = true;
 $_smarty_tpl->tpl_vars['filterLabel']->value = $_smarty_tpl->tpl_vars['filterItem']->key;
?>
                            <!-- 商品属性过滤 -->
                            <tr>
                                <td width="9%" class="labelkey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filterLabel']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                                <td>
                                    <div class="bzf_choose_div" data-filterKey="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filterItem']->value['filterKey'], ENT_QUOTES, 'UTF-8');?>
">
                                        <?php  $_smarty_tpl->tpl_vars['valueItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['valueItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filterItem']->value['filterValueArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['valueItem']->key => $_smarty_tpl->tpl_vars['valueItem']->value) {
$_smarty_tpl->tpl_vars['valueItem']->_loop = true;
?>
                                            <button class="btn btn-mini" type="button"
                                                    data-filterValue="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['valueItem']->value['value'], ENT_QUOTES, 'UTF-8');?>
">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['valueItem']->value['text'], ENT_QUOTES, 'UTF-8');?>
<i class="icon-remove"></i>
                                            </button>
                                        <?php } ?>
                                    </div>
                                    <div class="bzf_confirm_div">
                                        <button class="btn btn-small btn-success" type="button"
                                                onclick="bZF.goods_filter.submitForm();">确认
                                        </button>
                                        <button class="btn btn-small" type="button"
                                                onclick="bZF.goods_filter.filterMultiChooseClose(this.parentNode.parentNode.parentNode);">
                                            取消
                                        </button>
                                    </div>
                                </td>
                                <td width="6%">
                                    <button class="btn btn-mini bzf_multi_choose" type="button"
                                            onclick="bZF.goods_filter.filterMultiChooseOpen(this.parentNode.parentNode);">
                                        多选
                                    </button>
                                </td>
                            </tr>
                            <!-- /商品属性过滤 -->
                        <?php } ?>
                        </tbody>
                    </table>
                <?php }?>
                <!-- /属性过滤面板 -->

                <!-- 结果排序，价格区间搜索 -->
                <table class="table" style="margin-bottom: 0px;">
                    <tbody>
                    <tr>
                        <td class="labelkey" width="8%">&nbsp;</td>
                        <td style="text-align: left;">
                            <div class="row bzf_goods_search_order_filter_bar">
                                <div class="control-group">
                                    <div class="controls">

                                        <!-- 隐藏的排序设置 -->
                                        <input type="hidden" name="keywords"
                                               value="<?php echo htmlspecialchars(rawurlencode((($tmp = @$_smarty_tpl->tpl_vars['keywords']->value)===null||$tmp==='' ? '' : $tmp)), ENT_QUOTES, 'UTF-8');?>
"/>
                                        <input type="hidden" name="orderBy" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['orderBy']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                                        <input type="hidden" name="orderDir" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['orderDir']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                                        <!-- /隐藏的排序设置 -->

                                        <div class="btn-toolbar">
                                            <div class="btn-group">
                                                <button id="bzf_goods_search_order_filter_bar_button_default"
                                                        type="submit" class="btn btn-mini"
                                                        data-orderBy="" data-orderDir="">
                                                    默认<i class="icon-arrow-down"></i>
                                                </button>
                                                <button type="submit" class="btn btn-mini"
                                                        data-orderBy="total_buy_number" data-orderDir="desc">
                                                    销量<i class="icon-arrow-down"></i>
                                                </button>
                                                <button type="submit" class="btn btn-mini "
                                                        data-orderBy="shop_price" data-orderDir="asc">
                                                    价格<i class="icon-arrow-down"></i>
                                                </button>
                                                <button type="submit" class="btn btn-mini "
                                                        data-orderBy="add_time" data-orderDir="desc">
                                                    最新<i class="icon-arrow-down"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="input-prepend">
                                            <span class="add-on">￥</span>
                                            <input type="text" name="shop_price_min"
                                                   value=""
                                                   pattern="^\d+(\.\d+)?$" data-validation-pattern-message="价格非法"/>
                                        </div>
                                        <span class="bzf_text">--</span>

                                        <div class="input-prepend">
                                            <span class="add-on">￥</span>
                                            <input type="text" name="shop_price_max"
                                                   value=""
                                                   pattern="^\d+(\.\d+)?$" data-validation-pattern-message="价格非法"/>
                                        </div>

                                        <button type="submit" class="btn btn-mini btn-success">筛选商品</button>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <!-- /结果排序，价格区间搜索 -->

            </form>
        </div>
        <!-- /上面的过滤面板 -->

        <!-- 搜索商品的结果 -->
        <div class="row" style="margin-top: 10px;">

            <?php if (!isset($_smarty_tpl->tpl_vars['goodsArray']->value)) {?>
                <div class="row" style="text-align: center;">
                    <h3>没有匹配的商品</h3>
                </div>
            <?php } else { ?>
                <?php  $_smarty_tpl->tpl_vars['goodsItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goodsItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goodsArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goodsItem']->key => $_smarty_tpl->tpl_vars['goodsItem']->value) {
$_smarty_tpl->tpl_vars['goodsItem']->_loop = true;
?>

                    <!-- 一个商品 -->
                    <div class="span4 bzf_basic_content_block bzf_goods_search_goods_item">

                        <div class="row bzf_goods_image">
                            <a target="_blank" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsItem']->value['goods_name'], ENT_QUOTES, 'UTF-8');?>
"
                               href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/View','goods_id'=>$_smarty_tpl->tpl_vars['goodsItem']->value['goods_id']),$_smarty_tpl);?>
">
                                <img class="lazyload" src="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/blank.gif'),$_smarty_tpl);?>
"
                                     data-original="<?php echo smarty_helper_function_goods_thumb_image(array('goods_id'=>$_smarty_tpl->tpl_vars['goodsItem']->value['goods_id']),$_smarty_tpl);?>
"/>
                            </a>

                            <div class="row bzf_goods_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsItem']->value['goods_name'], ENT_QUOTES, 'UTF-8');?>
</div>
                        </div>

                        <div class="row bzf_goods_price">
                            <span class="price"><i>¥</i><em><?php echo htmlspecialchars(smarty_helper_modifier_money_int_part($_smarty_tpl->tpl_vars['goodsItem']->value['shop_price']), ENT_QUOTES, 'UTF-8');?>
</em>.<?php echo htmlspecialchars(smarty_helper_modifier_money_float_part($_smarty_tpl->tpl_vars['goodsItem']->value['shop_price']), ENT_QUOTES, 'UTF-8');?>
</span>

                            <?php if (0!=$_smarty_tpl->tpl_vars['goodsItem']->value['market_price']) {?>
                                <?php $_smarty_tpl->tpl_vars['divider'] = new Smarty_variable($_smarty_tpl->tpl_vars['goodsItem']->value['market_price'], null, 0);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->tpl_vars['divider'] = new Smarty_variable(1, null, 0);?>
                            <?php }?>

                            <span class="dock">
                        <span class="discount"><em><?php echo htmlspecialchars(10*round($_smarty_tpl->tpl_vars['goodsItem']->value['shop_price']/$_smarty_tpl->tpl_vars['divider']->value,2), ENT_QUOTES, 'UTF-8');?>
</em>折</span><br/>
                        <span class="orig-price">¥<?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['goodsItem']->value['market_price']), ENT_QUOTES, 'UTF-8');?>
</span>
                        </span>
                            <span class="sold-num"><em><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsItem']->value['total_buy_number'], ENT_QUOTES, 'UTF-8');?>
</em>人已买</span>
                        </div>

                    </div>
                    <!-- /一个商品 -->

                <?php } ?>
            <?php }?>

        </div>
        <!-- /搜索商品的结果 -->

        <!-- 分页 -->
        <div class="row pagination pagination-right">
            <?php echo smarty_helper_function_paginator(array('count'=>(($tmp = @$_smarty_tpl->tpl_vars['totalCount']->value)===null||$tmp==='' ? 0 : $tmp),'pageNo'=>(($tmp = @$_smarty_tpl->tpl_vars['pageNo']->value)===null||$tmp==='' ? 0 : $tmp),'pageSize'=>(($tmp = @$_smarty_tpl->tpl_vars['pageSize']->value)===null||$tmp==='' ? 60 : $tmp)),$_smarty_tpl);?>

        </div>
        <!-- 分页 -->

    </div>
    <!-- /右侧栏 -->

    <!--------------------------------------------  /网页主体内容  -------------------------------------------------->

    </div>
    <!-- /主题内容 row -->



    <!-- =============================  /网页主体内容  =========================================================== -->

</div>
<!-- /网页主体内容 main_body -->

<!-- 底部，一堆关于我们的链接-->
<div class="navbar navbar-static-top">
    <div class="navbar-inner bzf_footer_introduction_panel">
        <div class="container">

            <!-- 取得底部导航数据 -->
            <?php echo smarty_helper_function_assign_option_value(array('optionKey'=>"foot_nav_json_data",'decodeJson'=>"true"),$_smarty_tpl);?>


            <?php $_smarty_tpl->tpl_vars["navItemListFirst"] = new Smarty_variable(true, null, 0);?>

            <?php  $_smarty_tpl->tpl_vars['navItemList'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['navItemList']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['foot_nav_json_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['navItemList']->key => $_smarty_tpl->tpl_vars['navItemList']->value) {
$_smarty_tpl->tpl_vars['navItemList']->_loop = true;
?>

            <?php if ($_smarty_tpl->tpl_vars['navItemListFirst']->value) {?>
            <div class="span2 list_panel" style="border-left: none;">
                <?php } else { ?>
                <div class="span2 list_panel">
                    <?php }?>

                    <?php $_smarty_tpl->tpl_vars["navItemListFirst"] = new Smarty_variable(false, null, 0);?>

                    <div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItemList']->value['title'], ENT_QUOTES, 'UTF-8');?>
</div>
                    <?php  $_smarty_tpl->tpl_vars['navItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['navItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navItemList']->value['item']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['navItem']->key => $_smarty_tpl->tpl_vars['navItem']->value) {
$_smarty_tpl->tpl_vars['navItem']->_loop = true;
?>
                        <?php if (ctype_digit($_smarty_tpl->tpl_vars['navItem']->value['url'])) {?> <!-- 数字表明这是指向一个 文章ID -->
                            <p><a target="_blank"
                                  href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Article/View','article_id'=>$_smarty_tpl->tpl_vars['navItem']->value['url']),$_smarty_tpl);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
                            </p>
                        <?php } else { ?>
                            <p><a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a></p>
                        <?php }?>
                    <?php } ?>
                </div>
                <?php } ?>

                <div class="span2 tel_panel">
                    <p><span class="tel_icon"></span>客服热线</p>

                    <p><?php echo smarty_helper_function_get_option_value(array('optionKey'=>"kefu_telephone"),$_smarty_tpl);?>
</p>
                </div>

            </div>
        </div>
    </div>
    <!-- /底部，一堆关于我们的链接-->

    <!-- 商品分类，由 ajax 程序异步加载 -->
    <div class="row navsort">

    </div>
    <!-- /商品分类，由 ajax 程序异步加载 -->

    <!-- 页面右边悬浮框 -->
    <div id="bzf_right_float_panel" class="bzf_right_float_panel">

        <div id="bzf_right_float_kefu_block" class="bzf_right_float_panel_block">
            <span class="icon_kefu"></span>

            <div class="bzf_popover_html" style="display: none;">

                <!-- 客服信息 -->
                <div class="bzf_supplier_pane" style="width:216px;">
                    <div class="header">
                        商家信息
                    </div>
                    <div class="supplier_pane_content">
                        <div class="bzf_show">
                            <div class="supplier_info">
                                <p>商 户 名 ：<?php echo smarty_helper_function_get_option_value(array('optionKey'=>"merchant_name"),$_smarty_tpl);?>
</p>

                                <p>所 在 地 ：<?php echo smarty_helper_function_get_option_value(array('optionKey'=>"merchant_address"),$_smarty_tpl);?>
</p>

                                <p>客服电话：<?php echo smarty_helper_function_get_option_value(array('optionKey'=>"kefu_telephone"),$_smarty_tpl);?>
</p>

                                <p>客服 QQ：<?php echo smarty_helper_function_get_option_value(array('optionKey'=>"kefu_qq"),$_smarty_tpl);?>
</p>
                            </div>
                            <div class="divider"></div>
                            <div class="supplier_info" style="text-align: center;">
                                <p>周一至周五 10:00-19:00</p>
                                <a target="_blank"
                                   href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo smarty_helper_function_get_option_value(array('optionKey'=>"kefu_qq"),$_smarty_tpl);?>
&site=qq&menu=yes">
                                    <img border="0"
                                         src="http://wpa.qq.com/pa?p=2:<?php echo smarty_helper_function_get_option_value(array('optionKey'=>"kefu_qq"),$_smarty_tpl);?>
:41"
                                         alt="QQ在线客服"
                                         title="QQ在线客服"/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /客服信息 -->

            </div>

        </div>

        <div id="bzf_right_float_cart_block" class="bzf_right_float_panel_block">
            <span class="icon_cart"></span>
        </div>

        <div class="bzf_right_float_panel_block" onclick="jQuery(document).scrollTo('0px',800);">
            <span class="icon_back_to_top"></span>

            <div class="bzf_hide"
                 style="width:60px;font-weight: bold;text-align: center;line-height: 40px;">
                返回顶部
            </div>
        </div>
    </div>
    <!-- /页面右边悬浮框 -->

    <!-- 定义网站的起始路径，用于 JavaScript 的 Ajax 操作调用 -->
    <script type="text/javascript">
        var WEB_ROOT_HOST = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_HOST']->value, ENT_QUOTES, 'UTF-8');?>
';
        var WEB_ROOT_BASE = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_BASE']->value, ENT_QUOTES, 'UTF-8');?>
';
        var WEB_ROOT_BASE_RES = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_BASE_RES']->value, ENT_QUOTES, 'UTF-8');?>
';
        var BLANK_IMAGE_URL = '<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/blank.gif'),$_smarty_tpl);?>
';
    </script>

    <!-- 合并所有的 JS 文件, 使用 merge=false 参数关闭合并，这样可以对单个文件做调试 -->
    <?php echo smarty_helper_function_dump_merged_asset_js_url(array('asset'=>'bootstrap-custom/js/json2.js,
       bootstrap-custom/js/jquery-1.8.3.min.js,
       bootstrap-custom/js/jquery.cookie.js,
       bootstrap-custom/js/jstorage.min.js,
       bootstrap-custom/js/bootstrap.min.js,
       bootstrap-custom/js/bootstrap.ie.js,
       bootstrap-custom/js/validator.js,
       bootstrap-custom/plugin/cloud-zoom/cloud-zoom.1.0.3.js,
       bootstrap-custom/plugin/jcarousel/jquery.jcarousel.min.js,
       bootstrap-custom/plugin/smartspin/smartspinner.js,
       bootstrap-custom/plugin/stickyPanel/jquery.stickyPanel.min.js,
       bootstrap-custom/plugin/docktoright/docktoright.js,
       bootstrap-custom/plugin/scrollTo/jquery.scrollTo.min.js,
       bootstrap-custom/plugin/pnotify/jquery.pnotify.min.js,
       bootstrap-custom/plugin/quake-slider/js/quake.slider.js,
       bootstrap-custom/plugin/popover-extra/popover-extra-placements.js,
       bootstrap-custom/plugin/jrumble/jquery.jrumble.1.3.min.js,
       bootstrap-custom/plugin/purl/purl.js,
       bootstrap-custom/plugin/raty/jquery.raty.min.js,
       bootstrap-custom/plugin/treetable/js/jquery.treetable.js,
       bootstrap-custom/js/jquery.lazyload.js,
       js/dropdown_category.js,
       js/shop.js
'),$_smarty_tpl);?>

    <!-- /合并所有的 JS 文件, 使用 merge=false 参数关闭合并，这样可以对单个文件做调试 -->

    <!-- 这里是页面专用的 JS 代码 -->
    
    <!-- 这里是页面专用的 JS 代码 -->

    <!-- 底部，各种资格认证 -->
    <div class="container">
        <div class="row bzf_footer_credit_panel">
            <span><i class="bzf_icon_zhengping"></i>正品保证</span>
            <span><i class="bzf_icon_fahuo" style="width:51px;"></i>闪电发货</span>
            <span><i class="bzf_icon_qitian"></i>七天退换</span>
            <span><i class="bzf_icon_money" style="width:42px;height:42px;"></i>退款保障</span>
        </div>
        <div class="row bzf_footer_tail">

            <!-- 取得友链的数据 -->
            <?php echo smarty_helper_function_assign_option_value(array('optionKey'=>"friend_link_json_data",'decodeJson'=>"true"),$_smarty_tpl);?>

            <p><a target="_blank" href="http://www.bangzhufu.com">试客联盟商城</a> | <a target="_blank"
                                                                                 href="http://www.bzfshop.net">试客联盟</a><?php  $_smarty_tpl->tpl_vars['friendLink'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friendLink']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['friend_link_json_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friendLink']->key => $_smarty_tpl->tpl_vars['friendLink']->value) {
$_smarty_tpl->tpl_vars['friendLink']->_loop = true;
?><?php if (!empty($_smarty_tpl->tpl_vars['friendLink']->value['title'])) {?> |
                <a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['friendLink']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['friendLink']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a><?php }?><?php } ?></p>

            <p>试客联盟 版权所有 ©Copyright 2010-<?php echo htmlspecialchars(smarty_modifier_date_format(time(),"%Y"), ENT_QUOTES, 'UTF-8');?>
 All Rights Reserved</p>

            <p>ICP备案：<a target="_blank" href="http://www.miit.gov.cn/"><?php echo smarty_helper_function_get_option_value(array('optionKey'=>"icp"),$_smarty_tpl);?>
</a></p>

            <p><!-- 驱动 Cron 任务-->
                <img style="width:1px;height:1px;" src="<?php echo smarty_helper_function_make_url(array('controller'=>'/Cron/Run','static'=>false),$_smarty_tpl);?>
"/>
                <?php echo smarty_helper_function_get_option_value(array('optionKey'=>"statistics_code"),$_smarty_tpl);?>
 <!-- 统计代码 -->
            </p>
        </div>
    </div>
    <!-- /底部，各种资格认证 -->

</body>
</html><?php }} ?>
