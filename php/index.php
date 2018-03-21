<?php
header("Content-Type: text/html;charset=utf-8");
include 'common.php';
require "Database.php";
require "Compress_img.class.php";
$conn = new Database();
$result = $conn->action_select();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <title>$NAME---天使之翼</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../common/common.css">

    <link rel="stylesheet" type="text/css" href="../css/index.css">

    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/sinaFaceAndEffec.css">

    <!--    <script src="../common/jquery-1.js"></script>-->
    <!--    <script src="../common/jquery.js"></script>-->

    <link rel="stylesheet" type="text/css" href="../css/default2.css">


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
            <ul class="nav navbar-nav" style="margin-top: 0">
                <li class="active"><a href="index.html">动态</a></li>
                <li><a href="../news.html">校园资讯</a></li>
                <li><a href="../angel.php">天使之翼</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-edit"></span> 发表动态</a></li>
                <li>
                    <a class="nav_head" href="setting.html">
                        <img class="to_personal" src="../css/imgs/liuyifei.jpg">
                        <div>
                            <span class="nav_head_name to_personal">
                                <?php
                                echo $_SESSION['un'];
                                ?>
                            </span>
                            <span> ♂</span><br>
                            <span class="to_search to_personal">

                            </span>
                        </div>
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
                <span class="to_follows">关注<br>0</span>
            </div>
            <div class="fans text-center">
                <span class="to_fans">粉丝<br>0</span>
            </div>
        </li>

        <li>
            <!--<a href="../setting.html">
                都说了是落雁孤飞
                <img src="../css/imgs/angel.jpg">
            </a>-->
        </li>
    </ul>
</div>

<!--发表框-->
<!--<form class="hidden-xs form-group" id="publish_area" onsubmit="return publish_check();">
    <textarea class="form-control" id="publish_textarea" placeholder="整个学校都在倾听你的声音！！！"></textarea>
    <div id="publish_buttons">
        <input class="btn btn-default pull-right" type="submit" value="确定">
    </div>
</form>-->

<div id="content" style="width: 740px; height: auto;margin: 70px auto 0 auto;">
    <div class="wrap">
        <div class="comment">
            <!--<div class="head-face">
                <img src="../css/1.jpg">
                <p>我是鸟</p>
            </div>-->
            <div class="content">
                <form method="post" action="action_publish.php" enctype="multipart/form-data">
                    <div class="cont-box">
                        <!--                    <textarea class="text" onkeyup="out()" placeholder="请输入..."></textarea>-->
                        <textarea style="width: 100%;height: 100%;" class="text" name="publish_area"
                                  placeholder="请输入..."></textarea>
                    </div>
                    <div class="tools-box">
                        <div class="operator-box-btn">
                            <span class="face-icon">☺</span>
                            <input type="file" class="file" name="file[]" multiple onchange="imgPreview()"
                                   style="display: none;" id="file">
                            <span class="img-icon input-file">▧</span>
                        </div>
                        <div class="submit-btn">
                            <!--                        <input onclick="out()" value="发布" type="button">-->
                            <input value="发布" type="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div id="preview">

        </div>
        <div id="info-show">
            <ul></ul>
        </div>
    </div>
</div>

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
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                <h4 class="modal-title">登录</h4>
            </div>
            <div class="modal-body">
                <form>
                    <input type="text" class="form-control">
                    <input type="password" class="form-control">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary">登录</button>
            </div>
        </div>
    </div>
</div>

