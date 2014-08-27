<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-23 00:33:31
         compiled from "/Users/fubendong/Sites/bzfshop/src/protected/Theme/Manage/Tpl/goods_edit_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157556770353f770dbca0412-49485893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efb68710d7c61119e2c27cca5bb81815449df05c' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/protected/Theme/Manage/Tpl/goods_edit_edit.tpl',
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
  'nocache_hash' => '157556770353f770dbca0412-49485893',
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
  'unifunc' => 'content_53f770dbdd6087_23559060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f770dbdd6087_23559060')) {function content_53f770dbdd6087_23559060($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/fubendong/Sites/bzfshop/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
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
            $("#goods_edit_tab_left li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Edit/Edit','goods_id'=>$_smarty_tpl->tpl_vars['goods_id']->value),$_smarty_tpl);?>
'])").addClass("active");
        });

        window.bz_set_breadcrumb_status.push({index: 2, text: '商品信息', link: window.location.href});
    </script>
    <form class="form-horizontal form-horizontal-inline form-dirty-check" method="POST"
          style="margin: 0px 0px 0px 0px;">

    <!-- 左侧每个标签的具体内容 -->
    <div class="tab-content">

    <!-- 商品的基本信息 -->
    <div id="goods_edit_basic_info" class="tab-pane well active">

    <div class="control-group">
        <div class="controls">
            <span class="input-label" rel="tooltip" data-placement="top"
                  data-title="前台显示给购买用户看的名称">商品名称</span>
            <input class="span9" name="goods[goods_name]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods']->value['goods_name'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                   type="text"
                   data-validation-required-message="商品名称不能为空"/>
        </div>
    </div>

    <div class="control-group">
        <div class="controls">
            <span class="input-label" rel="tooltip" data-placement="top"
                  data-title="后台显示报表用">商品短标题</span>
            <input class="span4" name="goods[goods_name_short]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods']->value['goods_name_short'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                   type="text"
                   data-validation-required-message="商品短标题不能为空"/>
            <span class="input-label" rel="tooltip" data-placement="top"
                  data-title="用空格分隔每个关键词，用于网站自身搜索">商品关键词</span>
            <input class="span3" name="goods[keywords]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods']->value['keywords'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
" type="text"/>
        </div>
    </div>

    <div class="control-group">
        <div class="controls">
            <span class="input-label" rel="tooltip" data-placement="top"
                  data-title="用于SEO优化">SEO标题</span>
            <input class="span9" name="goods[seo_title]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods']->value['seo_title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                   type="text"/>
        </div>
    </div>

    <div class="control-group">
        <div class="controls">
            <span class="input-label" rel="tooltip" data-placement="top"
                  data-title="用于SEO优化">SEO关键词</span>
            <input class="span9" name="goods[seo_keyword]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods']->value['seo_keyword'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                   type="text"/>
        </div>
    </div>

    <div class="control-group">
        <div class="controls">
            <span class="input-label" rel="tooltip" data-placement="top"
                  data-title="用于SEO优化">SEO描述</span>
            <textarea class="span6" rows="5" cols="20" name="goods[seo_description]"
                      maxlength="250"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goods']->value['seo_description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
        </div>
    </div>

    <div class="control-group">
        <div class="controls">
            <span class="input-label">商品货号</span>
            <input class="span2" name="goods[goods_sn]"
                   data-validation-required-message="商品货号不能为空"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods']->value['goods_sn'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
" type="text"/>
            <span class="input-label" rel="tooltip" data-placement="top"
                  data-title="用于商品拣货">商品仓库</span>
            <input class="span2" type="text" name="goods[warehouse]"
                   maxlength="15"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goods']->value['warehouse'], ENT_QUOTES, 'UTF-8');?>
"/>
            <span class="input-label" rel="tooltip" data-placement="top"
                  data-title="用于商品拣货">商品货架</span>
            <input class="span2" type="text" name="goods[shelf]"
                   maxlength="15"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goods']->value['shelf'], ENT_QUOTES, 'UTF-8');?>
"/>
        </div>
    </div>

    <div class="control-group">
        <div class="controls">
            <span class="input-label">管理员</span>
            <select class="span2 select2-simple" name="goods[admin_user_id]" data-placeholder="管理员列表"
                    data-ajaxCallUrl="<?php echo smarty_helper_function_make_url(array('controller'=>"/Ajax/AdminUser/ListUserIdName"),$_smarty_tpl);?>
"
                    data-option-value-key="user_id" data-option-text-key="user_name"
                    data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods']->value['admin_user_id'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                <option value=""></option>
            </select>
            <span class="comments">标明当前商品是谁编辑的</span>
        </div>
    </div>

    <div class="control-group">
        <div class="controls">
            <span class="input-label" rel="tooltip" data-placement="top"
                  data-title="商品发布到哪些系统里面去">系统Tag</span>
            <!-- 商品发布到那些系统 -->
            <select class="span9 select2-simple" multiple="multiple"
                    name="goods[system_tag_list][]"
                    data-placeholder="选择商品发布系统" data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods']->value['system_tag_list'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
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
                    data-placeholder="选择商品分类" data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods']->value['cat_id'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                    data-ajaxCallUrl="<?php echo smarty_helper_function_make_url(array('controller'=>"/Ajax/Goods/ListCategoryTree"),$_smarty_tpl);?>
"
                    data-option-value-key="meta_id" data-option-text-key="meta_name">
                <option value=""></option>
            </select>
        </div>
    </div>

    <div class="control-group">
        <div class="controls">
            <span class="input-label">商品品牌</span>
            <select class="span2 select2-simple" name="goods[brand_id]" data-placeholder="选择商品品牌"
                    data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods']->value['brand_id'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                    data-ajaxCallUrl="<?php echo smarty_helper_function_make_url(array('controller'=>"/Ajax/Brand/ListBrand"),$_smarty_tpl);?>
"
                    data-option-value-key="brand_id" data-option-text-key="brand_name">
                <option value=""></option>
            </select>
            <span class="input-label" rel="tooltip" data-placement="top"
                  data-title="如果是自己发货的产品，请先给你自己建一个供货商账号">供货商</span>
            <select class="span2 select2-simple" name="goods[suppliers_id]"
                    data-validation-required-message="供货商不能为空"
                    data-placeholder="选择供货商" data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods']->value['suppliers_id'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                    data-ajaxCallUrl="<?php echo smarty_helper_function_make_url(array('controller'=>"/Ajax/Supplier/ListSupplierIdName"),$_smarty_tpl);?>
"
                    data-option-value-key="suppliers_id" data-option-text-key="suppliers_name">
                <option value=""></option>
            </select>
            <span class="input-label">独立销售</span>
            <select class="span2 select2-simple" name="goods[is_alone_sale]"
                    data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods']->value['is_alone_sale'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                <option value="1">作为普通商品销售</option>
                <option value="0">只作为配件或赠品销售</option>
            </select>
        </div>
    </div>

    <div class="control-group">
        <div class="controls">
            <span class="input-label">精品推荐</span>
            <select class="span2 select2-simple" name="goods[is_best]"
                    data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods']->value['is_best'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                <option value="0">不推荐</option>
                <option value="1">推荐到精品展示</option>
            </select>
            <span class="input-label">新品推荐</span>
            <select class="span2 select2-simple" name="goods[is_new]"
                    data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods']->value['is_new'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                <option value="0">不推荐</option>
                <option value="1">推荐到新品展示</option>
            </select>
            <span class="input-label">热销推荐</span>
            <select class="span2 select2-simple" name="goods[is_hot]"
                    data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods']->value['is_hot'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                <option value="0">不推荐</option>
                <option value="1">推荐到热销展示</option>
            </select>
        </div>
    </div>

    <div class="control-group">
        <div class="controls">
                    <span class="input-label" rel="tooltip" data-placement="top"
                          data-title="上架商品在前台会立即出现">是否上架</span>
            <select class="span2 select2-simple" name="goods[is_on_sale]"
                    data-value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods']->value['is_on_sale'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
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
            <span class="input-label" rel="tooltip" data-placement="top"
                  data-title="市场上别人的售价，只是一个显示的参考价，不是实际销售价">市场价</span>
            <input class="span2" type="text" name="goods[market_price]"
                   value="<?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['goods']->value['market_price']), ENT_QUOTES, 'UTF-8');?>
" pattern="^\d+(\.\d+)?$"
                   data-validation-required-message="市场价不能为空"
                   data-validation-pattern-message="市场价无效"/>
            <span class="input-label" rel="tooltip" data-placement="top"
                  data-title="本店的销售价，区别于前面的市场价">本店销售价</span>
            <input class="span2" type="text" name="goods[shop_price]"
                   value="<?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['goods']->value['shop_price']), ENT_QUOTES, 'UTF-8');?>
" pattern="^\d+(\.\d+)?$"
                   data-validation-required-message="本店销售价不能为空"
                   data-validation-pattern-message="本店销售价无效"/>
            <span class="input-label" rel="tooltip" data-placement="top"
                  data-title="商品库存，如果为0则无法购买">商品库存</span>
            <input class="span2" type="text" name="goods[goods_number]"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods']->value['goods_number'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
" pattern="[0-9]+"
                   data-validation-required-message="商品库存不能为空"
                   data-validation-pattern-message="商品库存无效"/>
        </div>
    </div>

    <div class="control-group">
        <div class="controls">
                    <span class="input-label" rel="tooltip" data-placement="top"
                          data-title="每个订单需要支付的快递费用">快递费用</span>
            <input class="span2" type="text" name="goods[shipping_fee]"
                   value="<?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['goods']->value['shipping_fee']), ENT_QUOTES, 'UTF-8');?>
" pattern="^\d+(\.\d+)?$"
                   data-validation-required-message="快递费用为空"
                   data-validation-pattern-message="快递费用无效"/>
                    <span class="input-label" rel="tooltip" data-placement="top"
                          data-title="一次买多少件可以免邮费，0表示不免邮费">免邮数量</span>
            <input class="span2" type="text" name="goods[shipping_free_number]"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods']->value['shipping_free_number'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                   pattern="[0-9]+"
                   data-validation-required-message="免邮数量不能为空"
                   data-validation-pattern-message="免邮数量无效"/>
                    <span class="input-label" rel="tooltip" data-placement="top"
                          data-title="库存少于这个值的时候，系统会给出警告，0表示不警告">库存警告值</span>
            <input class="span2" type="text" name="goods[warn_number]"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods']->value['warn_number'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
" pattern="[0-9]+"
                   data-validation-required-message="库存警告值不能为空"
                   data-validation-pattern-message="库存警告值无效"/>
        </div>
    </div>

    <div class="control-group">
        <div class="controls">
            <span class="input-label" rel="tooltip" data-placement="top"
                  data-title="商品成本，用于利润统计">商品供货价</span>
            <input class="span2" type="text" name="goods[suppliers_price]"
                   value="<?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['goods']->value['suppliers_price']), ENT_QUOTES, 'UTF-8');?>
" pattern="^\d+(\.\d+)?$"
                   data-validation-required-message="商品供货价不能为空"
                   data-validation-pattern-message="商品供货价无效"/>
            <span class="input-label" rel="tooltip" data-placement="top"
                  data-title="快递成本，用于利润统计">供货快递费</span>
            <input class="span2" type="text" name="goods[suppliers_shipping_fee]"
                   value="<?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['goods']->value['suppliers_shipping_fee']), ENT_QUOTES, 'UTF-8');?>
"
                   pattern="^\d+(\.\d+)?$"
                   data-validation-required-message="供货快递费不能为空"
                   data-validation-pattern-message="供货快递费无效"/>
            <span class="input-label" rel="tooltip" data-placement="top"
                  data-title="商品出现的排序，数字越大排序越前">商品排序</span>
            <input class="span2" type="text" name="goods[sort_order]"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods']->value['sort_order'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                   pattern="[0-9]+"
                   data-validation-pattern-message="商品排序非法"/>
        </div>
    </div>

    <div class="control-group">
        <div class="controls">
            <span class="input-label" rel="tooltip" data-placement="top"
                  data-title="用于累加到购买数量中，前台显示">虚拟购买数量</span>
            <input class="span2" type="text" name="goods[virtual_buy_number]"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods']->value['virtual_buy_number'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                   pattern="[0-9]+"
                   data-validation-pattern-message="虚拟购买数量非法"/>
            <span class="input-label" rel="tooltip" data-placement="top"
                  data-title="真实的用户下单数量">用户下单数量</span>
            <input class="span2" type="text" disabled="disabled"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods']->value['user_buy_number'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
            <span class="input-label" rel="tooltip" data-placement="top"
                  data-title="真实的用户支付数量">用户支付数量</span>
            <input class="span2" type="text" disabled="disabled"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods']->value['user_pay_number'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
        </div>
    </div>

    <div class="control-group" style="margin-top: 10px;">
        <div class="controls">
                    <span class="input-label" rel="tooltip" data-placement="top"
                          data-title="用于前台商品的展示">商品简介</span>
            <textarea class="span6 editor-html-simple" rows="5" cols="20"
                      name="goods[goods_brief]"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_brief'];?>
</textarea>
        </div>
    </div>

    <div class="control-group" style="margin-top: 10px;">
        <div class="controls">
            <span class="input-label">商品提示</span>
            <textarea class="span6 editor-html-simple" rows="5" cols="20"
                      name="goods[goods_notice]"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_notice'];?>
</textarea>
        </div>
    </div>

    <div class="control-group" style="margin-top: 10px;">
        <div class="controls">
            <span class="input-label">售后服务</span>
            <textarea class="span6 editor-html-simple" rows="5" cols="20"
                      name="goods[goods_after_service]"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_after_service'];?>
</textarea>
        </div>
    </div>

    <div class="control-group">
        <div class="controls">
            <span class="input-label">商家备注</span>
            <textarea class="span6" rows="3" cols="20" name="goods[seller_note]"
                      maxlength="250"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goods']->value['seller_note'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            <span class="comments">仅供商家自己看的信息，限250字</span>
        </div>
    </div>

    <div class="control-group" style="margin-top: 15px;">
        <div class="controls">
            <span class="input-label">商品详情</span>
            <textarea id="goods_edit_goods_desc_textarea" class="span9" style="height:600px;"
                      rows="5" cols="20" data-no-validation="data-no-validation"
                      name="goods[goods_desc]"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_desc'];?>
</textarea>
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

            /************ goods_edit_edit.tpl 商品编辑页面，商品详情编辑框的创建 ****************/

            /****** 注意，由于上传采用了 swfupload 插件，我们需要做 post 认证，否则无法上传“bzfshop_auth_cookie_key” *****/
            KindEditor.create('#goods_edit_goods_desc_textarea', {
                filterMode: true,
                themeType: 'default',
                cssData: "body {font-family: '微软雅黑', 'Microsoft Yahei', '宋体', 'songti', STHeiti, Helmet, Freesans, sans-serif;font-size: 15px; }",
                uploadJson: bZF.makeUrl('/File/KindEditor?action=upload'), // '/File/Upload'
                fileManagerJson: bZF.makeUrl('/File/KindEditor?action=manage'),
                extraFileUploadParams: {
                    bzfshop_auth_cookie_key: $.cookie(WEB_COOKIE_AUTH_KEY)
                },
                formatUploadUrl: false,
                allowFileManager: true,
                width: $('#goods_edit_goods_desc_textarea').outerWidth(false)
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
