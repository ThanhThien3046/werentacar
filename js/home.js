// $(document).ready(function() {
$(function() {
    $('.center').slick({
        centerMode: true,
        centerPadding: '170px',
        infinite: true,
        adaptiveHeight: true,
        // dots:true,
        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
        nextArrow: '<button class="slide-arrow next-arrow"></button>',
        autoplaySpeed:3000,
        slidesToShow: 1,
        autoplay:true,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: false,
              centerPadding: '40px',
              slidesToShow: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              prevArrow: '<button class="slide-arrow prev-arrow"></button>',
              nextArrow: '<button class="slide-arrow next-arrow"></button>',
              arrows: false,
              centerMode: false,
              centerPadding: '40px',
              slidesToShow: 1
            }
          }
        ]
      });
});
// $(function() {
//     $('.center').slick({
//             infinite: true,
//             dots:true,
//             autoplaySpeed:3000,
//             slidesToShow: 1,
//             centerMode: true, //要素を中央寄せ
//             centerPadding:'0', //両サイドの見えている部分のサイズ
//             autoplay:true, //自動再生
//             responsive: [
//                 {
//                 breakpoint: 1024,
//                 settings: {
//                 arrows: false,
//                 centerMode:false, 
//                 centerPadding:false,
//             }},]
//         });
// });


