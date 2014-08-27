<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-23 09:25:26
         compiled from "/Users/fubendong/Sites/bzfshop/src/protected/Theme/Manage/Tpl/order_order_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211256137753f7ed86a059a4-59680194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a17f4beefd25e1bd47df7118fec394fa52346e3e' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/protected/Theme/Manage/Tpl/order_order_search.tpl',
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
  'nocache_hash' => '211256137753f7ed86a059a4-59680194',
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
  'unifunc' => 'content_53f7ed86ae8eb7_68586169',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f7ed86ae8eb7_68586169')) {function content_53f7ed86ae8eb7_68586169($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/fubendong/Sites/bzfshop/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
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
            $("#order_tabbar li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Order/Order/Search'),$_smarty_tpl);?>
'])").addClass("active");
        });

        window.bz_set_breadcrumb_status.push({index: 1, text: '订单列表', link: window.location.href});
    </script>
    <!-- 页面主体内容 -->
    <div class="row">

        <!-- 这里是条件筛选区 -->
        <div class="row well well-small">
            <form class="form-horizontal form-horizontal-inline" method="GET" style="margin: 0px 0px 0px 0px;">

                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">订单ID</span>
                        <input class="span2" type="text" pattern="[0-9]*" data-validation-pattern-message="订单ID应该是全数字"
                               name="order_id" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['order_id']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                        <span class="input-label">订单流水号</span>
                        <input class="span2" type="text" name="order_sn" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['order_sn']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                        <span class="input-label" rel="tooltip" data-placement="top"
                              data-title="第三方系统支付号，比如支付宝、财付通的支付号">第三方支付号</span>
                        <input class="span2" type="text" name="pay_no" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['pay_no']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">收货人</span>
                        <input class="span2" type="text" name="consignee" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['consignee']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                        <span class="input-label">手机号</span>
                        <input class="span2" type="text" pattern="[0-9]+"
                               data-validation-pattern-message="手机号码格式不正确"
                               name="mobile" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['mobile']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                        <span class="input-label">收货地址</span>
                        <input class="span2" type="text" name="address" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['address']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">订单附言</span>
                        <input class="span5" type="text" name="postscript" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['postscript']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                        <span class="input-label">来源系统</span>
                        <select class="span2 select2-simple" name="system_id" data-placeholder="全部"
                                data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['system_id']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                                data-ajaxCallUrl="<?php echo smarty_helper_function_make_url(array('controller'=>"/Ajax/Order/ListOrderSystemId"),$_smarty_tpl);?>
"
                                data-option-value-key="word" data-option-text-key="name">
                            <option value=""></option>
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <span class="input-label" rel="tooltip" data-placement="top"
                              data-title="哪位客服为顾客服务的">服务客服</span>
                        <select class="span2 select2-simple" name="kefu_user_id" data-placeholder="客服列表"
                                data-ajaxCallUrl="<?php echo smarty_helper_function_make_url(array('controller'=>"/Ajax/AdminUser/ListKefuIdName"),$_smarty_tpl);?>
"
                                data-option-value-key="user_id" data-option-text-key="user_name"
                                data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['kefu_user_id']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                            <option value=""></option>
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">下单时间</span>

                        <div class="input-append date datetimepicker">
                            <input class="span2" type="text" name="add_time_start" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['add_time_start']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                        <span class="add-on">
                            <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                        </span>
                        </div>
                        <span style="float:left;margin-left: 5px;margin-right: 5px;">--</span>

                        <div class="input-append date datetimepicker">
                            <input class="span2" type="text" name="add_time_end" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['add_time_end']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                        <span class="add-on">
                            <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                        </span>
                        </div>

                        <span class="input-label">来源渠道(主)</span>
                        <select class="span2 select2-simple" name="utm_source" data-placeholder="全部"
                                data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['utm_source']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                                data-ajaxCallUrl="<?php echo smarty_helper_function_make_url(array('controller'=>"/Ajax/Order/ListOrderReferUtmSource"),$_smarty_tpl);?>
"
                                data-option-value-key="word" data-option-text-key="name">
                            <option value=""></option>
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">付款时间</span>

                        <div class="input-append date datetimepicker">
                            <input class="span2" type="text" name="pay_time_start" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['pay_time_start']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                        <span class="add-on">
                            <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                        </span>
                        </div>
                        <span style="float:left;margin-left: 5px;margin-right: 5px;">--</span>

                        <div class="input-append date datetimepicker">
                            <input class="span2" type="text" name="pay_time_end" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['pay_time_end']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                        <span class="add-on">
                            <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                        </span>
                        </div>

                        <span class="input-label">来源渠道(次)</span>
                        <select class="span2 select2-simple" name="utm_medium" data-placeholder="全部"
                                data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['utm_medium']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                                data-ajaxCallUrl="<?php echo smarty_helper_function_make_url(array('controller'=>"/Ajax/Order/ListOrderReferUtmMedium"),$_smarty_tpl);?>
