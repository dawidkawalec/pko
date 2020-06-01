<?php
/**
 * Template part for wypadek - content
 *
 */

?>

<?php if ( have_rows( 'wypadek_poj_sekcje_elastyczne' ) ) : ?>
<?php while ( have_rows('wypadek_poj_sekcje_elastyczne' ) ) : the_row(); ?>
<?php if ( get_row_layout() == 'wypadek_poj_sekcja_tekstowa' ) : ?>
<section class="wypadek-content">
    <div class="container">
        <div class="row section-content">
            <div class="col-lg-7 text-left">
                <?php the_sub_field( 'wypadek_poj_tekst' ); ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if ( get_row_layout() == 'wypadek_poj_sekcja_z_obrazkiem_w_tle' ) : ?>
<section class="home-o-nas wypadek">
    <div class="container home-o-nas-wrapper">
        <?php if ( get_sub_field('wypadek_poj_obrazek') ) : $image = get_sub_field('wypadek_poj_obrazek'); ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>

        <div class="row">
            <div class="col-lg-7">
                <div class="home-o-nas-content">
                    <?php echo get_sub_field('wypadek_poj_opis_w_sekcji'); ?>
                </div>
            </div>
            <div class="col-md-6">
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if ( get_row_layout() == 'wypadek_poj_taby_rozwijane' ) : ?>
<section class="home-faq wypadek">
    <div class="container">
        <div class="row section-content">
            <div class="col-lg-7">
                <div id="faq_accordion">

                    <?php if ( have_rows('tab_pole_powtarzalne') ) : ?>

                    <?php while( have_rows('tab_pole_powtarzalne') ) : the_row(); ?>


                    <div class="faq-holder" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="faq-header" id="faq_heading<?php the_sub_field('number_tabu'); ?>">
                            <h5 class="mb-0" itemprop="name">
                                <?php if ( get_sub_field('obrazek_przy_tabie') ) : $image = get_sub_field('obrazek_przy_tabie'); ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                                <a class="collapse collapsed" data-toggle="collapse"
                                    data-target="#faq_collapse<?php the_sub_field('number_tabu'); ?>"
                                    aria-expanded="false"
                                    aria-controls="faq_collapse<?php the_sub_field('number_tabu'); ?>">
                                    <?php the_sub_field('tytul_tabu'); ?> </a>
                            </h5>
                        </div>
                        <div id="faq_collapse<?php the_sub_field('number_tabu'); ?>" class="collapse"
                            aria-labelledby="faq_heading<?php the_sub_field('number_tabu'); ?>"
                            data-parent="#faq_accordion" itemscope="" itemprop="acceptedAnswer"
                            itemtype="https://schema.org/Answer" style="">
                            <div class="faq-body" itemprop="text">
                                <?php the_sub_field('opis_tabu'); ?>
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
<?php if ( get_row_layout() == 'wypadek_poj_sekcja_z_boxami' ) : ?>
<section class="home-dlaczego-kafle wypadek">
    <div class="container">
        <div class="row section-content">
            <div class="col-lg-7 ">
                <p class="before-title text-center">
                    <?php echo get_sub_field('wypadek_poj_nad_tytulem'); ?>
                </p>
                <h2 class="text-center"><?php echo get_sub_field('wypadek_poj_tytul'); ?></h2>
                <div class="dlaczego-kafle">
                    <?php if ( have_rows('wypadek_poj_box') ) : ?>
                    <?php while( have_rows('wypadek_poj_box') ) : the_row(); ?>
                    <div class="dlaczego-kafel">
                        <div class="dlaczego-kafel-container">
                            <?php if ( get_sub_field('ikona') ) : $image = get_sub_field('ikona'); ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>
                            <h3><?php the_sub_field('tytul'); ?></h3>
                            <p><?php the_sub_field('opis'); ?></p>
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
<?php if ( get_row_layout() == 'wypadek_poj_sekcja_z_tabela' ) : ?>
<section class="wypadek-content wypadek-table bg-white">
    <div class="container">
        <div class="row section-content">
            <div class="col-lg-7 text-left">
                <?php echo get_sub_field('wypadek_poj_wstep'); ?>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col"><?php echo get_sub_field('wypadek_poj_naglowek_tabeli_1'); ?></th>
                                <th scope="col"><?php echo get_sub_field('wypadek_poj_naglowek_tabeli_2'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ( have_rows('wypadek_poj_tabela') ) : ?>
                            <?php while( have_rows('wypadek_poj_tabela') ) : the_row(); ?>
                            <tr>
                                <td><?php the_sub_field('tabela_lewa'); ?></td>
                                <td><?php the_sub_field('tabela_prawa'); ?></td>
                            </tr>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</section>
<?php endif; ?>
<?php if ( get_row_layout() == 'wypadek_poj_sekcja_z_tabela' ) : ?>
<section class="wypadki-loop content">
    <div class="container">
        <div class="row section-content">
            <div class="col-lg-7 text-center">
                <h2>Wypadki w pracy UK</h2>
                <div class="row">

                    <?php 
                        query_posts(array( 
                            'post_type' => 'wypadki',
                        ) );  
                        ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="col-md-4">
                        <div class="wypadek-loop">
                            <a href="#">
                                <div class="wypadek-loop-img"
                                    style="background:url('<?php the_post_thumbnail_url() ?>'); background-size:cover;border-top-right-radius: 1.5em; border-bottom-left-radius: 1.5em; height: 160px;">
                                </div>
                            </a>
                            <a href="#">
                                <h3><?php the_title() ?></h3>
                            </a>
                        </div>
                    </div>
                    <?php endwhile;
                    wp_reset_query(); 
                    ?>
                </div>
                <a href="/wypadki/" class="btn-cta text-center">Zobacz więcej</a>
            </div>

        </div>
    </div>
</section>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>