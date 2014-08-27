<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-23 00:38:36
         compiled from "/Users/fubendong/Sites/bzfshop/src/protected/Theme/Manage/Tpl/goods_edit_promote.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33644753153f7720c207404-65558648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e70860ae511e0f7ce0a4ac18a550a9cf50bf69d5' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/protected/Theme/Manage/Tpl/goods_edit_promote.tpl',
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
  'nocache_hash' => '33644753153f7720c207404-65558648',
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
  'unifunc' => 'content_53f7720c2be2b5_05046709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f7720c2be2b5_05046709')) {function content_53f7720c2be2b5_05046709($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/fubendong/Sites/bzfshop/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
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
            $("#goods_edit_tab_left li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Edit/Promote','goods_id'=>$_smarty_tpl->tpl_vars['goods_id']->value),$_smarty_tpl);?>
'])").addClass("active");
        });
        window.bz_set_breadcrumb_status.push({index: 2, text: '推广渠道', link: window.location.href});
    </script>
    <form class="form-horizontal form-horizontal-inline form-dirty-check" method="POST"
          style="margin: 0px 0px 0px 0px;">

        <!-- 左侧每个标签的具体内容 -->
        <div class="tab-content">

            <!-- 商品的推广设置 -->
            <div id="goods_edit_goods_promote" class="tab-pane well active">

                <!-- 分割条 -->
                <div class="row inline-divider">
                    <div class="divider"></div>
                    <label class="label label-info">360团购导航</label>
                </div>
                <!-- /分割条 -->

                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">商品头图</span>
                        <!-- 一张图片 -->
                        <div class="thumbnail gallery-item" style="float:left;width:300px;">
                            <!-- 图片 -->
                            <div class="image-container">
                                <img id="goods_edit_promote_upload_360tuan_image"
                                     class="lazyload" width="300" height="180" style="width:300px;height:180px;"
                                     src="<?php echo smarty_helper_get_asset_url(array('asset'=>'img/blank.gif'),$_smarty_tpl);?>
"
                                     data-original="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods_promote']->value['360tuan_image'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                            </div>
                        </div>
                        <!-- /一张图片 -->
                        <input id="goods_edit_promote_upload_360tuan_image_input"
                               name="goods_promote[360tuan_image]" type="hidden"
                               value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods_promote']->value['360tuan_image'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                        &nbsp;&nbsp;
                        <button id="goods_edit_promote_upload_360tuan_image_button" type="button"
                                class="btn btn-small btn-success">上传图片
                        </button>
                        <span class="comments">图片尺寸为 300x180</span>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
            <span class="input-label" rel="tooltip" data-placement="top"
                  data-title="360团购导航API中的一级分类">一级分类</span>
                        <select id="goods_edit_360tuan_category_1" class="span2 select2-simple"
                                name="goods_promote[360tuan_category]"
                                data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods_promote']->value['360tuan_category'])===null||$tmp==='' ? '网上购物' : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                        </select>

            <span class="input-label" rel="tooltip" data-placement="top"
                  data-title="360团购导航API中的子分类，尽量选择到最后一级分类">细分分类</span>
                        <select id="goods_edit_360tuan_category_2" class="span6 select2-simple"
                                name="goods_promote[360tuan_category_end]"
                                data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods_promote']->value['360tuan_category_end'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">商品feature</span>
                        <input class="span6" name="goods_promote[360tuan_feature]" type="text"
                               value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods_promote']->value['360tuan_feature'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                        <span class="comments">关键词之间用 1 个空格分隔，空格不要多了</span>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
            <span class="input-label" rel="tooltip" data-placement="top"
                  data-title="输出商品的排序，数字越大排序越前">商品排序</span>
                        <input class="span1" name="goods_promote[360tuan_sort_order]" type="text" pattern="[0-9]+"
                               value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods_promote']->value['360tuan_sort_order'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                               data-validation-pattern-message="商品排序无效"/>
                        <span class="comments">数字越大排序越前</span>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">Pin图列表</span>
                        <textarea class="span6" rows="5"
                                  name="goods_promote[360tuan_pin_images]"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods_promote']->value['360tuan_pin_images'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</textarea>
                        <span class="comments">每行一个图片URL地址，请使用绝对地址</span>
                    </div>
                </div>

            </div>
            <!-- /商品的推广设置 -->

        </div>
        <!-- /左侧每个标签的具体内容 -->


        <!-- 提交按钮 -->
        <div class="row" style="text-align: center;">
            <button type="submit" class="btn btn-success">确认提交</button>
        </div>
        <!-- /提交按钮 -->

    </form>

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

            /*********** goods_edit_promote.tpl  商品推广渠道编辑页面，360团购导航商品图片 ***********/
            bZF.uploadGoodsPromoteImage('#goods_edit_promote_upload_360tuan_image_button',
                    function (clickObject, url, title, width, height, border, align) {
                        $('#goods_edit_promote_upload_360tuan_image').attr('src', url);
                        $('#goods_edit_promote_upload_360tuan_image_input').val(url);
                    });

            /************* goods_edit_promote.tpl 商品编辑推广渠道页面，用户选择 360团购 的分类 ********************/
            $('#goods_edit_360tuan_category_1').each(function () {
                var _360tuanCategoryJson = '';

                // Ajax 调用取得 360 的分类数据
                var callUrl = bZF.makeUrl('/Ajax/Proxy/Json?cache=3600&url=' + encodeURI('http://api.tuan.360.cn/open_category.php?format=json'));
                bZF.ajaxCallGet(callUrl, function (data) {
                    if (!data) {
                        bZF.showMessage('无法取得360团购商品分类');
                        return;
                    }

                    _360tuanCategoryJson = data;
                    // 设置 360tuan_cateogry_1 的数据
                    var category1Html = '';
                    $.each(_360tuanCategoryJson, function (index, elem) {
                        category1Html += '<option value="' + elem.name + '">' + elem.name + '</option>';
                    });
                    $('#goods_edit_360tuan_category_1').html(category1Html);

                    //处理初始值
                    $('#goods_edit_360tuan_category_1').select2('val', $('#goods_edit_360tuan_category_1').attr('data-initValue'));
                    //设置 Category 2
                    goods_edit_360tuan_update_category_2($('#goods_edit_360tuan_category_1').find('option:selected').val());
                    //设置 Category 2 的初始值
                    $('#goods_edit_360tuan_category_2').select2('val', $('#goods_edit_360tuan_category_2').attr('data-initValue'));
                });

                function goods_edit_360tuan_update_category_2(category1) {

                    function getCategoryHtml(optionsArray, prefix, elem) {
                        $.each(elem, function (elemIndex, elemItem) {
                            var optionItem = {};
                            optionItem.value = elemItem.name;
                            optionItem.text = prefix + elemItem.name;
                            optionsArray.push(optionItem);
                            if (elemItem.sons) {
                                getCategoryHtml(optionsArray, prefix + "---------->", elemItem.sons);
                            }
                        })
                    };

                    $.each(_360tuanCategoryJson, function (index, elem) {
                        if (elem.name != category1) {
                            return;
                        }
                        // 显示下面的分类数据
                        var optionsArray = [];
                        var category2Html = '';

                        getCategoryHtml(optionsArray, '', elem.sons);

                        $.each(optionsArray, function (optionIndex, optionItem) {
                            category2Html += '<option value="' + optionItem.value + '">' + optionItem.text + '</option>';
                        });
                        $('#goods_edit_360tuan_category_2').html(category2Html);
                    });
                };

                // 消息处理
                $('#goods_edit_360tuan_category_1').change(function () {
                    goods_edit_360tuan_update_category_2($('#goods_edit_360tuan_category_1').find('option:selected').val());
                    $('#goods_edit_360tuan_category_2').select2('val', null);
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