"
                                data-option-value-key="word" data-option-text-key="name">
                            <option value=""></option>
                        </select>
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

        <!-- 订单列表 -->
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>订单ID</th>
                <th width="16%">订单流水号</th>
                <th width="15%">下单时间</th>
                <th width="15%">付款时间</th>
                <th>购买用户</th>
                <th>订单金额</th>
                <th width="6%">订单状态</th>
                <th width="5%">操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if (isset($_smarty_tpl->tpl_vars['orderInfoArray']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['orderInfoItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['orderInfoItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orderInfoArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['orderInfoItem']->key => $_smarty_tpl->tpl_vars['orderInfoItem']->value) {
$_smarty_tpl->tpl_vars['orderInfoItem']->_loop = true;
?>
                    <?php if (2==$_smarty_tpl->tpl_vars['orderInfoItem']->value['order_status']||3==$_smarty_tpl->tpl_vars['orderInfoItem']->value['order_status']) {?>
                        <tr class="warning"> <!-- 已取消或者无效的订单 -->
                            <?php } elseif (0==$_smarty_tpl->tpl_vars['orderInfoItem']->value['pay_status']) {?>
                        <tr class="info"> <!-- 未付款订单 -->
                            <?php } else { ?>
                        <tr> <!-- 其它订单 -->
                    <?php }?>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderInfoItem']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderInfoItem']->value['order_sn'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php echo htmlspecialchars(smarty_helper_modifier_localtime($_smarty_tpl->tpl_vars['orderInfoItem']->value['add_time']), ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php echo htmlspecialchars(smarty_helper_modifier_localtime($_smarty_tpl->tpl_vars['orderInfoItem']->value['confirm_time']), ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <a href="#"
                           onclick="bZF.Account_User_ajaxDetail(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderInfoItem']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
);return false;"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['orderInfoItem']->value['user_name'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</a>
                        <br/><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['orderInfoItem']->value['email'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>

                        <?php if ($_smarty_tpl->tpl_vars['orderInfoItem']->value['kefu_user_id']>0) {?>
                            <br/>
                            <span style="color:blue;">
                                客服[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderInfoItem']->value['kefu_user_name'], ENT_QUOTES, 'UTF-8');?>
] 服务打分[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderInfoItem']->value['kefu_user_rate'], ENT_QUOTES, 'UTF-8');?>
]
                            </span>
                        <?php }?>
                    </td>
                    <td class="price"><?php echo htmlspecialchars(smarty_helper_modifier_money_display(($_smarty_tpl->tpl_vars['orderInfoItem']->value['goods_amount']+$_smarty_tpl->tpl_vars['orderInfoItem']->value['shipping_fee']-$_smarty_tpl->tpl_vars['orderInfoItem']->value['discount'])), ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <label class="label label-success"><?php echo htmlspecialchars(smarty_helper_modifier_system_display_name($_smarty_tpl->tpl_vars['orderInfoItem']->value['system_id']), ENT_QUOTES, 'UTF-8');?>
</label><br/>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderInfoItem']->value['order_status_desc'], ENT_QUOTES, 'UTF-8');?>
，<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderInfoItem']->value['pay_status_desc'], ENT_QUOTES, 'UTF-8');?>

                    </td>
                    <td>
                        <a class="btn btn-small"
                           href="<?php echo smarty_helper_function_make_url(array('controller'=>"/Order/Order/Detail",'order_id'=>$_smarty_tpl->tpl_vars['orderInfoItem']->value['order_id']),$_smarty_tpl);?>
">详情</a>
                    </td>
                    </tr>
                <?php } ?>
            <?php }?>
            </tbody>
        </table>
        <!-- /订单列表 -->

        <!-- 分页 -->
        <div class="pagination pagination-right">
            <?php echo smarty_helper_function_paginator(array('count'=>(($tmp = @$_smarty_tpl->tpl_vars['totalCount']->value)===null||$tmp==='' ? 0 : $tmp),'pageNo'=>(($tmp = @$_smarty_tpl->tpl_vars['pageNo']->value)===null||$tmp==='' ? 0 : $tmp),'pageSize'=>(($tmp = @$_smarty_tpl->tpl_vars['pageSize']->value)===null||$tmp==='' ? 10 : $tmp)),$_smarty_tpl);?>

        </div>
        <!-- 分页 -->

    </div>
    <!-- /页面主体内容 -->

    <!-- 用户详情对话框 -->
    <div id="user_detail_dialog" class="modal hide fade">
    </div>
    <!-- 用户详情对话框 -->


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
