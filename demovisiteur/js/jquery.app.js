(function($) {
    UI = {
        init: function() {
            this.initGrid();
            this.initPopup();
        },
        initGrid: function() {
            $('.item').each(function(i) {
                $(this).delay((i++) * 200).fadeTo(1000, 1);
            })
        },
        initPopup: function() {
            $('.item a, .popup').on('click', function(e) {
                e.preventDefault();

                $('.popup').fadeToggle();
            });
        }
    };

    $(document).ready(function() {
        UI.init();
    });
})(jQuery);