<?php
/**
 * Template part for hero-content
 *
 */

?>


<?php if ( get_field('wypadek_poj_opis_pod_tytulem') ) : ?>
<section class="hero-content">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <?php echo get_field('wypadek_poj_opis_pod_tytulem'); ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>