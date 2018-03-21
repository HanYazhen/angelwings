<?php
/**
 * Created by PhpStorm.
 * User: surface
 * Date: 2017/11/15
 * Time: 13:21
 */
header("Content-Type:text/html;charset=utf-8");      //设置头部信息

include "common.php";

require "Database.php";

$username = $_POST['username'];

$conn = new Database();

$result = $conn -> getselect($username);

while($row = $result -> fetch_assoc()) {
    echo $row['email25'];
    break;
}

$conn -> closedb();