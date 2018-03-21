<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <title>$NAME---天使之翼</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="common/common.css">

    <link rel="stylesheet" type="text/css" href="css/angel.css">

</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">

            <!--手机端-->
            <div class="navbar-header" style="height: 40px;">
                <!--logo-->
                <a href="php/index.html" class="navbar-brand">
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
                    <li><a href="php/index.html">动态</a></li>
                    <li><a href="news.html">校园资讯</a></li>
                    <li class="active"><a href="angel.php">天使之翼</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-edit"></span> 发表动态</a></li>
                    <li>
                        <a class="nav_head" href="#">
                            <img src="css/imgs/liuyifei.jpg">
                            <div>
                                <span class="nav_head_name">落雁孤飞</span>
                                <span> ♂</span><br>
                                <span>软件学院</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <!--手机端侧边栏-->
    <div  id="mobile_side" class="visible-xs-block">
        <ul class="nav">
            <li><a href="myaction.html">个人动态</a></li>
            <li><a href="articles.html">文章</a></li>
            <li><a href="albums.html">相册</a></li>
            <li><a href="messages.html">留言板</a></li>
            <li><a href="php/setting.html">$NAME</a></li>
        </ul>
    </div>

    <!--手机端第二层导航栏-->
    <div id="mobile_navbar" class="navbar-fixed-top visible-xs-block">
        <span class="mobile_home"><a href="php/index.html" style="color: rgb(84,139,165);">动态</a></span>
        <span class="mobile_news"><a href="news.html">资讯</a></span>
        <span class="mobile_me"><a href="relateme.html">相关</a></span>
        <span class="mobile_angel"><a href="angel.php">我们</a></span>
    </div>

    <!--电脑端侧栏-->
    <div class="hidden-xs navbar-fixed-top" id="side_navbar">
        <ul>
            <li><a href="relateme.html" class="text-right">与我相关</a></li>
            <li><a href="myaction.html" class="text-right">个人动态</a></li>
            <li><a href="articles.html" class="text-right">文章</a></li>
            <li><a href="albums.html" class="text-right">相册</a></li>
            <li><a href="messages.html" class="text-right">留言板</a></li>
            <li><a href="#" class="text-right">小组</a></li>
            <li class="connection">
                <div class="attention text-center">
                    关注<br>
                    <span class="attention_number">10</span>
                </div>
                <div class="fans text-center">
                    粉丝<br>
                    <span class="fans_number">100</span>
                </div>
            </li>
            <li>
                <a>
                    都说了是落雁孤飞
                    <img src="css/imgs/angel.jpg">
                </a>
            </li>
        </ul>
    </div>

    <!--主要部分-->
    <div id="main_content">
        <div class="content_item">
            <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#vision">
                愿景
            </button>
            <div id="vision" class="collapse in">
                联系起哈工程的每一个学生
            </div>
        </div>
        <div class="content_item">
            <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#center">
                中心
            </button>
            <div id="center" class="collapse in">
                自由、简单、个性
            </div>
        </div>
        <div class="content_item">
            <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#founder">
                我们
            </button>
            <div id="founder" class="collapse in">
                创始人©：韩亚振<br>
                <p style="text-indent: 2em;">版本：0.8</p>
            </div>
        </div>
        <div class="content_item">
            <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#join_us">
                加入我们
            </button>
            <div id="join_us" class="collapse in">
                如果你想加入我们，欢迎你随时给我们来信，<a href="mailto:yazhenhan@hotmail.com">yazhenhan@hotmail.com</a>，我们欢迎在任何方面有才能的人
            </div>
        </div>
    </div>

    <!--反馈-->
    <form class="hidden-xs form-group" id="feedback_area">
        <textarea class="form-control" rows="5" placeholder="如果你有什么意见或建议，欢迎你随时在此反馈给我们！我们将不胜感激！！！"></textarea>
        <input class="btn btn-default pull-right" type="submit" value="确定">
        <input class="btn btn-default pull-right" type="reset" value="取消">
    </form>

    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/simpler-sidebar.min.js"></script>
    <script src="common/common.js"></script>

    <script src="js/angel.js"></script>


</body>
</html>