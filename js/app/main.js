(function($) {
    
    var IntroSlider = $('#introduce .slides').bxSlider({
        mode: 'fade',
        controls: false,
        speed: 0
    });
    
    $(document).on('click', '#introduce .controls .next', function() {
        IntroSlider.goToNextSlide();
        return false;
    });
    
    $(document).on('click', '#introduce .controls .prev', function() {
        IntroSlider.goToPrevSlide();
        return false;
    });    
    
})(jQuery);