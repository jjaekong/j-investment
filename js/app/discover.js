(function($) {
    
    // 검색 영역 토글
    $(document).on('click', '#content.list .search-area header .btn', function() {
        var $area = $(this).parents('.search-area:eq(0)');
        if ($area.hasClass('opened')) {
            $area.removeClass('opened');
            $(this).html('열기 <i class="icon-down-circle"></i>');
        } else {
            $area.addClass('opened');
            $(this).html('닫기 <i class="icon-up-circle"></i>');
        }
        return;
    });
    
    // 뷰페이지 이미지 슬라이드
    if ($('#content.view .figure ul').length > 0) {
        var FigureSlider = $('#content.view .figure ul').bxSlider({
            pager: false,
            controls: false,
            //adaptiveHeight: true
        });

        $(document).on('click', '#content.view .figure .controls .next', function() {
            FigureSlider.goToNextSlide();
            return false;
        });

        $(document).on('click', '#content.view .figure .controls .prev', function() {
            FigureSlider.goToPrevSlide();
            return false;
        });
    }
    
})(jQuery);