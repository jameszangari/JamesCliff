var $ = jQuery.noConflict();

$(function(){
    $('.slick-slider-container').slick({
      cssEase: 'linear',
      infinite: true,
      centerMode: true,
      centerPadding: '60px',
      slidesToShow: 3,
      responsive: [
        {
          breakpoint: 1224,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 2
          }
        },
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]
    });
});