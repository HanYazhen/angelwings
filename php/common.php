<?php
/**
 * Created by PhpStorm.
 * User: surface
 * Date: 2017/11/13
 * Time: 21:31
 */

//判断用户是否登录
session_start();
if (isset($_SESSION['un']) && !empty($_SESSION['un'])) {

} else {
    header("Location: default.php");
}
//---------------判断用户是否登录