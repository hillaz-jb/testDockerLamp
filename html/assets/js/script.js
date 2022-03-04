const bBtn = $(".btn-success");

bBtn.click(function(){
    if($(this).hasClass("text-dark")){
        $(this).removeClass("text-dark");
    }
    else {
        $(this).addClass("text-dark");
    }
});