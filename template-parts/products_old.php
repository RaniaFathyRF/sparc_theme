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
 <div class="vc_row wpb_row vc_inner vc_row-fluid" id="products_section">
    <div class="wpb_column vc_column_container vc_col-sm-2">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper"></div>
        </div>
    </div>
    <div class="wpb_column vc_column_container vc_col-sm-8">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
            <!-- <div class="ult-animation  ult-no-mobile " data-animate="fadeInDown" data-animation-delay="0.5" data-animation-duration="1" data-animation-iteration="1" style="opacity:0;" data-opacity_start_effect=""> -->
            <div class="ult-animation  ult-no-mobile">
                <div class="wpb_text_column wpb_content_element ">
                    <div class="wpb_wrapper">
                        <h1 style="text-align: center;"><?php echo get_field('first_card_section_title', $configuration->ID); ?></h1>
                        <p style="text-align: center;"><?php echo get_field('first_card_section_description', $configuration->ID); ?></p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="wpb_column vc_column_container vc_col-sm-2">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper"></div>
        </div>
    </div>
</div>
<div class="vc_row wpb_row vc_row-fluid vc_custom_1497519268098">
    <?php 
    $args = array(
        'numberposts' => 3,
        'post_type'   => 'products'
      );
    $products = get_posts( $args );
    $count = 0;
    foreach ( $products as $product ) {
        $count += 1;
        ?>
        <div id="ex<?php echo $count; ?>" class="modal">
            <h3><?php echo $product->post_title; ?></h3>
            <p><?php echo $product->post_content; ?></p>
        </div>
            <div class="wpb_column vc_column_container vc_col-sm-4">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                    <div> <!--  class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInUp" data-animation-delay="0.5" data-animation-duration="1" data-animation-iteration="1" style="opacity:0;" data-opacity_start_effect=""-->
                        <div class='dt-sc-image-caption type3 '>
                            <div class='dt-sc-image-wrapper'>
                                <a href="<?php echo get_post_permalink($product->ID) ?>">
                                    <img width="960" height="700" src="<?php echo get_the_post_thumbnail_url($product->ID); ?>" class="attachment-full" alt="" loading="lazy" srcset="<?php echo get_the_post_thumbnail_url($product->ID); ?> 960w, <?php echo get_the_post_thumbnail_url($product->ID); ?> 300w, <?php echo get_the_post_thumbnail_url($product->ID); ?> 768w" sizes="(max-width: 960px) 100vw, 960px">
                                </a>
                            </div>
                            <div class='dt-sc-image-content'>
                                <div class='dt-sc-image-title'>
                                    <h3><?php echo $product->post_title; ?></h3>
                                    <h6><?php echo $count; ?></h6>
                                </div>
                                <p><?php echo get_field('short_desc', $product->ID) ?></p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        <?php
    }
    ?>
    <div class="readmore-button">
        <p><a href="<?php echo home_url('products'); ?>">Learn more</a></p>
    </div>
</div>