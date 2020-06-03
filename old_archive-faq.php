<?php
/**
 * The template for displaying archive pages
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
                <h1>FAQ</h1>
            </div>
        </div>
    </div>
</section>

<div id="faq">

    <section class="faq wypadki-loop content">
        <div class="container">
            <div class="row section-content">

                <?php $wcatTerms = get_terms('rodzaje_faq', array('hide_empty' => 0, 'parent' =>0)); 
                foreach($wcatTerms as $wcatTerm) : 
                ?>



                <div class="col-lg-6" style="order: <?php echo $kolejnosc; ?>">
                    <div class="wypadek-loop">
                        <a href="<?php echo get_term_link( $wcatTerm->slug, $wcatTerm->taxonomy ); ?>">
                            <div class="wypadek-loop-img"
                                style="background:url('https://dev.polskakancelariaodszkodowan.co.uk/wp-content/uploads/2020/04/AdobeStock_246426078.jpg'); background-size:cover;border-top-right-radius: 1.5em; border-bottom-left-radius: 1.5em; height: 160px;">
                            </div>
                        </a>
                        <a href="<?php echo get_term_link( $wcatTerm->slug, $wcatTerm->taxonomy ); ?>">
                            <h3><?php echo $wcatTerm->name; ?></h3>
                        </a>
                    </div>
                </div>



                <?php 
                endforeach; 
                ?>










            </div>
        </div>
    </section>

    <p>dawidtest</p>




</div>
<?php get_template_part( 'template-parts/home-cta');?>

<object style="width:100%;height: 350px; margin-bottom:-10px;"
    data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2376.042418507366!2d-2.0807243844635734!3d53.4498279746565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb5b295a9f0dd%3A0x6760071ba4257548!2sOdszkodowania%20UK%20-%20Polska%20Kancelaria%20Odszkodowa%C5%84!5e0!3m2!1spl!2spl!4v1588805991193!5m2!1spl!2spl, Polska&amp;ie=UTF8&amp;t=m&amp;z=16&amp;iwloc=B&amp;output=embed"
    type="text/html"> </object>


<?php
get_footer();