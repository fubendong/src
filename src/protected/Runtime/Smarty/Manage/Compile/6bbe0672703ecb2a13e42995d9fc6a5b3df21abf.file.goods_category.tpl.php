<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-23 10:46:03
         compiled from "/Users/fubendong/Sites/bzfshop/src/protected/Theme/Manage/Tpl/goods_category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184357858653f8006b168e50-65599365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bbe0672703ecb2a13e42995d9fc6a5b3df21abf' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/protected/Theme/Manage/Tpl/goods_category.tpl',
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
  'nocache_hash' => '184357858653f8006b168e50-65599365',
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
  'unifunc' => 'content_53f8006b23bca2_91653127',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f8006b23bca2_91653127')) {function content_53f8006b23bca2_91653127($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/fubendong/Sites/bzfshop/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
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
            $("#goods_tabbar li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Category'),$_smarty_tpl);?>
'])").addClass("active");
        });
        window.bz_set_breadcrumb_status.push({index: 1, text: '商品分类', link: window.location.href});
    </script>
    <!-- 页面主体内容 -->
    <div class="row" id="bzf_goods_category_tree_table_panel">
        <h4>商品分类</h4>

        <!-- 这里是条件筛选区 -->
        <div class="row well well-small">
            <button id="bzf_goods_category_tree_table_button_expand" class="btn btn-success">全部展开</button>
            <button id="bzf_goods_category_tree_table_button_collapse" class="btn btn-success">全部收起</button>
            <button class="btn btn-info" onclick="bZF.show_goods_category_edit_modal();">新建分类</button>
        </div>
        <!-- /这里是条件筛选区 -->

        <table id="bzf_goods_category_tree_table" class="table table-bordered table-hover">
            <thead>
            <tr>
                <th class="well">商品分类</th>
                <th class="well">商品数量</th>
                <th class="well">分类ID</th>
                <th class="well">排序</th>
                <th class="well">是否显示</th>
                <th class="well">操作</th>
            </tr>
            </thead>
            <tbody>

            <?php if (isset($_smarty_tpl->tpl_vars['goodsCategoryFlatArray']->value)) {?>

                <?php  $_smarty_tpl->tpl_vars['goodsCategoryItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goodsCategoryItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goodsCategoryFlatArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goodsCategoryItem']->key => $_smarty_tpl->tpl_vars['goodsCategoryItem']->value) {
$_smarty_tpl->tpl_vars['goodsCategoryItem']->_loop = true;
?>
                    <tr data-tt-id="bzf_goods_category_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsCategoryItem']->value['meta_id'], ENT_QUOTES, 'UTF-8');?>
"
                        data-jsonData='<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['goodsCategoryItem']->value), ENT_QUOTES, 'UTF-8');?>
'
                            <?php if ($_smarty_tpl->tpl_vars['goodsCategoryItem']->value['parent_meta_id']>0) {?>
                        data-tt-parent-id="bzf_goods_category_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsCategoryItem']->value['parent_meta_id'], ENT_QUOTES, 'UTF-8');?>
"
                            <?php }?>>
                        <td class="bzf_category_title">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsCategoryItem']->value['meta_name'], ENT_QUOTES, 'UTF-8');?>

                        </td>
                        <td>
                            <?php if (isset($_smarty_tpl->tpl_vars['categoryIdToGoodsCountArray']->value[$_smarty_tpl->tpl_vars['goodsCategoryItem']->value['meta_id']])) {?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryIdToGoodsCountArray']->value[$_smarty_tpl->tpl_vars['goodsCategoryItem']->value['meta_id']], ENT_QUOTES, 'UTF-8');?>

                            <?php } else { ?>&nbsp;<?php }?>
                        </td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsCategoryItem']->value['meta_id'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsCategoryItem']->value['meta_sort_order'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['goodsCategoryItem']->value['meta_status']>0) {?>
                                <i class="icon-ok"></i>
                            <?php } else { ?>
                                <i class="icon-remove"></i>
                            <?php }?>
                        </td>
                        <td>
                            <button onclick="bZF.show_goods_category_transfer_goods_modal(this.parentNode.parentNode);"
                                    class="btn btn-mini btn-info">转移商品
                            </button>
                            <button onclick="bZF.show_goods_category_edit_modal(this.parentNode.parentNode);"
                                    class="btn btn-mini btn-success">编辑
                            </button>
                            <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Category/Remove','meta_id'=>$_smarty_tpl->tpl_vars['goodsCategoryItem']->value['meta_id']),$_smarty_tpl);?>
