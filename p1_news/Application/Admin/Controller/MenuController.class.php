<?php
/**
 * Created by PhpStorm.
 * User: zhenglfsir
 * Date: 2016/10/6
 * Time: 15:02
 */
namespace Admin\Controller;
use Think\Controller;

class MenuController extends Controller {

    public function __construct()
    {
        parent::__construct();
        $this->_init();
    }

    /**
     *  初始化
     */
    private function _init() {
        $isLogin = $this->isLogin();
        if(!$isLogin) {
            // 跳转到登录页面
            $this->rediect('/admin.php?c=login');
        }
    }

    /**
     * 返回登录用户信息
     * @return mixed|null
     */
    public function getLoginUser() {
        return session('adminUser');
    }

    /**
     * 判定是否登录
     * @return bool
     */
    public function isLogin() {
        $user = $this->getLoginUser();
        if($user && is_array($user)) {
            return true;
        }
        return false;
    }
}