<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-24 13:37:31
         compiled from "/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Manage/Tpl/goods_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141237129953f8a884a585c0-28865083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86f24e45c6ec78237b2b5410e043db1a30ff08a2' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Manage/Tpl/goods_search.tpl',
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
  'nocache_hash' => '141237129953f8a884a585c0-28865083',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53f8a884bb2980_54812892',
  'variables' => 
  array (
    'DEBUG' => 0,
    'authAdminUser' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f8a884bb2980_54812892')) {function content_53f8a884bb2980_54812892($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/fubendong/Sites/bzfshop/src/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
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

        window.bz_set_breadcrumb_status.push({index: 1, text: '商品列表', link: window.location.href});
    </script>
    <!-- 页面主体内容 -->
    <div class="row">

        <!-- 这里是条件筛选区 -->
        <div class="row well well-small">
            <form class="form-horizontal form-horizontal-inline" method="GET" style="margin: 0px 0px 0px 0px;">
                <div class="control-group">
                    <div class="controls">

                        <span class="input-label">商品ID</span>
                        <input class="span1" type="text" pattern="[0-9]*" data-validation-pattern-message="商品ID应该是全数字"
                               name="goods_id" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods_id']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                        <span class="input-label">商品名称</span>
                        <input class="span2" type="text" name="goods_name" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods_name']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>

                        <span class="input-label">选择供货商</span>
                        <select class="span2 select2-simple" name="suppliers_id" data-placeholder="供货商列表"
                                data-ajaxCallUrl="<?php echo smarty_helper_function_make_url(array('controller'=>'/Ajax/Supplier/ListSupplierIdName'),$_smarty_tpl);?>
"
                                data-option-value-key="suppliers_id" data-option-text-key="suppliers_name"
                                data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['suppliers_id']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                            <option value=""></option>
                        </select>

                        <span class="input-label">选择状态</span>
                        <select class="span2 select2-simple" name="is_on_sale" data-placeholder="商品状态"
                                data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['is_on_sale']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                            <option value=""></option>
                            <option value="1">销售中</option>
                            <option value="0">已下线</option>
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls" style="padding-top:8px;">
                        <span class="input-label">商品货号</span>
                        <input class="span1" type="text" name="goods_sn" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods_sn']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                        <span class="input-label">管理员</span>
                        <select class="span2 select2-simple" name="admin_user_id" data-placeholder="管理员列表"
                                data-ajaxCallUrl="<?php echo smarty_helper_function_make_url(array('controller'=>'/Ajax/AdminUser/ListUserIdName'),$_smarty_tpl);?>
"
                                data-option-value-key="user_id" data-option-text-key="user_name"
                                data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['admin_user_id']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                            <option value=""></option>
                        </select>
                        <span class="input-label" rel="tooltip" data-placement="top"
                              data-title="商品发布到哪些系统里面去">系统Tag</span>
                        <!-- 商品发布到那些系统 -->
                        <select class="span2 select2-simple" name="system_tag"
                                data-placeholder="选择商品发布系统" data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['system_tag']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                                data-ajaxCallUrl="<?php echo smarty_helper_function_make_url(array('controller'=>'/Ajax/System/ListSystem'),$_smarty_tpl);?>
"
                                data-option-value-key="system_tag" data-option-text-key="system_name">
                            <option value=""></option>
                        </select>
                        <span class="input-label">商品类型</span>
                        <select class="span2 select2-simple"
                                name="type_id" data-placeholder="商品类型列表"
                                data-ajaxCallUrl="<?php echo smarty_helper_function_make_url(array('controller'=>'/Ajax/GoodsType/ListType'),$_smarty_tpl);?>
"
                                data-option-value-key="meta_id" data-option-text-key="meta_name"
                                data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['type_id']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                            <option value=""></option>
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">商品分类</span>
                        <!-- 商品分类有可能层级很长 -->
                        <select class="span4 select2-simple" name="cat_id"
                                data-placeholder="选择商品分类" data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['cat_id']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                                data-ajaxCallUrl="<?php echo smarty_helper_function_make_url(array('controller'=>'/Ajax/Goods/ListCategoryTree'),$_smarty_tpl);?>
"
                                data-option-value-key="meta_id" data-option-text-key="meta_name">
                            <option value=""></option>
                        </select>
                        <span class="input-label">商品品牌</span>
                        <select class="span2 select2-simple" name="brand_id" data-placeholder="选择商品品牌"
                                data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['brand_id']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                                data-ajaxCallUrl="<?php echo smarty_helper_function_make_url(array('controller'=>'/Ajax/Brand/ListBrand'),$_smarty_tpl);?>
"
                                data-option-value-key="brand_id" data-option-text-key="brand_name">
                            <option value=""></option>
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls" style="padding-top:8px;">
                        <span class="input-label">仓库</span>
                        <input class="span1" type="text" name="warehouse" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['warehouse']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                        <span class="input-label">货架</span>
                        <input class="span2" type="text" name="shelf" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['shelf']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-success">查询</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /这里是条件筛选区 -->

        <!-- 商品列表 -->
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th width="5%">商品ID</th>
                <th width="15%">商品图片</th>
                <th width="30%">商品名称</th>
                <th width="8%">商品分类</th>
                <th width="10%">供货商</th>
                <th>价格</th>
                <th>库存剩余</th>
                <th width="5%">状态</th>
                <th width="5%">操作</th>
            </tr>
            </thead>
            <tbody>

            <?php if (isset($_smarty_tpl->tpl_vars['goodsArray']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['goodsItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goodsItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goodsArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goodsItem']->key => $_smarty_tpl->tpl_vars['goodsItem']->value) {
$_smarty_tpl->tpl_vars['goodsItem']->_loop = true;
?>

                    <!-- 一个商品 -->
                    <?php if (0==$_smarty_tpl->tpl_vars['goodsItem']->value['is_on_sale']) {?>
                        <tr class="error">
                            <?php } else { ?>
                        <tr>
                    <?php }?>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsItem']->value['goods_id'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <a rel="clickover" data-placement="top" href="#"
                           data-content="<?php echo smarty_helper_function_goods_view_toolbar(array('goods_id'=>$_smarty_tpl->tpl_vars['goodsItem']->value['goods_id'],'system_tag_list'=>$_smarty_tpl->tpl_vars['goodsItem']->value['system_tag_list']),$_smarty_tpl);?>
">
                            <img class="lazyload" width="150" style="width:150px;height:auto;"
                                 src="<?php echo smarty_helper_get_asset_url(array('asset'=>'img/blank.gif'),$_smarty_tpl);?>
"
                                 data-original="<?php echo smarty_helper_function_goods_thumb_image(array('goods_id'=>$_smarty_tpl->tpl_vars['goodsItem']->value['goods_id']),$_smarty_tpl);?>
"/>
                        </a>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsItem']->value['goods_name'], ENT_QUOTES, 'UTF-8');?>

                        <?php if (!empty($_smarty_tpl->tpl_vars['goodsItem']->value['warehouse'])) {?>
                            <br/>
                            <br/>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsItem']->value['warehouse'], ENT_QUOTES, 'UTF-8');?>
&nbsp;|&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsItem']->value['shelf'], ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </td>
                    <td><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsItem']->value['cat_name'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
<br/><br/>[<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsItem']->value['type_name'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
]</td>
                    <td><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsItem']->value['suppliers_name'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        销售价：<?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['goodsItem']->value['shop_price']), ENT_QUOTES, 'UTF-8');?>
 元<br/>
                        供货价：<?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['goodsItem']->value['suppliers_price']), ENT_QUOTES, 'UTF-8');?>
 元<br/>
                        <br/>
                        快递费：<?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['goodsItem']->value['shipping_fee']), ENT_QUOTES, 'UTF-8');?>
 元<br/>
                        供货快递：<?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['goodsItem']->value['suppliers_shipping_fee']), ENT_QUOTES, 'UTF-8');?>
 元<br/>
                        <?php if ($_smarty_tpl->tpl_vars['goodsItem']->value['shipping_free_number']>0) {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsItem']->value['shipping_free_number'], ENT_QUOTES, 'UTF-8');?>
 件免邮
                            <br/>
                        <?php }?>
                    </td>
                    <td>
                        <?php if (empty($_smarty_tpl->tpl_vars['goodsItem']->value['goods_spec'])) {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsItem']->value['goods_number'], ENT_QUOTES, 'UTF-8');?>

                        <?php } else { ?>
                            <?php  $_smarty_tpl->tpl_vars['specDataArray'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['specDataArray']->_loop = false;
 $_smarty_tpl->tpl_vars['specStr'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goodsItem']->value['goods_spec']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['specDataArray']->key => $_smarty_tpl->tpl_vars['specDataArray']->value) {
$_smarty_tpl->tpl_vars['specDataArray']->_loop = true;
 $_smarty_tpl->tpl_vars['specStr']->value = $_smarty_tpl->tpl_vars['specDataArray']->key;
?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['specStr']->value, ENT_QUOTES, 'UTF-8');?>
&nbsp;:&nbsp;<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['specDataArray']->value['goods_number'])===null||$tmp==='' ? '0' : $tmp), ENT_QUOTES, 'UTF-8');?>

                                <br/>
                            <?php } ?>
                        <?php }?>
                    </td>
                    <td>
                        <?php  $_smarty_tpl->tpl_vars['goodsSystemName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goodsSystemName']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goodsItem']->value['system_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goodsSystemName']->key => $_smarty_tpl->tpl_vars['goodsSystemName']->value) {
