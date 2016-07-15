(function($) {

    "use strict";

    $('.answer-list li').hide();
    $('#header h1').hide();
    $('.gift-content').hide();
    $('#feedback').hide();

    $('.answer-list').removeClass('hidden');
    $('#header h1').removeClass('hidden');
    $('.gift-content').removeClass('hidden');
    $('#feedback').removeClass('hidden');

    $('.answer-list li').each(function(index) {
        var $this = this;
        setTimeout(function(){
            $($this).fadeIn();
        }, (index + 1) * 800);
    });

    setTimeout(function(){
        $('#header h1').fadeIn();
        $('.gift-content').fadeIn();
        $('#feedback').fadeIn();
    }, ($('.answer-list li').length + 1) * 800);

})(jQuery);