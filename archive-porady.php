<?php
/**
 * The template for displaying archive porady
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section class="hero hero-title">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <?php
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
                ?>
                <h1>Porady</h1>
            </div>
        </div>
    </div>
</section>

<div id="porady">

    <section class="porady-intro bg-gray">
        <div class="container">
            <div class="row section-content">
                <div class="col-md-12 text-center">
                    <h2>Porady - znajdź odpowiedź lub zadaj nam pytanie</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ut doloribus animi quisquam,
                        deleniti, maxime sunt corporis vitae adipisci soluta odio. Quidem iste explicabo alias rem
                        excepturi a exercitationem nemo quibusdam autem consequatur itaque, asperiores ratione nam
                        doloremque mollitia quo quos. Laudantium, inventore accusamus recusandae illo molestias commodi
                        maxime veritatis.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="porady-boxy">
        <div class="container">
            <div class="row section-content">
                <div class="col-lg-4 text-center">
                    <a href="#zadaj-pytanie">
                        <div class="porady-boxy-box">
                            <img src="/wp-content/uploads/2020/05/question.svg" alt="">
                            <h3>Zadaj nam pytanie</h3>
                            <p>i uzyskaj odpowiedź</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 text-center">
                    <a href="#video-porady">
                        <div class="porady-boxy-box">
                            <img src="/wp-content/uploads/2020/05/question.svg" alt="">
                            <h3>VIDEO porady</h3>
                            <p>Sprawdź nasze video porady</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 text-center">
                    <a href="#pytania">
                        <div class="porady-boxy-box">
                            <img src="/wp-content/uploads/2020/05/question.svg" alt="">
                            <h3>Pytania na forum</h3>
                            <p>uzyskaj odpowiedź na każde pytanie</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="porady-lista bg-gray">
        <div class="container">
            <div class="row section-content">
                <div class="col-lg-12  text-center">
                    <h2 id="video-porady">VIDEO porady</h2>
                </div>


                <?php 
                $query = new WP_Query( array(
                    'post_type' => 'porady',          // name of post type.
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'rodzaje_forum_pytania',   // taxonomy name
                            'terms' => 17,                  // term id, term slug or term name
                        )
                    )
                ) );

                while ( $query->have_posts() ) : $query->the_post();
                ?>



                <div class="col-lg-12">
                    <div class="porady-lista-poj">
                        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                        <div class="porady-lista-poj-content">
                            <h3><?php the_title() ?></h3>
                            <p>
                                <?php the_excerpt() ?>
                            </p>
                            <a href="<?php the_permalink() ?>" class="cta">Zobacz więcej</a>
                        </div>
                    </div>
                </div>


                <?php endwhile;

                /**
                 * reset the orignal query
                 * we should use this to reset wp_query
                 */
                wp_reset_query();

                ?>


                <div class="col-lg-12 text-center">
                    <h2 style="margin-top:1em;" id="pytania">Pytania</h2>
                </div>
                <?php 
                $query = new WP_Query( array(
                    'post_type' => 'porady',          // name of post type.
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'rodzaje_forum_pytania',   // taxonomy name
                            'terms' => 18,                  // term id, term slug or term name
                        )
                    )
                ) );

                while ( $query->have_posts() ) : $query->the_post();
                ?>



                <div class="col-lg-12">
                    <div class="porady-lista-poj">

                        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                        <div class="porady-lista-poj-content">
                            <h3><?php the_title() ?></h3>
                            <p>
                                <?php the_excerpt() ?>
                            </p>
                            <a href="<?php the_permalink() ?>" class="cta">Zobacz więcej</a>
                        </div>
                    </div>
                </div>


                <?php endwhile;

                /**
                 * reset the orignal query
                 * we should use this to reset wp_query
                 */
                wp_reset_query();

                ?>
                <div class="col-lg-1"></div>
                <div class="col-lg-10 text-center">
                    <h2 style="margin-top:1em; margin-bottom:2em;" id="zadaj-pytanie">Zadaj nam pytanie</h2>
                    <?php echo do_shortcode ( '[contact-form-7 id="248" title="Zadaj pytanie"]' ); ?>
                </div>
                <div class="col-lg-1"></div>

            </div>
        </div>
    </section>


</div>
<?php get_template_part( 'template-parts/home-cta');?>

<object style="width:100%;height: 350px; margin-bottom:-10px;"
    data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2376.042418507366!2d-2.0807243844635734!3d53.4498279746565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb5b295a9f0dd%3A0x6760071ba4257548!2sOdszkodowania%20UK%20-%20Polska%20Kancelaria%20Odszkodowa%C5%84!5e0!3m2!1spl!2spl!4v1588805991193!5m2!1spl!2spl, Polska&amp;ie=UTF8&amp;t=m&amp;z=16&amp;iwloc=B&amp;output=embed"
    type="text/html"> </object>

<?php
get_footer();