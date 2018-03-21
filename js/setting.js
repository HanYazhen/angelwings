/**
 * Created by surface on 2017/5/30.
 */
$(document).ready(function () {
    var username = $("#username").text();
    $.ajax({
        url: "ajax_setting2.php",
        dataType: "text",
        type: "POST",
        data: {username: username},
        success: function (data,status) {
            $("#email_noedit").text(data);
            $("#inputemail").val(data);
        },
        error: function () {
            alert("失败");
        }
    });
    $.ajax({
        url: "ajax_setting.php",
        dataType: "json",
        type: "POST",
        data: {username: username},
        success: function (data,status) {
            var str = "*";
            for (var i = 0;i < data;i++ ) {
                str = str + "*";
            }
            $("#password_noedit").html("<strong>" + str + "</strong>");
            $("#inputpass").val(str);
        },
        error: function () {
            alert("失败");
        }
    });
});

function edit() {
    $(".noedit").hide("slow");
    $(".edit").show("slow");
}

function noedit() {
    $(".edit").hide("slow");
    $(".noedit").show("slow");
}