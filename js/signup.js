// 表单验证
var check1 = 0;
var check2 = 0;
var check3 = 0;
var check4 = 0;

function check_1() {
    var username = $("#username").val();
    if (username == "") {
        check1 = 0;
        $("#username_ver").html("<span style='color: red'>用户名不能为空</span>");
        return false;
    }
    $.post("ajax_username.php",
        {
            username: username
        },
        // 0代表失败，1代表成功
        function (data, status) {
            if (data == 1) {
                check1 = 1;
                $("#username_ver").html("<span class='glyphicon glyphicon-ok' aria-hidden='true' style='color: green;'></span>");
                return true;
            } else {
                check1 = 0;
                $("#username_ver").html("<span style='color: red;'>用户名已被占用！</span>");
                return false;
            }
        });
}

function check_2() {
    var pass = $("#password").val();
    if (pass.length < 4) {
        check2 = 0;
        $("#pass_ver").html("<span style='color: red;'>密码长度不能少于4个字符</span>");
        return false;
    } else {
        check2 = 1;
        $("#pass_ver").html("<span class='glyphicon glyphicon-ok' aria-hidden='true' style='color: green;'></span>");
        return true;
    }
}

function check_3() {
    var email = $("#email").val();
    if (email == "") {
        check3 = 0;
        $("#email_ver").html("<span style='color: red'>邮箱不能为空</span>");
        return false;
    }

    // 验证邮箱格式
    $.post("ajax_email.php",
        {
            email: email
        },
        function (data, status) {
            if (data == 1) {
                check3 = 1;
                // $("#email_ver").html("<span class='glyphicon glyphicon-ok' aria-hidden='true' style='color: green;'></span>");
                return true;
            } else {
                check3 = 0;
                $("#email_ver").html("<span style='color: red;'>一个邮箱只能绑定一个用户！</span>");
                return false;
            }
        });
}

function check_4() {
    var checkid = $("#checkid").val();
    if (checkid == "") {
        check4 = 0;
        $("#checkid_ver").html("<span style='color: red'>验证码不能为空</span>");
        return false;
    }
    $.post("ajax_checkid.php",
        {
            checkid: checkid
        },
        // 0代表失败，1代表成功
        function (data, status) {
            if (data == 1) {
                check4 = 1;
                $("#checkid_ver").html("<span class='glyphicon glyphicon-ok' aria-hidden='true' style='color: green;'></span>");
                return true;
            } else {
                check4 = 0;
                $("#checkid_ver").html("<span style='color: red;'>输入错误</span>");
                return false;
            }
        });
}

function checkall() {
    check_1();
    check_2();
    check_3();
    check_4();
    if (check1 == 1 && check2 == 1 && check3 == 1 && check4 == 1) {
        return true;
    }
    return false;
}