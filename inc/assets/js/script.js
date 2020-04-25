jQuery(function ($) {

    // Add custom script here. Please backup the file before editing/modifying. Thanks

    // Run the script once the document is ready
    $(document).ready(function () {
        $(window).scroll(function () {
            var scrollbefore = $(window).scrollTop();

            if (scrollbefore >= 150) {
                $("#header-kancelaria").addClass("top-0");
                $("#header-logo").addClass("header-logo-fixed");

                // $("#header-kancelaria").addClass("top-");
            } else {
                $("#header-kancelaria").removeClass("top-0");
                $("#header-logo").removeClass("header-logo-fixed");
                $("#header-kancelaria").removeClass("fixed-top");
            }
        });

        $(window).scroll(function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 500) {
                $("#header-kancelaria").addClass("fixed-top");
                // $("#header-kancelaria").addClass("top-");
            } else {

            }
        });



    });

    // Run the script once the window finishes loading
    $(window).load(function () {

    });

});