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

<div class="container padding-t-50 padding-b-50">
	<article <?php post_class(); ?>>
      <h3>Privacy Notice</h3>
      <?php echo get_field('privacy_notice', $configuration->ID); ?>
	</article><!-- .post -->
</div>
