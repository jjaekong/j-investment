(function() {
    
    function setFrameHeight(height) {
        var targetFrame = $('body').attr('data-target-frame');
        if ( ! targetFrame) {
            console.log('높이를 변경할 객체의 아이디가 설정되지 않았습니다.');
            return false;
        }
        if ( ! height) {
            console.log('변경할 높이값이 설정되지 않았습니다.');
            return false;
        }
        $('#'+targetFrame, parent.document).height(height);
    }
    
    $(window).on('load resize', function() {
        setFrameHeight($('body').height());
    });
    
})(jQuery);