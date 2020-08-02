<?php
/**
 * Template part for referencje
 *
 */

?>
<?php if ( get_field('global_opinie_tytul_sekcji', 'options') ) : ?>
<section class="home-referencje">
    <div class="container">
        <div class="row section-content">
            <div class="col-md-12 text-center">
                <h2><?php echo get_field('global_opinie_tytul_sekcji', 'options'); ?> </h2>
                <?php echo get_field('global_opinie_opis', 'options'); ?>
            </div>
        </div>







    </div>
    <div class="container-fluid">
        <div class="swiper-container">
            <div class="swiper-wrapper">



                <?php if ( have_rows('opinie_pole_powtarzalne', 'options') ) : ?>

                <?php while( have_rows('opinie_pole_powtarzalne', 'options') ) : the_row(); ?>





                <div class="swiper-slide">
                    <div class="referencja">
                        <p class="ocena"><span><?php the_sub_field('ocena'); ?></span>/5
                            <img src="/wp-content/uploads/2020/05/gwiazdka.png" alt="">
                            <img src="/wp-content/uploads/2020/05/gwiazdka.png" alt="">
                            <img src="/wp-content/uploads/2020/05/gwiazdka.png" alt="">
                            <img src="/wp-content/uploads/2020/05/gwiazdka.png" alt="">
                            <img src="/wp-content/uploads/2020/05/gwiazdka.png" alt="">
                        </p>
                        <p class="referencja__name"><?php the_sub_field('imie_i_nazwisko'); ?></p>
                        <a href="<?php the_sub_field('link_url'); ?>"
                            class="referencja__link"><?php the_sub_field('link_anchor'); ?></a>
                        <p class="referencja__opinia"><?php the_sub_field('opinia'); ?></p>
                    </div>

                </div>

                <?php endwhile; ?>

                <?php endif; ?>






            </div>

        </div>
        <!-- Initialize Swiper -->
        <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            centeredSlides: true,
            breakpoints: {
                560: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
            }
        });
        </script>
    </div>
</section>
<?php endif; ?>