<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 15-4-20
 * Time: 下午11:23
 */

namespace Admin\Controller;
use Think\Controller;
class EventController extends AdminController{
    public function index(){
       // 读取列表
        $Event = M('Event');
        $list = $Event->find();

        $this->assign('list', $list);

        $this->display();

    }

    // 记事
    public function add(){
        if(IS_POST){
            //
            $Event = M('Event');
            $temp = $Event->create();
            if(){
                $Event->add();
                $this->success('添加成功',U('index'));
            }else{
                $this->error('出错了');
            }

        }
    }

    // 修改记事
    public function edit(){
        $Event = M('Event');
        if(IS_POST){

        }else{
            //事件编号
            $token =  '';
            $this->assign('info', $this->where(array('token'=>$_POST['token'])));
            $this->display();
        }
    }


    // 删除记事
    public function remove(){

    }
}