<?php
/**
 * Template part for hero
 *
 */

?>

<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <?php
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
                ?>
                <?php if ( get_field('wypadek_poj_tytul_strony') ) : ?>
                <h1><?php echo get_field('wypadek_poj_tytul_strony'); ?></h1>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>