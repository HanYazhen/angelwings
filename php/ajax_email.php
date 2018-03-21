<?php
/**
 * Created by PhpStorm.
 * User: surface
 * Date: 2017/11/11
 * Time: 18:18
 */
header("Content-Type: text/html;charset=utf-8");

$db_servername = "localhost";
$db_username = "angelwings";
$db_password = "angelwings";

//连接数据库
$mysqli = @new mysqli($db_servername,$db_username,$db_password,"angelwings",3306);
if ($mysqli -> connect_error) {
    die("很抱歉，这是我们的错误,请稍后再试！");
}
//-----连接数据库

//设置字符集
mysqli_set_charset($mysqli, "utf8");

$email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';

$sql = "SELECT * FROM users WHERE email = '$email'";

$result = $mysqli -> query($sql);

if ($result -> num_rows > 0) {
    echo 0;
} else {
    echo 1;
}
$mysqli -> close();