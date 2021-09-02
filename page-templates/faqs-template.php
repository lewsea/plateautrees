<?php
/**
 * Template Name: Faqs Page Template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper">
	<div class="<?php echo esc_attr( $container ); ?> page-<?php echo get_the_title(); ?>" id="content">
		<div class="row">
			<div class="col-md-12 content-area" id="primary">
				<main class="site-main" id="main" role="main">
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
                                    <p>Both policies include protection for you in the case of damage being caused  to your property, your neighbour’s property or people being injured while the work is being carried out.
                                    <br>
                                    We can show you our Certificate of Currency for Workers Compensation Insurance and include it with the job quote. </p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">WHAT QUALIFICATIONS DO YOU HAVE?</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <p>Each of our tree climbers have a Certificate II in Horticulture (Arboriculture). Our supervisor arborists have a Certificate III in Horticulture (Arboriculture).</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">HOW DO I KNOW YOU WILL DO THE WORK SAFELY?</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <p>We will provide  a written quote with our contact  details and ABN or ACN of the company .
                                    <br>
                                    All tree work should be carried out in accordance with the requirements of the WorkCover Code of
                                    Practice: Amenity Tree Industry 1998.
                                    <br>
                                    We will explain what measures are necessary the safety of you, neighbours and anyone walking or driving past where the work is being carried out.
                                    <br>
                                    When the work is near power lines we will maintain a safe distance from the power lines.
                                    <br>
                                    If work is being carried out on a tree that is within 3 metres of any power line including a service line, then we will ensure an accredited and trained tree consultant will carrying out the work.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">HOW CAN I MAKE SURE THE WORK IS DONE SAFELY?</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <p>At all times you should ensure that you or other people remain outside of the danger areas identified by the consultant. Failure to follow our Plateau Trees consultant’s instructions could result in injury to yourself or our staff. <br>
                                    Reputable consultants will check for hazards prior to commencing work.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
				</main><!-- #main -->
			</div><!-- #primary -->
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
</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
