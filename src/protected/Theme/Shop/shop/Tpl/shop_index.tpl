{{extends file='layout.tpl'}}
{{block name=main_body}}

<!-- 用 JS 设置页面的导航菜单 -->
<script type="text/javascript">
    window.bzf_set_nav_status.push(function ($) {
        $("#bzf_header_nav_menu li:has(a[href='{{bzf_make_url controller='/'}}'])").addClass("active");
		
		$(".show_box li:nth-child(4n)").addClass('last')
	});

</script>
<!-- 主题内容 row -->
<div class="row" style="background-color: white;padding-bottom: 10px;">

<!-- 首页，总是显示商品分类 -->
<script type="text/javascript">
    var bZF = {};
    window.bZF = bZF;
    bZF.always_show_bzf_header_dropdown_menu = true;
</script>
<!-- /首页，总是显示商品分类 -->

<!-- 头部广告图片切换栏 -->
<div class="row">

    <!-- 左侧商品分类 -->
    <div class="span3 bzf_shop_index_head_category_back_panel">

    </div>
    <!-- /左侧商品分类 -->

    <!-- 左侧商品分类 -->
    <div class="span9 bzf_shop_index_head_slide_image_panel">

        <div class="quake-slider" style="">
            <div class="quake-slider-images">

                {{if !isset($shop_index_adv_slider)}}
                    <a target="_blank" href="javascript:">
                        <img src="{{bzf_get_asset_url asset='img/placeholder_780x350_black.gif'}}"/>
                    </a>
                    <a target="_blank" href="javascript:">
                        <img src="{{bzf_get_asset_url asset='img/placeholder_780x350_gray.gif'}}"/>
                    </a>
                {{else}}

                    {{foreach $shop_index_adv_slider as $sliderItem}}
                        <a target="{{$sliderItem['target']}}" href="{{$sliderItem['url']}}">
                            <img src="{{$sliderItem['image']}}"/>
                        </a>
                    {{/foreach}}

                {{/if}}

            </div>
        </div>

    </div>
    <!-- /左侧商品分类 -->
	
	<!-- 网站公告 -->
		<div class="nav-right">
		<div class="title">试用指南</div>
		
		<ul class="help">
			<li class="help-1"><i></i><a href="http://www.meishai.com/pop/1" target="_blank">如何申请免费试用</a></li>
			<li class="help-2"><i></i><a href="http://www.meishai.com/pop/42" target="_blank">免费试用行为规范</a></li>
			<li class="help-3"><i></i><a href="http://www.meishai.com/pop/44" target="_blank">如何提交试用报告</a></li>
			<li class="help-4"><i></i><a href="http://www.meishai.com/pop/43" target="_blank">试用报告审核标准</a></li>
			<li class="help-5"><i></i><a href="http://www.meishai.com/pop/26" target="_blank">申请试用常见问题</a></li>
		</ul>
		<ul class="app">
			<li><a href="http://www.meishai.com/pro" target="_blank">商家入驻&gt;</a></li>
			<li><a href="http://www.meishai.com/xizhe" target="_blank">喜折报名&gt;</a></li>
		</ul>
	</div>
	<!-- /网站公告 -->

</div>
<!-- /头部广告图片切换栏 -->


<!-- 网站公告、店长商品推荐 -->

<!-- /网站公告、店长商品推荐 -->


	<div class="recom_box">
		<h3>新品推荐</h3>
		<div class="show_box">
			<ul>
			{{foreach $newGoodsArray as $goodItem}}
				<li>
					<div class="block">
						<div class="clear"></div>
						<div class="thumb"><a href="{{bzf_make_url controller='/Goods/View' goods_id=$goodItem['goods_id']}}" title="{{$goodItem['goods_name']}}" target="_blank">
							
                                          <img class="lazyload" src="{{bzf_get_asset_url asset='img/blank.gif'}}"
                                         data-original="{{bzf_goods_thumb_image goods_id=$goodItem['goods_id']}}" alt="{{$goodItem['goods_name']}}" width="230" height="230"/>
                                          
						</a><cite></cite></div>
						<div class="title"><a href="{{bzf_make_url controller='/Goods/View' goods_id=$goodItem['goods_id']}}" title="{{$goodItem['goods_name']}}" target="_blank">{{$goodItem['goods_name']}}</a></div>
						<div class="count"><span class="left">限量：<i>{{$goodItem['goods_number']}}</i>份</span><span class="right">价值：<i>{{$goodItem['shop_price']|bzf_money_display}}</i>元</span></div>
						<div class="appbut">
							<a href="{{bzf_make_url controller='/Goods/View' goods_id=$goodItem['goods_id']}}" class="app" target="_blank">免费申请</a>
						</div>
						<div class="clear"></div>
					</div>
				</li>
			{{/foreach}}
			</ul>
		</div>
	</div>
	<div class="recom_box">
		<h3>热门推荐</h3>
		<div class="show_box">
			<ul>
                            {{foreach $hotGoodsArray as $goodItem}}
                           <li>
					<div class="block">
						<div class="clear"></div>
						<div class="thumb"><a href="{{bzf_make_url controller='/Goods/View' goods_id=$goodItem['goods_id']}}" title="{{$goodItem['goods_name']}}" target="_blank">
							
                                          <img class="lazyload" src="{{bzf_get_asset_url asset='img/blank.gif'}}"
                                         data-original="{{bzf_goods_thumb_image goods_id=$goodItem['goods_id']}}" alt="{{$goodItem['goods_name']}}" width="230" height="230"/>
                                          
						</a><cite></cite></div>
						<div class="title"><a href="{{bzf_make_url controller='/Goods/View' goods_id=$goodItem['goods_id']}}" title="{{$goodItem['goods_name']}}" target="_blank">{{$goodItem['goods_name']}}</a></div>
						<div class="count"><span class="left">限量：<i>{{$goodItem['goods_number']}}</i>份</span><span class="right">价值：<i>{{$goodItem['shop_price']|bzf_money_display}}</i>元</span></div>
						<div class="appbut">
							<a href="{{bzf_make_url controller='/Goods/View' goods_id=$goodItem['goods_id']}}" class="app" target="_blank">免费申请</a>
						</div>
						<div class="clear"></div>
					</div>
				</li>
                            {{/foreach}}
				
				
			</ul>
		</div>
	</div>
</div>
<!-- /主题内容 row -->

{{/block}}
