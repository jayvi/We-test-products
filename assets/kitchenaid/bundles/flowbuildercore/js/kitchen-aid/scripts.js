jQuery(document).ready(function ($) {

    // ---------- testers ---------- //

    setTimeout(function () {
        $(".js.testers__info__number").html('3');
    }, 14000);

    // ---------- frame-info ---------- //

    setTimeout(function () {
        $(".js.frame-info__visitors__number").html('10').addClass("js-active");
    }, 3000);
    setTimeout(function () {
        $(".js.frame-info__visitors__number").html('9');
    }, 8000);
    setTimeout(function () {
        $(".js.frame-info__visitors__number").html('11');
    }, 13000);
    setTimeout(function () {
        $(".js.frame-info__visitors__number").html('12');
    }, 17000);
    setTimeout(function () {
        $(".js.frame-info__visitors__number").html('11');
    }, 22000);
    setTimeout(function () {
        $(".js.frame-info__visitors__number").html('10');
    }, 28000);

    setTimeout(function () {
        $(".js.frame-info__packages__number").html('4').addClass("js-active");
    }, 7000);
    setTimeout(function () {
        $(".js.frame-info__packages__number").html('3');
    }, 14000);

    // ---------- form-panel ---------- //

    $('#user_data_form_birthdate > select').styliseSelect({customStyles: true});

    var html = $('#user_data_form_block_signUpOne').html();
     

    $('#user_data_form_signUpOne, #user_data_form_signUpTwo').text('Continue 100% FREE');

 
    $('#user_data_form_block_mobilePhonenumber').prepend('<div>Testers will be contacted by phone</div>');

    $(".js.form-panel__timer").each(function () {
        var element = $(this);
        var startTime = new Date().getTime() + element.data("time") * 1000;

        var countDownInterval = setInterval(function () {
            var diff = Math.ceil((startTime - new Date().getTime()) / 1000);
            if (diff >= 0) {
                var minutes = Math.floor(diff / 60);
                var seconds = diff - (minutes * 60);
                element.find(".js.form-panel__timer__minutes").text(minutes);
                element.find(".js.form-panel__timer__seconds").text(seconds < 10 ? "0" + seconds : seconds);
            } else {
                //clearTimeout(countDownInterval);
                startTime = new Date().getTime() + 1 + element.data("time") * 1000 ;
            }
        }, 1000);
    });

    if (priorityDisplayBlocks.user_data_first_form_block) {
        $('#form_panel').hide();
        $('#form_panel').show(500);
    }

    // ---------- footer ---------- //

    $('.fancybox').fancybox({
        type: 'iframe'
    });

    // ---------- frame-info ---------- //

    $(".js.frame-info").animate({
        bottom: '0px'
    }, 700);

    if ($("span").is("#form_questions") == true) {
        $('div.review').remove();
    }

});