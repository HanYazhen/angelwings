<?php
/**
 * Created by PhpStorm.
 * User: surface
 * Date: 2017/11/27
 * Time: 16:17
 */
header("Content-Type:text/html;charset=utf-8");      //设置头部信息
include "common.php";
require "Database.php";

$action_id = $_POST['action_id'];
$uid = $_POST['uid'];
$username = $_POST['username'];
$collect_id = $_POST['collect_id'];
$collect_name = $_POST['collect_name'];

//连接数据库
$mysqli = @new mysqli("localhost", "angelwings", "angelwings", "angelwings", 3306);
if ($mysqli->connect_error) {
    die("很抱歉，这是我们的错误,请稍后再试！");
}
//-----连接数据库

//设置字符集
mysqli_set_charset($mysqli, "utf8");

$sql = "INSERT INTO action_collect (action_id, uid, username, collect_id, collect_name) VALUES ('$action_id', '$uid', '$username', '$collect_id', '$collect_name')";

if ($mysqli->query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();

$conn = new Database();
$conn->update_action_collect($action_id);

$conn->closedb();