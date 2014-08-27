<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-23 11:03:21
         compiled from "/Users/fubendong/Sites/bzfshop/src/protected/Theme/Manage/Tpl/order_excel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118884280753f804793d97c3-17744265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07473a1ca3136d87293a9ea308fc790fd260dca0' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/protected/Theme/Manage/Tpl/order_excel.tpl',
      1 => 1408717013,
      2 => 'file',
    ),
    'c1e52cf1a865d67777618ce67bc9ac99ebffad2d' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/protected/Theme/Manage/Tpl/order_layout.tpl',
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
  'nocache_hash' => '118884280753f804793d97c3-17744265',
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
  'unifunc' => 'content_53f8047947bb80_58718637',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f8047947bb80_58718637')) {function content_53f8047947bb80_58718637($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/fubendong/Sites/bzfshop/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
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
            $("#system_top_navbar li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Order/Index'),$_smarty_tpl);?>
'])").addClass("active");
        });
    </script>
    <div class="row bz_basic_content_block bz_box_shadow" style="padding:10px 10px 10px 10px;">

        <!-- 页面上方导航条 -->
        <div id="order_tabbar" class="row">
            <ul class="nav nav-tabs">
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Order/Order/Search'),$_smarty_tpl);?>
">订单列表</a></li>
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Order/Goods/Search'),$_smarty_tpl);?>
">售出商品</a></li>
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Order/Refund/Search'),$_smarty_tpl);?>
">商品退款</a></li>
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Order/Excel'),$_smarty_tpl);?>
">批量下载订单</a></li>
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Order/Statistics/ListGoods'),$_smarty_tpl);?>
">销售排行</a></li>
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Order/Settle'),$_smarty_tpl);?>
">订单结算</a></li>
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Order/Settle/ListSettle'),$_smarty_tpl);?>
">结算历史</a></li>
            </ul>
        </div>
        <!-- /页面上方导航条 -->

        <!-- 订单管理主体内容 -->
        

    <!-- 用 JS 设置页面的导航菜单 -->
    <script type="text/javascript">
        window.bz_set_nav_status.push(function ($) {
            $("#order_tabbar li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Order/Excel'),$_smarty_tpl);?>
'])").addClass("active");
        });

        window.bz_set_breadcrumb_status.push({index: 1, text: '批量下载订单', link: window.location.href});
    </script>
    <!-- 页面主体内容 -->
    <div class="row">

        <h4>批量下载订单（限制最多 <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['max_query_record_count']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
 条记录）</h4>

        <!-- 这里是条件筛选区 -->
        <div class="row well well-small">
            <form class="form-horizontal form-horizontal-inline"
                  action="<?php echo smarty_helper_function_make_url(array('controller'=>'/Order/Excel/Download'),$_smarty_tpl);?>
"
                  method="GET" style="margin: 0px 0px 0px 0px;">

                <div class="control-group" style="padding-top:3px; padding-bottom:3px;">
                    <div class="controls">
                        <span class="input-label">付款时间</span>

                        <div class="input-append date datetimepicker">
                            <input id="order_excel_pay_time_start"
                                   class="span2" type="text" name="pay_time_start"
                                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['pay_time_start']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                        <span class="add-on">
                            <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                        </span>
                        </div>
                        <span style="float:left;margin-left: 5px;margin-right: 5px;">--</span>

                        <div class="input-append date datetimepicker">
                            <input id="order_excel_pay_time_end"
                                   class="span2" type="text" name="pay_time_end"
                                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['pay_time_end']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                        <span class="add-on">
                            <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                        </span>
                        </div>

                    </div>
                </div>

                <div class="control-group" style="padding-top:3px; padding-bottom:3px;">
                    <div class="controls">
                        <span class="input-label">额外退款时间</span>

                        <div class="input-append date datetimepicker">
                            <input id="order_excel_extra_refund_time_start"
                                   class="span2" type="text" name="extra_refund_time_start"
                                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['extra_refund_time_start']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                        <span class="add-on">
                            <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                        </span>
                        </div>
                        <span style="float:left;margin-left: 5px;margin-right: 5px;">--</span>

                        <div class="input-append date datetimepicker">
                            <input id="order_excel_extra_refund_time_end"
                                   class="span2" type="text" name="extra_refund_time_end"
                                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['extra_refund_time_end']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                        <span class="add-on">
                            <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                        </span>
                        </div>
                        <span class="comments">如果选择了额外退款时间，订单下载里面就只有退款订单</span>
                    </div>
                </div>

                <div class="control-group" style="padding-top:3px; padding-bottom:3px;">
                    <div class="controls" style="vertical-align: middle;line-height: 25px;">
                        <span class="input-label">供货商</span>
                        <select id="order_settle_supplier_select"
                                class="span3 select2-simple" name="suppliers_id"
                                data-validation-required-message="供货商不能为空"
                                data-placeholder="选择供货商"
                                data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['suppliers_id']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                                data-ajaxCallUrl="<?php ob_start();?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['pay_time_start']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['pay_time_end']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['extra_refund_time_start']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['extra_refund_time_end']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp4=ob_get_clean();?><?php echo smarty_helper_function_make_url(array('controller'=>"/Ajax/Supplier/ListOrderGoodsSupplierIdName",'pay_time_start'=>$_tmp1,'pay_time_end'=>$_tmp2,'extra_refund_time_start'=>$_tmp3,'extra_refund_time_end'=>$_tmp4),$_smarty_tpl);?>
"
                                data-option-value-key="suppliers_id" data-option-text-key="suppliers_name">
                            <option value=""></option>
                        </select>
                        &nbsp;&nbsp;
                        <button type="button" class="btn btn-info" onclick="bZF.order_excel_supplier_select();"
                                style="display: inline-block;">&lt;--筛选供货商
                        </button>
                        &nbsp;&nbsp;
                        <button type="submit" class="btn btn-success">批量下载</button>
                    </div>
                </div>

            </form>

            <form name="order_goods_excel_upload_file_form" class="form-horizontal form-horizontal-inline"
                  action="<?php echo smarty_helper_function_make_url(array('controller'=>'/Order/Excel/Upload'),$_smarty_tpl);?>
"
                  method="POST" enctype="multipart/form-data" style="margin: 0px 0px 0px 0px;">

                <div class="control-group" style="padding-top:3px; padding-bottom:3px;">
                    <div class="controls">
                        <label id="order_goods_excel_upload_file" class="cabinet">
                            <input id="order_goods_excel_upload_file_input" type="file" class="file" name="uploadfile"
                                   onchange="document.order_goods_excel_upload_file_form.submit();"/>
                        </label>
                        <span class="comments">把您批量下载的订单文件，填写上“快递ID”和“快递单号”从这里上传即可。注意：请不要修改文件的内容格式，否则无法识别</span>
                    </div>
                </div>

            </form>

        </div>
        <!-- /这里是条件筛选区 -->

    </div>
    <!-- /页面主体内容 -->


        <!-- /订单管理主体内容 -->

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
            /**
             *  order_excel.tpl    批量下载订单页面，美化上传文件按钮
             */
            if ($('#order_goods_excel_upload_file_input').size() > 0) {
                SI.Files.stylizeById('order_goods_excel_upload_file_input');
            }

            /**
             * order_excel.tpl
             *
             * 订单批量下载页面，根据用户选择的时间段取得这个时间段里面有销售的供货商
             */
            bZF.order_excel_supplier_select = function () {
                var pay_time_start = $('#order_excel_pay_time_start').val();
                var pay_time_end = $('#order_excel_pay_time_end').val();
                var extra_refund_time_start = $('#order_excel_extra_refund_time_start').val();
                var extra_refund_time_end = $('#order_excel_extra_refund_time_end').val();

                var callUrl = bZF.makeUrl('/Ajax/Supplier/ListOrderGoodsSupplierIdName?pay_time_start=' + encodeURI(pay_time_start)
                        + '&pay_time_end=' + encodeURI(pay_time_end) + '&extra_refund_time_start=' + encodeURI(extra_refund_time_start)
                        + '&extra_refund_time_end=' + encodeURI(extra_refund_time_end));

                // ajax  调用
                bZF.ajaxCallGet(callUrl, function (data) {
                    if (!data) {
                        bZF.showMessage('没有供货商');
                        return;
                    }
                    var supplierArray = data;
                    // 设置 360tuan_cateogry_1 的数据
                    var optionHtml = '<option value=""></option>';
                    $.each(supplierArray, function (index, elem) {
                        optionHtml += '<option value="' + elem.suppliers_id + '">' + elem.suppliers_name + '</option>';
                    });
                    $('#order_settle_supplier_select').html(optionHtml);
                    //重新设置一次初始值
                    $('#order_settle_supplier_select').select2('val', null);
                    bZF.showMessage('取供货商列表成功');
                });
            };

            /************************** order_excel.tpl  订单下载 *****************************/
            $('#stat_order_refer_download_button').on('click', function () {

                var add_time_start = $('#stat_order_refer_add_time_start').val();
                var add_time_end = $('#stat_order_refer_add_time_end').val();
                var pay_time_start = $('#stat_order_refer_pay_time_start').val();
                var pay_time_end = $('#stat_order_refer_pay_time_end').val();
                var utm_source = $('#stat_order_refer_utm_source').find('option:selected').val();
                var utm_medium = $('#stat_order_refer_utm_medium').find('option:selected').val();
                var login_type = $('#stat_order_refer_login_type').find('option:selected').val();

                // 参数检查
                if (!add_time_start && !add_time_end && !pay_time_start && !pay_time_end) {
                    bZF.showMessage('必须提供最少一个查询时间');
                    return;
                }

                // 构造调用链接
                var callUrl = bZF.makeUrl('/Stat/Order/Refer/Download'
                        + '?add_time_start=' + add_time_start
                        + '&add_time_end=' + add_time_end
                        + '&pay_time_start=' + pay_time_start
                        + '&pay_time_end=' + pay_time_end
                        + '&utm_source=' + utm_source
                        + '&utm_medium=' + utm_medium
                        + '&login_type=' + login_type);

                window.open(encodeURI(callUrl));
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
