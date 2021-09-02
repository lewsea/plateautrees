<?php
/**
 * Template Name: Contact Page Template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header('nobanner');
$container = get_theme_mod( 'understrap_container_type' );
?>

<header class="header-banner" style="background: url(<?php echo get_the_post_thumbnail_url( get_the_ID() ); ?>)">
    <div class="container">
        <span><?php the_field( 'subheading' ); ?></span>
        <h1><?php echo get_the_title(); ?></h1>
        <div class="btn-group">
            <a href="tel:1300 518 517" class="primary-btn">1300 518 517</a>
            <a href="<?php echo site_url('/services');?>" class="secondary-btn">Tree Services</a>
        </div>
    </div>
</header>

<div class="wrapper">
    <main class="site-main page-contact-us" id="main" role="main">
        <div class="section-wrapper row w-100">
            <div class="col-md-6 secondary-bg">
                <h2>GET YOUR FREE QUOTE</h2>
                <p>FIND OUT  MORE ABOUT PLATEAU TREES ASSET LANDSCAPING MANAGEMENT AND TREE CARE. CALL FOR YOUR UNIQUE LANDSCAPE MAINTENANCE SOLUTION</p>
                <ul>
                    <li><a href="mailto:info@plateautrees.com.au">
                        <span class="iconify" data-icon="fluent:mail-20-regular"></span>
                        INFO@PLATEAUTREES.COM.AU</a>
                    </li>
                    <li><a href="tel:(61) 455 112 788">
                        <span class="iconify" data-icon="fluent:call-24-filled"></span>
                        24/7 TREE EMERGENCY (61) 455 112 788</a>
                    </li>
                    <li><a href="https://g.page/PlateauTrees?share">
                        <span class="iconify" data-icon="fluent:location-16-regular"></span>
                        2A, 9-13 WINBOURNE ROAD, BROOKVALE, NSW, 2100</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="contact-wrapper content-wrapper pt-5">
                    <?php echo do_shortcode('[contact-form-7 id="44" title="Free Quote"]') ?>
                </div>
            </div>
        </div>
    </main>
</div>

<?php
get_footer();
