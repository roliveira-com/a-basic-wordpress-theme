<?php
$crafter_enable_section = get_theme_mod( 'crafter_clients_enable', true );
if ( $crafter_enable_section || is_customize_preview() ) :

//$clients_image = wp_get_attachment_image_src( absint( get_theme_mod( 'crafter_clients_image' ) ), 'full' );
//$clients_image = $clients_image[0];
//if ( empty( $clients_image ) ) {
//    $clients_image = get_template_directory_uri() . '/images/clients.jpg';
//}
?>
<div id="clients-section" class="clients-section bg-dark-pattern" <?php if( false == $crafter_enable_section ): echo 'style="display: none;"'; endif ?>>
    <h2 class="section-title wow fadeIn"><?php echo esc_html( get_theme_mod( 'crafter_clients_title', __( 'People Who Trust Us', 'crafter' ) ) ); ?></h2>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <a class="enroll-btn" href="#">Inscreva-se por aqui</a>

</div><!-- clients-section -->
<?php endif ?>
