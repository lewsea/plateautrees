<?php
/**
 * Template Name: News Page
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">
	<div class="<?php echo esc_attr( $container ); ?> page-<?php echo get_the_title(); ?>" id="content" tabindex="-1">
		<div class="row">
            <div class="col-md-12 content-area" id="primary">
                <main class="site-main" id="main">
                    <div class="news-wrapper section-wrapper">
                        <?php 
                            $args = array (
                                'post_type' => 'post',
                                'posts_per_page' => -1,
                            );
                            $blogposts = new WP_Query($args);
                            while ($blogposts->have_posts()) {
                                $blogposts->the_post();
                        ?>
                            <article class="news" id="post-<?php the_ID(); ?>">
                                <div class="news-content">
                                    <a href="<?php the_permalink()?>" class="news-img">
                                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title(); ?>">
                                    </a>
                                    <div class="news-description">
                                        <?php understrap_posted_on(); ?>
                                        <a href="<?php the_permalink()?>">
                                            <h4><?php echo wp_trim_words(get_the_title()); ?></h4>
                                        </a>
                                        <p><?php echo the_field('post_excerpts'); ?></p>
                                    </div>
                                </div>
                            </article>
                        <?php } wp_reset_query(); ?>
                    </div>
                </main><!-- #main -->
            </div>
		</div><!-- .row -->
	</div><!-- #content -->
</div><!-- #page-wrapper -->

<?php
get_footer();
