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
	'meta_value'	=> 'home'
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
						$index = 0;
						foreach($sliders as $c){
							$index ++;
						?>
							<rs-slide data-key="rs-<?php echo $index; ?>" data-title="Slide" data-thumb="<?php echo get_the_post_thumbnail_url($c->ID); ?>" data-anim="ei:d;eo:d;s:d;t:slidingoverlayhorizontal;sl:d;">
								<img src="<?php echo get_the_post_thumbnail_url($c->ID); ?>" title="Home" class="rev-slidebg" data-no-retina="">
								<!--
									-->
								<rs-layer id="slider-4-slide-<?php echo $index; ?>-layer-<?php echo $index; ?>" class="tp-shape tp-shapewrapper" data-type="shape" data-xy="x:c;y:m;" data-text="fw:700;" data-dim="w:100%;h:100%;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="tp:600;" data-frame_1="tp:600;e:power4.out;st:0;sp:500;" data-frame_999="o:0;tp:600;e:power4.inOut;st:500;sp:5000;" style="z-index:5;background-color:rgba(0,0,0,0.5);"> 
								</rs-layer>
								<!--
									-->
								<rs-layer id="slider-4-slide-<?php echo $index; ?>-layer-1" data-type="text" data-color="rgba(255, 255, 255, 1)" data-rsp_ch="on" data-xy="x:c;y:m;yo:-80px,-80px,-130px,-157px;" data-text="s:130,130,100,80;l:130,130,100,80;fw:700;a:center;" data-frame_0="y:50px;tp:600;" data-frame_1="tp:600;e:power4.out;st:500;sp:2500;sR:500;" data-frame_999="o:0;tp:600;e:nothing;st:w;sR:6000;" style="z-index:6;font-family:Arial, Helvetica, sans-serif;letter-spacing:-7px;" class="slider_image_custom">
								<img src="<?php echo get_field('logo', $c)["url"]; ?>" alt="Logo" title="Logo">
								</rs-layer>
								<!--
									-->
								<!-- <rs-layer id="slider-4-slide-7-layer-3" class="tp-shape tp-shapewrapper" data-type="shape" data-rsp_ch="on" data-xy="x:c;y:m;yo:16px,16px,-54px,-89px;" data-dim="w:60px;h:3px;" data-frame_0="y:50px;tp:600;" data-frame_1="tp:600;e:power4.out;st:500;sp:2500;sR:500;" data-frame_999="o:0;tp:600;e:nothing;st:w;sR:6000;" style="z-index:7;background-color:rgba(38,211,105,1);"> 
								</rs-layer> -->
								<!--
									-->
								<rs-layer id="slider-4-slide-<?php echo $index; ?>-layer-2" data-type="text" data-color="rgba(255, 255, 255, 1)" data-rsp_ch="on" data-xy="x:c;xo:-10px;y:m;yo:65px,65px,-8px,-32px;" data-text="w:nowrap,nowrap,normal,normal;s:40,40,30,30;l:40;a:center;" data-dim="w:640px,640px,480,360px;" data-frame_0="y:50px;tp:600;" data-frame_1="tp:600;e:power4.out;st:500;sp:2500;sR:500;" data-frame_999="o:0;tp:600;e:nothing;st:w;sR:6000;" style="z-index:8;font-family:Georgia, serif;font-style:italic;" class="slider_text_custom"><?php echo $c->post_content; ?>
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

<div id="main">
               <!-- ** Container ** -->
               <div class="container">
                  <section id="primary" class="content-full-width">
                     <!-- #post-4 -->
                     <div id="post-4" class="post-4 page type-page status-publish hentry">
                        <?php get_template_part('template-parts/products'); ?>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <?php get_template_part('template-parts/applications'); ?>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <?php get_template_part('template-parts/technology-index'); ?>
                        <div class="vc_row-full-width vc_clearfix"></div>
<!--						<div class="row">-->
<!--              <div class="col-xl-3 box-col-6 pe-0">-->
<!--                <div class="file-sidebar">-->
<!--                  <div class="card">-->
<!--                    <div class="card-body">-->
<!--                      <ul>-->
<!--                        <li>    -->
<!--                          <div class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>Home </div>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                          <div class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>All    </div>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                          <div class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>Recent    </div>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                          <div class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>Starred      </div>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                          <div class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>Recovery        </div>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                          <div class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>Deleted </div>-->
<!--                        </li>-->
<!--                      </ul>-->
<!--                      <hr>-->
<!--                      <ul>-->
<!--                        <li>-->
<!--                          <div class="btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>Storage   </div>-->
<!--                          <div class="m-t-15">-->
<!--                            <div class="progress sm-progress-bar mb-1">-->
<!--                              <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>-->
<!--                            </div>-->
<!--                            <p>25 GB of 100 GB used</p>-->
<!--                          </div>-->
<!--                        </li>-->
<!--                      </ul>-->
<!--                      <hr>-->
<!--                      <ul>-->
<!--                        <li>-->
<!--                          <div class="btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>Pricing plan</div>-->
<!--                        </li>-->
<!--                        <li> -->
<!--                          <div class="pricing-plan">-->
<!--                            <h6>Trial Version </h6>-->
<!--                            <h5>FREE</h5>-->
<!--                            <p> 100 GB Space</p>-->
<!--                            <div class="btn btn-outline-primary btn-xs">Selected</div><img class="bg-img" src="../assets/images/dashboard/folder.png" alt="">-->
<!--                          </div>-->
<!--                        </li>-->
<!--                        <li> -->
<!--                          <div class="pricing-plan">-->
<!--                            <h6>Premium</h6>-->
<!--                            <h5>$5/month</h5>-->
<!--                            <p> 200 GB Space</p>-->
<!--                            <div class="btn btn-outline-primary btn-xs">Contact Us</div><img class="bg-img" src="../assets/images/dashboard/folder1.png" alt="">-->
<!--                          </div>-->
<!--                        </li>-->
<!--                      </ul>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--              <div class="col-xl-9 col-md-12 box-col-12">-->
<!--                <div class="file-content">-->
<!--                  <div class="card">-->
<!--                    <div class="card-header">-->
<!--                      <div class="media">-->
<!--                        <form class="form-inline" action="#" method="get">-->
<!--                          <div class="form-group mb-0">                                      <i class="fa fa-search"></i>-->
<!--                            <input class="form-control-plaintext" type="text" placeholder="Search..." data-bs-original-title="" title="">-->
<!--                          </div>-->
<!--                        </form>-->
<!--                        <div class="media-body text-end">-->
<!--                          <form class="d-inline-flex" action="#" method="POST" enctype="multipart/form-data" name="myForm">-->
<!--                            <div class="btn btn-primary" onclick="getFile()"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-square"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>Add New</div>-->
<!--                            <div style="height: 0px;width: 0px; overflow:hidden;">-->
<!--                              <input id="upfile" type="file" onchange="sub(this)" data-bs-original-title="" title="">-->
<!--                            </div>-->
<!--                          </form>-->
<!--                          <div class="btn btn-outline-primary ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>Upload  </div>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                    <div class="card-body file-manager">-->
<!--                      <h4 class="mb-3">All Files</h4>-->
<!--                      <h6>Recently opened files</h6>-->
<!--                      <ul class="files">-->
<!--                        <li class="file-box">-->
<!--                          <div class="file-top">  <i class="fa fa-file-image-o txt-primary"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>-->
<!--                          <div class="file-bottom">-->
<!--                            <h6>Logo.psd </h6>-->
<!--                            <p class="mb-1">2.0 MB</p>-->
<!--                            <p> <b>last open : </b>1 hour ago</p>-->
<!--                          </div>-->
<!--                        </li>-->
<!--                        <li class="file-box">-->
<!--                          <div class="file-top">  <i class="fa fa-file-archive-o txt-secondary"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>-->
<!--                          <div class="file-bottom">-->
<!--                            <h6>Project.zip </h6>-->
<!--                            <p class="mb-1">1.90 GB</p>-->
<!--                            <p> <b>last open : </b>1 hour ago</p>-->
<!--                          </div>-->
<!--                        </li>-->
<!--                        <li class="file-box">-->
<!--                          <div class="file-top">  <i class="fa fa-file-excel-o txt-success"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>-->
<!--                          <div class="file-bottom">-->
<!--                            <h6>Backend.xls</h6>-->
<!--                            <p class="mb-1">2.00 GB</p>-->
<!--                            <p> <b>last open : </b>1 hour ago</p>-->
<!--                          </div>-->
<!--                        </li>-->
<!--                        <li class="file-box">-->
<!--                          <div class="file-top">  <i class="fa fa-file-text-o txt-info"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>-->
<!--                          <div class="file-bottom">-->
<!--                            <h6>requirements.txt </h6>-->
<!--                            <p class="mb-1">0.90 KB</p>-->
<!--                            <p> <b>last open : </b>1 hour ago</p>-->
<!--                          </div>-->
<!--                        </li>-->
<!--                      </ul>-->
<!--                      <h6 class="mt-4">Folders</h6>-->
<!--                      <ul class="folder">-->
<!--                        <li class="folder-box">-->
<!--                          <div class="media"><i class="fa fa-file-archive-o f-36 txt-warning"></i>-->
<!--                            <div class="media-body ms-3">-->
<!--                              <h6 class="mb-0">Endless admin</h6>-->
<!--                              <p>204 files, 50mb</p>-->
<!--                            </div>-->
<!--                          </div>-->
<!--                        </li>-->
<!--                        <li class="folder-box">-->
<!--                          <div class="media"><i class="fa fa-folder f-36 txt-warning"></i>-->
<!--                            <div class="media-body ms-3">-->
<!--                              <h6 class="mb-0">Endless admin</h6>-->
<!--                              <p>101 files, 10mb</p>-->
<!--                            </div>-->
<!--                          </div>-->
<!--                        </li>-->
<!--                        <li class="folder-box">-->
<!--                          <div class="media"><i class="fa fa-file-archive-o f-36 txt-warning"></i>-->
<!--                            <div class="media-body ms-3">-->
<!--                              <h6 class="mb-0">Endless admin</h6>-->
<!--                              <p>25 files, 2mb</p>-->
<!--                            </div>-->
<!--                          </div>-->
<!--                        </li>-->
<!--                        <li class="folder-box">-->
<!--                          <div class="media"><i class="fa fa-folder f-36 txt-warning"></i>-->
<!--                            <div class="media-body ms-3">-->
<!--                              <h6 class="mb-0">Endless admin</h6>-->
<!--                              <p>108 files, 5mb</p>-->
<!--                            </div>-->
<!--                          </div>-->
<!--                        </li>-->
<!--                      </ul>-->
<!--                      <h6 class="mt-4">Files</h6>-->
<!--                      <ul class="files">-->
<!--                        <li class="file-box">-->
<!--                          <div class="file-top">  <i class="fa fa-file-archive-o txt-secondary"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>-->
<!--                          <div class="file-bottom">-->
<!--                            <h6>Project.zip </h6>-->
<!--                            <p class="mb-1">1.90 GB</p>-->
<!--                            <p> <b>last open : </b>1 hour ago</p>-->
<!--                          </div>-->
<!--                        </li>-->
<!--                        <li class="file-box">-->
<!--                          <div class="file-top">  <i class="fa fa-file-excel-o txt-success"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>-->
<!--                          <div class="file-bottom">-->
<!--                            <h6>Backend.xls</h6>-->
<!--                            <p class="mb-1">2.00 GB</p>-->
<!--                            <p> <b>last open : </b>1 hour ago</p>-->
<!--                          </div>-->
<!--                        </li>-->
<!--                        <li class="file-box">-->
<!--                          <div class="file-top">  <i class="fa fa-file-text-o txt-info"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>-->
<!--                          <div class="file-bottom">-->
<!--                            <h6>requirements.txt </h6>-->
<!--                            <p class="mb-1">0.90 KB</p>-->
<!--                            <p> <b>last open : </b>1 hour ago</p>-->
<!--                          </div>-->
<!--                        </li>-->
<!--                        <li class="file-box">-->
<!--                          <div class="file-top">  <i class="fa fa-file-text-o txt-primary"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>-->
<!--                          <div class="file-bottom">-->
<!--                            <h6>Logo.psd </h6>-->
<!--                            <p class="mb-1">2.0 MB</p>-->
<!--                            <p> <b>last open : </b>1 hour ago</p>-->
<!--                          </div>-->
<!--                        </li>-->
<!--                      </ul>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
                     </div>
                     <!-- #post-4 -->
                  </section>
                  <!-- **Primary - End** -->        
               </div>
               <!-- **Container - End** -->
            </div>
<main id="site-content" style="display: none">

	<?php

	$archive_title    = '';
	$archive_subtitle = '';

	if ( is_search() ) {
		global $wp_query;

		$archive_title = sprintf(
			'%1$s %2$s',
			'<span class="color-accent">' . __( 'Search:', 'twentytwenty' ) . '</span>',
			'&ldquo;' . get_search_query() . '&rdquo;'
		);

		if ( $wp_query->found_posts ) {
			$archive_subtitle = sprintf(
				/* translators: %s: Number of search results. */
				_n(
					'We found %s result for your search.',
					'We found %s results for your search.',
					$wp_query->found_posts,
					'twentytwenty'
				),
				number_format_i18n( $wp_query->found_posts )
			);
		} else {
			$archive_subtitle = __( 'We could not find any results for your search. You can give it another try through the search form below.', 'twentytwenty' );
		}
	} elseif ( is_archive() && ! have_posts() ) {
		$archive_title = __( 'Nothing Found', 'twentytwenty' );
	} elseif ( ! is_home() ) {
		$archive_title    = get_the_archive_title();
		$archive_subtitle = get_the_archive_description();
	}

	if ( $archive_title || $archive_subtitle ) {
		?>

		<header class="archive-header has-text-align-center header-footer-group">

			<div class="archive-header-inner section-inner medium">

				<?php if ( $archive_title ) { ?>
					<h1 class="archive-title"><?php echo wp_kses_post( $archive_title ); ?></h1>
				<?php } ?>

				<?php if ( $archive_subtitle ) { ?>
					<div class="archive-subtitle section-inner thin max-percentage intro-text"><?php echo wp_kses_post( wpautop( $archive_subtitle ) ); ?></div>
				<?php } ?>

			</div><!-- .archive-header-inner -->

		</header><!-- .archive-header -->

		<?php
	}

	if ( have_posts() ) {

		$i = 0;

		while ( have_posts() ) {
			$i++;
			if ( $i > 1 ) {
				echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true" />';
			}
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		}
	} elseif ( is_search() ) {
		?>

		<div class="no-search-results-form section-inner thin">

			<?php
			get_search_form(
				array(
					'aria_label' => __( 'search again', 'twentytwenty' ),
				)
			);
			?>

		</div><!-- .no-search-results -->

		<?php
	}
	?>

	<?php get_template_part( 'template-parts/pagination' ); ?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
