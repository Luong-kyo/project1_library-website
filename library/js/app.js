$(document).ready(function(){
    $('.slide-books').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow:
            `<button type='button' class='slick-prev pull-left'><i class="fa-solid fa-chevron-left"></i></button>`,
        nextArrow:
            `<button type='button' class='slick-next pull-right'><i class="fa-solid fa-chevron-right"></i></button>`,
    });
    
    $('.slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false,
    });
});


