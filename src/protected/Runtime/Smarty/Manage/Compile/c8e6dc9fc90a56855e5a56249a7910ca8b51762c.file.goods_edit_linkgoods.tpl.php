<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-23 00:38:34
         compiled from "/Users/fubendong/Sites/bzfshop/src/protected/Theme/Manage/Tpl/goods_edit_linkgoods.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5945738153f7720aeebed2-40127815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8e6dc9fc90a56855e5a56249a7910ca8b51762c' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/protected/Theme/Manage/Tpl/goods_edit_linkgoods.tpl',
      1 => 1408717013,
      2 => 'file',
    ),
    '84d821e6cff85d0bfe7db6b7ea81925965c8f8f3' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/protected/Theme/Manage/Tpl/goods_edit_layout.tpl',
      1 => 1408717013,
      2 => 'file',
    ),
    'd100573e6d88a656cdff96ef6dfb41cd425f4ec6' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/protected/Theme/Manage/Tpl/goods_layout.tpl',
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
  'nocache_hash' => '5945738153f7720aeebed2-40127815',
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
  'unifunc' => 'content_53f7720b04b0c6_08433485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f7720b04b0c6_08433485')) {function content_53f7720b04b0c6_08433485($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/fubendong/Sites/bzfshop/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
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
            $("#system_top_navbar li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Index'),$_smarty_tpl);?>
'])").addClass("active");
        });
    </script>
    <div class="row bz_basic_content_block bz_box_shadow" style="padding:10px 10px 10px 10px;">

        <!-- 页面上方导航条 -->
        <div class="row">
            <ul id="goods_tabbar" class="nav nav-tabs">
                <li>
                    <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Search'),$_smarty_tpl);?>
">商品列表</a>
                </li>
                <li>
                    <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Create'),$_smarty_tpl);?>
">新建商品</a>
                </li>
                <li>
                    <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Category'),$_smarty_tpl);?>
">商品分类</a>
                </li>
                <li>
                    <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Brand/ListBrand'),$_smarty_tpl);?>
">商品品牌</a>
                </li>
                <li>
                    <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Type/ListType'),$_smarty_tpl);?>
">商品类型</a>
                </li>
                <li>
                    <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Comment/ListComment'),$_smarty_tpl);?>
">用户评价</a>
                </li>
            </ul>
        </div>
        <!-- /页面上方导航条 -->

        <!-- 商品管理主体内容 -->
        

    <!-- 用 JS 设置页面的导航菜单 -->
    <script type="text/javascript">
        window.bz_set_nav_status.push(function ($) {
            $("#goods_tabbar li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Search'),$_smarty_tpl);?>
'])").addClass("active");
        });
    </script>
    <!-- 商品编辑页面主体内容 -->
    <div class="tabbable tabs-left">

        <!-- 编辑页面左侧标签导航 -->
        <ul id="goods_edit_tab_left" class="nav nav-tabs">
            <li class=""><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Edit/Edit','goods_id'=>$_smarty_tpl->tpl_vars['goods_id']->value),$_smarty_tpl);?>
">商品信息</a></li>
            <li class=""><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Edit/Gallery','goods_id'=>$_smarty_tpl->tpl_vars['goods_id']->value),$_smarty_tpl);?>
">商品相册</a></li>
            <li class=""><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Edit/Spec','goods_id'=>$_smarty_tpl->tpl_vars['goods_id']->value),$_smarty_tpl);?>
">商品规格</a></li>
            <li class=""><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Edit/Type','goods_id'=>$_smarty_tpl->tpl_vars['goods_id']->value),$_smarty_tpl);?>
">类型属性</a></li>
            <li class=""><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Edit/LinkGoods','goods_id'=>$_smarty_tpl->tpl_vars['goods_id']->value),$_smarty_tpl);?>
">关联商品</a></li>
            <li class=""><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Edit/Promote','goods_id'=>$_smarty_tpl->tpl_vars['goods_id']->value),$_smarty_tpl);?>
">推广渠道</a></li>
            <li class=""><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Edit/Log','goods_id'=>$_smarty_tpl->tpl_vars['goods_id']->value),$_smarty_tpl);?>
">编辑日志</a></li>
            <li class=""><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Edit/Cron','goods_id'=>$_smarty_tpl->tpl_vars['goods_id']->value),$_smarty_tpl);?>
">定时任务</a></li>
        </ul>
        <!-- /编辑页面左侧标签导航 -->

        <!-- 商品不同编辑项目的页面 -->
        

    <!-- 用 JS 设置商品编辑页面左侧不同的 Tab 选中状态 -->
    <script type="text/javascript">
        window.bz_set_nav_status.push(function ($) {
            $("#goods_edit_tab_left li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Edit/LinkGoods','goods_id'=>$_smarty_tpl->tpl_vars['goods_id']->value),$_smarty_tpl);?>
'])").addClass("active");
        });
        window.bz_set_breadcrumb_status.push({index: 2, text: '关联商品', link: window.location.href});
    </script>
    <!-- 左侧每个标签的具体内容 -->
    <div class="tab-content">
        <div class="tab-pane active">

            <!-- 关联商品操作 -->
            <div class="row">

                <!-- 这里是条件筛选区 -->
                <div class="row well well-small">
                    <form class="form-horizontal form-horizontal-inline" style="margin: 0px 0px 0px 0px;">
                        <div class="control-group">
                            <div class="controls">

                                <span class="input-label">商品ID</span>
                                <input id="goods_edit_linkgoods_goods_id" class="span2" type="text" pattern="[0-9]*"
                                       data-validation-pattern-message="商品ID应该是全数字"/>
                                <span class="input-label">商品名称</span>
                                <input id="goods_edit_linkgoods_goods_name" class="span4" type="text"/>

                            </div>
                        </div>

                        <div class="control-group">
                            <div class="controls" style="padding-top:8px;">

                                <span class="input-label">选择状态</span>
                                <select id="goods_edit_linkgoods_is_on_sale"
                                        class="span2 select2-simple" name="is_on_sale" data-placeholder="商品状态">
                                    <option value=""></option>
                                    <option value="1">销售中</option>
                                    <option value="0">已下线</option>
                                </select>

                                <span class="input-label">选择供货商</span>
                                <select id="goods_edit_linkgoods_suppliers_id"
                                        class="span2 select2-simple" data-placeholder="供货商列表"
                                        data-ajaxCallUrl="<?php echo smarty_helper_function_make_url(array('controller'=>"/Ajax/Supplier/ListSupplierIdName"),$_smarty_tpl);?>
"
                                        data-option-value-key="suppliers_id" data-option-text-key="suppliers_name">
                                    <option value=""></option>
                                </select>

                            </div>
                        </div>

                        <div class="control-group">
                            <div class="controls" style="padding-top:8px;">
                                <span class="input-label">商品分类</span>
                                <!-- 商品分类有可能层级很长 -->
                                <select id="goods_edit_linkgoods_cat_id"
                                        class="span7 select2-simple" name="cat_id"
                                        data-placeholder="选择商品分类"
                                        data-ajaxCallUrl="<?php echo smarty_helper_function_make_url(array('controller'=>"/Ajax/Goods/ListCategoryTree"),$_smarty_tpl);?>
"
                                        data-option-value-key="meta_id" data-option-text-key="meta_name">
                                    <option value=""></option>
                                </select>

                            </div>
                        </div>

                        <div class="control-group">
                            <div class="controls">
                                <button id="goods_edit_linkgoods_filter_goods_button" type="button"
                                        class="btn btn-success">筛选商品
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /这里是条件筛选区 -->

                <input type="hidden" id="goods_edit_linkgoods_current_goods_id" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods_id']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>

                <!-- 筛选出来的商品在这里展示 -->
                <h5>从这里选择商品</h5>
                <select class="span10" id="goods_edit_linkgoods_filter_goods_list" multiple="multiple"
                        style="height: 250px;">
                    <option>请先从上面筛选商品</option>
                </select>
                <!-- /筛选出来的商品在这里展示 -->

                <!-- 操作按钮 -->
                <div class="row" style="text-align: center;">
                    <button id="goods_edit_linkgoods_add_link_goods_button" class="btn btn-success" type="button">添加关联
                    </button>
                    <button id="goods_edit_linkgoods_remove_link_goods_button" class="btn btn-danger" type="button">
                        取消关联
                    </button>
                </div>
                <!-- /操作按钮 -->

            </div>
            <!-- /关联商品操作 -->

            <!-- 已经关联的商品在这里展示 -->
            <h5>我关联了这些商品</h5>
            <select class="span10" id="goods_edit_linkgoods_link_goods_list" multiple="multiple"
                    style="height: 250px;">
                <option>数据加载中...</option>
            </select>
            <!-- /已经关联的商品在这里展示  -->


            <!-- 被别的商品关联了在这里展示 -->
            <h5>我“被”别的商品关联</h5>
            <select class="span10" id="goods_edit_linkgoods_link_by_goods_list" multiple="multiple"
                    style="height: 250px;">
                <option>数据加载中...</option>
            </select>
            <!-- /被别的商品关联了在这里展示  -->


            <!-- 操作按钮 -->
            <div class="row" style="text-align: center;">
                <button id="goods_edit_linkgoods_remove_link_by_goods_button" class="btn btn-danger" type="button">
                    取消 "被" 关联
                </button>
            </div>
            <!-- /操作按钮 -->


        </div>
        <!-- /左侧每个标签的具体内容 -->

    </div>
    <!-- /商品编辑页面主体内容 -->


        <!-- /商品不同编辑项目的页面 -->

    </div>
    <!-- /商品编辑页面主体内容 -->


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

    <script type="text/javascript">
    /**
     * 这里的代码等 document.ready 才执行
     */
    jQuery((function (window, $) {

        /********************** goods_edit_linkgoods.tpl 根据条件筛选商品列表 *************************/
        $('#goods_edit_linkgoods_filter_goods_button').on('click', function () {
            // 根据用户选择的条件筛选商品
            var goods_id = $('#goods_edit_linkgoods_goods_id').val();
            var goods_name = $('#goods_edit_linkgoods_goods_name').val();
            var is_on_sale = $('#goods_edit_linkgoods_is_on_sale').find('option:selected').val();
            var suppliers_id = $('#goods_edit_linkgoods_suppliers_id').find('option:selected').val();
            var cat_id = $('#goods_edit_linkgoods_cat_id').find('option:selected').val();

            // 构造调用链接
            var callUrl = bZF.makeUrl('/Ajax/Goods/Search'
                    + '?goods_id=' + goods_id
                    + '&goods_name=' + encodeURI(goods_name)
                    + '&is_on_sale=' + is_on_sale
                    + '&suppliers_id=' + suppliers_id
                    + '&cat_id=' + cat_id);

            // ajax  调用
            bZF.ajaxCallGet(callUrl, function (data) {
                if (!data) {
                    bZF.showMessage('没有商品列表');
                    return;
                }

                var goodsArray = data;
                // 设置 goods_edit_linkgoods_filter_goods_list 的数据
                var optionHtml = '';
                $.each(goodsArray, function (index, elem) {
                    optionHtml += '<option value="' + elem.goods_id + '">(' + elem.goods_id + ')'
                            + elem.goods_name + '</option>';
                });
                $('#goods_edit_linkgoods_filter_goods_list').html(optionHtml);
            });
        });

        /**
         * goods_edit_linkgoods.tpl
         *
         *  取得商品的关联商品并且展示
         *
         * @param goods_id
         */
        bZF.goods_edit_linkgoods_ajaxlistlinkgoods = function (goods_id) {
            // 构造调用链接
            var callUrl = bZF.makeUrl('/Goods/Edit/LinkGoods/ajaxListLinkGoods'
                    + '?goods_id=' + goods_id);

            // ajax  调用
            bZF.ajaxCallGet(callUrl, function (data) {
                if (!data) {
                    $('#goods_edit_linkgoods_link_goods_list').html('');
                    return;
                }

                var goodsArray = data;
                // 设置 goods_edit_linkgoods_filter_goods_list 的数据
                var optionHtml = '';
                $.each(goodsArray, function (index, elem) {
                    optionHtml += '<option value="' + elem.link_id + '">(' + elem.goods_id + ')' + elem.goods_name + '</option>';
                });
                $('#goods_edit_linkgoods_link_goods_list').html(optionHtml);
            });
        };

        // 页面加载的时候自动列出关联商品列表
        if ($('#goods_edit_linkgoods_link_goods_list').size() > 0) {
            bZF.goods_edit_linkgoods_ajaxlistlinkgoods($('#goods_edit_linkgoods_current_goods_id').val());
        }

        /**
         * goods_edit_linkgoods.tpl
         *
         *  取得商品被谁关联
         *
         * @param link_goods_id
         */
        bZF.goods_edit_linkgoods_ajaxlistlinkbygoods = function (link_goods_id) {
            // 构造调用链接
            var callUrl = bZF.makeUrl('/Goods/Edit/LinkGoods/ajaxListLinkByGoods'
                    + '?link_goods_id=' + link_goods_id);

            // ajax  调用
            bZF.ajaxCallGet(callUrl, function (data) {
                if (!data) {
                    $('#goods_edit_linkgoods_link_by_goods_list').html('');
                    return;
                }

                var goodsArray = data;
                // 设置 goods_edit_linkgoods_filter_goods_list 的数据
                var optionHtml = '';
                $.each(goodsArray, function (index, elem) {
                    optionHtml += '<option value="' + elem.link_id + '">(' + elem.goods_id + ')' + elem.goods_name + '</option>';
                });
                $('#goods_edit_linkgoods_link_by_goods_list').html(optionHtml);
            });
        };

        // 页面加载的时候自动列出被关联商品列表
        if ($('#goods_edit_linkgoods_link_by_goods_list').size() > 0) {
            bZF.goods_edit_linkgoods_ajaxlistlinkbygoods($('#goods_edit_linkgoods_current_goods_id').val());
        }

        /********* goods_edit_linkgoods.tpl 取消商品关联 *********/
        $('#goods_edit_linkgoods_remove_link_goods_button').on('click', function () {

            // 对每个选中的商品依次处理
            var totalCount = $('#goods_edit_linkgoods_link_goods_list').find('option:selected').size();

            $('#goods_edit_linkgoods_link_goods_list').find('option:selected').each(function (index, elem) {

                var linkId = parseInt($(elem).val());

                if (isNaN(linkId)) {
                    bZF.showMessage('请先选择一个已经关联的商品');
                    return;
                }

                var callUrl = bZF.makeUrl('/Goods/Edit/LinkGoods/ajaxRemoveLink'
                        + '?link_id=' + linkId);

                // ajax  调用
                bZF.ajaxCallGet(callUrl, function (data) {
                    // 最后一个商品了
                    if (index == totalCount - 1) {
                        // 刷新商品关联列表
                        bZF.goods_edit_linkgoods_ajaxlistlinkgoods($('#goods_edit_linkgoods_current_goods_id').val());
                    }
                });
            });

        });

        /********* goods_edit_linkgoods.tpl 取消商品 "被" 关联 *********/
        $('#goods_edit_linkgoods_remove_link_by_goods_button').on('click', function () {

            // 对每个选中的商品依次处理
            var totalCount = $('#goods_edit_linkgoods_link_by_goods_list').find('option:selected').size();

            $('#goods_edit_linkgoods_link_by_goods_list').find('option:selected').each(function (index, elem) {

                var linkId = parseInt($(elem).val());

                if (isNaN(linkId)) {
                    bZF.showMessage('请先选择一个已经关联的商品');
                    return;
                }

                var callUrl = bZF.makeUrl('/Goods/Edit/LinkGoods/ajaxRemoveLink'
                        + '?link_id=' + linkId);

                // ajax  调用
                bZF.ajaxCallGet(callUrl, function (data) {
                    // 最后一个商品了
                    if (index == totalCount - 1) {
                        // 刷新商品关联列表
                        bZF.goods_edit_linkgoods_ajaxlistlinkbygoods($('#goods_edit_linkgoods_current_goods_id').val());
                    }
                });

            });

        });

        /********* goods_edit_linkgoods.tpl 添加商品关联 *********/
        $('#goods_edit_linkgoods_add_link_goods_button').on('click', function () {

            // 对每个选中的商品依次处理
            var totalCount = $('#goods_edit_linkgoods_filter_goods_list').find('option:selected').size();
            var currentGoodsId = $('#goods_edit_linkgoods_current_goods_id').val();

            $('#goods_edit_linkgoods_filter_goods_list').find('option:selected').each(function (index, elem) {

                var linkGoodsId = parseInt($(elem).val());

                if (isNaN(linkGoodsId)) {
                    bZF.showMessage('请先选择一个商品');
                    return;
                }

                var callUrl = bZF.makeUrl('/Goods/Edit/LinkGoods/ajaxAddLink'
                        + '?goods_id=' + currentGoodsId + '&link_goods_id=' + linkGoodsId);

                // ajax 调用
                bZF.ajaxCallGet(callUrl, function (data) {
                    // 最后一个商品了
                    if (index == totalCount - 1) {
                        // 刷新商品关联列表
                        bZF.goods_edit_linkgoods_ajaxlistlinkgoods(currentGoodsId);
                    }
                });
            });

        });

    })(window, jQuery));
    </script>

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
