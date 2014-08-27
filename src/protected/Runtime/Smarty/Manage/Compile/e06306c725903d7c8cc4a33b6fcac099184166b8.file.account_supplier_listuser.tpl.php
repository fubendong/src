<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-24 16:52:54
         compiled from "/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Manage/Tpl/account_supplier_listuser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45228859453f9a7e63391d6-05035200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e06306c725903d7c8cc4a33b6fcac099184166b8' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Manage/Tpl/account_supplier_listuser.tpl',
      1 => 1408786193,
      2 => 'file',
    ),
    '5f5eb75300c4884cf467c9708ade5351a99d3329' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Manage/Tpl/account_layout.tpl',
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
  'nocache_hash' => '45228859453f9a7e63391d6-05035200',
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
  'unifunc' => 'content_53f9a7e63e1c96_72306204',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f9a7e63e1c96_72306204')) {function content_53f9a7e63e1c96_72306204($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/fubendong/Sites/bzfshop/src/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
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
            $("#system_top_navbar li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Account/Index'),$_smarty_tpl);?>
'])").addClass("active");
        });
    </script>
    <div class="row bz_basic_content_block bz_box_shadow" style="padding:10px 10px 10px 10px;">

        <!-- 页面上方导航条 -->
        <div class="row">
            <ul id="account_tabbar" class="nav nav-tabs">
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Account/User/Search'),$_smarty_tpl);?>
">用户</a></li>
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Account/User/Money'),$_smarty_tpl);?>
">用户资金</a></li>
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Account/Supplier/ListUser'),$_smarty_tpl);?>
">供货商</a></li>
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Account/Admin/ListUser'),$_smarty_tpl);?>
">管理员</a></li>
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Account/Role/ListRole'),$_smarty_tpl);?>
">管理员角色</a></li>
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Account/Admin/ListLog'),$_smarty_tpl);?>
">管理员日志</a></li>
            </ul>
        </div>
        <!-- /页面上方导航条 -->

        <!-- 账户管理主体内容 -->
        

    <!-- 用 JS 设置页面的导航菜单 -->
    <script type="text/javascript">
        window.bz_set_nav_status.push(function ($) {
            $("#account_tabbar li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Account/Supplier/ListUser'),$_smarty_tpl);?>
'])").addClass("active");
        });
        window.bz_set_breadcrumb_status.push({index: 1, text: '供货商列表', link: window.location.href});
    </script>
    <!-- 页面主体内容 -->
    <div class="row">
        <h4>供货商列表</h4>

        <!-- 这里是条件筛选区 -->
        <div class="row well well-small">
            <form class="form-horizontal form-horizontal-inline" method="GET" style="margin: 0px 0px 0px 0px;">
                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">供货商名称</span>
                        <input class="span2" type="text" name="suppliers_name" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['suppliers_name']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                        <span class="input-label">供货商描述</span>
                        <input class="span2" type="text" name="suppliers_desc" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['suppliers_desc']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit" class="btn btn-success">查询</button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Account/Supplier/Create'),$_smarty_tpl);?>
" class="btn btn-info">添加供货商</a>
                    </div>
                </div>
            </form>
        </div>
        <!-- /这里是条件筛选区 -->

        <!-- 供货商列表 -->
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>供货商ID</th>
                <th>供货商账号</th>
                <th>供货商名称</th>
                <th width="50%">供货商描述</th>
                <th width="5%">状态</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if (isset($_smarty_tpl->tpl_vars['supplierUserArray']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['supplierUserItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supplierUserItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['supplierUserArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['supplierUserItem']->key => $_smarty_tpl->tpl_vars['supplierUserItem']->value) {
$_smarty_tpl->tpl_vars['supplierUserItem']->_loop = true;
?>
                    <!-- 一个供货商 -->
                    <tr>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplierUserItem']->value['suppliers_id'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplierUserItem']->value['suppliers_account'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplierUserItem']->value['suppliers_name'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplierUserItem']->value['suppliers_desc'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td><?php if ($_smarty_tpl->tpl_vars['supplierUserItem']->value['is_check']) {?>正常<?php } else { ?>停用<?php }?></td>
                        <td>
                            <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Account/Supplier/Edit','suppliers_id'=>$_smarty_tpl->tpl_vars['supplierUserItem']->value['suppliers_id']),$_smarty_tpl);?>
"
                               class="btn btn-small">编辑</a>
                        </td>
                    </tr>
                    <!-- /一个供货商 -->
                <?php } ?>
            <?php }?>
            </tbody>
        </table>
        <!-- /供货商列表 -->

        <!-- 分页 -->
        <div class="pagination pagination-right">
            <?php echo smarty_helper_function_paginator(array('count'=>(($tmp = @$_smarty_tpl->tpl_vars['totalCount']->value)===null||$tmp==='' ? 0 : $tmp),'pageNo'=>(($tmp = @$_smarty_tpl->tpl_vars['pageNo']->value)===null||$tmp==='' ? 0 : $tmp),'pageSize'=>(($tmp = @$_smarty_tpl->tpl_vars['pageSize']->value)===null||$tmp==='' ? 10 : $tmp)),$_smarty_tpl);?>

        </div>
        <!-- 分页 -->

    </div>
    <!-- /页面主体内容 -->


        <!-- /账户管理主体内容 -->

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
