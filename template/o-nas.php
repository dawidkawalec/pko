<?php
/**
* Template Name: O nas 
 */

get_header(); ?>

<?php get_template_part( 'template-parts/hero-title');?>
<div id="o-nas">
    <?php if ( get_field('o_nas_opis_czesc_1_pol_ekranu') ) : ?>
    <section class="home-o-nas wypadek">
        <div class="container home-o-nas-wrapper">
            <?php if ( get_field('o_nas_zdjecie') ) : $image = get_field('o_nas_zdjecie'); ?>

            <!-- Full size image -->
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>

            <div class="row">
                <div class="col-lg-7">
                    <div class="home-o-nas-content">
                        <?php echo get_field('o_nas_opis_czesc_1_pol_ekranu'); ?>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="home-o-nas-content home-o-nas-content-cala-szerokosc">
                        <?php echo get_field('o_nas_opis_czesc_2_caly_ekran'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
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

    <?php if ( get_field('zespol_o_nas_tytul_sekcji', 'options') ) : ?>
    <section class="home-faq wypadki-loop white-bg team">
        <div class="container">
            <div class="row section-content">
                <div class="col-md-12 text-center">
                    <p class="before-title"><?php echo get_field('zespol_tekst_nad_tytulem', 'options'); ?></p>
                    <h2><?php echo get_field('zespol_o_nas_tytul_sekcji', 'options'); ?></h2>
                </div>

                <div class="col-md-4 team-content">
                    <?php echo get_field('zespol_opis', 'options'); ?>
                </div>

                <div class="col-md-8">
                    <div class="row">

                        <?php if ( have_rows('zespol_dodaj_czlonka_zespolu', 'options') ) : ?>

                        <?php while( have_rows('zespol_dodaj_czlonka_zespolu', 'options') ) : the_row(); ?>

                        <div class="col-md-4">
                            <div class="wypadek-loop">
                                <a href="#">
                                    <div class="wypadek-loop-img"
                                        style="background:url(' <?php the_sub_field('zdjecie'); ?>') center center no-repeat; background-size:contain;border-top-right-radius: 1.5em; border-bottom-left-radius: 1.5em; height: 250px;">
                                    </div>
                                </a>
                                <a href="#">
                                    <h3> <?php the_sub_field('imie_i_nazwisko'); ?></h3>
                                </a>
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

    <section class="wypadek-content">
        <div class="container">
            <div class="row section-content">
                <div class="col-md-12 text-left">
                    <?php echo get_field('o_nas_tekst_za_referencjami'); ?>
                </div>
            </div>
        </div>
    </section>

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
                        <div class="faq-holder" itemscope="" itemprop="mainEntity"
                            itemtype="https://schema.org/Question">








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


</div>
<?php get_template_part( 'template-parts/home-cta');?>

<object style="width:100%;height: 350px; margin-bottom:-10px;"
    data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2376.042418507366!2d-2.0807243844635734!3d53.4498279746565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb5b295a9f0dd%3A0x6760071ba4257548!2sOdszkodowania%20UK%20-%20Polska%20Kancelaria%20Odszkodowa%C5%84!5e0!3m2!1spl!2spl!4v1588805991193!5m2!1spl!2spl, Polska&amp;ie=UTF8&amp;t=m&amp;z=16&amp;iwloc=B&amp;output=embed"
    type="text/html"> </object>

<?php
get_footer();