// $(document).ready(function() {
$(function() {
    $('.center').slick({
        centerMode: true,
        centerPadding: '10px',
        infinite: true,
        adaptiveHeight: true,
        // dots:true,
        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
        nextArrow: '<button class="slide-arrow next-arrow"></button>',
        autoplaySpeed:3000,
        slidesToShow: 3,
        autoplay:true,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: false,
            //   centerPadding: '40px',
              slidesToShow: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              prevArrow: '<button class="slide-arrow prev-arrow"></button>',
              nextArrow: '<button class="slide-arrow next-arrow"></button>',
              arrows: false,
              centerMode: false,
            //   centerPadding: '40px',
              slidesToShow: 1,
            }
          }
        ]
      });
});
