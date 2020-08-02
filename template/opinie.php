<?php
/**
* Template Name: Opinie
 */

get_header(); ?>

<?php get_template_part( 'template-parts/hero-title');?>
<div id="opinie">

    <?php get_template_part( 'template-parts/home-o-nas');?>
    <?php if ( get_field('global_opinie_tytul_sekcji', 'options') ) : ?>
    <section class="home-referencje">
        <div class="container">
            <div class="row section-content">
                <div class="col-md-12 text-center">
                    <h2>Opinie naszych klientów</h2>
                    <a class="under-title" href="#">Google Reviews – przeczytaj wszystkie opinie</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php if ( have_rows('opinie_pole_powtarzalne', 'options') ) : ?>

                <?php while( have_rows('opinie_pole_powtarzalne', 'options') ) : the_row(); ?>
                <div class="col-md-6 m-tb-30">
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




</div>
<?php get_template_part( 'template-parts/home-cta');?>

<object style="width:100%;height: 350px; margin-bottom:-10px;"
    data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2376.042418507366!2d-2.0807243844635734!3d53.4498279746565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb5b295a9f0dd%3A0x6760071ba4257548!2sOdszkodowania%20UK%20-%20Polska%20Kancelaria%20Odszkodowa%C5%84!5e0!3m2!1spl!2spl!4v1588805991193!5m2!1spl!2spl, Polska&amp;ie=UTF8&amp;t=m&amp;z=16&amp;iwloc=B&amp;output=embed"
    type="text/html"> </object>

<?php
get_footer();