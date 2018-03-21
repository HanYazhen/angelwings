<?php
/**
 * Created by PhpStorm.
 * User: surface
 * Date: 2017/11/11
 * Time: 15:34
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

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";

//$result = mysqli_query($mysqli,$sql);
if ($mysqli->query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli -> close();

session_start();
$_SESSION['un'] = $username;

header("Location: default2.php");