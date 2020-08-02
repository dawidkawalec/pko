<?php
/**
 * Template part for formufaqlarz
 *
 */

?>
<?php if ( get_field('faq_tytul_sekcji') ) : ?>

<section class="home-faq">
    <div class="container">
        <div class="row section-content">
            <div class="col-md-12 text-center">
                <p class="before-title"><?php echo get_field('faq_tekst_nad_sekcja'); ?></p>
                <h2><?php echo get_field('faq_tytul_sekcji'); ?></h2>
            </div>

            <div class="col-md-12">
                <div id="faq_accordion">
                    <?php if ( have_rows('faq_pytania_pole_powtarzalne') ) : ?>

                    <?php while( have_rows('faq_pytania_pole_powtarzalne') ) : the_row(); ?>
                    <div class="faq-holder" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">








                        <div class="faq-header" id="faq_heading<?php the_sub_field('numer_pytania'); ?>">
                            <h5 class="mb-0" itemprop="name">
                                <?php if ( get_sub_field('ikona') ) : $image = get_sub_field('ikona'); ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                                <a class="collapse collapsed" data-toggle="collapse"
                                    data-target="#faq_collapse<?php the_sub_field('numer_pytania'); ?>"
                                    aria-expanded="false"
                                    aria-controls="faq_collapse<?php the_sub_field('numer_pytania'); ?>">
                                    <?php the_sub_field('pytanie'); ?> </a>
                            </h5>
                        </div>
                        <div id="faq_collapse<?php the_sub_field('numer_pytania'); ?>" class="collapse"
                            aria-labelledby="faq_heading<?php the_sub_field('numer_pytania'); ?>"
                            data-parent="#faq_accordion" itemscope="" itemprop="acceptedAnswer"
                            itemtype="https://schema.org/Answer">
                            <div class="faq-body" itemprop="text">
                                <?php the_sub_field('odpowiedz'); ?></div>
                        </div>
                    </div>

                    <?php endwhile; ?>

                    <?php endif; ?>


                </div>
            </div>





        </div>
    </div>
</section>
<?php endif; ?>