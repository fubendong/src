<?php

/**
 * @author fubendong
 *
 * 申请试用接口
 *
 * */

namespace Controller\Ajax;

use Core\Helper\Utility\Ajax;
use Core\Helper\Utility\ClientData as ClientDataHelper;

class ShiyongApply extends \Controller\BaseController
{
    /**
     * 当前 Controller 不是输出 html，所以不要做针对 html 的任何优化
     */
    protected $isHtmlController = false;

    public function get($f3)
    {
        Ajax::header();
        $clientData = ClientDataHelper::getClientDataArray();
        if (null == $clientData) {
            $clientData = array();
        }
        echo Ajax::buildResult(null, null, json_encode($clientData));
    }

    public function post($f3)
    {


    }

}