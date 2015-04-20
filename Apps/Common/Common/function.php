<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 15-4-20
 * Time: 下午10:32
 */

// 检测输入的验证码是否正确，$code为用户输入的验证码字符串
function check_verify($code, $id = ''){
    $verify = new \Think\Verify();
    return $verify->check($code, $id);
}

function check_user($user){
    // 规则
    return true;
}

function check_pass($pass){
    return true;
}

