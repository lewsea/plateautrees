<?php
/**
 * Template Name: About Page Template
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
                    <section class="section-header section-wrapper">
                        <div class="section-heading">
                            <span>ABOUT US</span>
                            <h2>HOW IT STARTED</h2>
                            <p>Plateau Trees was established in 1993 and is a well-known arboriculture and landscape services company, located in the northern beaches area of Sydney. Our company has grown from one to an industry leader employing over 100 people. We are one of Sydney’s most efficient and reliable arboriculture resources for state and local government, operating in the Sydney metropolitan area and on the Central Coast.</p>
                            <p>We have an extensive range of <a href="">vehicles, machinery and safety equipment,</a> that our staff are trained and experienced in using.
                            Plateau Trees has undertaken rigorous evaluation and training.  We have continuously been awarded Best Practice Certification for our quality, safety and environmental systems, and for our commitment to safety, customer care and customer satisfaction. But don’t take our word for it. <a href="">Read the what customers say about us</a></p>
                        </div>
                    </section>
                    <section class="section-values section-wrapper">
                        <h2>OUR CORE VALUES ARE SAFETY, QUALITY AND PROGRESS</h2>
                        <div class="value">
                            <h4>SAFETY</h4>
                            <hr>
                            <p>We have developed an industry-leading safety culture, ensuring our staff and customers are protected.</p>
                        </div>
                        <div class="value">
                            <h4>QUALITY</h4>
                            <hr>
                            <p>Our competency review ensures that our staff have the right qualifications, skills and training required to complete the work.</p>
                        </div>
                        <div class="value">
                            <h4>PROGRESS</h4>
                            <hr>
                            <p>We recognise our responsibility to lead the way in environmental practices, and review policies on a regular basis to minimise environmental impacts.</p>
                        </div>
                    </section>
                    <section class="section-team section-wrapper">
                        <div class="team management-team">
                            <div class="row two-col">
                                <div class="col-md-6">
                                    <div class="person">
                                        <img src="http://localhost/plateautrees/wp-content/uploads/2021/09/TonyPlummerFounderandManagingDirectorPlateauTrees.jpg" alt="Tony Plummer Founder and Managing Director" title="Tony Plummer Founder and Managing Director">
                                        <div class="person-info">
                                            <h4>TONY PLUMMER</h4>
                                            <div class="info-title">
                                                <span>FOUNDER AND MANAGING DIRECTOR</span>
                                                <span>AQF level 5 in Arboriculture</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="person">
                                        <img src="http://localhost/plateautrees/wp-content/uploads/2021/09/StuartCannellGeneralManagerPlateauTrees.jpg" alt="Stuart Cannell General Manager Plateau Trees" title="Stuart Cannell General Manager Plateau Trees">
                                        <div class="person-info">
                                            <h4>STUART CANNELL</h4>
                                            <div class="info-title">
                                                <span>GENERAL MANAGER</span>
                                                <span>AQF level 5 in Arboriculture</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row three-col">
                                <div class="col-md-4">
                                    <div class="person">
                                        <img src="http://localhost/plateautrees/wp-content/uploads/2021/09/GregDavieResidentialContractsManagerPlateauTrees.jpg" alt="Greg Davie Residential Contracts Manager" title="Greg Davie Residential Contracts Manager">
                                        <div class="person-info">
                                            <h4>GREG DAVIE</h4>
                                            <div class="info-title">
                                                <span>RESIDENTIAL CONTRACTS MANAGER</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="person">
                                        <img src="http://localhost/plateautrees/wp-content/uploads/2021/09/AntonyYoungman_ContractsManager_Pleateau-Trees.jpg" alt="Antony Youngman Contracts Manager" title="Antony Youngman Contracts Manager">
                                        <div class="person-info">
                                            <h4>ANTONY YOUNGMAN</h4>
                                            <div class="info-title">
                                                <span>COMPLIANCE MANAGER</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="person">
                                        <img src="http://localhost/plateautrees/wp-content/uploads/2021/09/DeclaneKane_ChiefFinancialOfficerPlateauTrees.jpg" alt="Declane Kane Chief Financial Officer" title="Declane Kane Chief Financial Officer">
                                        <div class="person-info">
                                            <h4>DECLAN KANE</h4>
                                            <div class="info-title">
                                                <span>CHIEF FINANCIAL OFFICER</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row two-col">
                                <div class="col-md-6">
                                    <div class="person">
                                        <img src="http://localhost/plateautrees/wp-content/uploads/2021/09/MartinHowardContractsManager.jpg" alt="Martin Howard Contracts Manager" title="Martin Howard Contracts Manager">
                                        <div class="person-info">
                                            <h4>MARTIN HOWARD</h4>
                                            <div class="info-title">
                                                <span>CONTRACTS MANAGER</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="person">
                                        <img src="http://localhost/plateautrees/wp-content/uploads/2021/09/SonyaPlummerMarketingandDevelopmentPlateauTrees-1.png" alt="Sonya Plummer Marketing and Development" title="Sonya Plummer Marketing and Development">
                                        <div class="person-info">
                                            <h4>SONYA PLUMMER</h4>
                                            <div class="info-title">
                                                <span>MARKETING AND DEVELOPMENT</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section-team section-wrapper">
                        <div class="team trained-staff">
                            <h3>SOME OF OUR TRAINED STAFF</h3>
                            <div class="row three-col">
                                <div class="col-md-4">
                                    <div class="person">
                                        <img src="http://localhost/plateautrees/wp-content/uploads/2021/09/22-MAY-2019-Plateau-Trees-3461-compressor.jpg">
                                        <div class="person-info">
                                            <h4>SCOTT WOOD</h4>
                                            <div class="info-title">
                                                <span>TRUCK DRIVER</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="person">
                                        <img src="http://localhost/plateautrees/wp-content/uploads/2021/09/22-MAY-2019-Plateau-Trees-3392-compressor.jpg">
                                        <div class="person-info">
                                            <h4>RACHEL LONG</h4>
                                            <div class="info-title">
                                                <span>TRAFFIC CONTROLLER</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="person">
                                        <img src="http://localhost/plateautrees/wp-content/uploads/2021/09/22-MAY-2019-Plateau-Trees-3492-compressor.jpg">
                                        <div class="person-info">
                                            <h4>ETHAN TIMMINS</h4>
                                            <div class="info-title">
                                                <span>STUMP GRINDER OPERATOR</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row three-col">
                                <div class="col-md-4">
                                    <div class="person">
                                        <img src="http://localhost/plateautrees/wp-content/uploads/2021/09/22MAY2019-PlateauTrees3418.jpg">
                                        <div class="person-info">
                                            <h4>KYLE HOLLARD</h4>
                                            <div class="info-title">
                                                <span>LANDSCAPE MAINTENANCE</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="person">
                                        <img src="http://localhost/plateautrees/wp-content/uploads/2021/09/22MAY2019-PlateauTrees3482.jpg">
                                        <div class="person-info">
                                            <h4>ADAM WEST</h4>
                                            <div class="info-title">
                                                <span>STUMP GRINDER OPERATOR</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="person">
                                        <img src="http://localhost/plateautrees/wp-content/uploads/2021/09/22-MAY-2019-Plateau-Trees-3458-compressor.jpg">
                                        <div class="person-info">
                                            <h4>BILLY PRICE</h4>
                                            <div class="info-title">
                                                <span>EWP OPERATOR</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section-values section-wrapper">
                        <div class="value">
                            <h4>OUR PEOPLE</h4>
                            <hr>
                            <p>We recognise that the key to a successful business is its people. We have over 100 employees to whom we are committed to providing ongoing support and training. We strive to employ the very best arborists and specialist staff to ensure our quality of work and customer service is second-to-none.</p>
                        </div>
                        <div class="value">
                            <h4>OUR COMMITMENT TO EXCELLENCE</h4>
                            <hr>
                            <p>Staff are our greatest asset. We invest in their safety, training and development. At Plateau Trees we keep and attract individuals who demonstrate co-operation, teamwork, innovation, integrity and performance.</p>
                        </div>
                        <div class="value">
                            <h4>STAFF DEVELOPMENT</h4>
                            <hr>
                            <p>As a leading tree services company, we help staff reach their full potential, achieve job satisfaction and maximise their contribution to advance their careers. Plateau Trees have many people that have been employed with us for 9 years and longer.</p>
                        </div>
                        <div class="value">
                            <h4>STAFF DEVELOPMENT</h4>
                            <hr>
                            <p>Staff are provided with a comprehensive induction program that spans across a 3-6 months. During this time, each person is supervised and mentored throughout the probation period.</p>
                        </div>
                        <div class="value">
                            <h4>REWARD AND RECOGNITION</h4>
                            <hr>
                            <p>Staff are recognised and rewarded on their performance. Individual remuneration packages are based on merit, aligned to our business requirements and sufficiently attractive to recruit and retain the very best people.</p>
                        </div>
                    </section>
                    <section class="section-team section-wrapper">
                        <div class="team admin-team">
                        <h3>OUR ADMINISTRATION TEAM</h3>
                            <div class="row three-col">
                                <div class="col-md-4">
                                    <div class="person">
                                        <img src="http://localhost/plateautrees/wp-content/uploads/2021/09/IMG_56061.jpg">
                                        <div class="person-info">
                                            <h4>CASSANDRA</h4>
                                            <div class="info-title">
                                                <span>ADMINISTRATOR</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="person">
                                        <img src="http://localhost/plateautrees/wp-content/uploads/2021/09/LouiseCannell_AministrationSupervisor_PlateauTrees.jpg">
                                        <div class="person-info">
                                            <h4>LOUISE</h4>
                                            <div class="info-title">
                                                <span>ADMINISTRATION SUPERVISOR</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="person">
                                        <img src="http://localhost/plateautrees/wp-content/uploads/2021/09/justine.jpg">
                                        <div class="person-info">
                                            <h4>JUSTINE</h4>
                                            <div class="info-title">
                                                <span>ADMINISTRATOR</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row three-col">
                                <div class="col-md-4">
                                    <div class="person">
                                        <img src="http://localhost/plateautrees/wp-content/uploads/2021/09/image-asset.jpeg">
                                        <div class="person-info">
                                            <h4>MADDI</h4>
                                            <div class="info-title">
                                                <span>ADMINISTRATOR</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="person">
                                        <img src="http://localhost/plateautrees/wp-content/uploads/2021/09/DanielleSimpson_Accounts_Plateau-Trees.jpg">
                                        <div class="person-info">
                                            <h4>DANIELLE</h4>
                                            <div class="info-title">
                                                <span>ADMINISTRATOR/ACCOUNTS PAYABLE</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="person">
                                        <img src="http://localhost/plateautrees/wp-content/uploads/2021/09/unnamed-1.jpg">
                                        <div class="person-info">
                                            <h4>GISELE</h4>
                                            <div class="info-title">
                                                <span>ADMINISTRATOR </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <div class="person">
                                        <img src="http://localhost/plateautrees/wp-content/uploads/2021/09/unnamed-2.jpg">
                                        <div class="person-info">
                                            <h4>HALEY</h4>
                                            <div class="info-title">
                                                <span>ADMINISTRATOR</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="section-careers">
                        <div class="section-heading section-wrapper">
                            <h2>CAREERS</h2>
                        </div>
                        <div class="col-img">
                            <img src="http://localhost/plateautrees/wp-content/uploads/2021/09/22MAY2019-PlateauTrees3501.jpg" alt="">
                            <span class="caption">
                                - From left to right: BILLY PRICE (EWP OPERATOR), LEE DAVIS (EXCAVATION OPERATOR) and TIMOTHY PRICE (TRUCK DRIVER)
                            </span>
                        </div>
                        <div class="col-text content-wrapper">
                            <h4>TREE INDUSTRY WORKERS</h4>
                            <p>Plateau Trees is an industry leader within all aspects of vegetation management. Our main office is on the Northern Beaches and our work is all over the Sydney metropolitan area and Central Coast. <br>We’re always looking for skilled and qualified crew members within the tree Industry:</p>
                            <ul>
                                <li>Climbers – experience in climbing required</li>
                                <li>Groundsman</li>
                                <li>Plant operators – excavators, elevated work platforms</li>
                                <li>Truck drivers</li>
                                <li>We’ll also be able to calculate the SULE rating of the tree (Safe, useful, life expectancy) in line with the AS4373 guidelines.</li>
                            </ul>
                            <p>The role consists of all aspects of tree pruning and removals, quoting, client liaison, leading and mentoring workers, hazard and risk assessment, safe work methods, tree identification and any other duties commensurate with skill and salary.<br>We can offer:</p>
                            <ul>
                                <li>Competitive salary</li>
                                <li>Training</li>
                                <li>Possibility of career progression</li>
                                <li>Truck drivers</li>
                                <li>We’ll also be able to calculate the SULE rating of the tree (Safe, useful, life expectancy) in line with the AS4373 guidelines.</li>
                            </ul>
                            <p>If you are interested in any of these roles, please send your current resume to <a href="mailto:info@plateautrees.com.au" class="anchor-red">info@plateautrees.com.au</a> 
                            </p>
                            <br>
                            <strong class="mt-3">**We do not take agency contracts</strong>
                        </div>
                    </div>
                </main><!-- #main -->
            </div>
		</div><!-- .row -->
	</div><!-- #content -->
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
</div><!-- #page-wrapper -->

<?php
get_footer();
