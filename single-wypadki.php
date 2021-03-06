<?php
/**
 * The template for displaying all single wypadek
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<?php get_template_part( 'template-parts/hero');?>

<?php get_template_part( 'template-parts/hero-content');?>

<?php get_template_part( 'template-parts/wypadek-content');?>

<section class="wypadki-loop content">
    <div class="container">
        <div class="row section-content">
            <div class="col-lg-7 text-center">
                <h2>Wypadki w pracy UK</h2>
                <div class="row">

                    <?php 
                        query_posts(array( 
                            'post_type' => 'wypadki',
                        ) );  
                        ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="col-md-4">
                        <div class="wypadek-loop">
                            <a href="<?php the_permalink() ?>">
                                <div class="wypadek-loop-img"
                                    style="background:url('<?php the_post_thumbnail_url() ?>'); background-size:cover;border-top-right-radius: 1.5em; border-bottom-left-radius: 1.5em; height: 160px;">
                                </div>
                            </a>
                            <a href="<?php the_permalink() ?>">
                                <h3><?php the_title() ?></h3>
                            </a>
                        </div>
                    </div>
                    <?php endwhile;
                    wp_reset_query(); 
                    ?>
                </div>
                <a href="/wypadki/" class="btn-cta text-center">Zobacz więcej</a>
            </div>

        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/wypadek-faq');?>

<section>
    <div class="container">
        <div class="wypadek-formularz-wrapper">
            <div class="home-formularz wypadek-formularz">
                <div class="formularz">
                    <h3>Zgłoś wypadek</h3>
                    <?php echo do_shortcode( '[contact-form-7 id="39" title="Home form"]') ;?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/home-cta');?>

<object style="width:100%;height: 350px; margin-bottom:-10px;z-index: 13;position: relative;"
    data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2376.042418507366!2d-2.0807243844635734!3d53.4498279746565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb5b295a9f0dd%3A0x6760071ba4257548!2sOdszkodowania%20UK%20-%20Polska%20Kancelaria%20Odszkodowa%C5%84!5e0!3m2!1spl!2spl!4v1588805991193!5m2!1spl!2spl, Polska&amp;ie=UTF8&amp;t=m&amp;z=16&amp;iwloc=B&amp;output=embed"
    type="text/html"> </object>

<?php
get_footer();