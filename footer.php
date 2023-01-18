<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$args = array(
   'numberposts' => 1,
   'post_type'   => 'configurations'
 );
$configurations = get_posts( $args );
$configuration = '';
foreach($configurations as $c){
   $configuration = $c;
}
?>
<footer id="footer">
   <div class="footer-copyright dt-sc-dark-bg">
      <div class="container">
         <div class="column dt-sc-one-half first ">
            <p>&copy; 2022 SPARC EU GmbH website. All rights reserved.</p>
         </div>
         <div class="column dt-sc-one-half" style="text-align: right; font-size: 12px;">
            <p>
               <a href="/pages?page=contact" style="margin-right: 5px;">Contact us</a> 
                  <a href="/pages?page=legal_notice" style="margin-right: 5px;">Legal Notice</a> 
                  <a href="/pages?page=privacy_notice" style="margin-right: 5px;">Privacy Notice</a>
            </p>
         </div>
         <div class="column dt-sc-one-half sociable" style="display: none">
            <ul class="dt-sc-sociable">
               <li class="facebook"><a target="_blank" href="<?php echo get_field('facebook_url', $configuration->ID); ?>"></a></li>
               <li class="linkedin"><a target="_blank" href="<?php echo get_field('linkedin_url', $configuration->ID); ?>"></a></li>
               <li class="twitter"><a target="_blank" href="<?php echo get_field('twitter_url', $configuration->ID); ?>"></a></li> 
               <li class="youtube"><a target="_blank" href="<?php echo get_field('youtube_url', $configuration->ID); ?>"></a></li>

            </ul>
         </div>
      </div>
   </div>
