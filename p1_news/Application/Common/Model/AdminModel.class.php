<?php

/**
 * Created by PhpStorm.
 * User: zhenglfsir
 * Date: 2016/10/6
 * Time: 13:45
 */
namespace Common\Model;
use Think\Model;
class AdminModel extends Model
{
    private $_db = '';

    /**
     * AdminModel constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->_db = M('admin');

    }

    public function getAdminByUsername($username) {
        $ret = $this->_db->where('username="'.$username.'"')->find();
        return $ret;
    }
}