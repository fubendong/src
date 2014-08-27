<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-25 20:24:34
         compiled from "/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Manage/Tpl/goods_edit_gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61373827053f8aaebb1fd85-72403635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68158d01782413591dbc5b8db7f8641c49924993' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Manage/Tpl/goods_edit_gallery.tpl',
      1 => 1408786193,
      2 => 'file',
    ),
    '137682ea6b582b3dd5d856cd30bf9864e0edf39e' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Manage/Tpl/goods_edit_layout.tpl',
      1 => 1408786193,
      2 => 'file',
    ),
    '935aeaa5e01643fd6d6d35954cfe272bf38a31c6' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Manage/Tpl/goods_layout.tpl',
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
  'nocache_hash' => '61373827053f8aaebb1fd85-72403635',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53f8aaebbcc4e5_92664496',
  'variables' => 
  array (
    'DEBUG' => 0,
    'authAdminUser' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f8aaebbcc4e5_92664496')) {function content_53f8aaebbcc4e5_92664496($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/fubendong/Sites/bzfshop/src/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
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
            $("#goods_edit_tab_left li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Edit/Gallery','goods_id'=>$_smarty_tpl->tpl_vars['goods_id']->value),$_smarty_tpl);?>
'])").addClass("active");
        });
        window.bz_set_breadcrumb_status.push({index: 2, text: '商品相册', link: window.location.href});
    </script>
    <!-- 左侧每个标签的具体内容 -->
    <div class="tab-content">
        <div class="tab-pane well active">

            <!-- 商品图片集展示 -->
            <div id="goods_edit_gallery_panel" class="row" data-toggle="modal-gallery"
                 data-target="#modal-gallery" data-selector="div.gallery-item">
                <h6>&nbsp;&nbsp;注：建议原始图片大小为 800x800 兼容淘宝、天猫的图片尺寸</h6>
                <h6>&nbsp;&nbsp;注：商品图片3个尺寸，原始图 800x800，头图 460x460，缩略图 300x300</h6>

                <!-- 图片上传 -->
                <div class="row">
                    <button id="goods_edit_gallery_upload_image_batch" class="btn btn-success"
                            style="margin-left: 10px;">批量上传图片
                    </button>

                    <form id="goods_edit_gallery_fetch_image_form" class="form-inline pull-right"
                          style="display:inline-block;" method="POST"
                          action="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Edit/Gallery/Fetch'),$_smarty_tpl);?>
">

                        <input type="hidden" id="goods_edit_gallery_upload_image_batch_goodsid" name="goods_id"
                               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goods_id']->value, ENT_QUOTES, 'UTF-8');?>
"/>

                        <div class="control-group operate-panel" style="margin-top: 5px;">
                            <div class="controls">
                                <label class="label label-info">网络图片地址</label>
                                <input type="text" class="span5" name="imageUrl" rel="tooltip" data-placement="top"
                                       data-title="请输入以 http:// 开头的绝对地址"
                                       data-validation-required-message="网络地址不能为空"/>
                                <button type="button" class="btn btn-primary"
                                        onclick="this.disabled=true;jQuery('#goods_edit_gallery_fetch_image_form').submit();">
                                    从网络抓取
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
                <!-- 图片上传 -->

                <?php if (isset($_smarty_tpl->tpl_vars['goodsGalleryArray']->value)) {?>
                    <?php  $_smarty_tpl->tpl_vars['goodsGalleryItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goodsGalleryItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goodsGalleryArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goodsGalleryItem']->key => $_smarty_tpl->tpl_vars['goodsGalleryItem']->value) {
$_smarty_tpl->tpl_vars['goodsGalleryItem']->_loop = true;
?>

                        <!-- 一张图片 -->
                        <div class="span2 thumbnail gallery-item">
                            <!-- 图片 -->
                            <div class="image-container">
                                <a rel="prettyPhoto[gallery]"
                                   href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsGalleryItem']->value['img_original'], ENT_QUOTES, 'UTF-8');?>
">
                                    <img class="lazyload" width="196"
                                         src="<?php echo smarty_helper_get_asset_url(array('asset'=>'img/blank.gif'),$_smarty_tpl);?>
"
                                         alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsGalleryItem']->value['img_desc'], ENT_QUOTES, 'UTF-8');?>
"
                                         data-original="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsGalleryItem']->value['thumb_url'], ENT_QUOTES, 'UTF-8');?>
"/>
                                </a>
                            </div>

                            <!-- 操作区 -->
                            <form method="POST" action="Gallery/Update">
                                <div class="control-group operate-panel" style="margin-top: 5px;">
                                    <div class="controls">
                                        <input type="hidden" name="img_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsGalleryItem']->value['img_id'], ENT_QUOTES, 'UTF-8');?>
"/>
                                        <input class="span2" type="text" rel="tooltip" data-placement="top"
                                               name="img_desc"
                                               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsGalleryItem']->value['img_desc'], ENT_QUOTES, 'UTF-8');?>
"
                                               data-title="图片的描述信息"/>
                                        <input type="text" class="image-sort-order" rel="tooltip" data-placement="top"
                                               pattern="[0-9]+"
                                               data-validation-pattern-message="排序必须是数字"
                                               name="img_sort_order"
                                               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsGalleryItem']->value['img_sort_order'], ENT_QUOTES, 'UTF-8');?>
"
                                               data-title="图片的排序，数字越大排序越前"/>
                                        <button type="submit" class="btn btn-mini btn-success">提交修改
                                        </button>
                                        <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Edit/Gallery/Remove','img_id'=>$_smarty_tpl->tpl_vars['goodsGalleryItem']->value['img_id']),$_smarty_tpl);?>
"
                                           onclick="return confirm('你确定要删除图片吗？')"
                                           class="btn btn-mini btn-danger">删除图片</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /一张图片 -->

                    <?php } ?>
                <?php }?>

            </div>

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

            /*********** goods_edit_gallery.tpl  商品编辑页面，商品相册批量上传图片 ***********/
            bZF.loadKindEditorTheme();

            $('#goods_edit_gallery_upload_image_batch').click(function () {
                var editor = KindEditor.editor({
                    allowFileManager: true,
                    formatUploadUrl: false,
                    uploadJson: bZF.makeUrl('/Goods/Edit/Gallery/Upload'),
                    extraFileUploadParams: {
                        bzfshop_auth_cookie_key: $.cookie(WEB_COOKIE_AUTH_KEY),
                        goods_id: $('#goods_edit_gallery_upload_image_batch_goodsid').val()
                    }
                });
                editor.loadPlugin('multiimage', function () {
                    editor.plugin.multiImageDialog({
                        clickFn: function (urlList) {
                            //刷新整个页面
                            document.location.reload();
                            editor.hideDialog();
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
</html>
<?php }} ?>
