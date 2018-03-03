var currentScrollTop = 0, footerScrollTop=0 , menuScrollTop = 0;

window.onload = function() {
    menuScrollTop =$('#menu2').offset().top;
    footerScrollTop = $('footer').offset().top;
    //새로고침
    scrollController();
    // 스크롤 하는 경우 실행됨
    $(window).on('scroll', function() {
        scrollController();
    });
}

function scrollController() {
    currentScrollTop = $(window).scrollTop();
    if(currentScrollTop > menuScrollTop && currentScrollTop<footerScrollTop-190){
        $('#menu2').addClass('fixed');    
        $('#section1-inner').css('margin-top','85px');
    }else{ 
        $('#menu2').removeClass('fixed');
        $('#section1-inner').css('margin-top','0px');
    }
}