<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<div class="container padding-t-50 padding-b-50">
    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <?php
        if (get_post_type(get_the_ID()) == 'product_category') {
            // Get Current Role
            $roles_table = $wpdb->prefix . "fm_roles";
            $current_role = wp_get_current_user()->roles[0];

            // Get Permissions allowed to current role
            $records = $wpdb->get_results($wpdb->prepare("SELECT * from $roles_table where role_id LIKE '%%s%'", $current_role));
            foreach ($records as $s) {
                $category_allowed = $s->category_ids;
            }
            $main_id = get_the_ID();
            get_template_part('template-parts/entry-header');
            ?>
            <div class="vc_row wpb_row vc_row-fluid">
                <h3><?php echo get_field('sub_title', $product->ID); ?></h3>

                <?php
                $args = array(
                    'post_type' => 'product_category'
                );
                $items = get_posts($args);
                $count = 0;
                foreach ($items as $product) {
                    $is_found = false;
                    foreach (get_field('parent_category', $product->ID) as $p) {
                        if ($p->ID == $main_id) {
                            $is_found = true;
                        }
                    }
                    if ($is_found === false) {
                        continue;
                    }
                    if (strpos(strtolower($category_allowed), strtolower($product->post_title)) === false) {
                        continue;
                    }
                    $count += 1;
                    ?>
                    <div id="ex<?php echo $count; ?>" class="modal">
                        <h3><?php echo $product->post_title; ?></h3>
                        <p><?php echo $product->post_content; ?></p>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div>
                                    <!--  class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInUp" data-animation-delay="0.5" data-animation-duration="1" data-animation-iteration="1" style="opacity:0;" data-opacity_start_effect=""-->
                                    <div class='dt-sc-image-caption type3 '>
                                        <div class='dt-sc-image-wrapper'>
                                            <a href="<?php echo get_post_permalink($product->ID) ?>">
                                                <img width="960" height="700"
                                                     src="<?php echo get_the_post_thumbnail_url($product->ID); ?>"
                                                     class="attachment-full" alt="" loading="lazy"
                                                     srcset="<?php echo get_the_post_thumbnail_url($product->ID); ?> 960w, <?php echo get_the_post_thumbnail_url($product->ID); ?> 300w, <?php echo get_the_post_thumbnail_url($product->ID); ?> 768w"
                                                     sizes="(max-width: 960px) 100vw, 960px">
                                            </a>
                                        </div>
                                        <div class='dt-sc-image-content'>
                                            <div class='dt-sc-image-title'>
                                                <h3><?php echo $product->post_title; ?><?php echo get_field('category', $product->ID); ?></h3>
                                                <h6><?php echo $count; ?></h6>
                                            </div>
                                            <p><?php echo get_field('short_desc', $product->ID); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <!--			<hr />-->
            <?php

            $args = array(
                'post_type' => 'products'
            );
            $items = get_posts($args);
            $count = 0;
            foreach ($items as $product) {
                if (get_field('parent_category', $product->ID)[0]->ID != $main_id) {
                    continue;
                }
                $count += 1;
                ?>
                <div id="ex<?php echo $count; ?>" class="modal">
                    <h3><?php echo $product->post_title; ?></h3>
                    <p><?php echo $product->post_content; ?></p>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-4">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div>
                                <!--  class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInUp" data-animation-delay="0.5" data-animation-duration="1" data-animation-iteration="1" style="opacity:0;" data-opacity_start_effect=""-->
                                <div class='dt-sc-image-caption type3 '>
                                    <div class='dt-sc-image-wrapper'>
                                        <a href="<?php echo get_post_permalink($product->ID) ?>">
                                            <img width="960" height="700"
                                                 src="<?php echo get_the_post_thumbnail_url($product->ID); ?>"
                                                 class="attachment-full" alt="" loading="lazy"
                                                 srcset="<?php echo get_the_post_thumbnail_url($product->ID); ?> 960w, <?php echo get_the_post_thumbnail_url($product->ID); ?> 300w, <?php echo get_the_post_thumbnail_url($product->ID); ?> 768w"
                                                 sizes="(max-width: 960px) 100vw, 960px">
                                        </a>
                                    </div>
                                    <div class='dt-sc-image-content'>
                                        <div class='dt-sc-image-title'>
                                            <h3><?php echo $product->post_title; ?><?php echo get_field('category', $product->ID); ?></h3>
                                            <h6><?php echo $count; ?></h6>
                                        </div>
                                        <p><?php echo get_field('short_desc', $product->ID); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            get_template_part('template-parts/entry-header');
            ?>
            <h3><?php echo get_field('sub_title', $product->ID); ?></h3>

            <?php
            if (get_field('use_featured_image', $product->ID)) {
                echo '<div class="featured_image">';
                get_template_part('template-parts/featured-image');
                echo '</div>';
            }
            ?>
            <?php

            // if ( ! is_search() ) {
            // 	get_template_part( 'template-parts/featured-image' );
            // }

            ?>

            <div class="post-inner <?php echo is_page_template('templates/template-full-width.php') ? '' : 'thin'; ?> ">

                <div class="entry-content">

                    <?php
                    if (is_search() || !is_singular() && 'summary' === get_theme_mod('blog_content', 'full')) {
                        the_excerpt();
                    } else {
                        the_content(__('Continue reading', 'twentytwenty'));
                    }
                    ?>

                </div><!-- .entry-content -->

            </div><!-- .post-inner -->
            <div class="vc_row-full-width vc_clearfix">
                <div class="vc_col-md-5">
                    <div class="vc_single_image-wrapper vc_box_border_grey"><img width="100%"
                                                                                 src="<?php echo get_field('single_image', $product->ID)["url"]; ?>"
                                                                                 class="vc_single_image-img attachment-full"
                                                                                 alt="" loading="lazy"
                                                                                 srcset="<?php echo get_field('single_image', $product->ID)["url"]; ?> 1170w, <?php echo get_field('single_image', $product->ID)["url"]; ?> 300w, <?php echo get_field('single_image', $product->ID)["url"]; ?> 768w, <?php echo get_field('single_image', $product->ID)["url"]; ?> 1024w"
                                                                                 sizes="(max-width: 1170px) 100vw, 1170px">
                    </div>
                </div>
                <div class="vc_col-md-7">
                    <?php
                    if (get_field('pdf_file', $product->ID)) {
                        ?>

                        <div class="pdf_buttons" style="margin-top: 30%;">
                            <a href="<?php echo get_field('pdf_file', $product->ID)['url']; ?>" target="_blank">Learn
                                more</a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <?php
        }
        ?>


        <div class="section-inner">
            <?php
            // wp_link_pages(
            // 	array(
            // 		'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'twentytwenty' ) . '"><span class="label">' . __( 'Pages:', 'twentytwenty' ) . '</span>',
            // 		'after'       => '</nav>',
            // 		'link_before' => '<span class="page-number">',
            // 		'link_after'  => '</span>',
            // 	)
            // );

            // edit_post_link();

            // Single bottom post meta.
            // twentytwenty_the_post_meta( get_the_ID(), 'single-bottom' );

            // if ( post_type_supports( get_post_type( get_the_ID() ), 'author' ) && is_single() ) {

            // 	get_template_part( 'template-parts/entry-author-bio' );

            // }
            ?>

        </div><!-- .section-inner -->

        <?php

        // if ( is_single() ) {

        // 	get_template_part( 'template-parts/navigation' );

        // }

        /*
        * Output comments wrapper if it's a post, or if comments are open,
        * or if there's a comment number – and check for password.
        */
        if ((is_single() || is_page()) && (comments_open() || get_comments_number()) && !post_password_required()) {
            ?>

            <div class="comments-wrapper section-inner">

                <?php comments_template(); ?>

            </div><!-- .comments-wrapper -->

            <?php
        }
        ?>

    </article><!-- .post -->
</div>