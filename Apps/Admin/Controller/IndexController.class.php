<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends AdminController {
    //后台首页，概况页
    public function index(){

        //$category = D('Category')->getTree();
        //$lists    = D('Document')->lists(null);

        //$this->assign('category',$category);//栏目
        //$this->assign('lists',$lists);//列表
        //$this->assign('page',D('Document')->page);//分页


        $this->display();
    }

}