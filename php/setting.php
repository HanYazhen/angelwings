<?php
include "common.php";
$username = $_SESSION['un'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <title>$NAME---天使之翼</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../common/common.css">

    <!--    头像上传-->
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.4.6.0.css">
    <link rel="stylesheet" href="../css/amazeui.min.css">
    <link rel="stylesheet" href="../css/amazeui.cropper.css">
    <link rel="stylesheet" href="../css/custom_up_img.css">
    <!--    头像上传-->

    <link rel="stylesheet" type="text/css" href="../css/setting.css">

</head>
<body>
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
<div class="hidden-xs navbar-fixed-top" id="side_navbar">
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

<!--主要部分-->
<div id="main_content">
    <ol class="breadcrumb" style="padding-right: 0;">
        <li class="active">账号信息及设置</li>
        <button class="btn btn-default noedit" style="float: right;" onclick="edit();">编辑</button>
        <button class="btn btn-default edit" style="float: right;" onclick="noedit();">取消</button>
    </ol>

    <div class="content_item">
        <div class="title">个人信息</div>
        <div class="form-group">
            <label class="col-sm-2 control-label">头像</label>
            <!--<div class="col-sm-10">
                <p class="form-control-static">
                    <img src="../css/imgs/wings.jpg">
                </p>
            </div>-->
            <div>
                <div class="up-img-cover form-control-static" id="up-img-touch">
                    <img class="am-circle" alt="点击图片上传" src="../image/<?php echo $_SESSION['uid']?>/headimage/headimage.png" style="width: 80px;cursor: pointer;"
                         title="点击更换头像">
                </div>
            </div>
            <div><a style="text-align: center; display: block;" id="pic"></a></div>

            <!--图片上传框-->
            <div class="am-modal am-modal-no-btn up-frame-bj " tabindex="-1" id="doc-modal-1">
                <div class="am-modal-dialog up-frame-parent up-frame-radius">
                    <div class="am-modal-hd up-frame-header">
                        <label>修改头像</label>
                        <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
                    </div>
                    <div class="am-modal-bd  up-frame-body">
                        <div class="am-g am-fl">
                            <div class="am-form-group am-form-file">
                                <div class="am-fl">
                                    <button type="button" class="am-btn am-btn-default am-btn-sm">
                                        <i class="am-icon-cloud-upload"></i> 选择要上传的文件
                                    </button>
                                </div>
                                <input type="file" id="inputImage">
                            </div>
                        </div>
                        <div class="am-g am-fl">
                            <div class="up-pre-before up-frame-radius">
                                <img alt="" src="" id="image">
                            </div>
                            <div class="up-pre-after up-frame-radius">
                            </div>
                        </div>
                        <div class="am-g am-fl">
                            <div class="up-control-btns">
                                <span class="am-icon-rotate-left" onclick="rotateimgleft()"></span>
                                <span class="am-icon-rotate-right" onclick="rotateimgright()"></span>
                                <span class="am-icon-check" id="up-btn-ok" url="admin/user/upload.action"></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!--加载框-->
            <div class="am-modal am-modal-loading am-modal-no-btn" tabindex="-1" id="my-modal-loading">
                <div class="am-modal-dialog">
                    <div class="am-modal-hd">正在上传...</div>
                    <div class="am-modal-bd">
                        <span class="am-icon-spinner am-icon-spin"></span>
                    </div>
                </div>
            </div>

            <!--警告框-->
            <div class="am-modal am-modal-alert" tabindex="-1" id="my-alert">
                <div class="am-modal-dialog">
                    <div class="am-modal-hd">信息</div>
                    <div class="am-modal-bd" id="alert_content">
                        成功了
                    </div>
                    <div class="am-modal-footer">
                        <span class="am-modal-btn">确定</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="inputname" class="col-sm-2 control-label">昵称</label>
            <div class="col-sm-10">
                <input type="text" class="form-control edit" id="inputname" value="<?php echo $_SESSION['un'];?>">
                <span class="noedit" id="username"><?php echo $_SESSION['un'];?></span>
            </div>
        </div>
        <div class="form-group">
            <label for="inputintro" class="col-sm-2 control-label">简介</label>
            <div class="col-sm-10">
                <input type="text" class="form-control edit" id="inputintro" value="啊欧，都说了是。。。">
                <span class="noedit" id="intro">啊欧，都说了是。。。</span>
            </div>
        </div>
    </div>

    <div class="content_item">
        <div class="title">安全信息</div>
        <div class="form-group">
            <label for="inputpass" class="col-sm-2 control-label">密码</label>
            <div class="col-sm-10">
                <input type="password" class="form-control edit" id="inputpass">
                <span class="noedit" id="password_noedit"></span>
            </div>
        </div>
        <div class="form-group">
            <label for="inputemail" class="col-sm-2 control-label">邮箱</label>
            <div class="col-sm-10">
                <input type="email" class="form-control edit" id="inputemail">
                <span class="noedit" id="email_noedit"></span>
            </div>
        </div>
    </div>

</div>

<script src="../bootstrap/js/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/simpler-sidebar.min.js"></script>
<script src="../common/common.js"></script>

<!--头像上传-->
<script src="../js/amazeui.min.js" charset="utf-8"></script>
<script src="../js/cropper.min.js" charset="utf-8"></script>
<script src="../js/custom_up_img.js" charset="utf-8"></script>
<!--头像上传-->

<script src="../js/setting.js"></script>


</body>
</html>