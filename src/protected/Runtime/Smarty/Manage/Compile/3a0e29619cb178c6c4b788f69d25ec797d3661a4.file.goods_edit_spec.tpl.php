<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-23 00:38:31
         compiled from "/Users/fubendong/Sites/bzfshop/src/protected/Theme/Manage/Tpl/goods_edit_spec.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1463026653f77207d07d12-79660926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a0e29619cb178c6c4b788f69d25ec797d3661a4' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/protected/Theme/Manage/Tpl/goods_edit_spec.tpl',
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
  'nocache_hash' => '1463026653f77207d07d12-79660926',
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
  'unifunc' => 'content_53f77207e06111_20471009',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f77207e06111_20471009')) {function content_53f77207e06111_20471009($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/fubendong/Sites/bzfshop/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
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
            $("#goods_edit_tab_left li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Edit/Spec','goods_id'=>$_smarty_tpl->tpl_vars['goods_id']->value),$_smarty_tpl);?>
'])").addClass("active");
        });
        window.bz_set_breadcrumb_status.push({index: 2, text: '商品属性', link: window.location.href});
    </script>
    <form class="form-horizontal form-horizontal-inline form-dirty-check" method="POST"
          style="margin: 0px 0px 0px 0px;">

        <!-- 左侧每个标签的具体内容 -->
        <div class="tab-content">
            <div class="tab-pane active well">

                <!-- 根据商品类型生成的价格选择属性 -->
                <div class="row" id="goods_edit_spec_div">
                    <button type="button" class="btn btn-danger pull-right"
                            onclick="jQuery('#goods_edit_spec_div').html('');">清空设置
                    </button>
                    <!-- 规格设定 -->
                    <div class="control-group">
                        <div class="controls">
                            <span class="input-label" rel="tooltip" data-placement="top"
                                  data-title="商品选择">规格名称</span>
                            <input class="span1" name="goodsSpecNameArray[]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsSpecNameArray']->value[0])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                                   type="text"
                                   rel="tooltip" data-placement="top"
                                   data-title="第一级选择，比如 颜色"
                                   data-validation-required-message="名称不能为空"/>
                            <input class="span1" name="goodsSpecNameArray[]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsSpecNameArray']->value[1])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                                   type="text"
                                   rel="tooltip" data-placement="top"
                                   data-title="第二级选择，比如 尺码" style="margin-left: 20px;"/>
                            <input class="span1" name="goodsSpecNameArray[]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsSpecNameArray']->value[2])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                                   type="text"
                                   rel="tooltip" data-placement="top"
                                   data-title="第三级选择，比如 男款/女款" style="margin-left: 20px;"/>
                            <span class="comments">我们最多支持三级选择，如果只用一级选择那后面两个就空着别填写</span>
                        </div>
                    </div>
                    <!-- /规格设定 -->

                    <?php if (!empty($_smarty_tpl->tpl_vars['goodsSpecValue1Array']->value)) {?>
                        <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['index']->step = 1;$_smarty_tpl->tpl_vars['index']->total = (int) ceil(($_smarty_tpl->tpl_vars['index']->step > 0 ? count($_smarty_tpl->tpl_vars['goodsSpecValue1Array']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['goodsSpecValue1Array']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['index']->step));
if ($_smarty_tpl->tpl_vars['index']->total > 0) {
for ($_smarty_tpl->tpl_vars['index']->value = 0, $_smarty_tpl->tpl_vars['index']->iteration = 1;$_smarty_tpl->tpl_vars['index']->iteration <= $_smarty_tpl->tpl_vars['index']->total;$_smarty_tpl->tpl_vars['index']->value += $_smarty_tpl->tpl_vars['index']->step, $_smarty_tpl->tpl_vars['index']->iteration++) {
$_smarty_tpl->tpl_vars['index']->first = $_smarty_tpl->tpl_vars['index']->iteration == 1;$_smarty_tpl->tpl_vars['index']->last = $_smarty_tpl->tpl_vars['index']->iteration == $_smarty_tpl->tpl_vars['index']->total;?>
                            <!-- 一个规格选择 -->
                            <div class="control-group">
                                <div class="controls">
                            <span class="input-label" rel="tooltip" data-placement="top"
                                  data-title="商品一个选择，中间不能有逗号">一个选择</span>
                                    <input class="span1" name="goodsSpecValue1Array[]"
                                           data-no-validation="true"
                                           value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsSpecValue1Array']->value[$_smarty_tpl->tpl_vars['index']->value])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
" type="text"/>
                                    <input class="span1" name="goodsSpecValue2Array[]"
                                           data-no-validation="true"
                                           value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsSpecValue2Array']->value[$_smarty_tpl->tpl_vars['index']->value])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
" type="text"
                                           style="margin-left: 20px;"/>
                                    <input class="span1" name="goodsSpecValue3Array[]"
                                           data-no-validation="true"
                                           value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsSpecValue3Array']->value[$_smarty_tpl->tpl_vars['index']->value])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
" type="text"
                                           style="margin-left: 20px;"/>
                                    <span class="input-label">商品库存</span>
                                    <input class="span1" name="goodsNumberArray[]"
                                           data-no-validation="true"
                                           rel="tooltip" data-placement="top"
                                           data-title="当前规格有多少库存" style="width:50px;"
                                           value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsNumberArray']->value[$_smarty_tpl->tpl_vars['index']->value])===null||$tmp==='' ? '0' : $tmp), ENT_QUOTES, 'UTF-8');?>
" type="text"/>
                                    <span class="input-label">属性加价</span>
                                    <input class="span1" name="goodsSpecAddPriceArray[]"
                                           data-no-validation="true"
                                           rel="tooltip" data-placement="top"
                                           data-title="这个规格加多少钱，大于等于0"
                                           style="width:30px;"
                                           value="<?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['goodsSpecAddPriceArray']->value[$_smarty_tpl->tpl_vars['index']->value]), ENT_QUOTES, 'UTF-8');?>
" type="text"/>
                                    <span class="input-label">商品货号</span>
                                    <input class="span1" name="goodsSnArray[]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsSnArray']->value[$_smarty_tpl->tpl_vars['index']->value])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                                           type="text" data-no-validation="true"
                                           rel="tooltip" data-placement="top"
                                           data-title="如果这个规格对应一个另外的货号"/>
                                    <span class="input-label">关联头图</span>
                                    <img class="lazyload" src="<?php echo smarty_helper_get_asset_url(array('asset'=>'img/blank.gif'),$_smarty_tpl);?>
"
                                         data-original="<?php echo smarty_helper_function_thumb_image(array('img_id'=>(($tmp = @$_smarty_tpl->tpl_vars['imgIdArray']->value[$_smarty_tpl->tpl_vars['index']->value])===null||$tmp==='' ? '' : $tmp)),$_smarty_tpl);?>
"
                                         onclick="bZF.goods_edit_spec_select_image_modal(this.parentNode);"/>
                                    <input type="hidden" data-no-validation="true" name="imgIdArray[]"
                                           value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['imgIdArray']->value[$_smarty_tpl->tpl_vars['index']->value])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                                    &nbsp;&nbsp;
                                    <?php if ($_smarty_tpl->tpl_vars['index']->value==0) {?>
                                        <button type="button" class="btn btn-mini btn-info"
                                                onclick="bZF.goods_edit_spec_add_control_group(this);"><i
                                                    class="icon-plus"></i></button>
                                    <?php } else { ?>
                                        <button type="button" class="btn btn-mini btn-danger"
                                                onclick="bZF.goods_edit_spec_remove_control_group(this);"><i
                                                    class="icon-remove"></i></button>
                                        <button onclick="bZF.moveNodePrev(this.parentNode.parentNode);return false;"
                                                class="btn btn-mini btn-info" type="button">
                                            <i class="icon-arrow-up"></i>
                                        </button>
                                        <button onclick="bZF.moveNodeNext(this.parentNode.parentNode);return false;"
                                                class="btn btn-mini btn-info" type="button">
                                            <i class="icon-arrow-down"></i>
                                        </button>
                                    <?php }?>
                                </div>
                            </div>
                            <!-- /一个规格选择 -->
                        <?php }} ?>
                    <?php } else { ?>
                        <!-- 一个规格选择 -->
                        <div class="control-group">
                            <div class="controls">
                            <span class="input-label" rel="tooltip" data-placement="top"
                                  data-title="商品一个选择">一个选择</span>
                                <input class="span1" name="goodsSpecValue1Array[]" value="" type="text"
                                       data-validation-required-message="值不能为空"/>
                                <input class="span1" name="goodsSpecValue2Array[]" value="" type="text"
                                       style="margin-left: 20px;"/>
                                <input class="span1" name="goodsSpecValue3Array[]" value="" type="text"
                                       style="margin-left: 20px;"/>
                                <span class="input-label">商品库存</span>
                                <input class="span1" name="goodsNumberArray[]"
                                       rel="tooltip" data-placement="top"
                                       data-title="当前规格有多少库存"
                                       pattern="[0-9]+" style="width:50px;"
                                       data-validation-pattern-message="库存无效" value="-1" type="text"/>
                                <span class="input-label">属性加价</span>
                                <input class="span1" name="goodsSpecAddPriceArray[]"
                                       rel="tooltip" data-placement="top"
                                       data-title="这个规格加多少钱，大于等于0"
                                       pattern="^\d+(\.\d+)?$" style="width:30px;"
                                       data-validation-pattern-message="价格无效" value="-1" type="text"/>
                                <span class="input-label">商品货号</span>
                                <input class="span1" name="goodsSnArray[]" value="" type="text"
                                       rel="tooltip" data-placement="top"
                                       data-title="如果这个规格对应一个另外的货号"/>
                                <span class="input-label">关联头图</span>
                                <img src="<?php echo smarty_helper_get_asset_url(array('asset'=>'img/blank.gif'),$_smarty_tpl);?>
"
                                     onclick="bZF.goods_edit_spec_select_image_modal(this.parentNode);"/>
                                <input type="hidden" name="imgIdArray[]" value="0"/>
                                &nbsp;&nbsp;
                                <button type="button" class="btn btn-mini btn-info"
                                        onclick="bZF.goods_edit_spec_add_control_group(this);"><i
                                            class="icon-plus"></i></button>
                                <!-- button type="button" class="btn btn-mini btn-danger"
                                        onclick="bZF.goods_edit_spec_remove_control_group(this);"><i
                                            class="icon-remove"></i></button -->
                            </div>
                        </div>
                        <!-- /一个规格选择 -->
                    <?php }?>

                </div>
                <!-- /根据商品类型生成的价格选择属性  -->

            </div>
        </div>
        <!-- /左侧每个标签的具体内容 -->

        <!-- 提交按钮 -->
        <div class="row" style="text-align: center;">
            <button type="submit" class="btn btn-success">保存修改</button>
        </div>
        <!-- /提交按钮 -->

    </form>
    <!-- 选择商品的图片 modal -->
    <div id="goods_edit_spec_select_goods_image_modal" class="modal hide fade" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4>选择关联头图</h4>
        </div>

        <div class="modal-body" style="height: 50px;">
            <input type="hidden" name="goods_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goods_id']->value, ENT_QUOTES, 'UTF-8');?>
