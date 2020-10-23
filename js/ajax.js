//
$(document).ready(function ($) {
//    $("a").off("click")
    $("a").click(function (e) {
        e.preventDefault();
        link = $(this).attr("page");
        $.ajax({
            url: link
        }).done(function (html) {
                    $("#content").empty().append(html);
                    alert();
                }).fail(function () {
                    console.log("error");
                }).always(function (){
                            
                    console.log("complete");
                });
        e.preventDefault();
    });
});


//function content(page) {
//
//    $("document").ready(() => {
//        $.ajax({
//            url: "pages/" + page,
//            method: "post",
//            data: {},
//            success: (res) => {
//                $("#content").html(res);
//                //$("#content").append("");
//            },
//            error: (err) => {
//            }
//        });
//    });



//}