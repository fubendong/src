<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-23 00:38:33
         compiled from "/Users/fubendong/Sites/bzfshop/src/protected/Theme/Manage/Tpl/goods_edit_type.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141652250553f77209ddd7f3-26390141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83b1d141b2445e5c6df75c122dae9a015f27de82' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/protected/Theme/Manage/Tpl/goods_edit_type.tpl',
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
  'nocache_hash' => '141652250553f77209ddd7f3-26390141',
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
  'unifunc' => 'content_53f77209f26893_54441176',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f77209f26893_54441176')) {function content_53f77209f26893_54441176($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/fubendong/Sites/bzfshop/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
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
            $("#goods_edit_tab_left li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Edit/Type','goods_id'=>$_smarty_tpl->tpl_vars['goods_id']->value),$_smarty_tpl);?>
'])").addClass("active");
        });
        window.bz_set_breadcrumb_status.push({index: 2, text: '类型属性', link: window.location.href});
    </script>
    <form id="bzf_goods_edit_type_form"
          class="form-horizontal form-horizontal-inline form-dirty-check" method="POST"
          style="margin: 0px 0px 0px 0px;">

        <!-- 左侧每个标签的具体内容 -->
        <div class="tab-content">

            <!-- 商品的类型属性设置 -->
            <div class="tab-pane well active">
                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">商品类型</span>
                        <select id="bzf_goods_type_select"
                                class="span2 select2-simple"
                                name="type_id"
                                data-placeholder="商品类型列表"
                                data-ajaxCallUrl="<?php echo smarty_helper_function_make_url(array('controller'=>'/Ajax/GoodsType/ListType'),$_smarty_tpl);?>
