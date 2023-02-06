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
    'post_type' => 'configurations'
);
$configurations = get_posts($args);
$configuration = '';
foreach ($configurations as $c) {
    $configuration = $c;
}
?>
<div data-vc-full-width="true" data-vc-full-width-init="false"
     class="vc_row wpb_row vc_row-fluid vc_custom_1497264659732 vc_row-has-fill" id="technology_section"
     style="padding-top: 0 !important">
    <div class="aligncenter wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInDown"
                     data-animation-delay="0.5" data-animation-duration="1" data-animation-iteration="1"
                     style="opacity:0;" data-opacity_start_effect="">
                    <!-- <h5 class="alignleft">echo get_field('first_text_section_subtitle', $configuration->ID);</h5> -->
                    <h5 class="aligncenter"></h5>
                    <div class="ult-spacer spacer-63128aea7c65b" data-id="63128aea7c65b" data-height="20"
                         data-height-mobile="20" data-height-tab="20" data-height-tab-portrait=""
                         data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                    <h2 class="aligncenter">About <img style="display: inline;height: 30px;position: relative;top: 6px;"
                                                       src="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('custom_logo'))); ?>"
                                                       alt="Logo" title="Logo"></h2>
                    <div class="ult-spacer spacer-63128aea7c66f" data-id="63128aea7c66f" data-height="30"
                         data-height-mobile="30" data-height-tab="30" data-height-tab-portrait=""
                         data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                </div>
                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <figure class="wpb_wrapper vc_figure">
                                    <?php $first_text_section_image_url = !empty(get_field('first_text_section_image', $configuration)) ? get_field('first_text_section_image', $configuration)["url"] : '' ?>
                                    <?php if (!empty($first_text_section_image_url)): ?>
                                        <div class="vc_single_image-wrapper   vc_box_border_grey">
                                            <img width="1170" height="500" src="<?php echo $first_text_section_image_url; ?>" class="vc_single_image-img attachment-full" alt="" loading="lazy" srcset="<?php echo $first_text_section_image_url; ?> 1170w, <?php echo $first_text_section_image_url; ?> 300w, <?php echo $first_text_section_image_url; ?> 768w, <?php echo $first_text_section_image_url; ?> 1024w" sizes="(max-width: 1170px) 100vw, 1170px">
                                        </div>
                                    <?php endif; ?>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-8">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeIn"
                                     data-animation-delay="0.8" data-animation-duration="1" data-animation-iteration="1"
                                     style="opacity:0;" data-opacity_start_effect="">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p style="text-align: left;"><?php echo get_field('first_text_section_content', $configuration->ID); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ult-spacer spacer-63128aea7ca64" data-id="63128aea7ca64" data-height="40"
                     data-height-mobile="40" data-height-tab="40" data-height-tab-portrait=""
                     data-height-mobile-landscape="" style="clear:both;display:block;"></div>
            </div>
        </div>
    </div>
</div>