"
                               class="btn btn-mini btn-danger">删除</a>
                        </td>
                    </tr>
                <?php } ?>

            <?php }?>

            </tbody>
        </table>

    </div>
    <!-- /页面主体内容 -->

    <!-- 商品分类编辑 modal -->
    <div id="goods_category_edit_modal" class="modal hide fade" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4>商品分类信息</h4>
        </div>
        <form class="form-horizontal form-horizontal-inline" method="POST"
              action="<?php echo smarty_helper_function_make_url(array('controller'=>"/Goods/Category/Edit"),$_smarty_tpl);?>
">

            <input type="hidden" name="meta_id" value=""/>

            <div class="modal-body">
                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">分类名</span>
                        <input type="text" class="span2"
                               name="meta_name" value=""
                               data-validation-required-message="不能为空"/>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">上级分类</span>
                        <!-- 商品分类有可能层级很长 -->
                        <select class="span4 select2-simple" name="parent_meta_id"
                                data-placeholder="顶级分类" data-initValue=""
                                data-ajaxCallUrl="<?php echo smarty_helper_function_make_url(array('controller'=>"/Ajax/Goods/ListCategoryTree?nocache=1"),$_smarty_tpl);?>
"
                                data-option-value-key="meta_id" data-option-text-key="meta_name">
                            <option value=""></option>
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">排序</span>
                        <input type="text" class="span1"
                               name="meta_sort_order" value=""
                               pattern="[0-9]+"
                               data-validation-required-message="不能为空"
                               data-validation-pattern-message="排序必须是数字"/>
                        <span class="comments">顺序越大排序越前</span>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">是否显示</span>
                        <select class="span2 select2-simple" name="meta_status">
                            <option value="1">显示</option>
                            <option value="0">不显示</option>
                        </select>
                    </div>
                </div>

                <!-- 属性筛选 -->
                <div id="bzf_goods_category_edit_modal_attr_filter" class="row well well-small">

                    <!-- 筛选属性 模板
                    <div class="control-group">
                        <div class="controls">
                            <span class="input-label">筛选属性</span>
                            <select style="width:160px;"
                                    onchange="bZF.goods_category_edit_modal.loadTypeAttr(this.parentNode);"
                                    class="span1 select2-simple"
                                    data-placeholder="商品类型"
                                    data-ajaxCallUrl="/Ajax/GoodsType/ListType"
                                    data-option-value-key="meta_id" data-option-text-key="meta_name">
                                <option value=""></option>
                            </select>
                            <select class="span2 select2-simple"
                                    name="filter[]"
                                    data-placeholder="类型属性"
                                    data-option-value-key="meta_id" data-option-text-key="meta_name">
                                <option value=""></option>
                            </select>
                            &nbsp;&nbsp;
                            <button type="button" class="btn btn-mini btn-info"
                                    onclick="bZF.goods_category_edit_modal.addFilter();"><i
                                        class="icon-plus"></i></button>
                        </div>
                    </div>
                    -->
                </div>

            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-success">保存
                </button>
                <button type="button" class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
            </div>
        </form>
    </div>
    <!-- /商品分类编辑 modal -->

    <!-- 商品分类转移商品 modal -->
    <div id="goods_category_transfer_goods_modal" class="modal hide fade" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4>商品转移</h4>
        </div>
        <form class="form-horizontal form-horizontal-inline" method="POST"
              action="<?php echo smarty_helper_function_make_url(array('controller'=>"/Goods/Category/TransferGoods"),$_smarty_tpl);?>
