/**
 * Created by 17966 on 2017/5/24.
 */
// 设置手机端高度图片数目自适应
$(document).ready(function () {
    var album_width = $("#main_content .content_item").width();
    $("#main_content .content_item .content_album").css("height",album_width);
    $(window).resize(function () {
        var album_width = $("#main_content .content_item").width();
        $("#main_content .content_item .content_album").css("height",album_width);
    });
})
