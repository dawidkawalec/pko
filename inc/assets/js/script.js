jQuery(function ($) {

    // Add custom script here. Please backup the file before editing/modifying. Thanks

    // Run the script once the document is ready
    $(document).ready(function () {

        $('#porady a[href*="#"]').on('click', function (e) {
            e.preventDefault()

            $('html, body').animate({
                    scrollTop: $($(this).attr('href')).offset().top - 140,
                },
                500,
                'linear'
            )
        })


        $(window).scroll(function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 48) {
                $("#header-kancelaria").addClass("fixed-top");
                $("#header-logo").addClass("header-logo-fixed");
                // $("#header-kancelaria").addClass("top-");
            } else {
                $("#header-kancelaria").removeClass("fixed-top");
                $("#header-logo").removeClass("header-logo-fixed");
            }
        });

        const hamburger = document.querySelector('#hamburger');
        hamburger.addEventListener('click', () => {
            if (hamburger.classList.contains('open')) {
                hamburger.classList.remove('open');
                hamburger.classList.add('close');
            } else {
                hamburger.classList.add('open');
                hamburger.classList.remove('close');
            }
        })


        //dodanie klasy w kategoriach

        $(function () {

            var url = window.location.href;
            $('.kategoria-btn-check').each(function () {
                if ($('a', this).attr('href') == url) {
                    $('a', this).addClass('active');
                }
            });
            console.log(url);


        });


    });

    // Run the script once the window finishes loading
    $(window).load(function () {

    });

});