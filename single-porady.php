<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>


<div id="blog" class="blog-post">
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
                ?>
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-comments">
        <div class="container">
            <div class="row">
                <div class="col-md-12">





                    <?php
		while ( have_posts() ) : the_post();


			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

                </div>
            </div>
        </div>
    </section>
    <?php
get_footer();