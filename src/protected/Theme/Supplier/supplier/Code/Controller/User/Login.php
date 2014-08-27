<?php

/**
 * @author QiangYu
 *
 * 用户注册
 *
 * */

namespace Controller\User;

use Core\Helper\Utility\Auth as AuthHelper;
use Core\Helper\Utility\Route as RouteHelper;
use Core\Helper\Utility\Validator;
use Core\Service\User\Supplier as UserSupplierService;

class Login extends \Controller\BaseController
{

    public function get($f3)
    {
        global $smarty;

        // 生成 smarty 的缓存 id
        $smartyCacheId = 'User|Login|get';

        enableSmartyCache(true, 3600); // 缓存 1 小时

        if ($smarty->isCached('user_login.tpl', $smartyCacheId)) {
            goto out_display;
        }

        out_display:
        $smarty->display('user_login.tpl', $smartyCacheId);
    }

    public function post($f3)
    {
        global $smarty;

        // 首先做参数合法性验证
        $validator = new Validator($f3->get('POST'));

        $input              = array();
        $input['user_name'] = $validator->required('用户名不能为空')->validate('user_name');
        $input['password']  = $validator->required('密码不能为空')->validate('password');
        $p_captcha          = $validator->required('验证码不能为空')->validate('captcha');

        if (!$this->validate($validator)) {
            goto out_fail;
        }

        // 检查验证码是否有效
        $captchaController = new \Controller\Image\Captcha();
        if (!$captchaController->validateCaptcha($p_captcha)) {
            $this->addFlashMessage("验证码错误");
            goto out_fail;
        }

        $supplierService = new UserSupplierService();
        // 验证用户登陆
        $supplier = $supplierService->doAuthSupplier($input['user_name'], $input['password']);

        if (!$supplier) {
            $this->addFlashMessage("登陆失败，用户名、密码错误");
            goto out_fail;
        }

        // 记录用户的登陆信息
        $supplierUserInfo = $supplier->toArray();
        unset($supplierUserInfo['password']); // 不要记录密码
        AuthHelper::saveAuthUser($supplierUserInfo);

        $this->addFlashMessage("登陆成功");

        // 跳转到用户之前看的页面，如果之前没有看过的页面那就回到首页
        RouteHelper::jumpBack($this, '/', true);

        return; // 这里正常返回

        out_fail: // 失败从这里入口
        $smarty->display('user_login.tpl', 'User|Login|post');
    }

}