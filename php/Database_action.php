<?php
/**
 * Created by PhpStorm.
 * User: surface
 * Date: 2017/11/23
 * Time: 22:05
 */

class Database_action
{
    private $db_host;    //数据库主机
    private $db_user;    //数据库用户名
    private $db_pwd;     //用户名密码
    private $db_name;    //数据库名称
    private $db_port;    //数据库端口号
    private $conn;       //数据库连接标识
    private $result;     //执行query命令的结果标识
    private $sql;        //sql执行语句
    private $row;        //返回的条目个数
    private $coding;     //数据库编码
    private $bulletin = true; //是否开启错误记录
    private $show_error = false; //测试阶段，显示所有错误,具有安全隐患,默认关闭
    private $is_error = false; //发现错误是否立即终止,默认true,建议不启用，因为当有问题时用户什么也看不到是很苦恼的

//    构造函数
    public function __construct($db_host = "localhost", $db_user = "angelwings", $db_pwd = "angelwings", $db_name = "angelwings")
    {
        header("Content-Type: text/html;charset=utf-8");
        $this->db_host = $db_host;
        $this->db_user = $db_user;
        $this->db_pwd = $db_pwd;
        $this->db_name = $db_name;
        $this->connect();
    }

//    数据库连接
    public function connect()
    {
        $this -> conn = @new mysqli($this->db_host, $this->db_user, $this->db_pwd, $this->db_name);
        if ($this ->conn->connect_error) {
            die("很抱歉，这是我们的错误,请稍后再试！");
        }
        mysqli_set_charset($this ->conn, "utf8");
    }

//    查询语句
    public function getselect($userid) {

        //判断id是用户名还是邮箱
        if (!strpos($userid,'@')) {
            $this -> sql = "SELECT * FROM users WHERE username = "."'$userid'";
        } else {
            $this -> sql = "SELECT * FROM users WHERE email = "."'$userid'";
        }

//        echo $this->sql;

//        执行sql语句
        if ($this -> result = $this -> conn -> query($this -> sql)) {

        } else {
//            echo "Error: " . $sql . "<br>" . $mysqli->error;
            echo "这是我们的错误！";
        }

        return $this -> result;
    }

    public function update_action_number($userid) {
        //判断id是用户名还是邮箱
        if (!strpos($userid,'@')) {
            $this -> sql = "UPDATE users SET action_number = action_number + 1 WHERE username = "."'$userid'";
        } else {
            $this -> sql = "UPDATE users SET action_number = action_number + 1 WHERE email = "."'$userid'";
        }

        if ($this -> conn -> query($this -> sql)) {

        } else {
//            echo "Error: " . $sql . "<br>" . $mysqli->error;
            echo "这是我们的错误！";
        }

        return;

    }

//    关闭连接
    public function closedb() {
        $this -> conn -> close();
    }
}