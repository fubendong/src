<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-24 16:57:14
         compiled from "/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Supplier/supplier/Tpl/order_settle_listsettle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168832313353f9a8ea443f42-01793056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02fac826ce98c05041bc2dc42cf25204613aa80a' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Supplier/supplier/Tpl/order_settle_listsettle.tpl',
      1 => 1408786190,
      2 => 'file',
    ),
    'a1ddc18ee75585923bc5c9027207088f5e9a7ea7' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Supplier/supplier/Tpl/order_layout.tpl',
      1 => 1408786190,
      2 => 'file',
    ),
    '7a6fa7146af88a1bf598626318c10197cc02dd7f' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Supplier/supplier/Tpl/layout.tpl',
      1 => 1408858022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168832313353f9a8ea443f42-01793056',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DEBUG' => 0,
    'authSupplierUser' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53f9a8ea4eda16_48958728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f9a8ea4eda16_48958728')) {function content_53f9a8ea4eda16_48958728($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/fubendong/Sites/bzfshop/src/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <!-- 让 IE 使用最新模式 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <title>试客联盟供货商后台</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="试客联盟供货商后台">
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
<!-- /用 JS 设置页面的导航菜单 -->

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
                    <a href="#" class="dropdown-toggle"
                       data-toggle="dropdown">[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['authSupplierUser']->value['suppliers_account'], ENT_QUOTES, 'UTF-8');?>
]
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/My/Profile'),$_smarty_tpl);?>
">我的资料</a></li>
                        <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/User/Logout'),$_smarty_tpl);?>
">退出登陆</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Search'),$_smarty_tpl);?>
">商品管理</a></li>
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Order/Goods/Search'),$_smarty_tpl);?>
">订单管理</a></li>
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
            $("#system_top_navbar li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Order/Goods/Search'),$_smarty_tpl);?>
'])").addClass("active");
        });
    </script>
    <div class="row bz_basic_content_block bz_box_shadow" style="padding:10px 10px 10px 10px;">

        <!-- 页面上方导航条 -->
        <div id="order_tabbar" class="row">
            <ul class="nav nav-tabs">
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Order/Goods/Search'),$_smarty_tpl);?>
">售出商品</a></li>
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Order/Refund/Search'),$_smarty_tpl);?>
">商品退款</a></li>
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Order/Excel'),$_smarty_tpl);?>
">批量下载订单</a></li>
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Order/Settle/ListSettle'),$_smarty_tpl);?>
">结算历史</a></li>
            </ul>
        </div>
        <!-- /页面上方导航条 -->

        <!-- 订单管理主体内容 -->
        

    <!-- 用 JS 设置页面的导航菜单 -->
    <script type="text/javascript">
        window.bz_set_nav_status.push(function ($) {
            $("#order_tabbar li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Order/Settle/ListSettle'),$_smarty_tpl);?>
'])").addClass("active");
        });

        window.bz_set_breadcrumb_status.push({index: 0, text: '结算历史', link: window.location.href});
    </script>
    <!-- 页面主体内容 -->
    <div class="row">

        <h4>订单商品结算历史</h4>

        <!-- 这里是条件筛选区 -->
        <div class="row well well-small">
            <form class="form-horizontal form-horizontal-inline"
                  method="GET" style="margin: 0px 0px 0px 0px;">

                <div class="control-group" style="padding-top:3px; padding-bottom:3px;">
                    <div class="controls">
                        <span class="input-label">结算时间</span>

                        <div class="input-append date datetimepicker">
                            <input class="span2"
                                   type="text" name="settle_time_start" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['settle_time_start']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                        <span class="add-on">
                            <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                        </span>
                        </div>
                        <span style="float:left;margin-left: 5px;margin-right: 5px;">--</span>

                        <div class="input-append date datetimepicker">
                            <input class="span2"
                                   type="text" name="settle_time_end" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['settle_time_end']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                        <span class="add-on">
                            <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                        </span>
                        </div>

                        <span class="input-label">付款状态</span>
                        <select class="span2 select2-simple" name="is_pay"
                                data-placeholder="选择付款状态"
                                data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['is_pay']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                            <option value=""></option>
                            <option value="1">没有付款</option>
                            <option value="2">已经付款</option>
                        </select>
                    </div>
                </div>

                <div class="control-group" style="padding-top:3px; padding-bottom:3px;">
                    <div class="controls">
                        <button type="submit" class="btn btn-success">查询</button>
                    </div>
                </div>

            </form>

        </div>
        <!-- /这里是条件筛选区 -->

        <!-- 结算记录列表 -->
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>结算ID</th>
                <th width="8%">订单开始</th>
                <th width="8%">订单结束</th>
                <th width="8%">结算时间</th>
                <th width="15%">供货商</th>
                <th>商品金额</th>
                <th>快递金额</th>
                <th>退款金额</th>
                <th>结算金额</th>
                <th>结算人</th>
                <th width="15%">备注</th>
                <th width="5%">操作</th>
            </tr>
            </thead>
            <tbody>

            <?php if (isset($_smarty_tpl->tpl_vars['orderSettleArray']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['orderSettleItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['orderSettleItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orderSettleArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['orderSettleItem']->key => $_smarty_tpl->tpl_vars['orderSettleItem']->value) {
$_smarty_tpl->tpl_vars['orderSettleItem']->_loop = true;
?>

                    <!-- 一个结算记录 -->
                    <tr>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderSettleItem']->value['settle_id'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td><?php echo htmlspecialchars(smarty_helper_modifier_localtime($_smarty_tpl->tpl_vars['orderSettleItem']->value['settle_start_time']), ENT_QUOTES, 'UTF-8');?>
</td>
                        <td><?php echo htmlspecialchars(smarty_helper_modifier_localtime($_smarty_tpl->tpl_vars['orderSettleItem']->value['settle_end_time']), ENT_QUOTES, 'UTF-8');?>
</td>
                        <td><?php echo htmlspecialchars(smarty_helper_modifier_localtime($_smarty_tpl->tpl_vars['orderSettleItem']->value['create_time']), ENT_QUOTES, 'UTF-8');?>
</td>
                        <td>(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderSettleItem']->value['suppliers_id'], ENT_QUOTES, 'UTF-8');?>
)<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderSettleItem']->value['suppliers_name'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td class="price"><?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['orderSettleItem']->value['suppliers_goods_price']), ENT_QUOTES, 'UTF-8');?>
</td>
                        <td class="price"><?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['orderSettleItem']->value['suppliers_shipping_fee']), ENT_QUOTES, 'UTF-8');?>
</td>
                        <td class="discount"><?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['orderSettleItem']->value['suppliers_refund']), ENT_QUOTES, 'UTF-8');?>