</footer>
			<footer id="site-footer" class="header-footer-group" style="display: none">

				<div class="section-inner">

					<div class="footer-credits">

						<p class="footer-copyright">&copy;
							<?php
							echo date_i18n(
								/* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
								_x( 'Y', 'copyright date format', 'twentytwenty' )
							);
							?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						</p><!-- .footer-copyright -->

						<?php
						if ( function_exists( 'the_privacy_policy_link' ) ) {
							the_privacy_policy_link( '<p class="privacy-policy">', '</p>' );
						}
						?>

						<p class="powered-by-wordpress">
							<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentytwenty' ) ); ?>">
								<?php _e( 'Powered by WordPress', 'twentytwenty' ); ?>
							</a>
						</p><!-- .powered-by-wordpress -->

					</div><!-- .footer-credits -->

					<a class="to-the-top" href="#site-header">
						<span class="to-the-top-long">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'To the top %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-long -->
						<span class="to-the-top-short">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'Up %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-short -->
					</a><!-- .to-the-top -->

				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->

			</div>
         <!-- **Inner Wrapper - End** -->
      </div>
      <!-- **Wrapper - End** -->
		<?php wp_footer(); ?>
		<script type="text/html" id="wpb-modifications"></script>		<script type="text/javascript">
         if(typeof revslider_showDoubleJqueryError === "undefined") {
         	function revslider_showDoubleJqueryError(sliderID) {
         		var err = "<div class='rs_error_message_box'>";
         		err += "<div class='rs_error_message_oops'>Oops...</div>";
         		err += "<div class='rs_error_message_content'>";
         		err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
         		err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
         		err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
         		err += "</div>";
         	err += "</div>";
         		var slider = document.getElementById(sliderID); slider.innerHTML = err; slider.style.display = "block";
         	}
         }
      </script>
      <link rel='stylesheet' id='vc_animate-css-css' href='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/plugins/js_composer/assets/lib/bower/animate-css/animate.min.css?ver=6.5.0' type='text/css' media='all'>
      <script type='text/javascript' id='contact-form-7-js-extra'>
         /* <![CDATA[ */
         var wpcf7 = {"apiSettings":{"root":"https:\/\/dtminim.wpengine.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"cached":"1"};
         /* ]]> */
      </script>
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/plugins/contact-form-7/includes/js/scripts.js?ver=5.3.2' id='contact-form-7-js'></script>
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/plugins/designthemes-core-features/shortcodes/js/jquery.tabs.min.js?ver=5.9.3' id='dt-sc-tabs-js'></script>
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/plugins/designthemes-core-features/shortcodes/js/jquery.tipTip.minified.js?ver=5.9.3' id='dt-sc-tiptip-js'></script>
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/plugins/designthemes-core-features/shortcodes/js/jquery.inview.js?ver=5.9.3' id='dt-sc-inview-js'></script>
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/plugins/designthemes-core-features/shortcodes/js/jquery.animateNumber.min.js?ver=5.9.3' id='dt-sc-animatenum-js'></script>
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/plugins/designthemes-core-features/shortcodes/js/jquery.donutchart.js?ver=5.9.3' id='dt-sc-donutchart-js'></script>
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/plugins/designthemes-core-features/shortcodes/js/slick.min.js?ver=5.9.3' id='dt-sc-slick-js'></script>
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/plugins/designthemes-core-features/shortcodes/js/jquery.toggle.click.js?ver=5.9.3' id='dt-sc-toogle-click-js'></script>
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/plugins/designthemes-core-features/shortcodes/js/shortcodes.js?ver=5.9.3' id='dt-sc-script-js'></script>
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/plugins/designthemes-fb-pixel/script.js?ver=5.9.3' id='dt-fbpixel-script-js'></script>
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/framework/js/jquery.ui.totop.min.js?ver=5.9.3' id='jquery-ui-totop-js'></script>
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/framework/js/jquery.caroufredsel.js?ver=5.9.3' id='jquery-caroufredsel-js'></script>
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/framework/js/jquery.debouncedresize.js?ver=5.9.3' id='jquery-debouncedresize-js'></script>
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/framework/js/jquery.prettyphoto.js?ver=5.9.3' id='jquery-prettyphoto-js'></script>
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/framework/js/jquery.touchswipe.js?ver=5.9.3' id='jquery-touchswipe-js'></script>
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/framework/js/jquery.parallax.js?ver=5.9.3' id='jquery-parallax-js'></script>
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/framework/js/jquery.downcount.js?ver=5.9.3' id='jquery-downcount-js'></script>
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/framework/js/jquery.nicescroll.js?ver=5.9.3' id='jquery-nicescroll-js'></script>
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/framework/js/jquery.bxslider.js?ver=5.9.3' id='jquery-bxslider-js'></script>
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/framework/js/jquery.fitvids.js?ver=5.9.3' id='jquery-fitvids-js'></script>
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/framework/js/jquery.sticky.js?ver=5.9.3' id='jquery-sticky-js'></script>
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/framework/js/jquery.simple-sidebar.js?ver=5.9.3' id='jquery-simple-sidebar-js'></script>
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/framework/js/jquery.classie.js?ver=5.9.3' id='jquery-classie-js'></script>
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/framework/js/jquery.placeholder.js?ver=5.9.3' id='jquery-placeholder-js'></script>
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/framework/js/jquery.visualNav.min.js?ver=5.9.3' id='jquery-visualnav-js'></script>
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/plugins/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.min.js?ver=6.5.0' id='isotope-js'></script>
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/framework/js/magnific/jquery.magnific-popup.min.js?ver=5.9.3' id='minim-popup-js-js'></script>
      
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/framework/js/pace.min.js?ver=5.9.3' id='pace-js'></script>
      <script type='text/javascript' id='minim-jqcustom-js-extra'>
         /* <![CDATA[ */
         var dttheme_urls = {"theme_base_url":"<?php echo home_url(); ?>/wp-content\/themes\/sparc_theme","framework_base_url":"<?php echo home_url(); ?>/wp-content\/themes\/sparc_theme\/framework\/","ajaxurl":"<?php echo home_url(); ?>/wp-admin\/admin-ajax.php","url":"<?php echo home_url(); ?>","stickynav":"enable","stickyele":".main-header-wrapper","isRTL":"","loadingbar":"enable","advOptions":"Show Advanced Options"};
         /* ]]> */
      </script>
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/framework/js/custom.js?ver=5.9.3' id='minim-jqcustom-js'></script>
      
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/plugins/enable-jquery-migrate-helper/js/deprecation-notice.js?ver=5.9.3' id='jquery-migrate-deprecation-notices-js'></script>
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=6.5.0' id='wpb_composer_front_js-js'></script>
      <script type='text/javascript' src='<?php echo home_url(); ?>/wp-content/themes/sparc_theme/plugins/js_composer/assets/lib/vc_waypoints/vc-waypoints.min.js?ver=6.5.0' id='vc_waypoints-js'></script>
         <script>
            jQuery(document).ready(function($){
               function toggle_menus(divname){
                  $('#main-menu .menu-item').removeClass('current-menu-item');
                  $('#main-menu .menu-item').removeClass('current_page_item');
                  $('.'+divname).addClass('current-menu-item');
                  $('.'+divname).addClass('current_page_item');
               }
               if($('#about_page').length > 0){
                  new toggle_menus('about_menu_item');
               }
               if($('#products_page').length > 0){
                  new toggle_menus('products_menu_item');
               }
               if($('#applications_page').length > 0){
                  new toggle_menus('applications_menu_item');
               }
               if($('#technology_page').length > 0){
                  new toggle_menus('technology_menu_item');
               }
               if($('#contact_page').length > 0){
                  new toggle_menus('contact_menu_item');
               }
            });

         </script>

	</body>
</html>
