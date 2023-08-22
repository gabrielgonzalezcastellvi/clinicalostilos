$(function() {
    var header = $(".hidden");

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 100) {
            header.removeClass('hidden').addClass("animate__fadeInUp");
        } else {
            header.removeClass("animate__fadeInUp").addClass('hidden');
        }
    });
});