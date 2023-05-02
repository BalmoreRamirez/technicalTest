$(document).ready(function() {
    // Slider
    $('.slider').slick({
        dots: false,
        autoplay: false,
        autoplaySpeed: 5000,
        adaptiveHeight: true
    });

    // Modal
    $('.cover').click(function() {
        $('.modal').fadeIn();
    });

    $('.close').click(function() {
        $('.modal').fadeOut();
    });
});
