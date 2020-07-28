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



        $(function () {
            $("#wizard").steps({
                headerTag: "h2",
                bodyTag: "section",
                transitionEffect: "fade",
                enableAllSteps: true,
                transitionEffectSpeed: 500,
                labels: {
                    finish: "Wyślij",
                    next: "Dalej",
                    previous: "Cofnij"
                }
            });
            $('.wizard > .steps li a').click(function () {
                $(this).parent().addClass('checked');
                $(this).parent().prevAll().addClass('checked');
                $(this).parent().nextAll().removeClass('checked');
            });
            // Custome Jquery Step Button
            $('.forward').click(function () {
                $("#wizard").steps('next');
            })
            $('.backward').click(function () {
                $("#wizard").steps('previous');
            })
            // Select Dropdown
            $('html').click(function () {
                $('.select .dropdown').hide();
            });
            $('.select').click(function (event) {
                event.stopPropagation();
            });
            $('.select .select-control').click(function () {
                $(this).parent().next().toggle();
            })
            $('.select .dropdown li').click(function () {
                $(this).parent().toggle();
                var text = $(this).attr('rel');
                $(this).parent().prev().find('div').text(text);
            })
        })


    });

    // Run the script once the window finishes loading
    $(window).load(function () {

    });

});