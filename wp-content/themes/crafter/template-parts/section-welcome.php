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
<div id="welcome-section" class="welcome-section bg-image" <?php if( false == $crafter_enable_section ): echo 'style="display: none;"'; else: echo 'style="background-size: cover;"'; endif ?>>

    <div class="welcome-intro">
        <?php $crafter_welcome_link_title = get_theme_mod( 'crafter_welcome_link_title', esc_html__( 'Learn More', 'crafter' ) ); ?>
        <p class="intro-text">Inscrições Encerradas <span> ;)</span>
    </div><!-- welcome-intro -->
    
    <div class="welcome-intro-inscrevase">
      <?php if ( ! empty( $crafter_welcome_link_title ) || is_customize_preview() ) { ?>
      <a href="<?php echo esc_url( get_theme_mod( 'crafter_welcome_link_url', '#' ) ); ?>" class="btn-dark"><?php echo esc_html( $crafter_welcome_link_title ); ?></a>  
      <?php } ?>
    </div>

    <div class="floating-welcome-logo">
      <img src="http://www.triggers.com.br/wp-content/uploads/2017/02/logo-triggers-site.png" />
    </div>


</div><!-- welcome-section -->

<div id="mobile-welcome-intro" class="mobile-welcome-intro bg-green visible-xs-inline-block">
    <div class="col-xs-12 text-center">
      <p class="mobile-welcome-intro-text">Inscrições encerradas ;)</p>
    </div>
</div><!-- mobile-welcome-intro -->

<div id="welcome-section-bottomline" class="welcome-section-bottomline bg-dark">
    <div class="col-md-12 text-center">
      <p class="welcome-bottomline">A Iniciativa Social recebe <span>R$ 20mil</span> e a Startup finalista recebe <span>R$ 50mil</span>.*</p>
    </div>
</div><!-- welcome-section-bottomline -->

<?php endif ?>