"
                                data-option-value-key="meta_id" data-option-text-key="meta_name"
                                data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods']->value['type_id'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                            <option value=""></option>
                        </select>
                    </div>
                </div>

                <table id="bzf_goods_attr_value_tree_table" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th width="30%">&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

            </div>
            <!-- /商品的类型属性设置 -->

            <!-- 提交按钮 -->
            <div class="row" style="text-align: center;">
                <button type="button" class="btn btn-success" onclick="bZF.goods_edit_type.submit();">确认提交</button>
            </div>
            <!-- /提交按钮 -->

            <!-- 隐藏的 DIV 用于写入 hidden 的值 -->
            <div id="goods_edit_type_form_hidden_div" class="row" style="display: none;">
            </div>

        </div>
        <!-- /左侧每个标签的具体内容 -->

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

            //  自己独立的命名空间
            bZF.goods_edit_type = {};

            bZF.goods_edit_type.strValue = function (str) {
                if (str) {
                    return str;
                }
                return '';
            };

            // 生成属性组
            bZF.goods_edit_type.renderAttrGroup = function (elem) {
                return '<tr class="info"><td colspan="2">' + elem.meta_name + '</td></tr>';
            };
            // 生成单选
            bZF.goods_edit_type.renderSelect = function (elem) {

                var optionValueList = elem.meta_data.split(",");
                var component = '<select class="span2 select2-simple" ' +
                        ' data-placeholder="请选择" data-no-validation="true" data-initValue="'
                        + bZF.goods_edit_type.strValue(elem.attr_item_value) + '" >';
                component += '<option value=""></option>';
                $.each(optionValueList, function (index, optionValue) {
                    component += '<option value="' + optionValue + '">' + optionValue + '</option>';
                });
                component += '</select>';

                return '<tr>' +
                        '<td style="text-align: right;">' + elem.meta_name + '</td>' +
                        '<td style="text-align: left;">' + component + '</td>' +
                        '</tr>';
            };
            // 生成手动输入-单行
            bZF.goods_edit_type.renderInput = function (elem) {

                var component = '<input type="text" class="span2" data-no-validation="true" '
                        + ' value="' + bZF.goods_edit_type.strValue(elem.attr_item_value) + '" />';

                return '<tr>' +
                        '<td style="text-align: right;">' + elem.meta_name + '</td>' +
                        '<td style="text-align: left;">' + component + '</td>' +
                        '</tr>';
            };
            // 生成手动输入-多行
            bZF.goods_edit_type.renderTextarea = function (elem) {
                var component = '<textarea class="span2" data-no-validation="true">'
                        + bZF.goods_edit_type.strValue(elem.attr_item_value) + '</textarea>';

                return '<tr>' +
                        '<td style="text-align: right;">' + elem.meta_name + '</td>' +
                        '<td style="text-align: left;">' + component + '</td>' +
                        '</tr>';
            };

            // 生成属性表
            bZF.goods_edit_type.renderGoodsAttrTable = function (goodsId, typeId) {
                var callUrl = bZF.makeUrl('/Goods/Edit/Type/ajaxListAttrValue?goods_id=' + goodsId + '&typeId=' + typeId);
                bZF.ajaxCallGet(callUrl, function (data) {
                    if (!data) {
                        // 没有数据，什么都不用操作
                        return;
                    }
                    // 挨个生成
                    $.each(data, function (index, elem) {
                        var renderComponent = '';
                        if ('goods_type_attr_group' === elem.meta_type) {
                            renderComponent = bZF.goods_edit_type.renderAttrGroup(elem);
                        } else {
                            switch (elem.meta_ename) {
                                case 'select':
                                    renderComponent = bZF.goods_edit_type.renderSelect(elem);
                                    break;
                                case 'input':
                                    renderComponent = bZF.goods_edit_type.renderInput(elem);
                                    break;
                                case 'textarea':
                                    renderComponent = bZF.goods_edit_type.renderTextarea(elem);
                                    break;
                                default:
                                    break;
                            }
                        }
                        // 把 elem 绑定
                        $renderComponent = $(renderComponent);
                        delete elem.meta_data; // 节省点内存
                        $('select,input,textarea', $renderComponent).data('dataJson', elem);
                        // 加入到结果表中
                        $('#bzf_goods_attr_value_tree_table tbody').append($renderComponent);
                    });

                    // 对页面做一次渲染
                    bZF.enhanceHtml($('#bzf_goods_attr_value_tree_table tbody'));
                });
            };

            // 商品类型选择发生变化的时候我们需要重新生成属性表
            bZF.goods_edit_type.typeChange = function (typeId) {
                // 清空属性表
                $('#bzf_goods_attr_value_tree_table tbody').html('');

                var goodsId = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goods']->value['goods_id'], ENT_QUOTES, 'UTF-8');?>
;
                if (!typeId) {
                    typeId = $('#bzf_goods_type_select option:selected').val();
                }

                if (isNaN(typeId) || typeId <= 0) {
                    // 用户选择商品不是任何类型
                    return;
                }

                // 生成属性值表格
                bZF.goods_edit_type.renderGoodsAttrTable(goodsId, typeId);
            };

            $('#bzf_goods_type_select').change(function () {
                bZF.goods_edit_type.typeChange();
            });

            // 第一次加载显示
            if ($('#bzf_goods_type_select').attr('data-initValue') > 0) {
                bZF.goods_edit_type.typeChange($('#bzf_goods_type_select').attr('data-initValue'));
            }

            bZF.goods_edit_type.clearHiddenValue = function () {
                $('#goods_edit_type_form_hidden_div').html('');
            };

            bZF.goods_edit_type.writeHiddenValue = function (dataJson) {
                $('#goods_edit_type_form_hidden_div').append("<input type='hidden' name='goodsAttrValueArray[]' value='" +
                        JSON.stringify(dataJson) + "' />");
            };

            bZF.goods_edit_type.submit = function () {
                // 清除之前的数据
                bZF.goods_edit_type.clearHiddenValue();

                // 收集所有数据
                $('#bzf_goods_attr_value_tree_table select').each(function (index, elem) {
                    // 取得绑定的数据
                    var $elem = $(elem);
                    var dataJson = $elem.data('dataJson');
                    if (!dataJson) {
                        // 不是我们生成的节点
                        return;
                    }
                    // 不允许有引号
                    dataJson.attr_item_value = $elem.find('option:selected').val().replace("'", '').replace('"', '');
                    bZF.goods_edit_type.writeHiddenValue(dataJson);
                });

                $('#bzf_goods_attr_value_tree_table input[type="text"], #bzf_goods_attr_value_tree_table textarea').each(function (index, elem) {
                    // 取得绑定的数据
                    var $elem = $(elem);
                    var dataJson = $elem.data('dataJson');
                    if (!dataJson) {
                        // 不是我们生成的节点
                        return;
                    }
                    // 不允许有引号
                    dataJson.attr_item_value = $elem.val().replace("'", '').replace('"', '');
                    bZF.goods_edit_type.writeHiddenValue(dataJson);
                });

                // 提交表单
                $('#bzf_goods_edit_type_form').submit();
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
