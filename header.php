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
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
        <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
        <div id="before-header">
            <div class="container">
                <div class="before-header-wrapper">
                    <div class="header-google">
                        <img src="https://dev.polskakancelariaodszkodowan.co.uk/wp-content/uploads/2020/04/googlestars.png"
                            alt="">
                    </div>
                    <div class="header-fb">
                        <img src="https://dev.polskakancelariaodszkodowan.co.uk/wp-content/uploads/2020/04/fblike.png"
                            alt="">
                    </div>
                    <div class="hedaer-godziny">
                        <p class="thin">Godziny otwarcia:</p>
                        <p class="big">PN - PT: 8 - 20; SOB: 10 - 18</p>
                    </div>
                    <div class="hedaer-kontakt">
                        <p class="thin">Menchester</p>
                        <p class="big">0161 7914 669</p>
                    </div>
                </div>
            </div>
        </div>
        <header id="header-kancelaria" class="site-header navbar-static-top" role="banner">
            <div class="container">
                <nav class="navbar navbar-expand-md header-nav">

                    <div id="header-logo">
                        <img src="https://dev.polskakancelariaodszkodowan.co.uk/wp-content/uploads/2020/04/logo-pko.png"
                            alt="">
                    </div>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav"
                        aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'container_class' => 'collapse navbar-collapse justify-content-end',
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