<?php
$crafter_enable_section = get_theme_mod( 'crafter_welcome_enable', true );
if ( $crafter_enable_section || is_customize_preview() ) :
?>
<?php
$welcome_image = wp_get_attachment_image_src( absint( get_theme_mod( 'crafter_welcome_image' ) ), 'full' );
$welcome_image = $welcome_image[0];
if ( empty( $welcome_image ) ) {
    $welcome_image = get_template_directory_uri() . '/images/slider1.jpg';
}
?>
<!-- <div id="welcome-section" class="welcome-section" <?php //if( false == $crafter_enable_section ): echo 'style="display: none;"'; else: echo 'style="background-image: url(' . esc_url( $welcome_image ) . ')"'; endif ?>> -->
<div id="welcome-section" class="welcome-section" <?php if( false == $crafter_enable_section ): echo 'style="display: none;"'; else: echo 'style="background-size: cover;"'; endif ?>>

  <div class="blog-wrap js-flickity" data-flickity-options='{ "contain": false, "prevNextButtons": true, "pageDots": false, "autoPlay" : "2000" }'>
    <img class="carousel-cell" src="/wp-content/uploads/2017/01/triggers-home-full-bg.png" alt="">
    <img class="carousel-cell" src="/wp-content/uploads/2017/01/cake.jpg" alt="">
  </div>
  

</div><!-- welcome-section -->

<?php endif ?>