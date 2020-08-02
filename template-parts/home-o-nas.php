<?php
/**
 * Template part for o nas
 *
 */

?>
<?php if ( get_field('home_o_nas_tytul_sekcji') ) : ?>
<section class="home-o-nas">
    <div class="container home-o-nas-wrapper">
        <?php if ( get_field('home_o_nas_obrazek') ) : $image = get_field('home_o_nas_obrazek'); ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>

        <div class="row">
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
                <div class="home-o-nas-content">
                    <p class="before-title"><?php echo get_field('home_o_nas_tekst_nad_tytulem'); ?></p>


                    <h2><?php echo get_field('home_o_nas_tytul_sekcji'); ?></h2>
                    <div id="accordion-o-nas">
                        <div id="pytanie1">
                            <div id="headingOne">
                                <h3>
                                    <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne" class="collapse">
                                        <span><?php echo get_field('home_o_nas_pytanie_1'); ?></span>
                                    </a>
                                </h3>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion-o-nas">
                                <?php echo get_field('home_o_nas_odpowiedz_1'); ?>
                            </div>
                        </div>


                        <div id="pytanie2">
                            <div id="heading2">
                                <h3>
                                    <a data-toggle="collapse" data-target="#collapse2" aria-expanded="true"
                                        aria-controls="collapse2" class="collapse collapsed">
                                        <span><?php echo get_field('home_o_nas_pytanie_2'); ?></span>
                                    </a>
                                </h3>
                            </div>

                            <div id="collapse2" class="collapse" aria-labelledby="heading2"
                                data-parent="#accordion-o-nas">
                                <?php echo get_field('home_o_nas_odpowiedz_2'); ?>
                            </div>
                        </div>


                        <div id="pytanie3">
                            <div id="heading3">
                                <h3>
                                    <a data-toggle="collapse" data-target="#collapse3" aria-expanded="true"
                                        aria-controls="collapse3" class="collapse collapsed">
                                        <span><?php echo get_field('home_o_nas_pytanie_3'); ?></span>
                                    </a>
                                </h3>
                            </div>

                            <div id="collapse3" class="collapse" aria-labelledby="heading3"
                                data-parent="#accordion-o-nas">
                                <?php echo get_field('home_o_nas_odpowiedz_3'); ?>
                            </div>
                        </div>




                    </div>
                    <a href="<?php echo get_field('home_o_nas_cta_link'); ?>"
                        class="btn-cta"><?php echo get_field('home_o_nas_cta_anchor'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>