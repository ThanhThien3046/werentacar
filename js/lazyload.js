// to top function
// fadein image
$(function(){
    $(window).scroll(function (){
        $('.fadein').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > targetElement - windowHeight + 40){
                $(this).css('opacity','1');
                $(this).css('transform','translateX(0)');
            }
        });
        });	
    $(window).scroll(function (){
        $('.fadeinzoom').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > targetElement - windowHeight + 40){
                $(this).css('opacity','1');
                $(this).css('transform','translateX(0)');
            }
        });
        });	

    $(window).scroll(function(){
        if($(this).scrollTop() >= 50){
            $('.return-to-top').fadeIn(200);
        }
        else
        {
            $('.return-to-top').fadeOut(200);
        }
    });

    $('.return-to-top').click(function(){
        $('body,html').animate({
            scrollTop:0
        },500);
    });
});
