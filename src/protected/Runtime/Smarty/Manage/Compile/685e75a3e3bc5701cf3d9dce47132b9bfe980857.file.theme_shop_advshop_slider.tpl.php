<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-23 11:01:01
         compiled from "/Users/fubendong/Sites/bzfshop/src/protected/Theme/Shop/manage/Tpl/theme_shop_advshop_slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103156282353f803ed91fee6-52122167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '685e75a3e3bc5701cf3d9dce47132b9bfe980857' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/protected/Theme/Shop/manage/Tpl/theme_shop_advshop_slider.tpl',
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
  'nocache_hash' => '103156282353f803ed91fee6-52122167',
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
  'unifunc' => 'content_53f803ed9b6488_58322133',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f803ed9b6488_58322133')) {function content_53f803ed9b6488_58322133($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/fubendong/Sites/bzfshop/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
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
            $("#theme_shop_advindex_left_tabbar li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Theme/Shop/AdvShopSlider'),$_smarty_tpl);?>
'])").addClass("active");
        });

        window.bz_set_breadcrumb_status.push({index: 2, text: '滑动图片', link: window.location.href});
    </script>
    <div class="row">


        <form class="form-horizontal form-horizontal-inline" method="POST" style="margin: 0px 0px 0px 0px;">

            <!-- 左侧每个标签的具体内容 -->
            <div class="tab-content">

                <!-- 广告设置 -->
                <div class="tab-pane well active">

                    <!-- 分割条 -->
                    <div class="row inline-divider">
                        <div class="divider"></div>
                        <label class="label label-info">顶部轮换图片</label>
                    </div>
                    <!-- /分割条 -->

                    <button id="theme_shop_slider_image_upload_button"
                            class="btn btn-small btn-success" type="button">上传图片
                    </button>
                    <span>图片尺寸 780x350 </span>

                    <!-- 图片列表 -->
                    <div id="theme_shop_slider_image_list" class="row">

                        <?php  $_smarty_tpl->tpl_vars['sliderItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sliderItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shop_index_adv_slider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sliderItem']->key => $_smarty_tpl->tpl_vars['sliderItem']->value) {
$_smarty_tpl->tpl_vars['sliderItem']->_loop = true;
?>
                            <div class="row theme_shop_slider_image_container">
                                <div class="span8 theme_shop_slider_image_wrapper">
                                    <a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sliderItem']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sliderItem']->value['image'], ENT_QUOTES, 'UTF-8');?>
"/>
                                    </a>
                                    <input type="hidden" name="image[]"
                                           value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sliderItem']->value['image'], ENT_QUOTES, 'UTF-8');?>
"/>
                                    <input type="hidden" name="url[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sliderItem']->value['url'], ENT_QUOTES, 'UTF-8');?>
"/>
                                    <input type="hidden" name="target[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sliderItem']->value['target'], ENT_QUOTES, 'UTF-8');?>
"/>
                                </div>
                                <div class="span1 theme_shop_slider_image_toolbar">
                                    <button type="button" class="btn btn-mini btn-info"
                                            onclick="bZF.moveNodePrev(this.parentNode.parentNode);return false;">
                                        <i class="icon-arrow-up"></i>
                                    </button>
                                    <button type="button" class="btn btn-mini btn-danger"
                                            onclick="bZF.removeNode(this.parentNode.parentNode);return false;">
                                        <i class="icon-remove"></i>
                                    </button>
                                    <button type="button"
                                            class="btn btn-mini btn-success theme_shop_slide_image_property_button"
                                            onclick="bZF.themeShop.open_slider_image_property_modal(this.parentNode.parentNode);return false;">
                                        <i class="icon-info-sign"></i>
                                    </button>
                                    <button type="button" class="btn btn-mini btn-info"
                                            onclick="bZF.moveNodeNext(this.parentNode.parentNode);return false;">
                                        <i class="icon-arrow-down"></i>
                                    </button>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                    <!-- 图片列表 -->

                </div>
                <!-- /广告设置 -->

            </div>
            <!-- /左侧每个标签的具体内容 -->

            <!-- 提交按钮 -->
            <div class="row" style="text-align: center;">
                <button type="submit" class="btn btn-success">确认提交</button>
            </div>
            <!-- /提交按钮 -->

        </form>

        <!-- 用于增加图片时候 clone -->
        <div id="theme_shop_slider_image_container_clone" class="row theme_shop_slider_image_container">
            <div class="span8 theme_shop_slider_image_wrapper">
                <a target="_blank" href="#">
                    <img src="<?php echo theme_shop_smarty_helper_function_get_asset_url(array('asset'=>'img/placeholder_780x350_gray.gif'),$_smarty_tpl);?>
"/>
                </a>
                <input type="hidden" name="image[]"
                       value="<?php echo theme_shop_smarty_helper_function_get_asset_url(array('asset'=>'img/placeholder_780x350_gray.gif'),$_smarty_tpl);?>
"/>
                <input type="hidden" name="url[]" value="#"/>
                <input type="hidden" name="target[]" value="_blank"/>
            </div>
            <div class="span1 theme_shop_slider_image_toolbar">
                <button type="button" class="btn btn-mini btn-info"
                        onclick="bZF.moveNodePrev(this.parentNode.parentNode);return false;">
                    <i class="icon-arrow-up"></i>
                </button>
                <button type="button" class="btn btn-mini btn-danger"
                        onclick="bZF.removeNode(this.parentNode.parentNode);return false;">
                    <i class="icon-remove"></i>
                </button>
                <button type="button"
                        class="btn btn-mini btn-success theme_shop_slide_image_property_button"
                        onclick="bZF.themeShop.open_slider_image_property_modal(this.parentNode.parentNode);return false;">
                    <i class="icon-info-sign"></i>
                </button>
                <button type="button" class="btn btn-mini btn-info"
                        onclick="bZF.moveNodeNext(this.parentNode.parentNode);return false;">
                    <i class="icon-arrow-down"></i>
                </button>
            </div>
        </div>
        <!-- /用于增加图片时候 clone -->

        <!-- slide image 属性设置 -->
        <div id="theme_shop_slider_image_property_modal"
             class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">广告属性</h3>
            </div>
            <div class="modal-body">

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
                        onclick="bZF.themeShop.confirm_slider_image_property_modal();return false;">
                    保存
                </button>
            </div>
        </div>
        <!-- /slide image 属性设置 -->

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
