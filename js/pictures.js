/**
 * Created by 17966 on 2017/5/25.
 */
$(document).ready(function () {
    var album_width = $("#main_content .content_item").width();
    $("#main_content .content_item .content_picture").css("height",album_width);
    $(window).resize(function () {
        var album_width = $("#main_content .content_item").width();
        $("#main_content .content_item .content_picture").css("height",album_width);
    });
})