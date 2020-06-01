<?php
/**
 * Template part for hero
 *
 */

?>

<section class="hero hero-title">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <?php
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
                ?>
                <h1><?php the_title() ?></h1>
            </div>
        </div>
    </div>
</section>