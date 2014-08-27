<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-25 20:24:50
         compiled from "/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Manage/Tpl/goods_edit_cron.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192155144553fb2b125393f6-29585272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc82079b1b7839535ae6fd96539c42a9a0d6a209' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Manage/Tpl/goods_edit_cron.tpl',
      1 => 1408786193,
      2 => 'file',
    ),
    '137682ea6b582b3dd5d856cd30bf9864e0edf39e' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Manage/Tpl/goods_edit_layout.tpl',
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
  'nocache_hash' => '192155144553fb2b125393f6-29585272',
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
  'unifunc' => 'content_53fb2b12628ae7_52894156',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fb2b12628ae7_52894156')) {function content_53fb2b12628ae7_52894156($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/Users/fubendong/Sites/bzfshop/src/src/protected/Framework/Smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include '/Users/fubendong/Sites/bzfshop/src/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
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
            $("#goods_edit_tab_left li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Edit/Cron','goods_id'=>$_smarty_tpl->tpl_vars['goods_id']->value),$_smarty_tpl);?>
'])").addClass("active");
        });
        window.bz_set_breadcrumb_status.push({index: 2, text: '定时任务', link: window.location.href});
    </script>
    <!-- 左侧每个标签的具体内容 -->
    <div class="tab-content">
        <div class="tab-pane active">

            <!-- 这里是条件筛选区 -->
            <div class="row well well-small">
                <button type="button" class="btn btn-info"
                        onclick="$('#goods_edit_cron_set_onsale_modal').modal({dynamic: true});">定时上下架
                </button>
                <button type="button" class="btn btn-info"
                        onclick="$('#goods_edit_cron_set_price_modal').modal({dynamic: true});">定时改价
                </button>
            </div>
            <!-- /这里是条件筛选区 -->

            <!-- 任务列表 -->
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>时间</th>
                    <th>用户</th>
                    <th>名称</th>
                    <th>描述</th>
                    <th>成功</th>
                    <th>消息</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php if (isset($_smarty_tpl->tpl_vars['cronTaskArray']->value)) {?>
                    <?php  $_smarty_tpl->tpl_vars['cronTask'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cronTask']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cronTaskArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cronTask']->key => $_smarty_tpl->tpl_vars['cronTask']->value) {
$_smarty_tpl->tpl_vars['cronTask']->_loop = true;
?>
                        <!-- 一个任务 -->
                        <?php if (0==$_smarty_tpl->tpl_vars['cronTask']->value['task_run_time']) {?>
                            <tr class="info">
                                <?php } elseif (0==$_smarty_tpl->tpl_vars['cronTask']->value['return_code']) {?>
                            <tr>
                                <?php } else { ?>
                            <tr class="error">
                        <?php }?>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cronTask']->value['task_id'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td><?php echo htmlspecialchars(smarty_helper_modifier_localtime($_smarty_tpl->tpl_vars['cronTask']->value['task_time']), ENT_QUOTES, 'UTF-8');?>

                            <br/><?php echo htmlspecialchars(smarty_helper_modifier_localtime($_smarty_tpl->tpl_vars['cronTask']->value['task_run_time']), ENT_QUOTES, 'UTF-8');?>

                        </td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cronTask']->value['user_name'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td><a rel="tooltip" data-placement="top"
                               data-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cronTask']->value['task_class'], ENT_QUOTES, 'UTF-8');?>
" href="#"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cronTask']->value['task_name'], ENT_QUOTES, 'UTF-8');?>
</a></td>
                        <td><a rel="tooltip" data-placement="top"
                               data-title="<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['cronTask']->value['task_param'],'"','\''), ENT_QUOTES, 'UTF-8');?>
"
                               href="#"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cronTask']->value['task_desc'], ENT_QUOTES, 'UTF-8');?>
