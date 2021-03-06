<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <title>$NAME---天使之翼</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../common/common.css">

    <link rel="stylesheet" type="text/css" href="../css/index.css">

    <link rel="stylesheet" type="text/css" href="../css/default.css">

</head>
<body>
<!--对话弹框-->
<div id="curtain"
     style="position: fixed;top: 0;left: 0;z-index: 1031;background-color: rgba(208,216,218,0.50);height: 100%;width: 100%;">
    <div id="reply_talk">
        <div class="talk_item">
            <div class="talk_top">
                <img src="../css/imgs/wings.jpg">
            </div>
            <div class="talk_content_top">
                <span class="talk_name">落雁孤飞：</span><br>
                <span class="talk_time text-muted small">昨天 20：10</span>
            </div>
            <div class="talk_content">
                初次见面
            </div>
            <div class="talk_bottom">
                <span class="glyphicon glyphicon-thumbs-up"></span> 赞
                <span>回复</span>
            </div>
        </div>
        <div class="talk_item">
            <div class="talk_top">
                <img src="../css/imgs/wings.jpg">
            </div>
            <div class="talk_content_top">
                <span class="talk_name">落雁孤飞：</span><br>
                <span class="talk_time text-muted small">昨天 20：10</span>
            </div>
            <div class="talk_body">
                回复@落雁孤飞：
            </div>
            <div class="talk_content">
                初次见面
            </div>
            <div class="talk_bottom">
                <span class="glyphicon glyphicon-thumbs-up"></span> 赞
                <span>回复</span>
            </div>
        </div>
    </div>
</div>

<!--导航栏-->
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
            <ul class="nav navbar-nav" style="margin-top: 0;">
                <li class="active"><a href="index.html">动态</a></li>
                <li><a href="../news.html">校园资讯</a></li>
                <li><a href="../angel.php">天使之翼</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-edit"></span> 发表动态</a></li>
                <li>
                    <!--<a class="nav_head">
                        <img class="to_personal" src="css/imgs/liuyifei.jpg">
                        <div>
                            <span class="nav_head_name to_personal">落雁孤飞</span>
                            <span> ♂</span><br>
                            <span class="to_search to_personal">软件学院</span>
                        </div>
                    </a>-->
                    <a id="sign">
                        <span id="sign_up" class="sign" data-toggle="modal" data-target=".sign_up">注册</span>
                        <span id="sign_in" class="sign" data-toggle="modal" data-target=".sign_in">登录</span>
                    </a>
                </li>
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
<div class="hidden-xs navbar-fixed-top left_nav" id="side_navbar">
    <ul>
        <li><a href="../relateme.html" class="text-right">与我相关</a></li>
        <li><a href="../collect.html" class="text-right">我的收藏</a></li>
        <li><a href="../myaction.html" class="text-right">我的动态</a></li>
        <li><a href="../articles.html" class="text-right">文章</a></li>
        <li><a href="../albums.html" class="text-right">相册</a></li>
        <li><a href="../messages.html" class="text-right">留言板</a></li>

        <li>
            <a href="#" id="group" class="text-right">小组&nbsp;&nbsp;<span class="caret"></span></a>
            <div id="groups">
                <a href="#" class="text-right">文学社</a>
                <a href="#" class="text-right">文学社</a>
            </div>
        </li>

        <li><a href="../search.html" class="text-right"><span class="glyphicon glyphicon-search"></span> 查找</a></li>

        <li class="connection">
            <div class="attention text-center">
                <span class="to_follows">关注<br>10</span>
            </div>
            <div class="fans text-center">
                <span class="to_fans">粉丝<br>300</span>
            </div>
        </li>

        <li>
            <a href="setting.html">
                都说了是落雁孤飞
                <img src="../css/imgs/angel.jpg">
            </a>
        </li>
    </ul>
</div>

<!--发表框-->
<form class="hidden-xs form-group" id="publish_area" onsubmit="return publish_check();">
    <textarea class="form-control" id="publish_textarea" placeholder="整个学校都在倾听你的声音！！！"></textarea>
    <div id="publish_buttons">
        <input class="btn btn-default pull-right" type="submit" value="确定">
    </div>
</form>

<!--内容为空-->
<div class="alert alert-warning" id="null_cancel" role="alert"></div>


<!--转发动态-->
<div class="modal fade share" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                <h4 class="modal-title">确认转发此条动态吗？</h4>
            </div>
            <div class="modal-body">
                <p>（原动态内容或简要信息）</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary">确认</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--登录-->
