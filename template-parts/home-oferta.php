<?php
/**
 * Template part for oferta
 *
 */

?>
<?php if ( get_field('home_oferta_tytul_sekcji') ) : ?>
<section class="home-oferta">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo get_field('home_oferta_tytul_sekcji'); ?></h2>
            </div>
        </div>
        <div class="row">


            <?php if ( have_rows('home_oferta_oferta_karta_pole_powtarzalne') ) : ?>

            <?php while( have_rows('home_oferta_oferta_karta_pole_powtarzalne') ) : the_row(); ?>


            <div class="col-lg-3 col-md-6">
                <div class="home-oferta__card  <?php if ( get_sub_field('czy_pole_ma_byc_wyroznone') ) : ?>
                    active
                <?php endif; ?>
                ">
                    <?php if ( get_sub_field('ikona') ) : $image = get_sub_field('ikona'); ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <p class="before-title"><?php the_sub_field('tekst_nad_tytulem'); ?></p>
                    <h3><?php the_sub_field('tytul_karty'); ?></h3>
                    <?php the_sub_field('opis'); ?>
                    <a href="<?php the_sub_field('cta_link'); ?>"
                        class="btn-cta"><?php the_sub_field('cta_anchor'); ?></a>
                </div>
            </div>
            <?php endwhile; ?>

            <?php endif; ?>





        </div>
    </div>
</section>
<?php endif; ?>