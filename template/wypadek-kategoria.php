<?php
/**
* Template Name: Kategoria wypadkow 
 */

get_header(); ?>

<?php get_template_part( 'template-parts/hero-title');?>

<div id="rodzaje-wypadkow">

    <?php if ( get_field('kategoria_wypadku_opis_czesc_1') ) : ?>
    <section class="hero-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <?php echo get_field('kategoria_wypadku_opis_czesc_1'); ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <section class="wypadek-content">
        <div class="container">
            <div class="row section-content">
                <div class="col-lg-7 text-left">
                    <?php echo get_field('kategoria_wypadku_opis_czesc_2'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="home-oferta">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h2><?php echo get_field('kategoria_wypadku_tytul_sekcji'); ?></h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7">
                    <div class="row">

                        <?php if ( have_rows('kategoria_wypadku_karta_z_oferta_pole_powtarzalne') ) : ?>

                        <?php while( have_rows('kategoria_wypadku_karta_z_oferta_pole_powtarzalne') ) : the_row(); ?>




                        <div class="col-lg-6">
                            <div class="home-oferta__card">
                                <div class="row align-items-center">
                                    <div class="col-lg-12 text-center">
                                        <?php if ( get_sub_field('ikona') ) : $image = get_sub_field('ikona'); ?>

                                        <!-- Full size image -->
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                                        <?php endif; ?>

                                    </div>
                                    <div class="col-lg-6">
                                        <p class="before-title"><?php the_sub_field('tekst_nad_tytulem'); ?></p>
                                        <h3><?php the_sub_field('tytul'); ?></h3>
                                        <p><?php the_sub_field('opis'); ?></p>
                                    </div>
                                    <div class="col-lg-6">
                                        <?php the_sub_field('lista'); ?>
                                    </div>
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

    <section class="home-faq wypadek">
        <div class="container">
            <div class="row section-content">
                <div class="col-lg-7">
                    <div id="faq_accordion">


                        <?php if ( have_rows('kategoria_wypadku_pytania_pole_powtarzalne') ) : ?>

                        <?php while( have_rows('kategoria_wypadku_pytania_pole_powtarzalne') ) : the_row(); ?>





                        <div class="faq-holder" itemscope="" itemprop="mainEntity"
                            itemtype="https://schema.org/Question">
                            <div class="faq-header" id="faq_heading<?php the_sub_field('numer_pytania'); ?>">
                                <h5 class="mb-0" itemprop="name">
                                    <?php if ( get_sub_field('ikona') ) : $image = get_sub_field('ikona'); ?>

                                    <!-- Full size image -->
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                                    <?php endif; ?>

                                    <a class="collapse collapsed" data-toggle="collapse"
                                        data-target="#faq_collapse<?php the_sub_field('numer_pytania'); ?>"
                                        aria-expanded="false"
                                        aria-controls="faq_collapse<?php the_sub_field('numer_pytania'); ?>">
                                        <?php the_sub_field('pytanie'); ?>
                                    </a>
                                </h5>
                            </div>
                            <div id="faq_collapse<?php the_sub_field('numer_pytania'); ?>" class="collapse"
                                aria-labelledby="faq_heading<?php the_sub_field('numer_pytania'); ?>"
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
    <?php if ( get_field('kategoria_wypadku_tytul_sekcji') ) : ?>
    <section class="home-dlaczego-kafle wypadek">
        <div class="container">
            <div class="row section-content">
                <div class="col-lg-7 ">




                    <p class="before-title text-center">
                        <?php echo get_field('kategoria_wypadku_tekst_nad_tytulem'); ?></p>
                    <h2 class="text-center"><?php echo get_field('kategoria_wypadku_tytul_sekcji'); ?></h2>
                    <div class="dlaczego-kafle">
                        <?php if ( have_rows('kategoria_wypadku_kafel_pole_powtarzalne') ) : ?>

                        <?php while( have_rows('kategoria_wypadku_kafel_pole_powtarzalne') ) : the_row(); ?>





                        <div class="dlaczego-kafel">
                            <div class="dlaczego-kafel-container">
                                <?php if ( get_sub_field('ikona') ) : $image = get_sub_field('ikona'); ?>

                                <!-- Full size image -->
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                                <?php endif; ?>

                                <h3><?php echo get_sub_field('tytul'); ?></h3>
                                <p><?php echo get_sub_field('opis'); ?></p>
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
    <?php if ( get_field('kategoria_wypadku_opis_outro') ) : ?>

    <section class="wypadek-content wypadek-table bg-white">
        <div class="container">
            <div class="row section-content">
                <div class="col-lg-7 text-left">
                    <?php echo get_field('kategoria_wypadku_opis_outro'); ?>



                </div>

            </div>
        </div>
    </section>
    <?php endif; ?>
</div>

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