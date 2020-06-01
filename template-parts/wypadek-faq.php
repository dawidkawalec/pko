<?php
/**
 * Template part for wypaek faq
 *
 */

?>
<?php if ( get_field('wypadek_poj_faq_tytul_sekcji') ) : ?>
<section class="home-faq wypadek-content wypadek-faq">
    <div class="container">
        <div class="row section-content">
            <div class="col-lg-7 text-left">
                <h2><?php echo get_field('wypadek_poj_faq_tytul_sekcji'); ?></h2>
            </div>

            <div class="col-lg-7">
                <div id="faq_accordion">

                    <?php if ( have_rows('wypadek_poj_faqfaq_pytania') ) : ?>

                    <?php while( have_rows('wypadek_poj_faqfaq_pytania') ) : the_row(); ?>



                    <div class="faq-holder" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="faq-header" id="faq_heading<?php the_sub_field('wypadek_poj_faqnumer_pytania'); ?>">
                            <h5 class="mb-0" itemprop="name">
                                <a class="collapse collapsed" data-toggle="collapse"
                                    data-target="#faq_collapse<?php the_sub_field('wypadek_poj_faqnumer_pytania'); ?>"
                                    aria-expanded="false"
                                    aria-controls="faq_collapse<?php the_sub_field('wypadek_poj_faqnumer_pytania'); ?>">
                                    <?php the_sub_field('pytanie'); ?> </a>
                            </h5>
                        </div>
                        <div id="faq_collapse<?php the_sub_field('wypadek_poj_faqnumer_pytania'); ?>" class="collapse"
                            aria-labelledby="faq_heading<?php the_sub_field('sub_field_name'); ?>"
                            data-parent="#faq_accordion" itemscope="" itemprop="acceptedAnswer"
                            itemtype="https://schema.org/Answer" style="">
                            <div class="faq-body" itemprop="text">
                                <?php the_sub_field('odpowiedz'); ?>
                            </div>
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