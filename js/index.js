/**
 * Created by 17966 on 2017/5/14.
 */
$(document).ready(function () {
    $("#publish_area").click(function (e) {
        // $(this).show();
        $("#publish_textarea").animate({height: "210px"});
        $("#publish_buttons").slideDown();
        e.stopPropagation();
    });
    $(document).click(function (event) {
        $("#publish_textarea").animate({height: "70px"});
        $("#publish_buttons").slideUp();
        $("#body").hide();
    });
    /*$("#publish_area").click(function () {
        $("#publish_textarea").animate({height:"210px"});
        $("#publish_buttons").fadeIn();
    });
    $("#publish_area").blur(function () {
        $("#publish_textarea").animate({height:"70px"});
        $("#publish_buttons").fadeOut();
    });*/
    $("#reply_talk_area").click(function (e) {
        // $(this).show();
        $("#reply_textarea").animate({height: "100px"});
        $("#reply_buttons").slideDown();
        e.stopPropagation();
    });
    $(document).click(function (event) {
        $("#reply_textarea").animate({height: "40px"});
        $("#reply_buttons").slideUp();
        $("#body").hide();
    });
    $("#group").click(function () {
        $(this).next().fadeToggle("slow");
    });
    $(".to_personal").click(function () {
        window.location.href = "homepage.html";
    });
    $(".to_fans").click(function () {
        window.location.href = "fans.html";
    });
    $(".to_follows").click(function () {
        window.location.href = "follows.html";
    });
    $(".zan").click(function () {
        var num = parseInt($(this).children(".zan_person").text());
        if ($(this).css("position") != "static") {
            $(this).css("color", "rgb(51,51,51)");
            $(this).css("position", "static");
            num -= 1;
            $(this).find(".zan_person").text(num);
        } else {
            $(this).css("color", "red");
            $(this).css("position", "relative");
            num += 1;
            $(this).find(".zan_person").text(num);
        }
    });
    $(".collect").click(function () {
        if ($(this).css("position") != "static") {
            $(this).css("color", "rgb(51,51,51)");
            $(this).css("position", "static");
            $(this).children(".col").text("收藏");
        } else {
            $(this).css("color", "red");
            $(this).css("position", "relative");
            $(this).children(".col").text("已收藏");
        }
    });
    /*$("li").hover(function () {
        $(this).children("span").children(".report").css("display","inline");
    });*/

    // 回复回复点赞
    /*$(".reply_body").hover(function () {
        $(this).after("<span style=\"float: right;margin-right: 10px;\">\n" +
            "          <a href=\"#\" class=\"report\" style=\"padding-right: 10px;margin-right: 10px;border-right: 1px dotted black;display: none;\">举报</a>\n" +
            "          <a href=\"#\" style=\"padding-right: 10px;margin-right: 10px;border-right: 1px dotted black;\">回复</a>\n" +
            "          <a href=\"#\" class=\"glyphicon glyphicon-thumbs-up\"></a>\n" +
            "          </span>");
    }, function () {
        $(this).next("span").remove();
    })*/

    // 发布为空弹出框居中
    var null_cancel_width = $("#null_cancel").outerWidth(true);
    var docu_width = $(document).width();
    var left_per = ( docu_width - null_cancel_width ) / 2 / docu_width;
    left_per = to_per(left_per, 2);
    $("#null_cancel").css("left", left_per);


    // 回复
    $(".reply_2_area").click(function (e) {
        $(this).parent("span").next("ul").children("form").slideDown();
        $(this).parent("span").next("ul").children("form").children("textarea").focus();
        e.stopPropagation();
    });

    $(".reply_2_other").click(function (e) {
        $(this).parent("span").parent("li").parent("ul").children("form").slideDown();
        $(this).parent("span").parent("li").parent("ul").children("form").children("textarea").focus();
        e.stopPropagation()
    })

    $(document).click(function (event) {
        $("#reply_talk_2").slideUp();
        $("#body").hide();
    });


    // 回复点赞
    $(".reply_zan").click(function () {
        if ($(this).css("display") == "inline-block") {
            $(this).css({"color": "red", "display": "inline"});
        } else {
            $(this).css({"color": "rgb(51,122,183)", "display": "inline-block"});
        }
    });
});

// 将小数转化为百分数，decimal：原小数，digit：百分数小数位数
function to_per(decimal, digit) {
    var deci = decimal * 100;
    return deci.toFixed(digit) + "%";
}

