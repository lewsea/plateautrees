<?php
/**
 * Header No Header
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
                        <a href="https://www.google.com/maps/uv?pb=!1s0x6b0d5441e81046cd%3A0x42714abcf15f4718!3m1!7e115!4s%2Fmaps%2Fplace%2Fplateau%2Btrees%2F%40-33.762869%2C151.2785837%2C3a%2C75y%2C192.52h%2C90t%2Fdata%3D*213m4*211e1*213m2*211sCY6Fk-RYbibY80n0UqwqIQ*212e0*214m2*213m1*211s0x6b0d5441e81046cd%3A0x42714abcf15f4718%3Fsa%3DX!5splateau%20trees%20-%20Google%20Search!15sCgIgAQ&imagekey=!1e2!2sCY6Fk-RYbibY80n0UqwqIQ&hl=en&sa=X&ved=2ahUKEwjy0PGu4s3yAhVSZN4KHXBPCEoQpx8wHnoECGcQCA">2A, 9-13 WINBOURNE ROAD, BROOKVALE, NSW, 2100</a>
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
                    <a href="" class="navbar-brand-mobile"><img src="http://localhost/plateautrees/wp-content/uploads/2021/08/logo-smol.png"></a>
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
					<a href="">GET A FREE QUOTE</a>
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