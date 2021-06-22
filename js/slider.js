$(function() {
    $('.slider').slick({
            infinite: true,
            dots:true,
            autoplaySpeed:3000,
            slidesToShow: 1,
            centerMode: true, //要素を中央寄せ
            centerPadding:'0', //両サイドの見えている部分のサイズ
            autoplay:true, //自動再生
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    arrows: false,
                centerMode:false, 
                centerPadding:false,
            }},]
        });
});
