// 表单验证
$(document).ready(function () {
    
    // 检测用户名是否符合要求
    $("#username").blur(function () {
        var username = $("#username").val();
        if (username == "") {
            $("#username_ver").html("<span style='color: red'>用户名不能为空</span>");
        }
        $.post("ajax_username.php",
            {
                username: "username"
            },
            function (data, status) {
                // alert("满足要求");
            });
    });

    // 判断密码输入是否符合要求
    $(".pass").onkeyup(function () {
        var pass = $("#password").val();
        if (pass.length < 4) {
            $("#pass_ver").html("<span style='color: red;'>密码长度不能少于4个字符</span>");
        } else {
            $("#pass_ver").html("");
        }
    });

    //判断验证码是否符合要求
    $("#checkid").onkeyup(function () {
        var checkid = $("#checkid").val();
        if (checkid == "") {
            $("#checkid_ver").html("<span style='color: red'>验证码不能为空</span>");
        }
        $.post("ajax_username.php",
            {
                username: "username"
            },
            function (data, status) {
                // alert("满足要求");
            });
    });

    $("#to_signup").click(function () {
        window.location.href = "signup.php";
    })

});