<?php
/**
 * Template part for home banner
 *
 */

?>

<section class="home-banner"
    style="<?php if ( get_field('home_obraz_w_tle') ) : ?> background: url(<?php echo get_field('home_obraz_w_tle'); ?>)<?php endif; ?> no-repeat center right; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php if ( get_field('home_tekst_nad_tytulem') ) : ?>
                <p><?php echo get_field('home_tekst_nad_tytulem'); ?></p>
                <?php endif; ?>
                <?php if ( get_field('home_tytul') ) : ?>
                <h1><?php echo get_field('home_tytul'); ?></h1>
                <?php endif; ?>
                <?php if ( get_field('home_link_anchor') ) : ?>
                <a href="<?php echo get_field('home_link_href'); ?> "
                    class="btn-cta"><?php echo get_field('home_link_anchor'); ?> </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>