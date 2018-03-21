<?php
/**
 * Created by PhpStorm.
 * User: surface
 * Date: 2017/11/15
 * Time: 8:08
 */
require "Database.php";
header("Content-Type: text/html;charset=utf-8");

$username = $_POST['username'];
$password = $_POST['password'];

$conn = new Database();

$result = $conn -> getselect($username);


if ($result->num_rows > 0) {
    // 输出每行数据
    while($row = $result->fetch_assoc()) {
        if ($password == $row["password"]) {
            $uid = $row["uid"];
            $conn -> closedb();
            session_start();
            $_SESSION['un'] = $username;
            $_SESSION['uid'] = $uid;
            header("Location: default2.php");
        } else {
            echo "密码输入错误";
        }
    }
} else {
    echo "用户名输入错误";
}