<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body <?php body_class(); ?>>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v7.0"
        nonce="f1ensFWu"></script>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
        <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
        <div id="before-header">
            <div class="container">
                <div class="before-header-wrapper">
                    <div class="header-google">
                        <a href="https://g.page/polska-kancelaria-odszkodowan?gm" target="_blank">
                            <img src="https://dev.polskakancelariaodszkodowan.co.uk/wp-content/uploads/2020/04/googlestars.png"
                                alt="">
                        </a>
                    </div>
                    <div class="header-fb">
                        <div class="fb-like" data-href="https://www.facebook.com/PolskaKancelariaOdszkodowanUK/"
                            data-width="" data-layout="button_count" data-action="like" data-size="large"
                            data-share="false"></div>
                    </div>
                    <div class="hedaer-godziny">
                        <p class="thin">Godziny otwarcia:</p>
                        <p class="big">PN - PT: 8 - 20; SOB: 10 - 18</p>
                    </div>
                    <div class="hedaer-kontakt-wrapper">

                        <div class="hedaer-kontakt">
                            <p class="thin">Menchester</p>
                            <p class="big">0161 7914 669</p>
                            <a href="tel:12312"></a>
                        </div>

                        <div class="hedaer-kontakt">
                            <p class="thin">Menchester</p>
                            <p class="big">0161 7914 669</p>
                            <a href="tel:32132"></a>

                        </div>


                        <div class="hedaer-kontakt">
                            <p class="thin">Menchester</p>
                            <p class="big">0161 7914 669</p>
                            <a href="tel:35555"></a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <header id="header-kancelaria" class="site-header navbar-static-top" role="banner">
            <div class="container">
                <nav class="navbar navbar-expand-xl header-nav">
                    <a href="<?php echo get_site_url(); ?>">
                        <div id="header-logo">
                            <img src="https://dev.polskakancelariaodszkodowan.co.uk/wp-content/uploads/2020/04/logo-pko.png"
                                alt="">
                        </div>
                    </a>
                    <button class="navbar-toggler" id="mobile-menu">
                        <div id="hamburger" class="nav-bar-toggle open">
                            <div class="bar top-left"></div>
                            <div class="bar top-right"></div>
                            <div class="bar middle-right"></div>
                            <div class="bar middle-left"></div>
                            <div class="bar bottom-left"></div>
                            <div class="bar bottom-right"></div>
                        </div>
                    </button>

                    <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'container_class' => 'mobile-hide navbar-collapse justify-content-end',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>

                </nav>
            </div>
        </header><!-- #masthead -->

        <?php endif; ?>