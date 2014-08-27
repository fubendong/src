<?php

/**
 * @author QiangYu
 *
 * 用户登陆
 *
 * */

namespace Controller\User;

use Core\Helper\Utility\Auth as AuthHelper;
use Core\Helper\Utility\ClientData;
use Core\Helper\Utility\Route as RouteHelper;
use Core\Helper\Utility\Validator;
use Core\Service\User\User as UserService;

class Login extends \Controller\BaseController
{

    public static $clientDataUserNameDisplayKey = 'userNameDisplay';
    public static $clientDataIsUserLoginKey = 'isUserLogin';

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

//        // 检查验证码是否有效
//        $captchaController = new \Controller\Image\Captcha();
//        if (!$captchaController->validateCaptcha($p_captcha)) {
//            $this->addFlashMessage("验证码错误");
//            goto out_fail;
//        }
//        echo 3;
//        var_dump($input);
//        exit;
//        exit;

        list($uid, $username, $password, $email) = uc_user_login($input['user_name'], $input['password']);


        setcookie('shop_auth', '', -86400);
        if($uid > 0) {
            //用户登陆成功，设置 Cookie，加密直接用 uc_authcode 函数，用户使用自己的函数
            setcookie('shop_auth', uc_authcode($uid."\t".$username, 'ENCODE'));

            //生成同步登录的代码
            $ucsynlogin = uc_user_synlogin($uid);
            echo '登录成功'.$ucsynlogin.'<br><a href="'.$_SERVER['PHP_SELF'].'">继续</a>';
//            $userInfo = $user->toArray();
//            unset($userInfo['password']); // 不要记录密码
            AuthHelper::saveAuthUser($username, 'normal');
//            AuthHelper::saveAuthUser($userInfo, 'normal');

            // 设置用户名在网页显示
            ClientData::saveClientData(Login::$clientDataIsUserLoginKey, true);
            ClientData::saveClientData(Login::$clientDataUserNameDisplayKey, $username);

            $this->addFlashMessage("登陆成功");

            // 跳转到用户之前看的页面，如果之前没有看过的页面那就回到首页
            RouteHelper::jumpBack($this, '/', true);

            return; // 这里正常返回

        } elseif($uid == -1) {
            $this->addFlashMessage("用户不存在");
            goto out_fail;
        } elseif($uid == -2) {
            $this->addFlashMessage("密码错");
            goto out_fail;
        } else {
            $this->addFlashMessage("未知错误");
            goto out_fail;
        }
//        echo 'success';
//        exit;

//        $userService = new UserService();
//        // 验证用户登陆
//        $user = $userService->doAuthUser($input['user_name'], $input['user_name'], $input['password']);
//
//        if (!$user) {
//            $this->addFlashMessage("登陆失败，用户名、密码错误");
//            goto out_fail;
//        }

//        // 记录用户的登陆信息
//        $userInfo = $user->toArray();
//        unset($userInfo['password']); // 不要记录密码
//        AuthHelper::saveAuthUser($userInfo, 'normal');
//
//        // 设置用户名在网页显示
//        ClientData::saveClientData(Login::$clientDataIsUserLoginKey, true);
//        ClientData::saveClientData(Login::$clientDataUserNameDisplayKey, $user->user_name);
//
//        $this->addFlashMessage("登陆成功");
//
//        // 跳转到用户之前看的页面，如果之前没有看过的页面那就回到首页
//        RouteHelper::jumpBack($this, '/', true);
//
//        return; // 这里正常返回

        out_fail: // 失败从这里入口
        $smarty->display('user_login.tpl', 'User|Login|post');
    }

}