<?php
/**
 * Template part for cta
 *
 */

?>
<?php if ( get_field('cta_nad_mapka_tekst_cta', 'options') ) : ?>
<section class="home-cta">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <p><?php echo get_field('cta_nad_mapka_tekst_cta', 'options'); ?></p>
            </div>
            <div class="col-md-4">
                <a
                    href="<?php echo get_field('cta_nad_mapka_link_url', 'options'); ?>"><?php echo get_field('cta_nad_mapka_link_tekst', 'options'); ?></a>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>