<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-23 09:25:09
         compiled from "/Users/fubendong/Sites/bzfshop/src/protected/Theme/Manage/Tpl/goods_brand_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101696622753f7ed757966d8-30972429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6308ecd82164faf3c9abe8d7c39eda1e4f43754' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/protected/Theme/Manage/Tpl/goods_brand_edit.tpl',
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
  'nocache_hash' => '101696622753f7ed757966d8-30972429',
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
  'unifunc' => 'content_53f7ed75826ba7_54229767',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f7ed75826ba7_54229767')) {function content_53f7ed75826ba7_54229767($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/fubendong/Sites/bzfshop/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
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
            $("#goods_tabbar li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Brand/ListBrand'),$_smarty_tpl);?>
'])").addClass("active");
        });
        window.bz_set_breadcrumb_status.push({index: 2, text: '品牌详情', link: window.location.href});
    </script>
    <!-- 页面主体内容 -->
    <div class="row">
        <h4>品牌详情</h4>

        <!-- 更新商品品牌的表单  -->
        <form class="form-horizontal" method="POST" action="Edit?brand_id=<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['brand_id']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
">

            <!-- 商品品牌详细信息 -->
            <div class="row">

                <div class="control-group">
                    <label class="control-label">品牌名称</label>

                    <div class="controls">
                        <input class="span3" type="text" name="brand_name" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['brand_name']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                               data-validation-required-message="不能为空"/>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">品牌描述</label>

                    <div class="controls">
                        <textarea class="span5" rows="3" cols="20"
                                  data-validation-required-message="不能为空"
                                  name="brand_desc"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['brand_desc']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</textarea>
                    </div>

                </div>

                <div class="control-group">
                    <label class="control-label">品牌Logo</label>

                    <div class="controls">
                        <!-- 一张图片 -->
                        <div class="thumbnail gallery-item" style="float:left;width:100px;">
                            <!-- 图片 -->
                            <div class="image-container">
                                <img id="goods_brand_edit_upload_brand_logo"
                                     class="lazyload" width="<?php echo smarty_helper_function_get_sysconfig(array('key'=>'brand_logo_width'),$_smarty_tpl);?>
"
                                     style="width:<?php echo smarty_helper_function_get_sysconfig(array('key'=>'brand_logo_width'),$_smarty_tpl);?>
px;height:<?php echo smarty_helper_function_get_sysconfig(array('key'=>'brand_logo_height'),$_smarty_tpl);?>
px;"
                                     src="<?php echo smarty_helper_get_asset_url(array('asset'=>'img/blank.gif'),$_smarty_tpl);?>
"
                                     data-original="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['brand_logo']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                            </div>
                        </div>
                        <!-- /一张图片 -->
                        <input id="goods_brand_edit_upload_brand_logo_input"
                               name="brand_logo" type="hidden"
                               value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['brand_logo']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                        &nbsp;&nbsp;
                        <button id="goods_brand_edit_upload_brand_logo_button" type="button"
                                class="btn btn-small btn-success">上传图片
                        </button>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">自定义页面</label>

                    <div class="controls">
                        <select class="span2 select2-simple" name="is_custom"
                                data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['is_custom']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                            <option value="0">否</option>
                            <option value="1">是</option>
                        </select>
                    </div>
                </div>

                <div class="control-group" style="margin-top: 15px;">
                    <label class="control-label">页面内容</label>

                    <div class="controls">
                        <textarea id="goods_brand_edit_custom_page_textarea" class="span9" style="height:600px;"
                                  rows="5" cols="20" data-no-validation="data-no-validation"
                                  name="custom_page"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['custom_page']->value)===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">&nbsp; </label>

                    <div class="controls">
                        <button type="submit" class="btn btn-success">
                            提交
                        </button>
                    </div>
                </div>

            </div>
            <!-- /商品品牌详细信息 -->

        </form>
        <!-- /更新商品品牌的表单  -->

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

    <script type="text/javascript">
        /**
         * 这里的代码等 document.ready 才执行
         */
        jQuery((function (window, $) {
            /******************* goods_brand_edit.tpl 商品品牌页面编辑 ******************/
            KindEditor.create('#goods_brand_edit_custom_page_textarea', {
                filterMode: true,
                themeType: 'default',
                cssData: "body {font-family: '微软雅黑', 'Microsoft Yahei', '宋体', 'songti', STHeiti, Helmet, Freesans, sans-serif;font-size: 15px; }",
                uploadJson: bZF.makeUrl('/File/KindEditor?action=upload&dirname=image_other'), // '/File/Upload'
                fileManagerJson: bZF.makeUrl('/File/KindEditor?action=manage&dirname=image_other'),
                extraFileUploadParams: {
                    bzfshop_auth_cookie_key: $.cookie(WEB_COOKIE_AUTH_KEY)
                },
                formatUploadUrl: false,
                allowFileManager: true,
                width: $('#goods_brand_edit_custom_page_textarea').outerWidth(false)
            });

            /*****************  goods_brand_edit.tpl 商品品牌 上传 logo 图片 *********************/
            bZF.uploadImage('#goods_brand_edit_upload_brand_logo_button',
                    function (clickObject, url, title, width, height, border, align) {
                        $('#goods_brand_edit_upload_brand_logo').attr('src', url);
                        $('#goods_brand_edit_upload_brand_logo_input').val(url);
                    }, 'image_other');
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
