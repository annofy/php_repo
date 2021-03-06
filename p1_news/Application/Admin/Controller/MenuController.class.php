<?php
/**
 * Created by PhpStorm.
 * User: zhenglfsir
 * Date: 2016/10/6
 * Time: 15:02
 */
namespace Admin\Controller;
use Think\Controller;
use Think\Exception;
use Think\Page;

class MenuController extends Controller {

    public function _initialize() {

    }

    public function add() {
        if($_POST) {
            if(!isset($_POST['name']) || !$_POST['name']) {
                return show(0, '菜单名不能为空');
            }
            if(!isset($_POST['m']) || !$_POST['m']) {
                return show(0, '模块名不能为空');
            }
            if(!isset($_POST['c']) || !$_POST['c']) {
                return show(0, '控制器不能为空');
            }
            if(!isset($_POST['f']) || !$_POST['f']) {
                return show(0, '方法名不能为空');
            }
            if($_POST['menu_id']) {
                return $this->save($_POST);
            }
            $menuId = D('Menu')->insert($_POST);
            if($menuId) {
                return show(1, '新增成功', $menuId);
            }
            return show(0, '新增失败', $menuId);
        } else {
            $this->display();
        }
    }

    public function index() {
        $data = array();
        // 选择分类 添加条件
        if(isset($_REQUEST['type']) && in_array($_REQUEST['type'], array(0, 1))) {
            $data['type'] = intval($_REQUEST['type']);
            $this->assign('type', $data['type']);
        } else {
            $this->assign('type', -1);
        }
        /**
         * 分页操作逻辑
         */
        $page = $_REQUEST['p'] ? $_REQUEST['p'] : 1;
        $pageSize = $_REQUEST['pageSize'] ? $_REQUEST['pageSize'] : 3;
        $menus = D('Menu')->getMenus($data, $page, $pageSize);
        $menusCount = D('Menu')->getMenusCount($data);

        $res = new Page($menusCount, $pageSize);
        $pageRes = $res->show();
        $this->assign('pageRes', $pageRes);
        $this->assign('menus', $menus);
        $this->display();
    }

    /**
     * 修改菜单
     */
    public function edit() {
        $menuId = $_GET['id'];
        $menu = D('Menu')->find($menuId);
        $this->assign('menu', $menu);
        $this->display();
    }

    /**
     * 保存菜单，菜单若存在则更新
     * @param $data
     */
    public function save($data) {
        $menuId = $data['menu_id'];
        unset($data['menu_id']);
        try{
            $id = D('Menu')->updateMenuById($menuId, $data);

            if($id === false) {
                return show(0, '更新失败');
            }
            return show(1, '更新成功');
        } catch(Exception $e) {
            return show(0, $e->getMessage());
        }
    }

    public function setStatus() {
        try{
            if($_POST) {
                $id = $_POST['menu_id'];
                $status = $_POST['status'];
                // 执行数据更新操作
                $res = D('Menu')->updateStatusById($id, $status);
                if($res) {
                    return show(1, '操作成功');
                } else {
                    return show(0, '操作失败');
                }

            }
        } catch (Exception $e) {
            show(0, $e->getMessage());
        }
        return show(0, '没有提交数据');
    }

    public function listOrder() {
        $listOrder = $_POST['listOrder'];
        $jumpUrl = $_SERVER['HTTP_REFERER'];
        $errors = array();
        if($listOrder) {
            try{
                foreach($listOrder as $menu_id => $lo) {
                    $res = D('Menu')->updateListOrderById($menu_id, $lo);
                    if($res === false) {
                        $errors[] = $menu_id;
                    }
                }
                if($errors) {
                    return show(0, '排序失败-'.implode(',', $errors),  array('jump_url'=>$jumpUrl));
                }
                // 排序成功
                show(1, '排序成功', array('jump_url'=>$jumpUrl));
            } catch(Exception $e) {
                show(0, $e->getMessage(), array('jump_url'=>$jumpUrl));
            }
        }
        show(0, '排序失败', array('jump_url'=>$jumpUrl));

    }

}