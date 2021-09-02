<?php
/**
 * Template Name: Service Page Template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">
    <div class="content-area" id="primary">
        <main class="site-main" id="main">
            <div class="<?php echo esc_attr( $container ); ?>">
                <div class="section-heading section-wrapper">
                    <span>OUR SERVICES</span>
                    <h2>SYDNEY TREE SERVICES WE OFFER</h2>
                    <p>Plateau Trees is committed to providing customers with professional tree services. If you’re looking for a Sydney tree removal company that goes to extra lengths to make the community cleaner and safer, then you’re in the right place! </p>
                </div>
                <section class="section-testimonial section-wrapper">
                    <div class="section-heading">
                        <span>WHAT OUR CLIENTS SAY</span>
                        <h2>TESTIMONIAL</h2>
                    </div> 
                    <div class="testimonial content-wrapper">
                        <span class="iconify" data-icon="bx:bxs-quote-left"></span>
                        <p>The three members of Plateau Trees who did the work today did an excellent job. They were very friendly and obliging, did a very good job on the tree trimming, and cleaned up perfectly at the end of the tree care job. I would have no hesitation in recommending Plateau Trees to any of my friends. Thanks again.</p>
                        <span>— DON CUNNINGHAM</span>
                    </div>
                </section>
            </div>
            <section class="section-contact section-wrapper">
                <div class="<?php echo esc_attr( $container ); ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-heading">
                                <span>CONTACT US</span>
                                <h2>GET YOUR FREE QUOTE</h2>
                            </div>
                            <div class="contact-wrapper content-wrapper pt-5">
                                <?php echo do_shortcode('[contact-form-7 id="44" title="Free Quote"]') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="<?php echo esc_attr( $container ); ?>">
                <section class="section-news section-wrapper">
                    <div class="section-heading">
                        <span>NEWS AND PROJECT UPDATES</span>
                        <h2>LATEST BLOGS</h2>
                    </div>
                    <div class="news-wrapper section-wrapper">
                        <?php 
                            $args = array (
                                'post_type' => 'post',
                                'posts_per_page' => 3,
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
                        <div class="d-flex justify-content-center">
                            <a href="<?php echo site_url('/blog');?>" class="primary-btn-light">See All <span class="iconify" data-icon="fluent:arrow-right-12-regular"></span></a>
                        </div>
                    </div>
                </section>
            </div>
        </main><!-- #main -->
    </div>
</div><!-- #page-wrapper -->

<?php
get_footer();
