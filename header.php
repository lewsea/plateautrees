<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">
        <div class="call-to-action call-to-action-mobile">
            <a href="<?php echo site_url('/contact-us');?>">GET A FREE QUOTE</a>
            <a class="cta-button" href="tel:1300 518 517">
                <span class="iconify" data-icon="fluent:call-connecting-20-filled"></span>
                <span>1300 518 517</span>      
            </a>
        </div>
        <div class="nav-contact-details">
            <div class="container">
                <div class="row">
                    <div class="col-4 email">
                        <span class="iconify" data-icon="fluent:mail-20-regular"></span>
                        <a href="mailto:info@plateautrees.com.au">INFO@PLATEAUTREES.COM.AU</a>
                    </div>
                    <div class="col-4 phone">
                        <span class="iconify" data-icon="fluent:call-24-filled"></span>
                        <a href="tel:(61) 455 112 788">24/7 TREE EMERGENCY (61) 455 112 788</a>
                    </div>
                    <div class="col-4 address">
                        <span class="iconify" data-icon="fluent:location-16-regular"></span>
                        <a href="https://g.page/PlateauTrees?share">2A, 9-13 WINBOURNE ROAD, BROOKVALE, NSW, 2100</a>
                    </div>
                </div>
            </div>
        </div>
        
		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-md navbar-dark" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2>

		<?php if ( 'container' === $container ) : ?>
			<div class="container">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>

						<?php
					} else {
						the_custom_logo();
					}
					?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand-mobile"><img src="http://localhost/plateautrees/wp-content/uploads/2021/09/logo-mobile.png"></a>
					<!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>

                <!-- cta button -->

				<div class="call-to-action ml-5">
					<a href="<?php echo site_url('/contact-us');?>">GET A FREE QUOTE</a>
                    <a class="cta-button" href="tel:1300 518 517">
                        <span class="iconify" data-icon="fluent:call-connecting-20-filled"></span>
                        <span>1300 518 517</span>      
                    </a>
				</div>

			<?php if ( 'container' === $container ) : ?>
            <div id="scroll-top-button"></div>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
    
    <?php if ( ! is_front_page() && ! is_home() ) : ?>
        <header class="header-banner" style="background: url(<?php echo get_the_post_thumbnail_url( get_the_ID() ); ?>)">
            <div class="container">
                <span><?php the_field( 'subheading' ); ?></span>
                <h1><?php echo get_the_title(); ?></h1>
                <div class="btn-group">
                    <a href="<?php echo site_url('/contact-us');?>" class="primary-btn">Contact us</a>
                    <a href="<?php echo site_url('/services');?>" class="secondary-btn">Tree Services</a>
                </div>
            </div>
        </header>
    <?php endif; ?>