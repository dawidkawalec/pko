<?php
/**
 * Template part for blog loop
 *
 */

?>

<div class="col-md-4" style="margin-bottom: 30px;">
    <div class="wypadek-loop">
        <a href="<?php the_permalink() ?>">
            <div class="wypadek-loop-img"
                style="background:url('<?php the_post_thumbnail_url() ?>'); background-size:cover;border-top-right-radius: 1.5em; border-bottom-left-radius: 1.5em; height: 240px;">
            </div>
        </a>

        <div class="blog-tagi">
            <?php echo get_the_tag_list();?>
        </div>

        <a href="<?php the_permalink() ?>">
            <h3><?php the_title() ?></h3>
        </a>
    </div>
</div>