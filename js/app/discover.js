(function($) {
    
    // 검색 영역 토글
    $(document).on('click', '.search-area header .btn', function() {
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
    
})(jQuery);