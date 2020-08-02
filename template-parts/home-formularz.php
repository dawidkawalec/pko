<?php
/**
 * Template part for formularz
 *
 */

?>
<?php if ( get_field('home_formularz_tytul_sekcji') ) : ?>
<section class="home-formularz">
    <div class="container">
        <div class="row section-content">
            <div class="col-lg-7 text-left">
                <p class="before-title"><?php echo get_field('home_formularz_tekst_nad_tytulem'); ?></p>
                <h2><?php echo get_field('home_formularz_tytul_sekcji'); ?></h2>
                <?php echo get_field('home_formularz_opis'); ?>
                <div id="accordion-o-nas">
                    <?php if ( have_rows('home_formularz_pytania_pole_powtarzalne') ) : ?>

                    <?php while( have_rows('home_formularz_pytania_pole_powtarzalne') ) : the_row(); ?>

                    <div id="pytanie<?php the_sub_field('numer_pytania'); ?>">
                        <div id="heading<?php the_sub_field('numer_pytania'); ?>">
                            <h3>
                                <a data-toggle="collapse"
                                    data-target="#collapse<?php the_sub_field('numer_pytania'); ?>" aria-expanded="true"
                                    aria-controls="collapse<?php the_sub_field('numer_pytania'); ?>"
                                    class="collapse collapsed">
                                    <span><?php the_sub_field('pytanie'); ?></span>
                                </a>
                            </h3>
                        </div>

                        <div id="collapse<?php the_sub_field('numer_pytania'); ?>" class="collapse"
                            aria-labelledby="heading<?php the_sub_field('numer_pytania'); ?>"
                            data-parent="#accordion-o-nas">
                            <?php the_sub_field('odpowiedz'); ?>
                        </div>
                    </div>
                    <?php endwhile; ?>

                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-4">
                <div class="formularz">
                    <h3>Zgłoś wypadek</h3>
                    <?php echo do_shortcode( '[contact-form-7 id="39" title="Home form"]') ;?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>