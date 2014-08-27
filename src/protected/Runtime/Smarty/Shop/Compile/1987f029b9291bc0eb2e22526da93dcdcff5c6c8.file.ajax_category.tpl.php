<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-23 20:20:40
         compiled from "/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Shop/shop/Tpl/ajax_category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99237609053f887188b9cb7-35022645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1987f029b9291bc0eb2e22526da93dcdcff5c6c8' => 
    array (
      0 => '/Users/fubendong/Sites/bzfshop/src/src/protected/Theme/Shop/shop/Tpl/ajax_category.tpl',
      1 => 1408789051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99237609053f887188b9cb7-35022645',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'goodsCategoryTreeArray' => 0,
    'goodsCategoryFirstItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53f887188e9d52_06230070',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f887188e9d52_06230070')) {function content_53f887188e9d52_06230070($_smarty_tpl) {?><!-- 商品分类 -->
<!-- div class="row navsort" -->

<div class='row allsort'>

    <div class='mc'>

        <?php if (isset($_smarty_tpl->tpl_vars['goodsCategoryTreeArray']->value)) {?>

            <?php  $_smarty_tpl->tpl_vars['goodsCategoryFirstItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goodsCategoryFirstItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goodsCategoryTreeArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goodsCategoryFirstItem']->key => $_smarty_tpl->tpl_vars['goodsCategoryFirstItem']->value) {
$_smarty_tpl->tpl_vars['goodsCategoryFirstItem']->_loop = true;
?>
                <!-- 一级分类 -->
                <div class='item'>
                        <span><h3>
                                <a href="<?php echo smarty_helper_function_make_url(array('controller'=>"/Goods/Category",'category_id'=>$_smarty_tpl->tpl_vars['goodsCategoryFirstItem']->value['meta_id']),$_smarty_tpl);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsCategoryFirstItem']->value['meta_name'], ENT_QUOTES, 'UTF-8');?>
</a>
                            </h3></span>
                </div>
                <!-- /一级分类 -->
            <?php } ?>

        <?php }?>

        <!--<div class='extra'><a href='<?php echo smarty_helper_function_make_url(array('controller'=>"/"),$_smarty_tpl);?>
'>全部商品分类</a></div>-->

    </div>

</div>

<!-- /div -->
<!-- /商品分类 -->
<?php }} ?>
