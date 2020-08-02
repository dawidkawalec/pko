<?php
/**
 * Template part for dlaczego kafle
 *
 */

?>
<?php if ( get_field('home_kafle_tytul_sekcji') ) : ?>
<section class="home-dlaczego-kafle">
    <div class="container">
        <div class="row section-content">
            <div class="col-md-12 text-center">
                <p class="before-title"><?php echo get_field('home_kafle_tekst_nad_tytulem'); ?></p>
                <h2><?php echo get_field('home_kafle_tytul_sekcji'); ?></h2>
            </div>
        </div>
        <div class="dlaczego-kafle">

            <?php if ( have_rows('home_kafle_kafle_pole_powtarzalne') ) : ?>

            <?php while( have_rows('home_kafle_kafle_pole_powtarzalne') ) : the_row(); ?>

            <div class="dlaczego-kafel">
                <div class="dlaczego-kafel-container">
                    <?php if ( get_sub_field('ikona') ) : $image = get_sub_field('ikona'); ?>
                    <!-- Full size image -->
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>

                    <h3><?php the_sub_field('tytul_kafla'); ?></h3>
                    <p><?php the_sub_field('opis'); ?></p>
                </div>
            </div>

            <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>