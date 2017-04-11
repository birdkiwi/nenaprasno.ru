(function() {
    function hideEvent(e, closestEl, hideFunc) {
        if(!$(e.target).closest(closestEl).length) {
            hideFunc();
            $(document).off('click', 'body', hideEvent);
        }
    }

    $('.js-offcanvas').click(function () {
        var offcanvas = '#offcanvas';

        function show() {
            $('.js-offcanvas').addClass('active');
            $(offcanvas).addClass('active');

            $(document).on('click', 'body', function (e) {
                hideEvent(e, offcanvas, hide);
            });
        }

        function hide() {
            $('.js-offcanvas, ' + offcanvas).removeClass('active');
        }

        if ($(this).hasClass('active')) {
            hide();
        } else {
            show();
        }

        return false;
    });
})();