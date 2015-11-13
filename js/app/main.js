(function($) {
    
    var IntroSlider = $('#introduce .slides').bxSlider({
        mode: 'fade',
        controls: false,
        speed: 0
    });
    
    $(document).on('click', '#introduce .controls .next', function() {
        IntroSlider.goToNextSlide();
    });
    
    $(document).on('click', '#introduce .controls .prev', function() {
        IntroSlider.goToPrevSlide();
    });    
    
})(jQuery);