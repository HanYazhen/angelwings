<?php
/**
 * Created by PhpStorm.
 * User: surface
 * Date: 2017/11/19
 * Time: 18:17
 */
header("Content-Type:text/html;charset=utf-8");      //设置头部信息
include "common.php";
require "Database.php";

$uid = $_SESSION['uid'];
$username = $_SESSION['un'];
$publish_content = $_POST['publish_area'];
$action_number = 0;

$conn = new Database();

$result = $conn -> getselect($_SESSION['un']);

while($row = $result -> fetch_assoc()) {
    $action_number = $row["action_number"] + 1;
    break;
}

//上传路径
$upload_path = "../action/".$uid."/";
if (!is_dir($upload_path))//当路径不穿在
{
    mkdir($upload_path);//创建路径
}

$upload_path = "../action/".$uid."/".$action_number."/";
if (!is_dir($upload_path))//当路径不穿在
{
    mkdir($upload_path);//创建路径
}

for ($i = 0;$i < count($_FILES['file']['name']);$i++) {
    $last_name = substr($_FILES['file']['name'][$i],strrpos($_FILES['file']['name'][$i],'.')+1);
    $last_name = ".".$last_name;
    if(move_uploaded_file($_FILES["file"]['tmp_name'][$i],$upload_path.$i."$last_name")){

    }else{
        echo "Failed!";
    }
}

//连接数据库
$mysqli = @new mysqli("localhost","angelwings","angelwings","angelwings",3306);
if ($mysqli -> connect_error) {
    die("很抱歉，这是我们的错误,请稍后再试！");
}
//-----连接数据库


//设置字符集
mysqli_set_charset($mysqli, "utf8");

$sql = "INSERT INTO action (uid, username, content, aid) VALUES ('$uid', '$username', '$publish_content', '$action_number')";

//$result = mysqli_query($mysqli,$sql);
if ($mysqli->query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$conn -> update_action_number($username);

$mysqli -> close();

$conn -> closedb();

header("Location:http://localhost/angelwings/php/index.php");

exit();