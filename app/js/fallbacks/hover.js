$(document).ready(function(){
    $(".frontpagebox").hover(function(){
        $(".imagetextsmall", this).stop().animate({'top': '-110px'}, 300);
    }, function(){
        $(".imagetextsmall", this).stop().animate({'top': '-87px'}, 300);
    });
});
