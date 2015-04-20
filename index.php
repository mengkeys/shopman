<?php
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');  
// 定义应用目录
define('APP_PATH','./Apps/');
// 定义运行时目录
define('RUNTIME_PATH','./Runtime/');
// 开启调试模式
define('APP_DEBUG',True);
// 引入ThinkPHP框架
require '../ThinkPHP/ThinkPHP.php';
?>
