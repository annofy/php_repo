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