<div class="modal fade sign_in" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                <h4 class="modal-title">登录</h4>
            </div>
            <form method="post" action="signin.php">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="username">用户名</label><br>
                        <input type="text" name="username" class="form-control fifty" maxlength="15" minlength="1" id="username" required placeholder="请输入您的用户名">
                        <span id="username_ver"></span>
                    </div>
                    <div class="form-group">
                        <label for="password">密码</label><br>
                        <input type="password" name="password" class="form-control pass fifty" maxlength="20" minlength="4" id="password" required placeholder="请输入您的密码">
                        <span id="pass_ver"></span>
                    </div>
                    <div class="form-group">
                        <label for="checkid">验证码</label><br>
                        <input name='authcode' required maxlength="4" minlength="4" type="text" class="form-control" id="checkid" placeholder="请输入验证码">
                        <a href="#" onclick="document.getElementById('captcha_img').src='./captcha.php?r='+Math.random()">看不清，换一个</a>
                        <img id="captcha_img" title="点击更换" src='captcha.php?r=echo rand();' onclick="this.src='captcha.php?'+Math.random();">
                        <span id="checkid_ver"></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" id="to_signup">转到注册页面</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="submit" class="btn btn-primary">登录</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--主要内容-->
<div id="main_content">

    <ul class="media-list action">

        <li class="media action_list">
            <div class="dropdown" style="float: right;">
                    <span class="dropdown-toggle" style="cursor: pointer;padding: 10px;" id="dropdownMenu1"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span class="caret"></span>
                    </span>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                    <li><a href="#">不再看到此动态</a></li>
                    <li><a href="#">屏蔽此人</a></li>
                    <li><a href="#">不再关注此人</a></li>
                    <li><a href="#">举报</a></li>
                </ul>
            </div>
            <div class="media-left action_left">
                <a href="../homepage.html">
                    <img class="media-object img-circle" src="../css/imgs/liuyifei.jpg">
                </a>
            </div>
            <div class="action_head">
                <h5 class="media-heading" onclick="javascript:back_home();" style="cursor: pointer;">落雁孤飞</h5>
                <span class="text-muted small">昨天 14：00</span>
            </div>
            <div class="action_body">
                <div>
                    初次见面
                </div>
                <div class="action_body_imgs">
                    <img src="../css/imgs/2.jpg">
                </div>

                <!--动态底部回复区-->
                <div class="action_body_bottom">
                    <button type="button" class="btn btn-default" data-target=".share" data-toggle="modal">
                        <span class="glyphicon glyphicon-share"></span> 转发
                    </button>
                    <button type="button" class="btn btn-default collect" style="position:static;">
                        <span class="glyphicon glyphicon-heart-empty"></span> <span class="col">收藏</span>
                    </button>
                    <button type="button" class="btn btn-default zan" style="position:static;">
                        <span class="glyphicon glyphicon-thumbs-up"></span> <span class="zan_person">157</span>
                    </button>
                    <!--<button id="zan" type="button" class="btn btn-default">
                        &lt;!&ndash;<span class="glyphicon glyphicon-thumbs-up"></span> 赞&ndash;&gt;
                        <span class="praise">
                            <span id="praise">
                                    <img src="css/imgs/before.png" id="praise-img"/>
                            </span>
                            <span id="praise-one">(</span>
                            <span id="praise-txt">145</span>
                            <span id="praise-two">)</span>
                            <span id="add-num"><em>+1</em></span>
                        </span>
                    </button>-->
                    <form id="reply_talk_area" onsubmit="return answer_check();">
                        <textarea class="form-control" id="reply_textarea" placeholder="我也说一句 ..."></textarea>
                        <div id="reply_buttons">
                            <button type="submit" class="btn btn-default pull-right">回复</button>
                        </div>
                    </form>
                </div>
            </div>

            <!--回复区域-->
            <ul class="media-list reply">
                <li class="media reply_list">
                    <div class="reply_left">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object img-circle" src="../css/imgs/liuyifei.jpg">
                            </a>
                        </div>
                        <div class="reply_head">
                            <span class="media-heading">落雁孤飞</span><b>：</b><br>
                            <span class="text-muted small">昨天 14：00</span>
                        </div>
                    </div>
                    <div class="reply_body">
                        <div>
                            初次见面
                        </div>
                        <div class="reply_body_img">
                            <img src="../css/imgs/2.jpg">
                        </div>
                    </div>
                    <span style="float: right;margin-right: 10px;">
                        <a href="#" class="report"
                           style="padding-right: 10px;margin-right: 10px;border-right: 1px dotted black;display: none;">举报</a>
                        <a class="reply_2_area"
                           style="padding-right: 10px;margin-right: 10px;border-right: 1px dotted black;cursor: pointer;">回复</a>
                        <a class="glyphicon glyphicon-thumbs-up reply_zan"></a>
                    </span>
                    <!--回复中的回复-->
                    <ul class="media-list rereply">
                        <li class="media rereply_list">
                            <div class="rereply_left">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object img-circle" src="../css/imgs/liuyifei.jpg">
                                    </a>
                                </div>
                                <div class="rereply_head">
                                    <span class="media-heading">落雁孤飞</span><b>：</b><br>
                                    <span class="text-muted small">昨天 14：00</span>
                                </div>
                            </div>
                            <div class="rereply_body">
                                <div>
                                    初次见面
                                </div>
                            </div>
                            <span style="float: right;margin-right: 10px;">
                                <!--<a href="#" class="report"
                                   style="padding-right: 10px;margin-right: 10px;border-right: 1px dotted black;">举报</a>-->
                                <a class="reply_2_other"
                                   style="padding-right: 10px;margin-right: 10px;border-right: 1px dotted black;cursor: pointer;">回复</a>
                                <a class="glyphicon glyphicon-thumbs-up reply_zan"></a>
                            </span>
                        </li>
                        <li class="media rereply_list">
                            <div class="rereply_left">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object img-circle" src="../css/imgs/liuyifei.jpg">
                                    </a>
                                </div>
                                <div class="rereply_head">
                                    <span class="media-heading">落雁孤飞</span><b>：</b><br>
                                    <span class="text-muted small">昨天 14：00</span>
                                </div>
                            </div>
                            <div class="rereply_body">
                                <div>
                                    回复<b>@落雁孤飞：</b>
                                    初次见面
                                </div>
                            </div>
                            <span style="float: right;margin-right: 10px;">
                                <a href="#" class="report"
                                   style="padding-right: 10px;margin-right: 10px;border-right: 1px dotted black;display: none;">举报</a>
                                <a class="reply_2_other"
                                   style="padding-right: 10px;margin-right: 10px;border-right: 1px dotted black;cursor: pointer;">回复</a>
                                <a class="glyphicon glyphicon-thumbs-up reply_zan"></a>
                            </span>
                        </li>
                        <form id="reply_talk_2" style="display: none;" class="reply_talk_2"
                              onsubmit="return answer_check();">
                            <textarea class="form-control" id="reply_textarea_2" placeholder="回复..."></textarea>
                            <div id="reply_buttons_2">
                                <button type="submit" class="btn btn-default pull-right">回复</button>
                            </div>
                        </form>
                    </ul>
                </li>


                <li class="media reply_list">
                    <div class="reply_left">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object img-circle" src="../css/imgs/liuyifei.jpg">
                            </a>
                        </div>
                        <div class="reply_head">
                            <span class="media-heading">落雁孤飞</span><b>：</b><br>
                            <span class="text-muted small">昨天 14：00</span>
                        </div>
                    </div>
                    <div class="reply_body">
                        <div>
                            初次见面
                        </div>
                        <div class="reply_body_img">
                            <img src="../css/imgs/2.jpg">
                        </div>
                    </div>

                    <!--回复中的回复-->
                    <ul class="media-list rereply">
                        <li class="media rereply_list">
                            <div class="rereply_left">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object img-circle" src="../css/imgs/liuyifei.jpg">
                                    </a>
                                </div>
                                <div class="rereply_head">
                                    <span class="media-heading">落雁孤飞</span><b>：</b><br>
                                    <span class="text-muted small">昨天 14：00</span>
                                </div>
                            </div>
                            <div class="rereply_body">
                                <div>
                                    初次见面
                                </div>
                            </div>
                        </li>
                        <li class="media rereply_list">
                            <div class="rereply_left">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object img-circle" src="../css/imgs/liuyifei.jpg">
                                    </a>
                                </div>
                                <div class="rereply_head">
                                    <span class="media-heading">落雁孤飞</span><b>：</b><br>
                                    <span class="text-muted small">昨天 14：00</span>
                                </div>
                            </div>
                            <div class="rereply_body">
                                <div>
                                    回复<b>@落雁孤飞：</b>
                                    初次见面
                                </div>
                            </div>
                        </li>
                        <li class="media rereply_list">
                            <div class="rereply_left">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object img-circle" src="../css/imgs/liuyifei.jpg">
                                    </a>
                                </div>
                                <div class="rereply_head">
                                    <span class="media-heading">落雁孤飞</span><b>：</b><br>
                                    <span class="text-muted small">昨天 14：00</span>
                                </div>
                            </div>
                            <div class="rereply_body">
                                <div>
                                    回复<b>@落雁孤飞：</b>
                                    初次见面
                                </div>
                            </div>
                        </li>
                        <a class="rereply_more" href="../action_detail.html" target="_blank">还有5人回复了此评论</a>
                    </ul>
                </li>
            </ul>
        </li>

        <!--<li class="media action_list">
            <div class="media-left action_left">
                <a href="#">
                    <img class="media-object img-circle" src="css/imgs/liuyifei.jpg">
                </a>
            </div>
            <div class="action_head">
                <h5 class="media-heading">落雁孤飞</h5>
                <span class="text-muted small">昨天 14：00</span>
            </div>
            <div class="action_body">
                <div>
                    初次见面
                </div>
                <div class="action_body_imgs">
                    <img src="css/imgs/2.jpg">
                </div>
                <div class="action_body_bottom">
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-share"></span> 转发
                    </button>
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-star-empty"></span> 收藏
                    </button>
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-thumbs-up"></span> 赞
                    </button>
                    <textarea class="form-control" placeholder="我也说一句 ..." rows="1"></textarea>
                </div>
            </div>

            &lt;!&ndash;回复区域&ndash;&gt;
            <ul class="media-list reply">
                <li class="media reply_list">
                    <div class="reply_left">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object img-circle" src="css/imgs/liuyifei.jpg">
                            </a>
                        </div>
                        <div class="reply_head">
                            <span class="media-heading">落雁孤飞</span><b>：</b><br>
                            <span class="text-muted small">昨天 14：00</span>
                        </div>
                    </div>
                    <div class="reply_body">
                        <div>
                            初次见面
                        </div>
                        <div class="reply_body_img">
                            <img src="css/imgs/2.jpg">
                        </div>
                    </div>

                    &lt;!&ndash;回复中的回复&ndash;&gt;
                    <ul class="media-list rereply">
                        <li class="media rereply_list">
                            <div class="rereply_left">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object img-circle" src="css/imgs/liuyifei.jpg">
                                    </a>
                                </div>
                                <div class="rereply_head">
                                    <span class="media-heading">落雁孤飞</span><b>：</b><br>
                                    <span class="text-muted small">昨天 14：00</span>
                                </div>
                            </div>
                            <div class="rereply_body">
                                <div>
                                    初次见面
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="media reply_list">
                    <div class="reply_left">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object img-circle" src="css/imgs/liuyifei.jpg">
                            </a>
                        </div>
                        <div class="reply_head">
                            <span class="media-heading">落雁孤飞</span><b>：</b><br>
                            <span class="text-muted small">昨天 14：00</span>
                        </div>
                    </div>
                    <div class="reply_body">
                        <div>
                            初次见面
                        </div>
                        <div class="reply_body_img">
                        </div>
                    </div>
                </li>
                <li class="media reply_list">
                    <div class="reply_left">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object img-circle" src="css/imgs/liuyifei.jpg">
                            </a>
                        </div>
                        <div class="reply_head">
                            <span class="media-heading">落雁孤飞</span><b>：</b><br>
                            <span class="text-muted small">昨天 14：00</span>
                        </div>
                    </div>
                    <div class="reply_body">
                        <div>
                            初次见面
                        </div>
                        <div class="reply_body_img">
                        </div>
                    </div>
                </li>
                <li class="media reply_list">
                    <div class="reply_left">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object img-circle" src="css/imgs/liuyifei.jpg">
                            </a>
                        </div>
                        <div class="reply_head">
                            <span class="media-heading">落雁孤飞</span><b>：</b><br>
                            <span class="text-muted small">昨天 14：00</span>
                        </div>
                    </div>
                    <div class="reply_body">
                        <div>
                            初次见面
                        </div>
                        <div class="reply_body_img">
                        </div>
                    </div>
                </li>
                <li class="media reply_list">
                    <div class="reply_left">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object img-circle" src="css/imgs/liuyifei.jpg">
                            </a>
                        </div>
                        <div class="reply_head">
                            <span class="media-heading">落雁孤飞</span><b>：</b><br>
                            <span class="text-muted small">昨天 14：00</span>
                        </div>
                    </div>
                    <div class="reply_body">
                        <div>
                            初次见面
                        </div>
                        <div class="reply_body_img">
                        </div>
                    </div>
                </li>
                <div class="reply_more"><a href="#">查看更多</a></div>
            </ul>
        </li>-->
    </ul>

</div>


<script src="../bootstrap/js/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/simpler-sidebar.min.js"></script>
<script src="../common/common.js"></script>

<script src="../js/index.js"></script>
<script src="../js/default.js"></script>


</body>
</html>