</a></td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['cronTask']->value['task_run_time']>0) {?>
                                <?php if (0==$_smarty_tpl->tpl_vars['cronTask']->value['return_code']) {?>
                                    <i class="icon-ok"></i>
                                <?php } else { ?>
                                    <i class="icon-remove"></i>
                                <?php }?>
                            <?php }?>
                        </td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cronTask']->value['return_message'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td>
                            <?php if (0==$_smarty_tpl->tpl_vars['cronTask']->value['task_run_time']) {?>
                                <a class="btn btn-small"
                                   href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Misc/Cron/Remove','task_id'=>$_smarty_tpl->tpl_vars['cronTask']->value['task_id']),$_smarty_tpl);?>
">删除</a>
                            <?php }?>
                        </td>
                        </tr>
                        <!-- /一个任务 -->
                    <?php } ?>
                <?php }?>
                </tbody>
            </table>
            <!-- /任务列表 -->

            <!-- 分页 -->
            <div class="pagination pagination-right">
                <?php echo smarty_helper_function_paginator(array('count'=>(($tmp = @$_smarty_tpl->tpl_vars['totalCount']->value)===null||$tmp==='' ? 0 : $tmp),'pageNo'=>(($tmp = @$_smarty_tpl->tpl_vars['pageNo']->value)===null||$tmp==='' ? 0 : $tmp),'pageSize'=>(($tmp = @$_smarty_tpl->tpl_vars['pageSize']->value)===null||$tmp==='' ? 20 : $tmp)),$_smarty_tpl);?>

            </div>
            <!-- 分页 -->

        </div>
        <!-- /左侧每个标签的具体内容 -->

    </div>
    <!-- /商品编辑页面主体内容 -->

    <!-- 商品定时上下架 modal -->
    <div id="goods_edit_cron_set_onsale_modal" class="modal hide fade" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4>商品定时上下架</h4>
        </div>
        <form class="form-horizontal form-horizontal-inline" method="POST">

            <div class="modal-body">

                <div class="control-group">
                    <div class="controls">
                        <input type="hidden" name="goods_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goods_id']->value, ENT_QUOTES, 'UTF-8');?>
"/>
                        <span class="input-label">任务时间</span>

                        <div class="input-append date datetimepicker">
                            <input class="span2" type="text" data-validation-required-message="不能为空" name="task_time"/>
                                <span class="add-on">
                                    <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                                </span>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">任务操作</span>
                        <select class="span1 select2-simple" name="action">
                            <option value="Online">上架</option>
                            <option value="Offline">下架</option>
                        </select>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">添加任务</button>
                <button type="button" class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
            </div>
        </form>
    </div>
    <!-- /商品定时上下架 modal -->

    <!-- 商品定时改价格 modal -->
    <div id="goods_edit_cron_set_price_modal" class="modal hide fade" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4>商品定时改价</h4>
        </div>
        <form class="form-horizontal form-horizontal-inline" method="POST">

            <div class="modal-body">

                <div class="control-group">
                    <div class="controls">
                        <input type="hidden" name="goods_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goods_id']->value, ENT_QUOTES, 'UTF-8');?>
"/>
                        <input type="hidden" name="action" value="setPrice"/>
                        <span class="input-label">任务时间</span>

                        <div class="input-append date datetimepicker">
                            <input class="span2" type="text" data-validation-required-message="不能为空" name="task_time"/>
                                <span class="add-on">
                                    <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                                </span>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">商品标题</span>
                        <input type="text" class="span4" name="goods[goods_name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goods']->value['goods_name'], ENT_QUOTES, 'UTF-8');?>
"/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">商品价格</span>
                        <input type="text" class="span2" name="goods[shop_price]" pattern="^\d+(\.\d+)?$"
                               data-validation-required-message="销售价不能为空"
                               data-validation-pattern-message="销售价无效"
                               value="<?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['goods']->value['shop_price']), ENT_QUOTES, 'UTF-8');?>
"/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">价格提示</span>
                        <input type="text" class="span2" name="goods[shop_price_notice]"
                               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goods']->value['shop_price_notice'], ENT_QUOTES, 'UTF-8');?>
"/>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">添加任务</button>
                <button type="button" class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
            </div>
        </form>
    </div>
    <!-- /商品定时改价格 modal -->


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