">

            <input type="hidden" name="meta_id" value=""/>

            <div class="modal-body">

                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">目标分类</span>
                        <!-- 商品分类有可能层级很长 -->
                        <select class="span4 select2-simple" name="target_meta_id"
                                data-placeholder="选择目标分类"
                                data-ajaxCallUrl="<?php echo smarty_helper_function_make_url(array('controller'=>"/Ajax/Goods/ListCategoryTree?nocache=1"),$_smarty_tpl);?>
"
                                data-option-value-key="meta_id" data-option-text-key="meta_name">
                            <option value=""></option>
                        </select>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">转移商品</button>
                <button type="button" class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
            </div>
        </form>
    </div>
    <!-- /商品分类转移商品 modal -->


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

            /************* goods_category.tpl 页面，商品分类树形结构 *************/
            $("#bzf_goods_category_tree_table").detach().treetable({ expandable: true, clickableNodeNames: true, initialState: 'collapsed' }).appendTo('#bzf_goods_category_tree_table_panel');

            $('#bzf_goods_category_tree_table_button_expand').click(function () {
                $("#bzf_goods_category_tree_table").treetable('expandAll');
            });

            $('#bzf_goods_category_tree_table_button_collapse').click(function () {
                $("#bzf_goods_category_tree_table").treetable('collapseAll');
            });

            // 编辑对话框
            bZF.show_goods_category_edit_modal = function (categoryBlock) {
                if (categoryBlock) {
                    var jsonData = $.parseJSON($(categoryBlock).attr("data-jsonData"));
                    if (jsonData.meta_data) {
                        jsonData.meta_data = $.parseJSON(jsonData.meta_data);
                    }
                    // 编辑,给对话框赋值
                    $('#goods_category_edit_modal input[name="meta_id"]').val(jsonData.meta_id);
                    $('#goods_category_edit_modal input[name="meta_name"]').val(jsonData.meta_name);
                    $('#goods_category_edit_modal input[name="meta_sort_order"]').val(jsonData.meta_sort_order);
                    $('#goods_category_edit_modal select[name="meta_status"]').select2('val', jsonData.meta_status);
                    $('#goods_category_edit_modal select[name="parent_meta_id"]').select2('val', jsonData.parent_meta_id);
                    var $filterDiv = $('#bzf_goods_category_edit_modal_attr_filter');
                    // 清除已经存在的选择
                    $('select.select2-simple', $filterDiv).select2('destroy');
                    $filterDiv.html('');
                    if (jsonData.meta_data && jsonData.meta_data.filterArray && jsonData.meta_data.filterArray.length > 0) {
                        var isFirst = true;
                        $.each(jsonData.meta_data.filterArray, function (index, data) {
                            $filterDiv.append(bZF.goods_category_edit_modal.getFilterTemplate(isFirst, data.typeId, data.attrItemId));
                            isFirst = false;
                        });
                    } else {
                        // 如果没有过滤数据，加一个空的
                        $filterDiv.append(bZF.goods_category_edit_modal.getFilterTemplate(true));
                    }
                } else {
                    // 新建
                    $('#goods_category_edit_modal input[name="meta_id"]').val(0);
                    $('#goods_category_edit_modal input[name="meta_name"]').val('');
                    $('#goods_category_edit_modal input[name="meta_sort_order"]').val(0);
                    $('#goods_category_edit_modal select[name="meta_status"]').select2('val', 1);
                    $('#goods_category_edit_modal select[name="parent_meta_id"]').select2('val', 0);
                    $(bZF.goods_category_edit_modal.getFilterTemplate(true)).appendTo('#bzf_goods_category_edit_modal_attr_filter');
                }
                // 渲染 html
                bZF.enhanceHtml($('#bzf_goods_category_edit_modal_attr_filter'));
                // 显示对话框
                $('#goods_category_edit_modal').modal({dynamic: true});
            };

            // 建立命名空间
            bZF.goods_category_edit_modal = {};

            // 生成属性筛选模板
            bZF.goods_category_edit_modal.getFilterTemplate = function (isFirst, typeId, attrItemId) {
                if (!isFirst) {
                    isFirst = false;
                }
                var attrAjaxCallUrl = '';
                if (!typeId) {
                    typeId = '';
                } else {
                    attrAjaxCallUrl = bZF.makeUrl('/Ajax/GoodsType/ListAttrItem?typeId=' + typeId);
                }
                if (!attrItemId) {
                    attrItemId = '';
                }

                var template = '<div class="control-group"><div class="controls"><span class="input-label">筛选属性</span><select style="width:160px;" name="filterTypeIdArray[]" onchange="bZF.goods_category_edit_modal.loadTypeAttr(this.parentNode);" class="span1 select2-simple" data-placeholder="商品类型" data-ajaxCallUrl="' + bZF.makeUrl('/Ajax/GoodsType/ListType') + '" data-option-value-key="meta_id" data-option-text-key="meta_name" data-initValue="' + typeId + '"> <option value=""></option></select><select class="span2 select2-simple"  name="filterAttrItemIdArray[]"  data-placeholder="类型属性"  data-option-value-key="meta_id" data-option-text-key="meta_name" data-ajaxCallUrl="' + attrAjaxCallUrl + '" data-initValue="' + attrItemId + '"><option value=""></option></select>&nbsp;&nbsp; ';

                if (isFirst) {
                    // 第一个元素，需要一个增加按钮
                    template += '<button type="button" class="btn btn-mini btn-info" onclick="bZF.goods_category_edit_modal.addFilter();"><i class="icon-plus"></i></button>';
                } else {
                    // 其它元素，需要一个删除按钮
                    template += '<button type="button" class="btn btn-mini btn-danger" onclick="bZF.goods_category_edit_modal.removeFilter(this.parentNode.parentNode);"><i class="icon-remove"></i></button>';
                }

                template += '</div></div>';

                return template;
            }

            // 增加一个过滤属性
            bZF.goods_category_edit_modal.addFilter = function () {
                var $template = $(bZF.goods_category_edit_modal.getFilterTemplate());
                bZF.enhanceHtml($template.appendTo('#bzf_goods_category_edit_modal_attr_filter'));
            }

            // 删除一个过滤属性
            bZF.goods_category_edit_modal.removeFilter = function (node) {
                $(node).remove();
            }

            // 用户选择商品类型之后，加载对应的类型属性列表
            bZF.goods_category_edit_modal.loadTypeAttr = function (node) {
                var $selectArray = $('select', node);
                var $select1 = $($selectArray[0]);// 第一级选择
                var $select2 = $($selectArray[1]);// 第二级选择
                var typeId = $select1.find('option:selected').val();
                $select2.select2('destroy');
                if (!typeId) {
                    return; // do nothing
                }
                // ajax 调用更新
                $select2.attr('data-ajaxCallUrl', bZF.makeUrl('/Ajax/GoodsType/ListAttrItem?typeId=' + typeId));
                $select2.attr('data-initValue', null);
                bZF.select2AjaxLoad($select2);
            };

            // 转移商品对话框
            bZF.show_goods_category_transfer_goods_modal = function (categoryBlock) {
                var jsonData = $.parseJSON($(categoryBlock).attr("data-jsonData"));
                $('#goods_category_transfer_goods_modal input[name="meta_id"]').val(jsonData.meta_id);
                // 显示对话框
                $('#goods_category_transfer_goods_modal').modal({dynamic: true});
            };

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
