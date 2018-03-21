<?php
/**
 * Created by PhpStorm.
 * User: surface
 * Date: 2017/11/11
 * Time: 21:55
 */
header("Content-Type:text/html;charset=utf-8");      //设置头部信息

$checkid = $_POST['checkid'];
session_start();
//strtolower()小写函数
if (strtolower($checkid) == $_SESSION['authcode']) {
    //跳转页面
    echo 1;
} else {
    //提示以及跳转页面
    echo 0;
}