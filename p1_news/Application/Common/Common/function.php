<?php
/**
 * Created by PhpStorm.
 * User: zhenglfsir
 * Date: 2016/10/6
 * Time: 13:21
 * 公用的方法
 */

function show($status, $message, $data=array()) {
    $result = array(
        'status' => $status,
        'message' => $message,
        'data' => $data
    );
    exit(json_encode($result));
}

function getMd5Password($password) {
    return md5($password.C('MD5_PRE'));
}

/**
 * 根据菜单类型显示提示
 * @param $type
 * @return string
 */
function getMenuType($type) {
    return $type == 1 ? '后端菜单' : '前端导航';
}

function status($status) {
    $str = '';
    if($status == 0) {
        $str = '关闭';
    } elseif($status == 1) {
        $str = '正常';
    } elseif($status == -1) {
        $str = '删除';
    }
    return $str;
}

function checkIntParam($param, $msg) {
    if(!$param || !is_numeric($param)) {
        throw_exception($msg);
    }
}

function getAdminMenuUrl($nav) {
    $url = 'admin.php?c='.$nav['c'].'&a='.$nav['a'];
    if($nav['f'] == 'index') {
        $url = 'admin.php?c='.$nav['c'];
    }
    return $url;
}

function getActive($navController) {
    $c = strtolower(CONTROLLER_NAME);
    if($c == strtolower($navController)) {
        return 'class="active"';
    }
    return '';
}
