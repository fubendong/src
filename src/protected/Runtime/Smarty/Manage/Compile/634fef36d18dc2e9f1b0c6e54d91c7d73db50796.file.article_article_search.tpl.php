<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-23 09:25:29
         compiled from "/Users/fubendong/Sites/bzfshop/src/protected/Theme/Manage/Tpl/article_article_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91401334053f7ed89489352-78323503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '634fef36d18dc2e9f1b0c6e54d91c7d73db50796' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/protected/Theme/Manage/Tpl/article_article_search.tpl',
      1 => 1408717013,
      2 => 'file',
    ),
    '1695f1c64ced7c5050abab9149a0935c89bf25ca' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/protected/Theme/Manage/Tpl/article_layout.tpl',
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
  'nocache_hash' => '91401334053f7ed89489352-78323503',
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
  'unifunc' => 'content_53f7ed89539c79_09025441',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f7ed89539c79_09025441')) {function content_53f7ed89539c79_09025441($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/fubendong/Sites/bzfshop/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
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
            $("#system_top_navbar li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Article/Index'),$_smarty_tpl);?>
'])").addClass("active");
        });
    </script>
    <div class="row bz_basic_content_block bz_box_shadow" style="padding:10px 10px 10px 10px;">

        <!-- 页面上方导航条 -->
        <div class="row">
            <ul id="article_tabbar" class="nav nav-tabs">
                <li>
                    <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Article/Article/Search'),$_smarty_tpl);?>
">文章列表</a>
                </li>
                <li>
                    <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Article/Category'),$_smarty_tpl);?>
">文章分类</a>
                </li>
            </ul>
        </div>
        <!-- /页面上方导航条 -->

        <!-- 文章管理主体内容 -->
        

    <!-- 用 JS 设置页面的导航菜单 -->
    <script type="text/javascript">
        window.bz_set_nav_status.push(function ($) {
            $("#article_tabbar li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Article/Article/Search'),$_smarty_tpl);?>
'])").addClass("active");
        });
        window.bz_set_breadcrumb_status.push({index: 1, text: '文章列表', link: window.location.href});
    </script>
    <!-- 页面主体内容 -->
    <div class="row">
        <h4>文章列表</h4>

        <!-- 这里是条件筛选区 -->
        <div class="row well well-small">
            <form class="form-horizontal form-horizontal-inline" method="GET" style="margin: 0px 0px 0px 0px;">

                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">文章ID</span>
                        <input class="span2" type="text" name="article_id"
                               pattern="[0-9]*" data-validation-pattern-message="文章ID应该是全数字"
                               value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['article_id']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                        <span class="input-label">文章标题</span>
                        <input class="span2" type="text" name="title" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                        <span class="input-label">文章描述</span>
                        <input class="span4" type="text" name="description" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['description']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <span class="input-label">文章分类</span>
                        <select class="span2 select2-simple" name="cat_id" data-placeholder="文章分类列表"
                                data-ajaxCallUrl="<?php echo smarty_helper_function_make_url(array('controller'=>"/Ajax/Article/ListCategory"),$_smarty_tpl);?>
"
                                data-option-value-key="meta_id" data-option-text-key="meta_name"
                                data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['cat_id']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                            <option value=""></option>
                        </select>
                        <span class="input-label">管理员</span>
                        <select class="span2 select2-simple" name="admin_user_id" data-placeholder="管理员列表"
                                data-ajaxCallUrl="<?php echo smarty_helper_function_make_url(array('controller'=>"/Ajax/AdminUser/ListUserIdName"),$_smarty_tpl);?>
"
                                data-option-value-key="user_id" data-option-text-key="user_name"
                                data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['admin_user_id']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                            <option value=""></option>
                        </select>
                        <span class="input-label">是否显示</span>
                        <select class="span2 select2-simple" name="is_open"
                                data-placeholder="过滤显示"
                                data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['is_open']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                            <option value=""></option>
                            <option value="0">否</option>
                            <option value="1">是</option>
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-success">查询</button>
                        &nbsp;&nbsp;
                        <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Article/Article/Create'),$_smarty_tpl);?>
" class="btn btn-info">新建</a>
                    </div>
                </div>
            </form>
        </div>
        <!-- /这里是条件筛选区 -->

        <!-- 管理员列表 -->
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>文章ID</th>
                <th>文章分类</th>
                <th width="20%">标题</th>
                <th width="30%">描述</th>
                <th>是否显示</th>
                <th>管理员</th>
                <th>最后更新</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if (isset($_smarty_tpl->tpl_vars['articleArray']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['articleItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['articleItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articleArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['articleItem']->key => $_smarty_tpl->tpl_vars['articleItem']->value) {
$_smarty_tpl->tpl_vars['articleItem']->_loop = true;
?>
                    <!-- 一个文章 -->
                    <tr>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['articleItem']->value['article_id'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['articleItem']->value['cat_name'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['articleItem']->value['title'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['articleItem']->value['description'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['articleItem']->value['is_open']>0) {?>
                                <i class="icon-ok"></i>
                            <?php } else { ?>
                                <i class="icon-remove"></i>
                            <?php }?>
                        </td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['articleItem']->value['admin_user_name'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td><?php echo htmlspecialchars(smarty_helper_modifier_localtime($_smarty_tpl->tpl_vars['articleItem']->value['update_time']), ENT_QUOTES, 'UTF-8');?>
</td>
                        <td>
                            <a class="btn btn-small"
                               href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Article/Article/Edit','article_id'=>$_smarty_tpl->tpl_vars['articleItem']->value['article_id']),$_smarty_tpl);?>
">编辑</a>
                        </td>
                    </tr>
                    <!-- /一个文章 -->
                <?php } ?>
            <?php }?>
            </tbody>
        </table>
        <!-- /管理员列表 -->

        <!-- 分页 -->
        <div class="pagination pagination-right">
            <?php echo smarty_helper_function_paginator(array('count'=>(($tmp = @$_smarty_tpl->tpl_vars['totalCount']->value)===null||$tmp==='' ? 0 : $tmp),'pageNo'=>(($tmp = @$_smarty_tpl->tpl_vars['pageNo']->value)===null||$tmp==='' ? 0 : $tmp),'pageSize'=>(($tmp = @$_smarty_tpl->tpl_vars['pageSize']->value)===null||$tmp==='' ? 10 : $tmp)),$_smarty_tpl);?>

        </div>
        <!-- 分页 -->

    </div>
    <!-- /页面主体内容 -->


        <!-- /文章管理主体内容 -->

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
