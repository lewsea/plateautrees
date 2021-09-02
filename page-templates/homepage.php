<?php
/**
 * Template Name: Home Page Template
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div id="full-width-page-wrapper">
    <main class="site-main" id="main" role="main">
        <div class="<?php echo esc_attr( $container ); ?> page-<?php echo get_the_title(); ?>">
            <div class="row">
                <div class="col-md-12">
                    <section class="section-hero section-wrapper">
                        <div class="row">
                            <div class="col-md-6 col-text">
                                <span>SINCE 1993</span>
                                <h1>SYDNEY TREE REMOVAL SERVICES</h1>
                                <p>We are one of Sydney’s most efficient and reliable arboriculture resources for state and local government, operating in the Sydney metropolitan area and on the Central Coast.</p>
                                <div class="btn-group">
                                    <a href="#" class="primary-btn">Tree Services</a>
                                    <a href="#" class="secondary-btn">Contact us</a>
                                </div>
                            </div>
                            <div class="col-md-6 col-image">
                                <div class="img-wrapper">
                                    <img src="http://localhost/plateautrees/wp-content/uploads/2021/08/home-banner-image.png" alt="hero image">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <section class="section-qualities section-wrapper">
            <div class="<?php echo esc_attr( $container ); ?>">
                <div class="row col-qualities">
                    <div class="col-md-4 quality">
                        <img src="http://localhost/plateautrees/wp-content/uploads/2021/08/22MAY2019-PlateauTrees0698.jpg" alt="QUALITY GUARANTEE" title="QUALITY GUARANTEE">
                        <div class="bg-overlay">
                            <span class="iconify" data-icon="majesticons:badge-check"></span>
                            <span>QUALITY GUARANTEE</span>
                        </div>
                    </div>
                    <div class="col-md-4 quality">
                        <img src="http://localhost/plateautrees/wp-content/uploads/2021/08/22MAY2019-PlateauTrees4033.jpg" alt="27 YEARS TREE SERVICES SYDNEY" title="27 YEARS TREE SERVICES SYDNEY">
                        <div class="bg-overlay">
                            <span class="iconify" data-icon="majesticons:badge-check"></span>
                            <span>27 YEARS TREE <br>SERVICES SYDNEY</span>
                        </div>
                    </div>
                    <div class="col-md-4 quality">
                        <img src="http://localhost/plateautrees/wp-content/uploads/2021/08/22MAY2019-PlateauTrees2662.jpg" alt="FAMILY BUSINESS" title="FAMILY BUSINESS">
                        <div class="bg-overlay">
                            <span class="iconify" data-icon="majesticons:badge-check"></span>
                            <span>FAMILY BUSINESS</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="<?php echo esc_attr( $container ); ?>">
            <div class="row">
                <div class="col-md-12">
                    <section class="section-certificate section-wrapper">
                        <div class="certificate d-flex justify-content-center">
                            <div>
                                <img src="http://localhost/plateautrees/wp-content/uploads/2021/08/COVID-19SafePlateauTreeServices.png" alt="covid safe">
                            </div>
                            <div>
                                <img src="http://localhost/plateautrees/wp-content/uploads/2021/08/BestpracticeCertificationsandmemberships-1.png" alt="certifications">
                            </div>
                        </div>
                        <p>WE HAVE A <a href="#">COVID-19 SAFETY PLAN</a> AND ARE COMMITTED TO KEEPING YOU SAFE</p>
                    </section>
                    <section class="section-services section-wrapper">
                        <div class="section-heading">
                            <span>OUR SERVICES</span>
                            <h2>SYDNEY TREE SERVICES WE OFFER</h2>
                            <p>Plateau Trees is committed to providing customers with professional tree services. If you’re looking for a Sydney tree removal company that goes to extra lengths to make the community cleaner and safer, then you’re in the right place! </p>
                        </div>
                        <div class="service-wrapper section-wrapper">
                            <?php 
                                $args = array(
                                    'post_type' => 'service',
                                    'posts_per_page' => 4,
                                    'order' => 'ASC',
                                    'orderby' => 'ID',
                                );
                                $serviceposts = new WP_Query( $args );
                                while ( $serviceposts->have_posts() ) {
                                    $serviceposts->the_post();
                                    ?>
                                <article class="service row" id="post-<?php the_ID(); ?>">
                                    <div class="col-md-8 col-text">
                                        <h4><?php echo the_title(); ?></h4>
                                        <div class="service-excerpt">
                                            <?php the_field('service_excerpt') ?>
                                        </div>
                                        <a href="<?php the_permalink(); ?>" class="primary-btn-light"><div>Learn More</div><span class="iconify" data-icon="fluent:arrow-right-12-regular"></span></a>
                                    </div>
                                    <div class="col-md-4 col-img">
                                        <div class="img-wrapper">
                                            <img src="<?php the_field('service_image') ?>" alt="<?php echo the_title(); ?>" title="<?php echo the_title(); ?>">
                                        </div>
                                    </div>
                                </article>
                            <?php } wp_reset_query(); ?>
                        </div>
                    </section>
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
            </div>
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
            <div class="row">
                <div class="col-md-12">
                    <section class="section-sectors section-wrapper">
                        <div class="section-heading">
                            <span>INDUSTRIAL SECTOR</span>
                            <h2>SECTORS WE COVER</h2>
                            <p>Plateau Trees maintains some of Australia’s highest-profile commercial properties and landscapes. We work with asset property managers to provide extensive commercial horticultural and landscaping services for:</p>
                        </div>
                        <div class="sector-wrapper section-wrapper">
                            <?php 
                                $args = array (
                                    'post_type' => 'sector',
                                    'posts_per_page' => 3,
                                );
                                $sectorposts = new WP_Query($args);
                                while ($sectorposts->have_posts()) {
                                    $sectorposts->the_post();
                            ?>
                            <div class="sector">
                                <div class="sector-img">
                                    <img src="<?php the_field('sector_icon'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                                    <h4><?php the_field('sector_name'); ?></h4>
                                </div>
                                <div class="sector-desc">
                                    <p><?php echo the_field('sector_excerpts'); ?></p>
                                    <a href="<?php the_permalink(); ?>" class=""><div>Learn More</div><span class="iconify" data-icon="fluent:arrow-right-12-regular"></span></a>
                                </div>
                            </div>
                            <?php } wp_reset_query(); ?>
                        </div>
                    </section>
                    <section class="section-faqs section-wrapper">
                        <div class="section-heading">
                            <span>FREQUENTLY ASKED QUESTIONS</span>
                            <h2>FAQS</h2>
                        </div>
                        <div class="accordion section-wrapper">
                            <div class="accordion-item">
                                <button id="accordion-button-1" aria-expanded="true"><span class="accordion-title">WHAT INSURANCES DO YOU HAVE?</span><span class="icon" aria-hidden="false"></span></button>
                                <div class="accordion-content">
                                    <p>We have the following insurances:</p>
                                    <ul>
                                        <li>workers compensation insurance</li>
                                        <li>public liability insurance</li>
                                    </ul>
                                    <p>Both policies include protection for you in the case of damage being caused  to your property, your neighbour’s property or people being injured while the work is being carried out.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">WHAT QUALIFICATIONS DO YOU HAVE?</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <p>We have the following insurances:</p>
                                    <ul>
                                        <li>workers compensation insurance</li>
                                        <li>public liability insurance</li>
                                    </ul>
                                    <p>Both policies include protection for you in the case of damage being caused  to your property, your neighbour’s property or people being injured while the work is being carried out.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">HOW DO I KNOW YOU WILL DO THE WORK SAFELY?</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <p>We have the following insurances:</p>
                                    <ul>
                                        <li>workers compensation insurance</li>
                                        <li>public liability insurance</li>
                                    </ul>
                                    <p>Both policies include protection for you in the case of damage being caused  to your property, your neighbour’s property or people being injured while the work is being carried out.</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="<?php echo site_url('/faqs');?>" class="primary-btn-light">See All <span class="iconify" data-icon="fluent:arrow-right-12-regular"></span></a>
                        </div>
                    </section>
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
            </div>
        </div>
    </main><!-- #main -->
</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
