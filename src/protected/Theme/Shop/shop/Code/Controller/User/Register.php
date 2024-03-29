<?php

/**
 * @author fubendong
 * 
 *
 * 用户注册
 *
 * */

namespace Controller\User;

use Core\Helper\Utility\Auth as AuthHelper;
use Core\Helper\Utility\ClientData;
use Core\Helper\Utility\Route as RouteHelper;
use Core\Helper\Utility\Validator;
use Core\Service\User\User as UserService;

class Register extends \Controller\BaseController {

    public function get($f3) {
        RouteHelper::reRoute($this, '/User/Login');
    }

    public function post($f3) {
        global $smarty;

        // 首先做参数合法性验证
        $validator = new Validator($f3->get('POST'));

        $input = array();
        $input['user_name'] = $validator->required('用户名不能为空')->minLength(2, '用户名最短为2个字符')->validate('user_name');
        $input['password'] = $validator->required('密码不能为空')->minLength(6, '密码最短为6个非空字符')->validate('password');
        $input['email'] = $validator->validate('email');
        $input['mobile_phone'] = $validator->digits('手机号格式不对')->validate('mobile_phone');
        $p_captcha = $validator->required('验证码不能为空')->validate('captcha');

        if (!$this->validate($validator)) {
            goto out_fail;
        }

        // 检查验证码是否有效
//        $captchaController = new \Controller\Image\Captcha();
//        if (!$captchaController->validateCaptcha($p_captcha)) {
//            $this->addFlashMessage("验证码错误");
//            goto out_fail;
//        }



        $uid = uc_user_register($input['user_name'], $input['password'], $input['email'],'','','',$input['mobile_phone']);
        if ($uid <= 0) {
            if ($uid == -1) {
                $msg = '用户名不合法';
                $this->addFlashMessage($msg);
                goto out_fail;
            } elseif ($uid == -2) {
                $msg = '包含要允许注册的词语';
                $this->addFlashMessage($msg);
                goto out_fail;
            } elseif ($uid == -3) {
                $msg = '用户名已经存在';
                $this->addFlashMessage($msg);
                goto out_fail;
            } elseif ($uid == -4) {
                $msg = 'Email 格式有误';
                $this->addFlashMessage($msg);
                goto out_fail;
            } elseif ($uid == -5) {
                $msg = 'Email 不允许注册';
                $this->addFlashMessage($msg);
                goto out_fail;
            } elseif ($uid == -6) {
                $msg = '该 Email 已经被注册';
                $this->addFlashMessage($msg);
                goto out_fail;
            } else {
                $msg = '未定义';
                $this->addFlashMessage($msg);
                goto out_fail;
            }
        }
        
//            $userService = new UserService();
//
//            // 检查用户是否已经注册
//            $isUserExist = $userService->isUserExist($input['user_name'], $input['email']);
//            if ($isUserExist) {
//                $this->addFlashMessage($isUserExist . '已经存在');
//                goto out_fail;
//            }
//
//            // 注册用户
//            $user = $userService->registerUser($input);
//            if (!$user) {
//                $this->addFlashMessage('用户注册失败，请稍后刷新页面重试');
//                goto out_fail;
//            }
//
//            // 记录用户的登陆信息
//            $userInfo = $user->toArray();
//            unset($userInfo['password']); // 不要记录密码
//            AuthHelper::saveAuthUser($userInfo, 'normal');
        // 设置用户名在网页显示
        ClientData::saveClientData(Login::$clientDataIsUserLoginKey, true);
        ClientData::saveClientData(Login::$clientDataUserNameDisplayKey, $input['user_name']);

        $this->addFlashMessage("注册成功");

        // 跳转到用户之前看的页面，如果之前没有看过的页面那就回到首页
        RouteHelper::jumpBack($this, '/', true);

        return; // 这里正常返回

        out_fail: // 失败，从这里出口
        $smarty->display('user_login.tpl', 'User|Register|post');
    }

}
