<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-24 13:27:14
         compiled from "/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Manage/Tpl/goods_create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109160179653f89e1f4b1a32-63768016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45f16e918fa60f41b2117c9d39cb48ccbdce9bae' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Manage/Tpl/goods_create.tpl',
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
  'nocache_hash' => '109160179653f89e1f4b1a32-63768016',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53f89e1f525468_84501571',
  'variables' => 
  array (
    'DEBUG' => 0,
    'authAdminUser' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f89e1f525468_84501571')) {function content_53f89e1f525468_84501571($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/fubendong/Sites/bzfshop/src/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
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
        

    <!-- 用 JS 设置商品编辑页面左侧不同的 Tab 选中状态 -->
    <script type="text/javascript">
        window.bz_set_nav_status.push(function ($) {
            $("#goods_tabbar li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Create'),$_smarty_tpl);?>
'])").addClass("active");
        });

        window.bz_set_breadcrumb_status.push({index: 1, text: '新建商品', link: window.location.href});
    </script>
    <form class="form-horizontal form-horizontal-inline form-dirty-check" method="POST"
          action="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Edit/Edit'),$_smarty_tpl);?>
"
          style="margin: 0px 0px 0px 0px;">

        <!-- 左侧每个标签的具体内容 -->
        <div class="tab-content">

            <!-- 商品的基本信息 -->
            <div id="goods_edit_basic_info" class="tab-pane well active">

                <div class="control-group">
                    <div class="controls">
                    <span class="input-label" rel="tooltip" data-placement="top"
                          data-title="前台显示给购买用户看的名称">商品名称</span>
                        <input class="span9" name="goods[goods_name]"
                               type="text"
                               data-validation-required-message="商品名称不能为空"/>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
            <span class="input-label" rel="tooltip" data-placement="top"
                  data-title="后台显示报表用">商品短标题</span>
                        <input class="span4" name="goods[goods_name_short]" type="text"
                               data-validation-required-message="商品短标题不能为空"/>
            <span class="input-label" rel="tooltip" data-placement="top"
                  data-title="用空格分隔每个关键词，用于网站自身搜索">商品关键词</span>
                        <input class="span3" name="goods[keywords]" type="text"/>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
            <span class="input-label" rel="tooltip" data-placement="top"
                  data-title="用于SEO优化">SEO标题</span>
                        <input class="span9" name="goods[seo_title]" type="text"/>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
            <span class="input-label" rel="tooltip" data-placement="top"
                  data-title="用于SEO优化">SEO关键词</span>
                        <input class="span9" name="goods[seo_keyword]" type="text"/>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
            <span class="input-label" rel="tooltip" data-placement="top"
                  data-title="用于SEO优化">SEO描述</span>
                        <textarea class="span6" rows="5" cols="20" name="goods[seo_description]"
                                  maxlength="250"></textarea>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">商品货号</span>
                        <input class="span2" name="goods[goods_sn]" type="text"/>
                        <span class="comments">如果您不输入商品货号，系统将自动生成一个唯一的货号</span>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
            <span class="input-label" rel="tooltip" data-placement="top"
                  data-title="商品发布到哪些系统里面去">系统Tag</span>
                        <!-- 商品发布到那些系统 -->
                        <select class="span9 select2-simple" multiple="multiple"
                                name="goods[system_tag_list][]"
                                data-placeholder="选择商品发布系统"
                                data-ajaxCallUrl="<?php echo smarty_helper_function_make_url(array('controller'=>"/Ajax/System/ListSystem"),$_smarty_tpl);?>
"
                                data-option-value-key="system_tag" data-option-text-key="system_name">
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls" style="padding-top:8px;">
                        <span class="input-label">商品分类</span>
                        <!-- 商品分类有可能层级很长 -->
                        <select class="span9 select2-simple" name="goods[cat_id]"
                                data-validation-required-message="商品分类不能为空"
                                data-placeholder="选择商品分类" data-initValue=""
                                data-ajaxCallUrl="<?php echo smarty_helper_function_make_url(array('controller'=>"/Ajax/Goods/ListCategoryTree"),$_smarty_tpl);?>
"
                                data-option-value-key="meta_id" data-option-text-key="meta_name">
                            <option value=""></option>
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls" style="padding-top:8px;">
                        <span class="input-label">试用分类</span>
                        <!-- 商品分类有可能层级很长 -->
                        <select class="span2 select2-simple" name="goods[suppliers_id]"
                                data-validation-required-message="分类不能为空"
                                data-placeholder="选择试用分类" data-initValue=""
                                data-ajaxCallUrl="<?php echo smarty_helper_function_make_url(array('controller'=>"/Ajax/Supplier/ListSupplierIdName"),$_smarty_tpl);?>
"
                                data-option-value-key="suppliers_id" data-option-text-key="suppliers_name">
                            <option value=""></option>
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">商品品牌</span>
                        <select class="span2 select2-simple" name="goods[brand_id]" data-placeholder="选择商品品牌"
                                data-initValue=""
                                data-ajaxCallUrl="<?php echo smarty_helper_function_make_url(array('controller'=>"/Ajax/Brand/ListBrand"),$_smarty_tpl);?>
"
                                data-option-value-key="brand_id" data-option-text-key="brand_name">
                            <option value=""></option>
                        </select>
                    <span class="input-label" rel="tooltip" data-placement="top"
                          data-title="如果是自己发货的产品，请先给你自己建一个供货商账号">供货商</span>
                        <select class="span2 select2-simple" name="goods[suppliers_id]"
                                data-validation-required-message="供货商不能为空"
                                data-placeholder="选择供货商" data-initValue=""
                                data-ajaxCallUrl="<?php echo smarty_helper_function_make_url(array('controller'=>"/Ajax/Supplier/ListSupplierIdName"),$_smarty_tpl);?>
"
                                data-option-value-key="suppliers_id" data-option-text-key="suppliers_name">
                            <option value=""></option>
                        </select>


                    <span class="input-label" rel="tooltip" data-placement="top"
                          data-title="上架商品在前台会立即出现">是否上架</span>
                        <select class="span2 select2-simple" name="goods[is_on_sale]"
                                data-value="0"
                                data-validation-required-message="商品状态不能为空"
                                data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods']->value['is_on_sale'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                            <option value="0">未上架</option>
                            <option value="1">已上架</option>
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">商家备注</span>
                        <textarea class="span6" rows="5" cols="20" name="goods[seller_note]"
                                  maxlength="250"></textarea>
                        <span class="comments">仅供商家自己看的信息，限250字</span>
                    </div>
                </div>


            </div>
            <!-- /商品的基本信息 -->

        </div>
        <!-- /左侧每个标签的具体内容 -->


        <!-- 提交按钮 -->
        <div class="row" style="text-align: center;">
            <button type="submit" class="btn btn-success">保存修改</button>
        </div>
        <!-- /提交按钮 -->

    </form>

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
</html>
<?php }} ?>