"/>
            <select class="span2 select2-simple"
                    data-placeholder="请选择头图"
                    data-ajaxCallUrl="<?php echo smarty_helper_function_make_url(array('controller'=>"/Ajax/Goods/GalleryThumb",'goods_id'=>$_smarty_tpl->tpl_vars['goods_id']->value),$_smarty_tpl);?>
"
                    data-option-value-key="img_id" data-option-text-key="thumb_url"
                    data-option-value-image="true">
                <option value=""></option>
            </select>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-success" onclick="bZF.goods_edit_spec_select_image_confirm();">确定
            </button>
            <button type="button" class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
        </div>
    </div>
    <!-- /选择商品的图片 modal -->



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

            /*********************************** goods_edit_spec.tpl 编辑商品的 规格 ********************************************/

                // 添加一个 control group
            bZF.goods_edit_spec_add_control_group = function (elem) {
                // 取父节点 control group
                var controlGroupNode = elem.parentNode.parentNode;
                var cloneNode = controlGroupNode.cloneNode(true);
                // 删除多余的 help-block
                $('div.help-block', cloneNode).remove();
                // 把按钮替换成删除按钮
                $('button', cloneNode).remove();
                $('div.controls', cloneNode).append($('<button type="button" class="btn btn-mini btn-danger"  onclick="bZF.goods_edit_spec_remove_control_group(this);"><i class="icon-remove"></i></button>&nbsp;<button onclick="bZF.moveNodePrev(this.parentNode.parentNode);return false;" class="btn btn-mini btn-info" type="button"><i class="icon-arrow-up"></i></button>&nbsp;<button onclick="bZF.moveNodeNext(this.parentNode.parentNode);return false;"  class="btn btn-mini btn-info" type="button"><i class="icon-arrow-down"></i></button>'));
                // 插入节点
                $(cloneNode).insertAfter(controlGroupNode);
                // 做 html enhance
                //bZF.enhanceHtml(cloneNode);
            };

            // 删除一个 control group
            bZF.goods_edit_spec_remove_control_group = function (elem) {
                // 取父节点 control group
                var controlGroupNode = elem.parentNode.parentNode;
                $(controlGroupNode).remove();
            };

            // 打开对话框，选择规格关联的商品头图
            bZF.goods_edit_spec_select_image_modal = function (elem) {
                var $dialog = jQuery('#goods_edit_spec_select_goods_image_modal');
                $dialog.data('callObject', elem);
                $dialog.modal();
            };

            // 确认选择了某个头图
            bZF.goods_edit_spec_select_image_confirm = function () {
                var $option = $('#goods_edit_spec_select_goods_image_modal select').find('option:selected');
                var imgId = parseInt($option.val());
                var imgUrl = $option.text();
                imgId = isNaN(imgId) ? 0 : imgId;

                // 无效图片
                if (imgId <= 0) {
                    return;
                }

                // 取得绑定的 callObject
                var $dialog = jQuery('#goods_edit_spec_select_goods_image_modal');
                var callObject = $dialog.data('callObject');
                if (!callObject) {
                    console.log('goods_edit_spec_select_goods_image_modal has no callObject');
                    return;
                }

                // 设置用户的选择
                $('img', callObject).attr('src', imgUrl);
                $('input[name="imgIdArray[]"]', callObject).val(imgId);

                // 关闭对话框
                $dialog.modal('hide');
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
