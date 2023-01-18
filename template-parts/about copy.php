<?php 
/**
 * A template partial to output pagination for the Twenty Twenty default theme.
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
<div class="vc_row wpb_row vc_row-fluid" id="about_section">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
            <div class="ult-spacer spacer-63128aea7fbed" data-id="63128aea7fbed" data-height="100" data-height-mobile="100" data-height-tab="100" data-height-tab-portrait="" data-height-mobile-landscape="" style="clear:both;display:block;"></div>
            </div>
        </div>
    </div>
</div>
<div class="vc_row wpb_row vc_row-fluid wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp vc_custom_1504854440568 vc_row-has-fill" style="background-image: url(<?php echo get_field('first_text_section_image', $configuration)["url"]; ?>) !important;">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-2">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper"></div>
                    </div>
                </div>
                <div class="aligncenter wpb_column vc_column_container vc_col-sm-8 vc_col-has-fill" style="background-attachment:fixed !important;">
                    <div class="vc_column-inner vc_custom_1497530425011">
                        <div class="wpb_wrapper">
                        <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="zoomInDown" data-animation-delay="1.0" data-animation-duration="1" data-animation-iteration="1" style="opacity:0;" data-opacity_start_effect="">
                            <h2 class="aligncenter"><?php echo get_field('first_text_section_title', $configuration->ID); ?></h2>
                            <div class="ult-spacer spacer-63128aea80295" data-id="63128aea80295" data-height="20" data-height-mobile="20" data-height-tab="20" data-height-tab-portrait="" data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                            <div class="wpb_text_column wpb_content_element  vc_custom_1497269579812">
                                <div class="wpb_wrapper">
                                    <p style="text-align: center;"><?php echo get_field('first_text_section_content', $configuration->ID); ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="bounceIn" data-animation-delay="1.3" data-animation-duration="1" data-animation-iteration="1" style="opacity:0;" data-opacity_start_effect=""><a href='/' target='_blank' title='' class='dt-sc-button   large icon-right with-icon  filled  line-scroll-btn black'> Contact Info <span class='fa fa-angle-right'> </span></a></div> -->
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-2">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper"></div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
            <div class="ult-spacer spacer-63128aea8072b" data-id="63128aea8072b" data-height="100" data-height-mobile="100" data-height-tab="100" data-height-tab-portrait="" data-height-mobile-landscape="" style="clear:both;display:block;"></div>
            </div>
        </div>
    </div>
</div>