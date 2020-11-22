


$(function () {
    $(".alzs2 li").hover(function(){
        $(this).find(".alzs3").css("left","0");
    },function(){
        $(this).find(".alzs3").css("left","-276px");
    });
    $(".fen").click(function () {
        $(".top3").toggle()
    })

})