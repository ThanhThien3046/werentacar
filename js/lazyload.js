// to top function
// fadein image
$(function(){
    $(window).scroll(function(){
        if($(this).scrollTop() >= 100){
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
	$(function(){
        // #で始まるリンクをクリックしたら実行
        $('a[href^="/#"]').click(function() {
          // スクロールの速度
          var speed = 600; // ミリ秒で記述
          var href= $(this).attr("href");
          var target = $(href == "#" || href == "" ? 'index.html' : href);
          var position = target.offset().top;
          $('body,html').animate({scrollTop:position}, speed, 'swing');
          return false;
        });
      });

    $(window).scroll(function (){
        $('.fadein').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > targetElement - windowHeight + 30){
                $(this).css('opacity','1');
                $(this).css('transform','translateX(0)');
            }
        });
        });	
	$(window).scroll(function (){
        $('.fadein2').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > targetElement - windowHeight + 30){
                $(this).css('opacity','1');
                $(this).css('transform','translateX(0)');
            }
        });
        });	
	$(window).scroll(function (){
        $('.fadein3').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > targetElement - windowHeight + 30){
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
});