</td>
                        <td class="price"><?php echo htmlspecialchars(smarty_helper_modifier_money_display(($_smarty_tpl->tpl_vars['orderSettleItem']->value['suppliers_goods_price']+$_smarty_tpl->tpl_vars['orderSettleItem']->value['suppliers_shipping_fee']-$_smarty_tpl->tpl_vars['orderSettleItem']->value['suppliers_refund'])), ENT_QUOTES, 'UTF-8');?>
</td>
                        <td>
                            (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderSettleItem']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
)<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderSettleItem']->value['user_name'], ENT_QUOTES, 'UTF-8');?>

                            <?php if ($_smarty_tpl->tpl_vars['orderSettleItem']->value['pay_time']>0) {?>
                                <br/>
                                <span style="color:blue;">[已付款]</span>
                            <?php }?>
                        </td>
                        <td><?php echo nl2br($_smarty_tpl->tpl_vars['orderSettleItem']->value['memo']);?>
</td>
                        <td>
                            <button type="button" class="btn btn-small"
                                    onclick="bZF.Order_Settle_ajaxDetail(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderSettleItem']->value['settle_id'], ENT_QUOTES, 'UTF-8');?>
);">
                                详情
                            </button>
                            <a class="btn btn-small"
                               href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Order/Settle/ListOrderGoods','settle_id'=>$_smarty_tpl->tpl_vars['orderSettleItem']->value['settle_id']),$_smarty_tpl);?>
">明细</a>
                        </td>
                    </tr>
                    <!-- /一个结算记录 -->

                <?php } ?>
            <?php }?>

            </tbody>
        </table>
        <!-- /结算记录列表 -->

        <!-- 分页 -->
        <div class="pagination pagination-right">
            <?php echo smarty_helper_function_paginator(array('count'=>(($tmp = @$_smarty_tpl->tpl_vars['totalCount']->value)===null||$tmp==='' ? 0 : $tmp),'pageNo'=>(($tmp = @$_smarty_tpl->tpl_vars['pageNo']->value)===null||$tmp==='' ? 0 : $tmp),'pageSize'=>(($tmp = @$_smarty_tpl->tpl_vars['pageSize']->value)===null||$tmp==='' ? 10 : $tmp)),$_smarty_tpl);?>

        </div>
        <!-- 分页 -->

        <!-- 结算记录设置 modal -->
        <div id="order_settle_listsettle_modal_detail" class="modal hide fade" tabindex="-1" role="dialog"
             aria-hidden="true">
        </div>
        <!-- /结算记录设置 modal -->

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
            /******* 订单结算页面，结算详情 ***********/
            bZF.Order_Settle_ajaxDetail = function (settle_id) {
                var ajaxCallUrl = bZF.makeUrl('/Order/Settle/ajaxDetail');
                $('#order_settle_listsettle_modal_detail').load(ajaxCallUrl + '?settle_id=' + settle_id, function () {
                    $('#order_settle_listsettle_modal_detail').modal({dynamic: true});
                });
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
</html>
<?php }} ?>
