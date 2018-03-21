<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <title>$NAME---天使之翼</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../common/common.css">

    <link rel="stylesheet" type="text/css" href="../css/signup.css">

</head>
<body style="background-color: rgb(247,247,247);">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">

        <!--手机端-->
        <div class="navbar-header" style="height: 40px;">
            <!--logo-->
            <a href="index.html" class="navbar-brand">
                天使之翼
            </a>
            <!--资讯-->
            <span class="visible-xs-inline" id="mobile_title">
                    动态
                </span>

            <!--手机端侧边栏-->
            <span class="visible-xs-inline" id="toggle-sidebar">自己</span>
        </div>

        <!--电脑端-->
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="nav navbar-nav" style="margin-top: 0">
                <li class="active"><a href="index.html">动态</a></li>
                <li><a href="../news.html">校园资讯</a></li>
                <li><a href="../angel.php">天使之翼</a></li>
            </ul>
        </div>

    </div>
</nav>

<!--手机端侧边栏-->
<div id="mobile_side" class="visible-xs-block">
    <ul class="nav">
        <li><a href="../myaction.html">个人动态</a></li>
        <li><a href="../articles.html">文章</a></li>
        <li><a href="../albums.html">相册</a></li>
        <li><a href="../messages.html">留言板</a></li>
        <li><a href="setting.html">$NAME</a></li>
    </ul>
</div>

<!--手机端第二层导航栏-->
<div id="mobile_navbar" class="navbar-fixed-top visible-xs-block">
    <span class="mobile_home"><a href="index.html" style="color: rgb(84,139,165);">动态</a></span>
    <span class="mobile_news"><a href="../news.html">资讯</a></span>
    <span class="mobile_me"><a href="../relateme.html">相关</a></span>
    <span class="mobile_angel"><a href="../angel.php">我们</a></span>
</div>

<!--电脑端侧栏-->

<!--主要内容-->
<div id="main_content">
    <form method="post" onsubmit="return checkall()" action="register.php">
        <div class="form-group">
            <label for="username">用户名</label><br>
            <input type="text" onkeyup="check_1();" name="username" class="form-control fifty" maxlength="15" minlength="1" id="username" required placeholder="请输入您的用户名">
            <span id="username_ver"></span>
        </div>
        <div class="form-group">
            <label for="password">密码</label><br>
            <input type="password" onkeyup="check_2();" name="password" class="form-control pass fifty" maxlength="20" minlength="4" id="password" required placeholder="请输入您的密码">
            <span id="pass_ver"></span>
        </div>
        <div class="form-group">
            <label for="email">邮箱</label><br>
            <input type="email" name="email" onkeyup="check_3();" class="form-control fifty" id="email" required placeholder="请输入绑定邮箱">
            <span id="email_ver"></span>
        </div>
        <div class="form-group">
            <label for="checkid">验证码</label><br>
            <input name='authcode' onkeyup="check_4();" required maxlength="4" minlength="4" type="text" class="form-control" id="checkid" placeholder="请输入验证码">
            <a href="#" onclick="document.getElementById('captcha_img').src='./captcha.php?r='+Math.random()">看不清，换一个</a>
            <img id="captcha_img" title="点击更换" src='captcha.php?r=echo rand();' onclick="this.src='captcha.php?'+Math.random();">
            <span id="checkid_ver"></span>
        </div>
        <div id="form_bottom">
            <button class="btn btn-default">已有账号，直接登录</button>
            <button type="submit" class="btn btn-primary pull-right">注册</button>
        </div>
    </form>
</div>

<script src="../bootstrap/js/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/simpler-sidebar.min.js"></script>
<script src="../common/common.js"></script>

<script src="../js/signup.js"></script>

</body>
</html>