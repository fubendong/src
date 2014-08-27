<?php

/**
 * @author QiangYu
 *
 * 网站的缺省控制器，网站首页
 *
 * */

namespace Controller\Shop;

use Core\Helper\Utility\QueryBuilder;
use Core\Helper\Utility\Route as RouteHelper;
use Core\Helper\Utility\Utils;
use Core\Plugin\PluginHelper;
use Core\Plugin\ThemeHelper;
use Core\Search\SearchHelper;

class Index extends \Controller\BaseController
{

    private $searchExtraCondArray;
    private $searchFieldSelector;

    public function __construct()
    {
        $currentThemeInstance = ThemeHelper::getCurrentSystemThemeInstance();

        // 热门
        // 热门
        $this->hotgoodArray = array(
            array('is_delete = 0 AND is_on_sale = 1 AND is_alone_sale = 1 AND is_hot = 1'),
            array(QueryBuilder::buildGoodsFilterForSystem($currentThemeInstance->getGoodsFilterSystemArray())),
        );
//        $tmp = QueryBuilder::buildGoodsFilterForSystem($currentThemeInstance->getGoodsFilterSystemArray());
//        var_dump($tmp);
        


        // 精品推荐
        $this->goodbestArray = array(
            array('is_delete = 0 AND is_on_sale = 1 AND is_alone_sale = 1 AND is_best = 1'),
            array(QueryBuilder::buildGoodsFilterForSystem($currentThemeInstance->getGoodsFilterSystemArray())),
        );

        // 新品推荐
        $this->newgoodArray = array(
            array('is_delete = 0 AND is_on_sale = 1 AND is_alone_sale = 1 AND is_new = 1'),
            array(QueryBuilder::buildGoodsFilterForSystem($currentThemeInstance->getGoodsFilterSystemArray())),
        );


        // 选择我们需要的字段
        $this->searchFieldSelector =
            'goods_id, goods_name, market_price, shop_price, goods_number';
    }

    public function get($f3)
    {
        global $smarty;

        // 生成 smarty 的缓存 id
        $smartyCacheId = 'Shop|Index';

        // 开启并设置 smarty 缓存时间
        enableSmartyCache(true, bzf_get_option_value('smarty_cache_time_shop_index'));

        if ($smarty->isCached('shop_index.tpl', $smartyCacheId)) {
            goto out_display;
        }

        // 滑动图片广告
        $shop_index_adv_slider = json_decode(bzf_get_option_value('shop_index_adv_slider'), true);
//        var_dump($shop_index_adv_slider);

        if (!empty($shop_index_adv_slider)) {
            $smarty->assign('shop_index_adv_slider', $shop_index_adv_slider);
        }

        // 新品推荐
        $newGoodsArray =
            SearchHelper::search(
                SearchHelper::Module_Goods,
                $this->searchFieldSelector,
                $this->newgoodArray,
                array(array('goods_id', 'desc')),
                0,
                8 // 循环显示 40 个商品
            );

        if (!empty($newGoodsArray)) {
            $smarty->assign('newGoodsArray', $newGoodsArray);
        }
//        var_dump($newGoodsArray);
        
//        // 热门推荐
        $hotGoodsArray =
            SearchHelper::search(
                SearchHelper::Module_Goods,
                $this->searchFieldSelector,
                $this->hotgoodArray,
                array(array('goods_id', 'desc')),
                0,
                8 // 循环显示 40 个商品
            );

        if (!empty($hotGoodsArray)) {
            $smarty->assign('hotGoodsArray', $hotGoodsArray);
        }
//        var_dump($hotGoodsArray);
        
//
//        // 精品推荐
//        $GoodsBestArray =
//            SearchHelper::search(
//                SearchHelper::Module_Goods,
//                $this->searchFieldSelector,
//                $this->goodbestArray,
//                array(array('goods_id', 'desc')),
//                0,
//                5 // 循环显示 40 个商品
//            );
//
//        if (!empty($GoodsBestArray)) {
//            $smarty->assign('GoodsBestArray', $GoodsBestArray);
//        }

        // 广告 advBlock
//        $shop_index_advblock_json_data =
//            json_decode(bzf_get_option_value('shop_index_advblock_json_data'), true);
//        if (!empty($shop_index_advblock_json_data)) {
//
//            // 生成随机的 id 号给 html 使用
//            foreach ($shop_index_advblock_json_data as &$advBlockObject) {
//                $advBlockObject['id'] = Utils::generateRandomHtmlId();
//                foreach ($advBlockObject['advBlockImageArray'] as &$advBlockImage) {
//                    $advBlockImage['id'] = Utils::generateRandomHtmlId();
//                }
//            }
//
//            $smarty->assign(
//                'shop_index_advblock_json_data',
//                $shop_index_advblock_json_data
//            );
//
//        }

        // 移动端对应的 URL，用于百度页面适配
        $smarty->assign(
            'currentPageMobileUrl',
            RouteHelper::makeShopSystemUrl(PluginHelper::SYSTEM_MOBILE, '/')
        );

        out_display:
        $smarty->assign('seo_title', $smarty->getTemplateVars('seo_title') . ',' . $f3->get('HOST'));
        $smarty->display('shop_index.tpl', $smartyCacheId);
    }

    public function post($f3)
    {
        $this->get($f3);
    }

}
