<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="top-footer-wrapper section-wrapper">
    <div class="top-footer">
        <div class="bg-overlay"></div>
        <img src="http://localhost/plateautrees/wp-content/uploads/2021/08/top-footer-bg.png" alt="top footer">
        <div class="col-text">
            <h2>call us today for all aspects of tree management</h2>
            <div class="btn-group">
                <a href="tel:1300 518 517" class="primary-btn"><span class="iconify" data-icon="fluent:call-connecting-20-filled"></span> 1300 518 517</a>
                <a href="mailto:info@plateautrees.com.au" class="secondary-btn">SEND AN EMAIL</a>
            </div>
        </div>
    </div>
</div>

<div class="wrapper" id="wrapper-footer">
	<div class="<?php echo esc_attr( $container ); ?>">
		<div class="row">
			<div class="col-md-12">
				<footer class="site-footer" id="colophon">
                    <div class="row">
                        <div class="col-md-3 site-info">
                            <h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="http://localhost/plateautrees/wp-content/uploads/2021/08/logo-footer.png" style="
                            width: 250px; alt="footer logo"></a></h4>
                            <ul class="list-unstyled">
                                <li class="address">
                                    <span class="iconify" data-icon="fluent:location-16-regular"></span>
                                    <a href="https://g.page/PlateauTrees?share">2A, 9-13 WINBOURNE ROAD, BROOKVALE, NSW, 2100</a>
                                </li>
                                <li class="email">
                                    <span class="iconify" data-icon="fluent:mail-20-regular"></span>
                                    <a href="mailto:info@plateautrees.com.au">INFO@PLATEAUTREES.COM.AU</a>
                                </li>
                                <li class="phone">
                                    <span class="iconify" data-icon="fluent:call-24-filled"></span>
                                    <a href="tel:(61) 455 112 788">24/7 TREE EMERGENCY (61) 455 112 788</a>
                                </li>
                               
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h4>ABOUT</h4>
                            <?php
                                wp_nav_menu (
                                    array (
                                        'menu' => '3',
                                        'menu_class' => 'list-unstyled',
                                        'menu_id' => 'about-menu',
                                    )
                                )
                            ?>
                        </div>
                        <div class="col-md-3">
                        <h4>SERVICES</h4>
                            <?php
                                wp_nav_menu (
                                    array (
                                        'menu' => '4',
                                        'menu_class' => 'list-unstyled',
                                        'menu_id' => 'services-menu',
                                    )
                                )
                            ?>
                        </div>
                        <div class="col-md-3">
                        <h4>LOCATION</h4>
                            <?php
                                wp_nav_menu (
                                    array (
                                        'menu' => '5',
                                        'menu_class' => 'list-unstyled',
                                        'menu_id' => 'services-menu',
                                    )
                                )
                            ?>
                        </div>
                    </div>
                    <hr>
					<div class="site-copy">
                        <span> &copy; <?php echo date( 'Y' ); ?> PLATEAU TREES | ALL RIGHTS RESERVED </span>
                        <div class="footer-socials">
                            <ul class="list-unstyled">
                                <li><a href="https://www.facebook.com/PlateauTrees/"><span class="iconify" data-icon="la:facebook-f"></span></a></li>
                                <li><a href="https://www.linkedin.com/company/plateau-tree-service/"><span class="iconify" data-icon="akar-icons:instagram-fill"></span></a></li>
                                <li><a href="https://twitter.com/plateautrees"><span class="iconify" data-icon="akar-icons:twitter-fill"></span></a></li>
                                <li><a href="https://www.youtube.com/channel/UCiufjTUM8HWI_-77yYjUbLg"><span class="iconify" data-icon="ant-design:youtube-outlined"></span></a></li>
                                <li><a href="https://www.linkedin.com/company/plateau-tree-service/"><span class="iconify" data-icon="ant-design:linkedin-outlined"></span></a></li>
                                <li><a href="https://www.pinterest.com.au/PlateauTreeService/"><span class="iconify" data-icon="fa-brands:pinterest"></span></a></li>
                            </ul>
                        </div>
					</div>
				</footer><!-- #colophon -->
			</div><!--col end -->
		</div><!-- row end -->
	</div><!-- container end -->
</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

