<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 15-4-20
 * Time: 下午10:17
 */

namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {

    public function index(){
        $this->display();
    }

    //登录
    public function login(){
      if(IS_POST){
          // 验证码
          if(C('IS_VERIFY')){
              if(!check_verify($_POST['code'])){
                  $this->error('验证码错误');
              }
          }
          //
          if(!check_user($_POST['user'])){
              $this->error('用户名不合法');
          }

          if(!check_pass($_POST['pass'])){
              $this->error('密码不合法');
          }

          //
          $User = D('User');
          $info = $User->where(array('username'=>$_POST['user']))->select();

          //数据库判别
          if(!empty($info)){
              if( $info['password'] !== md5($_POST['pass'])){
                  $this->error('密码错误');
              }else{
                  // 登录成功
                  $this->success('登录成功，系统正在跳转！','Index/index');
              }
          }else{
              $this->error('用户不存在');
          }
      }else{
          $this->display();
      }
    }


    // 生成验证码
    public function verify(){
        $Verify = new \Think\Verify();
        $Verify->fontSize = C('VERIFY_FONT_SIZE');
        $Verify->length   = C('VERIFY_LENGTH');
        $Verify->useNoise = C('VERIFY_USE_NOISE');
        $Verify->entry();
    }

    //退出
    public function logout(){
        if(is_login()){
            D('Member')->logout();
            session('[destroy]');
            $this->success('退出成功！', U('login'));
        } else {
            $this->redirect('login');
        }

    }

    //认证
    public function auth(){
       if(!is_auth()){
           if(IS_POST){

           }else{
               $this->assign('pre_url',$pre_url);   //上一个地址
               $this->assign('next_url',$next_url); //下一个地址
               $this->display();
           }
       }else{
           //
       }
    }
}
?>