function back_home() {
    window.location.href = "homepage.html";
}

function publish_check() {
    if ($("#publish_textarea").val() == "") {
        $("#null_cancel").text("内容为空,取消发布");
        $("#null_cancel").fadeIn();
        setTimeout('disappear()', 1500);
        return false;
    }
}

// 为空的弹出框消失
function disappear() {
    $("#null_cancel").fadeOut("fast");
    $("#publish_textarea").animate({height: "70px"});
    $("#publish_buttons").slideUp();
    $("#body").hide();
}

// 回复为空
function answer_check() {
    if ($("#reply_textarea").val() == "") {
        $("#null_cancel").text("回复为空,取消发布");
        $("#null_cancel").fadeIn();
        setTimeout('disappear2()', 1500);
        return false;
    }
}

function disappear2() {
    $("#null_cancel").fadeOut("fast");
    $("#reply_textarea").animate({height: "40px"});
    $("#reply_buttons").slideUp();
    $("#body").hide();
}

// 发布预览图片
function imgPreview() {
    //判断是否支持FileReader
    /*if (window.FileReader) {
        var reader = new FileReader();
    } else {
        alert("您的设备不支持图片预览功能，如需该功能请升级您的设备！");
    }

    //获取文件
    var file = fileDom.files[0];
    var imageType = /^image\//;
    //是否是图片
    if (!imageType.test(file.type)) {
        alert("请选择图片！");
        return;
    }
    //读取完成
    reader.onload = function(e) {
        //获取图片dom
        var img = document.getElementById("preview");
        //图片路径设置为读取的图片
        // img.src = e.target.result;
        var CSSDataURL = "url" + "(" + e.target.result + ")";
        $("#preview").css({"background-image":CSSDataURL,"width":"100px","height":"100px"});
    };
    reader.readAsDataURL(file);*/
    var docObj = document.getElementById("file");
    alert(docObj);
    var dd = document.getElementById("preview");
    alert(dd);
    dd.innerHTML = "";
    var fileList = docObj.files;
    for (var i = 0; i < fileList.length; i++) {
        dd.innerHTML += "<div style='width: 150px;height: 150px;margin-right: 10px;margin-bottom: 10px;display: inline-block;background: no-repeat center center;' id='img" + i + "'></div>";
        var imgObjPreview = document.getElementById("img" + i);
        var abc = "url(" + window.URL.createObjectURL(docObj.files[i]) + ")";
        // var abcid = "img" + i;
        imgObjPreview.style.backgroundImage = abc;
    }
}

function imgPreview2(thes) {
    //判断是否支持FileReader
    /*if (window.FileReader) {
        var reader = new FileReader();
    } else {
        alert("您的设备不支持图片预览功能，如需该功能请升级您的设备！");
    }

    //获取文件
    var file = fileDom.files[0];
    var imageType = /^image\//;
    //是否是图片
    if (!imageType.test(file.type)) {
        alert("请选择图片！");
        return;
    }
    //读取完成
    reader.onload = function(e) {
        //获取图片dom
        var img = document.getElementById("preview");
        //图片路径设置为读取的图片
        // img.src = e.target.result;
        var CSSDataURL = "url" + "(" + e.target.result + ")";
        $("#preview").css({"background-image":CSSDataURL,"width":"100px","height":"100px"});
    };
    reader.readAsDataURL(file);*/
    var docObj = thes;
    var click_num = $(".file").index(thes);
    // var dd = $(".preview:eq(click_num)");
    var dd = document.getElementsByClassName("preview_pre");
    dd = dd[click_num-1];
    dd.innerHTML = "";
    var fileList = docObj.files;
    for (var i = 0; i < fileList.length; i++) {
        dd.innerHTML += "<div style='width: 100px;height: 100px;margin-right: 10px;margin-bottom: 10px;display: inline-block;background: no-repeat center center;' id='img" + i + "'></div>";
        var imgObjPreview = document.getElementById("img" + i);
        var abc = "url(" + window.URL.createObjectURL(docObj.files[i]) + ")";
        var abcid = "img" + i;
        imgObjPreview.style.backgroundImage = abc;
    }
}

function reply_to() {
    $.ajax({
        url: "../php/reply.php",
        data: $(".reply_form").serialize(),
        success: function (data) {
            alert(data);
        },
        error: function () {
            alert("error");
        }
    })
}