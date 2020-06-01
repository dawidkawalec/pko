<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>



<div id="blog">
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
                ?>
                    <h1>Blog</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam eveniet laudantium veritatis
                        repudiandae alias aut, error ea velit, unde fugiat in impedit recusandae iusto deleniti
                        explicabo modi itaque. Cumque dolore maiores dolorum placeat cum laudantium, dignissimos eos
                        repellendus doloribus quam distinctio</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem harum consequuntur laborum aperiam,
                        perferendis quaerat dolore sit ut soluta temporibus dolorem quam minima deleniti suscipit
                        reprehenderit corporis officia error quas dolor? Beatae molestiae quia explicabo alias aut, vel
                        hic laboriosam deserunt, autem veritatis rerum error labore dolorum soluta. Voluptatum,
                        aspernatur.</p>
                </div>
            </div>
        </div>
    </section>



    <section class="wypadki-loop content">
        <div class="kategorie-blog">

            <div class="container">
                <div class="row">

                    <div class="col-lg-12 text-center">
                        <a class="kategoria-btn active" href="/blog">Wszystkie</a>
                        <?php
                $categories = get_categories( array(
                    'orderby' => 'name',
                    'order'   => 'ASC'
                ) );

                foreach( $categories as $category ) {
                    echo '<a class="kategoria-btn" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';   
                } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <div class="col-lg-12 text-center">
                    <div class="row">

                        <?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>


                        <?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/blog-loop', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>



                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
<?php
get_footer();