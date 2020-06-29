<?php
/**
* Template Name: FAQ
 */

get_header(); ?>

<?php get_template_part( 'template-parts/hero-title');?>
<div id="faq">


    <section class="faq wypadki-loop content">
        <div class="container">
            <div class="row section-content">

                <div class="col-lg-12">
                    <?php the_content() ?>
                </div>
                <?php if ( have_rows('faq_faq_blok') ) : ?>

                <?php while( have_rows('faq_faq_blok') ) : the_row(); ?>

                <div class="col-lg-6">
                    <div class="wypadek-loop">
                        <a href="<?php the_sub_field('faq_link'); ?>">
                            <div class="wypadek-loop-img"
                                style="background:url('<?php the_sub_field('faq_zdjecie_wyrozniajace'); ?>'); background-size:cover;border-top-right-radius: 1.5em; border-bottom-left-radius: 1.5em; height: 160px;">
                            </div>
                        </a>
                        <a href="<?php the_sub_field('faq_link'); ?>">
                            <h3><?php the_sub_field('faq_tytul'); ?></h3>
                        </a>
                    </div>
                </div>

                <?php endwhile; ?>

                <?php endif; ?>

            </div>
        </div>
    </section>



</div>
<?php get_template_part( 'template-parts/home-cta');?>

<object style="width:100%;height: 350px; margin-bottom:-10px;"
    data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2376.042418507366!2d-2.0807243844635734!3d53.4498279746565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb5b295a9f0dd%3A0x6760071ba4257548!2sOdszkodowania%20UK%20-%20Polska%20Kancelaria%20Odszkodowa%C5%84!5e0!3m2!1spl!2spl!4v1588805991193!5m2!1spl!2spl, Polska&amp;ie=UTF8&amp;t=m&amp;z=16&amp;iwloc=B&amp;output=embed"
    type="text/html"> </object>

<?php
get_footer();