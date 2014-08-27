<!-- 商品分类 -->
<!-- div class="row navsort" -->

<div class='row allsort'>

    <div class='mc'>

        {{if isset($goodsCategoryTreeArray)}}

            {{foreach $goodsCategoryTreeArray as $goodsCategoryFirstItem}}
                <!-- 一级分类 -->
                <div class='item'>
                        <span><h3>
                                <a href="{{bzf_make_url controller="/Goods/Category" category_id=$goodsCategoryFirstItem['meta_id']}}">{{$goodsCategoryFirstItem['meta_name']}}</a>
                            </h3></span>
                </div>
                <!-- /一级分类 -->
            {{/foreach}}

        {{/if}}

        <!--<div class='extra'><a href='{{bzf_make_url controller="/"}}'>全部商品分类</a></div>-->

    </div>

</div>

<!-- /div -->
<!-- /商品分类 -->