$_smarty_tpl->tpl_vars['goodsSystemName']->_loop = true;
?>
                            <label class="label label-success"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsSystemName']->value, ENT_QUOTES, 'UTF-8');?>
</label>
                        <?php } ?>
                        <br/><?php if ($_smarty_tpl->tpl_vars['goodsItem']->value['is_on_sale']>=1) {?>销售中<?php } else { ?>已下线<?php }?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsItem']->value['admin_user_name'], ENT_QUOTES, 'UTF-8');?>
<br/><br/>
                        <a class="btn btn-small"
                           href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Edit/Edit','goods_id'=>$_smarty_tpl->tpl_vars['goodsItem']->value['goods_id']),$_smarty_tpl);?>
">编辑</a>
                        <a class="btn btn-small"
                           href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Copy','goods_id'=>$_smarty_tpl->tpl_vars['goodsItem']->value['goods_id']),$_smarty_tpl);?>
"
                           onclick="return confirm('你确定要复制新建一个商品吗？');">复制</a>
                    </td>
                    </tr><!-- /一个商品 -->

                <?php } ?>
            <?php }?>

            </tbody>
        </table>
        <!-- /商品列表 -->

        <!-- 分页 -->
        <div class="pagination pagination-right">
            <?php echo smarty_helper_function_paginator(array('count'=>(($tmp = @$_smarty_tpl->tpl_vars['totalCount']->value)===null||$tmp==='' ? 0 : $tmp),'pageNo'=>(($tmp = @$_smarty_tpl->tpl_vars['pageNo']->value)===null||$tmp==='' ? 0 : $tmp),'pageSize'=>(($tmp = @$_smarty_tpl->tpl_vars['pageSize']->value)===null||$tmp==='' ? 10 : $tmp)),$_smarty_tpl);?>

        </div>
        <!-- 分页 -->

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
</html>
<?php }} ?>
