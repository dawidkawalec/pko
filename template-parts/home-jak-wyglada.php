<?php
/**
 * Template part for jak wyglada
 *
 */

?>
<?php if ( get_field('home_kroki_tytul_sekcji') ) : ?>
<section class="home-jak-wyglada">
    <div class="container">
        <div class="row section-content">
            <div class="col-md-12 text-center">
                <p class="before-title"> <?php echo get_field('home_kroki_tekst_nad_tytulem'); ?>
                </p>
                <h2> <?php echo get_field('home_kroki_tytul_sekcji'); ?>
                </h2>
            </div>
        </div>
        <div class="dlaczego-kafle jak-wyglada">

            <?php if ( have_rows('home_kroki_kroki_kafle_pole_powtarzalne') ) : ?>

            <?php while( have_rows('home_kroki_kroki_kafle_pole_powtarzalne') ) : the_row(); ?>

            <div class="dlaczego-kafel">
                <div class="dlaczego-kafel-container">
                    <div class="ikona">
                        <?php if ( get_sub_field('ikona') ) : $image = get_sub_field('ikona'); ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                        <div class="ikona-numer"><?php the_sub_field('numer_kroku'); ?></div>
                    </div>
                    <p><?php the_sub_field('tekst'); ?></p>
                </div>
            </div>

            <?php endwhile; ?>

            <?php endif; ?>


        </div>
    </div>
</section>
<?php endif; ?>