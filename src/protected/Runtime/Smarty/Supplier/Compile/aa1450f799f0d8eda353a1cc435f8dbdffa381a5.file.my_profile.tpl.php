<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-24 21:59:50
         compiled from "/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Supplier/supplier/Tpl/my_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71621759553f9efd6631fb9-97920722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa1450f799f0d8eda353a1cc435f8dbdffa381a5' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Supplier/supplier/Tpl/my_profile.tpl',
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
  'nocache_hash' => '71621759553f9efd6631fb9-97920722',
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
  'unifunc' => 'content_53f9efd66912c5_12188345',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f9efd66912c5_12188345')) {function content_53f9efd66912c5_12188345($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/fubendong/Sites/bzfshop/src/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
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
            $("#system_top_navbar li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/My/Profile'),$_smarty_tpl);?>
'])").addClass("active");
        });
        window.bz_set_breadcrumb_status.push({index: 0, text: '我的资料', link: window.location.href});
    </script>
    <!-- 页面主体内容 -->
    <div class="row bz_basic_content_block bz_box_shadow" style="padding:10px 10px 10px 10px;">
        <h4>我的资料</h4>

        <!-- 更新管理员信息的表单  -->
        <form class="form-horizontal" method="POST">

            <!-- 供货商详细信息 -->
            <div class="row">

                <div class="control-group">
                    <label class="control-label">供货商账号</label>

                    <div class="controls">
                        <input class="span3" type="text"
                               value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['suppliers_account']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                               disabled="disabled"/>
                        <span class="comments">(用于登陆)</span>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">供货商名称</label>

                    <div class="controls">
                        <input class="span3" type="text" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['suppliers_name']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                               disabled="disabled"/>
                        <span class="comments">(用于列表显示)</span>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">旧密码</label>

                    <div class="controls">
                        <input class="span3" type="password" name="oldpassword" minlength="6"/>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">新密码</label>

                    <div class="controls">
                        <input class="span3" type="password" name="password" minlength="6"/>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">确认密码</label>

                    <div class="controls">
                        <input class="span3" type="password" name="password_again"
                               data-validation-passwordagain="data-validation-passwordagain"/>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">电话</label>

                    <div class="controls">
                        <input class="span3" type="text" name="phone" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['phone']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">地址</label>

                    <div class="controls">
                        <input class="span5" type="text" name="address"
                               value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['address']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">供货商描述</label>

                    <div class="controls">
                        <textarea class="span5" rows="3" cols="40"
                                  disabled="disabled"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['suppliers_desc']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</textarea>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">&nbsp; </label>

                    <div class="controls">
                        <button type="submit" class="btn btn-success">
                            更新
                        </button>
                    </div>
                </div>

            </div>
            <!-- /供货商详细信息 -->

        </form>
        <!-- /更新管理员信息的表单  -->

    </div>
    <!-- /页面主体内容 -->



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
