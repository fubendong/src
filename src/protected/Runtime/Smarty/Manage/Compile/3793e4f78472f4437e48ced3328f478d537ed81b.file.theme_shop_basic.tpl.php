<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-23 10:59:34
         compiled from "/Users/fubendong/Sites/bzfshop/src/protected/Theme/Shop/manage/Tpl/theme_shop_basic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168451119553f80396e995a6-17512380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3793e4f78472f4437e48ced3328f478d537ed81b' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/protected/Theme/Shop/manage/Tpl/theme_shop_basic.tpl',
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
  'nocache_hash' => '168451119553f80396e995a6-17512380',
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
  'unifunc' => 'content_53f80396f41a08_93587699',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f80396f41a08_93587699')) {function content_53f80396f41a08_93587699($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/fubendong/Sites/bzfshop/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
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
            $("#theme_shop_tabbar li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Theme/Shop/Basic'),$_smarty_tpl);?>
'])").addClass("active");
        });

        window.bz_set_breadcrumb_status.push({index: 1, text: '基本信息', link: window.location.href});
    </script>
    <!-- 页面主体内容 -->
    <div class="row">
        <h4>商城基本信息</h4>
        <br/>
        <!-- 更新表单  -->
        <form class="form-horizontal form-horizontal-inline form-dirty-check" method="POST"
              style="margin: 0px 0px 0px 0px;">

            <div class="well">

                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">网站名</span>
                        <input class="span9" type="text" name="site_name" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['site_name']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                               data-validation-required="data-validation-required"/>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">SEO标题</span>
                        <input class="span9" type="text" name="seo_title" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['seo_title']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                               data-validation-required="data-validation-required"/>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">SEO关键词</span>
                        <input class="span9" type="text" name="seo_keywords" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['seo_keywords']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                               data-validation-required="data-validation-required"/>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">SEO描述</span>
                        <textarea class="span9" type="text" name="seo_description"
                                  data-validation-required="data-validation-required"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['seo_description']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</textarea>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">商户名</span>
                        <input class="span2" type="text" name="merchant_name"
                               value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['merchant_name']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                               data-validation-required="data-validation-required"/>
                        <span class="input-label">商户所在地</span>
                        <input class="span2" type="text" name="merchant_address"
                               value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['merchant_address']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                               data-validation-required="data-validation-required"/>
                        <span class="input-label">ICP备案号</span>
                        <input class="span2" type="text" name="icp"
                               value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['icp']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                               data-validation-required="data-validation-required"/>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">统计代码</span>
                        <textarea class="span9" type="text" name="statistics_code"
                                  data-validation-required="data-validation-required"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['statistics_code']->value)===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">客服电话</span>
                        <input class="span2" type="text" name="kefu_telephone"
                               value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['kefu_telephone']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                               data-validation-required="data-validation-required"/>
                        <span class="input-label">客服QQ</span>
                        <input class="span2" type="text" name="kefu_qq"
                               value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['kefu_qq']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                               data-validation-required="data-validation-required"/>
                        <span class="input-label">商务QQ</span>
                        <input class="span2" type="text" name="business_qq"
                               value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['business_qq']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                               data-validation-required="data-validation-required"/>
                    </div>
                </div>

                <div class="control-group" style="margin-top: 10px;">
                    <div class="controls">
                        <span class="input-label">首页公告</span>
                        <textarea class="span6 editor-html-simple" rows="5" cols="20"
                                  name="shop_index_notice"><?php echo $_smarty_tpl->tpl_vars['shop_index_notice']->value;?>
</textarea>
                    </div>
                </div>
                <div class="control-group" style="margin-top: 10px;">
                    <div class="controls">
                        <span class="input-label">商品详情公告</span>
                        <textarea class="span6 editor-html-simple" rows="5" cols="20"
                                  name="goods_view_detail_notice"><?php echo $_smarty_tpl->tpl_vars['goods_view_detail_notice']->value;?>
</textarea>
                    </div>
                </div>
                <div class="control-group" style="margin-top: 10px;">
                    <div class="controls">
                        <span class="input-label">售后说明</span>
                        <textarea class="span6 editor-html-simple" rows="5" cols="20"
                                  name="goods_after_service"><?php echo $_smarty_tpl->tpl_vars['goods_after_service']->value;?>
</textarea>
                    </div>
                </div>

                <!-- 分割条 -->
                <div class="row inline-divider">
                    <div class="divider"></div>
                    <label class="label label-info">页面缓存时间</label>
                </div>
                <!-- /分割条 -->

                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">网站首页</span>
                        <input class="span2" type="text" name="smarty_cache_time_shop_index"
                               value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['smarty_cache_time_shop_index']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                               pattern="[0-9]+" data-validation-pattern-message="必须是整数"
                               data-validation-required="data-validation-required"/>
                        <span class="input-label">商品详情页面</span>
                        <input class="span2" type="text" name="smarty_cache_time_goods_view"
                               value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['smarty_cache_time_goods_view']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                               pattern="[0-9]+" data-validation-pattern-message="必须是整数"
                               data-validation-required="data-validation-required"/>
                        <span class="input-label">文章显示页面</span>
                        <input class="span2" type="text" name="smarty_cache_time_article_view"
                               value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['smarty_cache_time_article_view']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                               pattern="[0-9]+" data-validation-pattern-message="必须是整数"
                               data-validation-required="data-validation-required"/>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">商品分类列表</span>
                        <input class="span2" type="text" name="smarty_cache_time_ajax_category"
                               value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['smarty_cache_time_ajax_category']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                               pattern="[0-9]+" data-validation-pattern-message="必须是整数"
                               data-validation-required="data-validation-required"/>
                        <span class="input-label">商品搜索页面</span>
                        <input class="span2" type="text" name="smarty_cache_time_goods_search"
                               value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['smarty_cache_time_goods_search']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                               pattern="[0-9]+" data-validation-pattern-message="必须是整数"
                               data-validation-required="data-validation-required"/>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <span class="comments">注意：缓存时间单位为秒，1800 代表 30分钟</span>
                    </div>
                </div>

            </div>

            <!-- 提交按钮 -->
            <div class="row" style="text-align: center;">
                <button type="submit" class="btn btn-success">保存设置</button>
            </div>
            <!-- /提交按钮 -->

        </form>
        <!-- /更新表单  -->

    </div>
    <!-- /页面主体内容 -->


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