<!--主要内容-->
<div id="main_content">

    <ul class="media-list action">

        <?php
        if ($result->num_rows > 0) {
            // 输出每行数据
            while ($row = $result->fetch_assoc()) {
                print <<<EOT
                <li class="media action_list" attr-uid="{$row['uid']}" attr-username="{$row['username']}" attr-aid="{$row['aid']}" attr-actionid="{$row['action_id']}">
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
                    <img class="media-object img-circle" src="../image/{$row['uid']}/headimage/headimage.png">
                </a>
            </div>
            <div class="action_head">
                <h5 class="media-heading" onclick="javascript:back_home();" style="cursor: pointer;">{$row['username']}</h5>
                <span class="text-muted small">{$row['action_time']}</span>
            </div>
            <div class="action_body">
                <div class="content_text">
                    {$row['content']}
                </div>
                <div class="action_body_imgs">
EOT;
                $dir = "../action/" . $row['uid'] . "/" . $row['aid'] . "/";
                if (is_dir($dir)) {
                    if ($dh = opendir($dir)) {
                        while (($file = readdir($dh)) !== false) {
                            if ($file == "." || $file == "..") {
                                continue;
                            }
                            echo "<div class='content_div'>";
                            echo "<img class='content_img' onclick='content_img_zoomin(this);' src='../action/" . $row['uid'] . "/" . $row['aid'] . "/" . $file . "'>";
                            echo "</div>";
                        }
                        closedir($dh);
                    }
                }

                $zan_action_id = "zan" . $row['action_id'];
                $collect_action_id = "collect" . $row['action_id'];
                print <<<EOT
                </div>
                <!--动态底部回复区-->
                <div class="action_body_bottom">
                    <button type="button" class="btn btn-default" data-target=".share" data-toggle="modal">
                        <span class="glyphicon glyphicon-share"></span> 转发
                    </button>
                    <button type="button" id="{$collect_action_id}" class="btn btn-default" onclick="collect({$row['action_id']},this,{$row['uid']},'{$row['username']}',{$_SESSION['uid']},'{$_SESSION['un']}')" style="position:static;">
                        <span class="glyphicon glyphicon-heart-empty"></span> <span class="col">收藏</span>
                    </button>
                    <button type="button" id="{$zan_action_id}" class="btn btn-default" onclick="zan({$row['action_id']},this,{$row['uid']},'{$row['username']}',{$_SESSION['uid']},'{$_SESSION['un']}');" style="position:static;">
                        <span class="glyphicon glyphicon-thumbs-up"></span> <span class="zan_person">{$row['zan_number']}</span>
                    </button>
                    <!--<form id="reply_talk_area" onsubmit="return answer_check();">
                        <textarea class="form-control" id="reply_textarea" placeholder="我也说一句 ..."></textarea>
                        <div id="reply_buttons">
                            <button type="submit" class="btn btn-default pull-right">回复</button>
                        </div>
                    </form>-->
                    
                    <div style="width: 655px; margin: 10px auto 0 auto;">
                        <div class="wrap">
                            <div class="comment">
                                <!--<div class="head-face">
                                    <img src="../css/1.jpg">
                                    <p>我是鸟</p>
                                </div>-->
                                <div class="content">
                                    <form class="reply_form" method="post" action="action_publish.php" enctype="multipart/form-data">
                                        <div class="cont-box" style="height: 50px;">
                                            <!--                    <textarea class="text" onkeyup="out()" placeholder="请输入..."></textarea>-->
                                            <textarea style="width: 100%;height: 100%;" class="text" name="publish_area" placeholder="请输入..."></textarea>
                                        </div>
                                        <div class="tools-box">
                                            <div class="operator-box-btn">
                                                <span class="face-icon">☺</span>
                                                <input type="file" class="file" name="file[]" multiple onchange="imgPreview2(this)"
                                                       style="display: none;">
                                                <span class="img-icon input-file">▧</span>
                                            </div>
                                            <div class="submit-btn">
                                                <!--                        <input onclick="out()" value="发布" type="button">-->
                                                <input value="回复" type="button" onclick="reply_to()">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="preview_pre" style="width: 600px;">
                         
                            </div>
                            <div class="info-show">
                                <ul></ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </li>
EOT;

                $conn2 = new Database();
                if ($conn2->zan_name_select($row['action_id'], $_SESSION['uid'])) {
                    print <<<EOT
                    <script type="text/javascript">
                        document.getElementById('{$zan_action_id}').style.color="red";
                        document.getElementById('{$zan_action_id}').style.position="relative";
                    </script>
EOT;
                }
                $conn2->closedb();

                $conn3 = new Database();
                if ($conn3->collect_name_select($row['action_id'], $_SESSION['uid'])) {
                    print <<<EOT
                    <script type="text/javascript">
                        document.getElementById('{$collect_action_id}').style.color="red";
                        document.getElementById('{$collect_action_id}').style.position="relative";
                    </script>
EOT;
                }
                $conn3->closedb();

            }
        } else {
            echo "没有记录";
        }
        ?>
    </ul>

</div>

<?php
$conn->closedb();
?>


<script src="../bootstrap/js/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/simpler-sidebar.min.js"></script>
<script src="../common/common.js"></script>

<script src="../js/index.js"></script>
<script src="../js/default.js"></script>
<script src="../js/jquery.js"></script>

<script type="text/javascript" src="../js/main.js"></script>
<script type="text/javascript" src="../js/sinaFaceAndEffec.js"></script>
<script type="text/javascript" src="../js/default2.js"></script>
<script type="text/javascript">
    // 绑定表情
    $('.face-icon').SinaEmotion($('.text'));


    // 测试本地解析
    function out() {
        var inputText = $('.text').val();
        $('#info-show ul').html(reply(AnalyticEmotion(inputText)));
    }

    var html;

    function reply(content) {
        html = '<li>';
//        html += '<div class="head-face">';
//        html += '<img src="images/1.jpg" / >';
//        html += '</div>';
        html += '<div class="reply-cont">';
        html += '<p class="username">小小红色飞机</p>';
        html += '<p class="comment-body">' + content + '</p>';
        html += '<p class="comment-footer">2016年10月5日　回复　点赞54　转发12</p>';
        html += '</div>';
        html += '</li>';
        return html;
    }

    $(".input-file").click(function () {
        $(this).prev().click();
    })
</script>


</body>
</html>