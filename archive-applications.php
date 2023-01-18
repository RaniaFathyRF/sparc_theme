<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();

$args = array(
	'numberposts' => 10,
	'post_type'   => 'homesliders',
	'meta_key'		=> 'page',
	'meta_value'	=> 'applications'
	);
	$sliders = get_posts( $args );
	if(count($sliders) > 0){
		?>
		<!-- **Main Header** -->

		<div id="slider">
			<div class="dt-sc-main-slider" id="dt-sc-rev-slider">
			<!-- START Typewriter Effect REVOLUTION SLIDER 6.3.4 -->
			<p class="rs-p-wp-fix"></p>
			<rs-module-wrap id="rev_slider_4_1_wrapper" data-source="gallery" style="background:transparent;padding:0;">
				<rs-module id="rev_slider_4_1" style="" data-version="6.3.4">
					<rs-slides>
					<?php 
						$homeslider = '';
						foreach($sliders as $c){
						?>
							<rs-slide data-key="rs-7" data-title="Slide" data-thumb="<?php echo get_the_post_thumbnail_url($c->ID); ?>" data-anim="ei:d;eo:d;s:d;t:slidingoverlayhorizontal;sl:d;">
								<img src="<?php echo get_the_post_thumbnail_url($c->ID); ?>" title="Home" class="rev-slidebg" data-no-retina="">
								<!--
									-->
								<rs-layer id="slider-4-slide-7-layer-7" class="tp-shape tp-shapewrapper" data-type="shape" data-xy="x:c;y:m;" data-text="fw:700;" data-dim="w:100%;h:100%;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="tp:600;" data-frame_1="tp:600;e:power4.out;st:0;sp:500;" data-frame_999="o:0;tp:600;e:power4.inOut;st:500;sp:5000;" style="z-index:5;background-color:rgba(0,0,0,0.5);"> 
								</rs-layer>
								<!--
									-->
								<rs-layer id="slider-4-slide-7-layer-1" data-type="text" data-color="rgba(255, 255, 255, 1)" data-rsp_ch="on" data-xy="x:c;y:m;yo:-80px,-80px,-130px,-157px;" data-text="s:130,130,100,80;l:130,130,100,80;fw:700;a:center;" data-frame_0="y:50px;tp:600;" data-frame_1="tp:600;e:power4.out;st:500;sp:2500;sR:500;" data-frame_999="o:0;tp:600;e:nothing;st:w;sR:6000;" style="z-index:6;font-family:Arial, Helvetica, sans-serif;letter-spacing:-7px;"><?php echo $c->post_title; ?>
								</rs-layer>
								<!--
									-->
								<!-- <rs-layer id="slider-4-slide-7-layer-3" class="tp-shape tp-shapewrapper" data-type="shape" data-rsp_ch="on" data-xy="x:c;y:m;yo:16px,16px,-54px,-89px;" data-dim="w:60px;h:3px;" data-frame_0="y:50px;tp:600;" data-frame_1="tp:600;e:power4.out;st:500;sp:2500;sR:500;" data-frame_999="o:0;tp:600;e:nothing;st:w;sR:6000;" style="z-index:7;background-color:rgba(38,211,105,1);"> 
								</rs-layer> -->
								<!--
									-->
								<rs-layer id="slider-4-slide-7-layer-2" data-type="text" data-color="rgba(255, 255, 255, 1)" data-rsp_ch="on" data-xy="x:c;xo:-10px;y:m;yo:65px,65px,-8px,-32px;" data-text="w:nowrap,nowrap,normal,normal;s:40,40,30,30;l:40;a:center;" data-dim="w:640px,640px,480,360px;" data-frame_0="y:50px;tp:600;" data-frame_1="tp:600;e:power4.out;st:500;sp:2500;sR:500;" data-frame_999="o:0;tp:600;e:nothing;st:w;sR:6000;" style="z-index:8;font-family:Georgia, serif;font-style:italic;"><?php echo $c->post_content; ?>
								</rs-layer>
								<!--
									-->
								<!-- <rs-layer id="slider-4-slide-7-layer-4" class="rev-btn" data-type="button" data-color="rgba(255, 255, 255, 1)" data-rsp_ch="on" data-xy="x:r,r,c,c;xo:660px,550px,0,0;y:m;yo:240px,240px,100px,83px;" data-text="s:15;l:46;fw:700;" data-actions='o:click;a:scrollbelow;sp:300;e:none;' data-padding="r:50;l:50;" data-border="bos:solid;boc:rgba(255, 255, 255, 0.25);bow:2px,2px,2px,2px;bor:4px,4px,4px,4px;" data-frame_0="x:-50px;tp:600;" data-frame_1="tp:600;e:power4.out;st:500;sp:2500;sR:500;" data-frame_999="o:0;tp:600;e:nothing;st:w;sR:6000;" data-frame_hover="c:#000;bgc:#fff;boc:transparent;bor:4px,4px,4px,4px;bos:solid;bow:2px,2px,2px,2px;oX:50;oY:50;sp:150;e:power2.inOut;" style="z-index:9;font-family:Arial, Helvetica, sans-serif;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;letter-spacing:5px;">ABOUT US 
								</rs-layer> -->
								<!--
									-->
								<!-- <rs-layer id="slider-4-slide-7-layer-6" data-type="text" data-color="rgba(255, 255, 255, 1)" data-rsp_ch="on" data-xy="x:c;y:m;yo:237px,237px,158px,141px;" data-text="s:25;" data-frame_0="y:50px;tp:600;" data-frame_1="tp:600;e:power4.out;st:500;sp:2500;sR:500;" data-frame_999="o:0;tp:600;e:nothing;st:w;sR:6000;" style="z-index:10;font-family:Georgia, serif;font-style:italic;">or 
								</rs-layer> -->
								<!--
									-->
								<!-- <rs-layer id="slider-4-slide-7-layer-5" class="rev-btn" data-type="button" data-color="rgba(255, 255, 255, 1)" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:660px,550px,0,0;y:m;yo:240px,240px,224px,207px;" data-text="s:15;l:46;fw:700;" data-actions='o:click;a:scrollbelow;sp:300;e:none;' data-padding="r:50;l:50;" data-border="bos:solid;boc:rgba(255, 255, 255, 0.25);bow:2px,2px,2px,2px;bor:4px,4px,4px,4px;" data-frame_0="x:50px;tp:600;" data-frame_1="tp:600;e:power4.out;st:500;sp:2500;sR:500;" data-frame_999="o:0;tp:600;e:nothing;st:w;sR:6000;" data-frame_hover="c:#000;bgc:#fff;boc:transparent;bor:4px,4px,4px,4px;bos:solid;bow:2px,2px,2px,2px;oX:50;oY:50;sp:150;e:power2.inOut;" style="z-index:11;font-family:Arial, Helvetica, sans-serif;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;letter-spacing:5px;">CONTACT 
								</rs-layer> -->
								<!--
									-->						
							</rs-slide>

						<?php
						}
					?>
					</rs-slides>
				</rs-module>
				<script type="text/javascript">
					setREVStartSize({c: 'rev_slider_4_1',rl:[1240,1024,778,480],el:[],gw:[1240,1024,778,480],gh:[868,768,960,600],type:'standard',justify:'',layout:'fullscreen',offsetContainer:'',offset:'60px',mh:"0"});
					var	revapi4,
					tpj;
					function revinit_revslider41() {
					jQuery(function() {
					tpj = jQuery;
					revapi4 = tpj("#rev_slider_4_1");
					if(revapi4==undefined || revapi4.revolution == undefined){
						revslider_showDoubleJqueryError("rev_slider_4_1");
					}else{
						revapi4.revolution({
							sliderLayout:"fullwidth",
							visibilityLevels:"1240,1024,778,480",
							gridwidth:"1240,1024,778,480",
							gridheight:"434,384,450,300",
							perspectiveType:"local",
							responsiveLevels:"1240,1024,778,480",
							fullScreenOffset:"60px",
							progressBar:{disableProgressBar:true},
							navigation: {
								mouseScrollNavigation:false,
								onHoverStop:false,
								touch: {
									touchenabled:true
								},
								arrows: {
									enable:true,
									style:"uranus",
									hide_onmobile:true,
									hide_under:768,
									left: {
					
									},
									right: {
					
									}
								}
							},
							fallbacks: {
								allowHTML5AutoPlayOnAndroid:true
							},
						});
					}
					
					});
					} // End of RevInitScript
					var once_revslider41 = false;
					if (document.readyState === "loading") {document.addEventListener('readystatechange',function() { if((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider41 ) { once_revslider41 = true; revinit_revslider41();}});} else {once_revslider41 = true; revinit_revslider41();}
				</script>
				<script>
					var htmlDivCss = unescape("%23rev_slider_4_1_wrapper%20.uranus.tparrows%20%7B%0A%20%20width%3A50px%3B%0A%20%20height%3A50px%3B%0A%20%20background%3Argba%28255%2C255%2C255%2C0%29%3B%0A%20%7D%0A%20%23rev_slider_4_1_wrapper%20.uranus.tparrows%3Abefore%20%7B%0A%20width%3A50px%3B%0A%20height%3A50px%3B%0A%20line-height%3A50px%3B%0A%20font-size%3A40px%3B%0A%20transition%3Aall%200.3s%3B%0A-webkit-transition%3Aall%200.3s%3B%0A%20%7D%0A%20%0A%20%20%23rev_slider_4_1_wrapper%20.uranus.tparrows%3Ahover%3Abefore%20%7B%0A%20%20%20%20opacity%3A0.75%3B%0A%20%20%7D%0A");
					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					if(htmlDiv) {
					htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					}else{
					var htmlDiv = document.createElement('div');
					htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
					document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					}
				</script>
				<script>
					var htmlDivCss = unescape("%0A%0A%0A");
					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					if(htmlDiv) {
					htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					}else{
					var htmlDiv = document.createElement('div');
					htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
					document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					}
				</script>
			</rs-module-wrap>
			<!-- END REVOLUTION SLIDER -->
			</div>
		</div>
		<?php
	}
?>

<div id="applications_page"></div>
<div id="main">
	<!-- ** Container ** -->
	<div class="container">
		<section id="primary" class="content-full-width">
			<!-- #post-4 -->
			<div id="post-4" class="post-4 page type-page status-publish hentry">
			<?php get_template_part('template-parts/all_applications'); ?>
			<div class="vc_row-full-width vc_clearfix"></div>
			</div>
			<!-- #post-4 -->
		</section>
		<!-- **Primary - End** -->        
	</div>
	<!-- **Container - End** -->
</div>
<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
