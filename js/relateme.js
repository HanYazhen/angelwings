/**
 * Created by 17966 on 2017/5/25.
 */
$(document).ready(function () {
    $("#publish_area textarea").focus(function () {
        $(this).attr('rows','10');
    });
    $("#publish_area textarea").blur(function () {
        $(this).attr('rows','2');
    });
    $("#main_content .content_item .content .content_bottom textarea").focus(function () {
        $(this).attr('rows','2');
    });
    $("#main_content .content_item .content .content_bottom textarea").blur(function () {
        $(this).attr('rows','1');
    });
});