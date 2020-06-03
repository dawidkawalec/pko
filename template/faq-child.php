<?php
/**
* Template Name: FAQ child
 */

get_header(); ?>

<?php get_template_part( 'template-parts/hero-title');?>
<div id="faq-child">




    <section class="faq-child home-faq">
        <div class="container">
            <div class="row section-content">
                <div class="col-md-12">

                    <div id="faq_accordion">








                        <?php 
$testd =  get_field('wybierz_rodzaj_faq'); 
$query = new WP_Query( array(
    'post_type' => 'faq-pytania',          // name of post type.
    'tax_query' => array(
        array(
            'taxonomy' => 'rodzaje_faq',   // taxonomy name
            'terms' => $testd,                  // term id, term slug or term name
        )
    )
) );

while ( $query->have_posts() ) : $query->the_post();
?>


                        <?php 
                            $postId = get_the_ID();
                            $slug = basename(get_permalink($postId));
                        ?>
                        <div class="faq-holder" itemscope="" itemprop="mainEntity"
                            itemtype="https://schema.org/Question">
                            <div class="faq-header" id="faq_heading<?php echo $slug; ?>">
                                <h5 class="mb-0" itemprop="name">
                                    <?php if ( get_field('faq_pytanie_obrazek') ) : $image = get_field('faq_pytanie_obrazek'); ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>

                                    <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                                    <a class="collapse collapsed" data-toggle="collapse"
                                        data-target="#faq_collapse<?php echo $slug; ?>" aria-expanded="false"
                                        aria-controls="faq_collapse<?php echo $slug; ?>">
                                        <?php the_title();?>
                                    </a>
                                </h5>
                            </div>
                            <div id="faq_collapse<?php echo $slug; ?>" class="collapse"
                                aria-labelledby="faq_heading<?php echo $slug; ?>" data-parent="#faq_accordion"
                                itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <div class="faq-body" itemprop="text">
                                    <?php the_content(); ?>
                                    <?php echo $slug; ?></div>
                            </div>
                        </div>


                        <?php endwhile;

/**
 * reset the orignal query
 * we should use this to reset wp_query
 */
wp_reset_query();

?>
                    </div>
                </div>
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