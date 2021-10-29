$(document).ready(function() {
    $(".slider").slick({
        arrows: false,
        dots: true,
        appendDots: ".slider-dots",
        dotsClass: "dots"
    });

    let hamberger = document.querySelector('.hamberger');
    let close = document.querySelector('.close');
    let mobileNav = document.querySelector('.mobile-nav');
    hamberger.addEventListener('click', function() {
        mobileNav.classList.add('open');
    });

    close.addEventListener('click', function() {
        mobileNav.classList.remove('open');
    });

});


$('#sendmail').on('submit', function(event) {
    var form = $('#sendmail')[0];
    var data = new FormData(form);
    console.log(data);
    $.ajax({
        url: "/sendmail",
        type: 'post',
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        success: function(data) {
            if (data.error == false) {
                $('#name').val('');
                $('#email').val('');
                $('#subject').val('');
                $('#textmessage').val('');
                $('#success').css('display', 'block');
                $('#success').html(data.message);
                $("#success").show("fast").delay(4000).hide("slow");
            } else {
                $('#error').css('display', 'block');
                $('#error').html(data.message);
                // $("#error").show("slow").delay(10000).hide("slow");
            }
        }
    });
    event.preventDefault();
});