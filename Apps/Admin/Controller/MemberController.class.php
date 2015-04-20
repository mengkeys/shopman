<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 15-4-20
 * Time: 下午11:05
 */

namespace Admin\Controller;
use Think\Controller;

class MemberController extends AdminController{
    public function index(){
        $this->display();
    }

    //删除用户:支持批量删除
    public function remove(){
        // 获取列表（大于等于一）

    }

    //修改用户信息
    public function edit(){

    }

    //单个添加
    public function singleAdd(){

    }

    //批量添加
    public function multiAdd(){

    }

}