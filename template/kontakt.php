<?php
/**
* Template Name: Kontakt
 */

get_header(); ?>

<?php get_template_part( 'template-parts/hero-title');?>
<div id="kontakt-page">
    <?php if ( get_field('kontakt_tytul_sekcji') ) : ?>
    <section class="home-formularz">
        <div class="container">
            <div class="row section-content">
                <div class="col-lg-7 text-left">
                    <p class="before-title"><?php echo get_field('kontakt_nad_tytulem'); ?></p>
                    <h2><?php echo get_field('kontakt_tytul_sekcji'); ?></h2>
                    <p class="bold"><?php echo get_field('kontakt_opis_pod_tytulem'); ?></p>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="kontakt-kraj">
                                <h3><?php echo get_field('kontakt_karta_kontakt_tytul_1'); ?></h3>
                                <div class="kontakt-adres">
                                    <p><?php echo get_field('kontakt_karta_kontakt_adres_1'); ?></p>
                                </div>
                                <div class="kontakt-mail">
                                    <?php echo get_field('kontakt_karta_kontakt_email_1'); ?>
                                </div>
                                <div class="kontakt-godziny">
                                    <p><?php echo get_field('kontakt_karta_kontakt_godziny_1'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="kontakt-kraj">
                                <h3><?php echo get_field('kontakt_karta_kontakt_tytul_2'); ?></h3>
                                <div class="kontakt-adres">
                                    <p><?php echo get_field('kontakt_karta_kontakt_adres_2'); ?></p>
                                </div>
                                <div class="kontakt-mail">
                                    <?php echo get_field('kontakt_karta_kontakt_email_2'); ?>
                                </div>
                                <div class="kontakt-godziny">
                                    <p><?php echo get_field('kontakt_karta_kontakt_godziny_2'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php echo get_field('kontakt_opis_cd'); ?>

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

</div>
<?php get_template_part( 'template-parts/home-cta');?>

<object style="width:100%;height: 350px; margin-bottom:-10px;"
    data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2376.042418507366!2d-2.0807243844635734!3d53.4498279746565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb5b295a9f0dd%3A0x6760071ba4257548!2sOdszkodowania%20UK%20-%20Polska%20Kancelaria%20Odszkodowa%C5%84!5e0!3m2!1spl!2spl!4v1588805991193!5m2!1spl!2spl, Polska&amp;ie=UTF8&amp;t=m&amp;z=16&amp;iwloc=B&amp;output=embed"
    type="text/html"> </object>

<?php
get_footer();