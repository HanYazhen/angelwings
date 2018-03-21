var id_text = 1;

function content_img_zoomin(thes) {
    var img_src_list = $(thes).parent(".content_div").parent(".action_body_imgs").children(".content_div").children("img");
    for (var i = 0; i < img_src_list.length; i++) {
        img_src_list[i] = img_src_list[i].getAttribute("src");
    }
    if ("carousel" == $(thes).parent(".content_div").parent(".action_body_imgs").children("div").first().attr("data-ride")) {
        $(thes).parent(".content_div").parent(".action_body_imgs").children(".slide").children(".carousel-inner").children(".active").removeClass("active");
        var carousel_list = $(thes).parent(".content_div").parent(".action_body_imgs").children(".slide").children(".carousel-inner").children(".item").children("img");
        for (var i = 0; i < carousel_list.length; i++) {
            carousel_list[i] = carousel_list[i].getAttribute("src");
        }
        for (var i = 0; i < carousel_list.length; i++) {
            if (carousel_list[i] == $(thes).attr("src")) {
                $(thes).parent(".content_div").parent(".action_body_imgs").children(".slide").children(".carousel-inner").children(".item").eq(i).addClass("active");
            }
        }
        return;
    }
    var carousel_id = "abc" + id_text;
    $(thes).parent(".content_div").parent(".action_body_imgs").prepend("<div id='" + carousel_id + "' class='carousel slide' data-ride='carousel'>" +
        "<a class='left carousel-control' href='#" + carousel_id + "' role='button' data-slide='prev'>\n" +
        "    <span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>\n" +
        "    <span class='sr-only'>Previous</span>\n" +
        "</a>" +
        "<a class='right carousel-control' href='#" + carousel_id + "' role='button' data-slide='next'>\n" +
        "    <span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>\n" +
        "    <span class='sr-only'>Next</span>\n" +
        "</a>" +
        "</div>");
    $(thes).parent(".content_div").parent(".action_body_imgs").children(".slide").prepend("<div class='carousel-inner' role='listbox'></div>");
    for (var i = 0; i < img_src_list.length; i++) {
        $(thes).parent(".content_div").parent(".action_body_imgs").children(".slide").children(".carousel-inner").append("<div class='item'>\n" +
            "<img src='" + img_src_list[i] + "'>\n" +
            "</div>");
        if (img_src_list[i] == $(thes).attr("src")) {
            $(thes).parent(".content_div").parent(".action_body_imgs").children(".slide").children(".carousel-inner").children(".item").last().addClass("active");
        }
    }
    $(thes).parent(".content_div").parent(".action_body_imgs").children(".content_div").css({
        "width": "70px",
        "height": "70px"
    });
    $(thes).css("border", "1px solid black");
    id_text++;
}

function zan(actionid, thes, actionuid, actionname, zanid, zanname) {
    var num = parseInt($(thes).children(".zan_person").text());
    if ($(thes).css("position") != "static") {
        $(thes).css("color", "rgb(51,51,51)");
        $(thes).css("position", "static");
        num -= 1;
        $(thes).find(".zan_person").text(num);
        $.ajax({
            url: "ajax_zannumbersub.php",
            type: "POST",
            data: {action_id: actionid, uid: actionuid, username: actionname, zan_id: zanid, zan_name: zanname},
            error: function () {
                alert("失败");
            }
        })
    } else {
        $(thes).css("color", "red");
        $(thes).css("position", "relative");
        num += 1;
        $(thes).find(".zan_person").text(num);
        $.ajax({
            url: "ajax_zannumberplus.php",
            type: "POST",
            data: {action_id: actionid, uid: actionuid, username: actionname, zan_id: zanid, zan_name: zanname},
            error: function () {
                alert("失败");
            }
        })
    }
}

function collect(actionid, thes, actionuid, actionname, collectid, collectname) {
    if ($(thes).css("position") != "static") {
        $(thes).css("color", "rgb(51,51,51)");
        $(thes).css("position", "static");
        $(thes).children(".col").text("收藏");
        $.ajax({
            url: "ajax_collectnumbersub.php",
            type: "POST",
            data: {
                action_id: actionid,
                uid: actionuid,
                username: actionname,
                collect_id: collectid,
                collect_name: collectname
            },
            error: function () {
                alert("失败");
            }
        })
    } else {
        $(thes).css("color", "red");
        $(thes).css("position", "relative");
        $(thes).children(".col").text("已收藏");
        $.ajax({
            url: "ajax_collectnumberplus.php",
            type: "POST",
            data: {
                action_id: actionid,
                uid: actionuid,
                username: actionname,
                collect_id: collectid,
                collect_name: collectname
            },
            error: function () {
                alert("失败");
            }
        })
    }
}