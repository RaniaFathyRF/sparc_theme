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
    <article>
        <?php echo get_field('contact_us_form_code', $configuration->ID); ?>
    </article>
</div>
<div class=footer">
    <div class="footer-widgets" style="margin-bottom: 100px;">
        <div class="container">
            <div class='column dt-sc-one-third first'>
            <aside id="text-3" class="widget widget_text">
                <div class="textwidget" style="padding: 0 37px">
                    <p>Headquarters:</p>
                    <p>Landshut, Germany</p>
                    <p>Address:</p>
                    <p>Ludwig-Erhard-Strasse 6a</p>
                    <p>84034 Landshut</p>
                    <!-- <div class='dt-sc-contact-info  type1'><span class='pe-icon pe-paper-plane'> </span><?php echo get_field('contact_address', $configuration->ID); ?></div> -->
                </div>
            </aside>
            </div>
            <div class='column dt-sc-one-third '>
            <aside id="text-4" class="widget widget_text">
                <div class="textwidget" style="padding: 0 37px">
                    <p>For general inquiries:</p>
                    <p>info@s4sensors.com</p>
                    <p>+49 (0) 871 660 665-0</p>
                    <!-- <div class='dt-sc-contact-info  type1'><span class='pe-icon pe-phone'> </span><?php echo get_field('contact_phone', $configuration->ID); ?></div> -->
                </div>
            </aside>
            </div>
            <div class='column dt-sc-one-third '>
            <aside id="text-5" class="widget widget_text">
                <div class="textwidget" style="padding: 0 37px">
                    <p>For product inquiries:</p>
                    <p>sales@sensors.com</p>
                    <!-- <div class='dt-sc-contact-info  type1'><span class='pe-icon pe-mail-open'> </span><a href="mailto:<?php echo get_field('contact_email', $configuration->ID); ?>"><?php echo get_field('contact_email', $configuration->ID); ?></a></div> -->
                </div>
            </aside>
            </div>
        </div>
    </div>
</div>
