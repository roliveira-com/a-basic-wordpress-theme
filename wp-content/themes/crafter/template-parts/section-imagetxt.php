<?php
$crafter_enable_section = get_theme_mod( 'crafter_imagetxt_enable', true );
if ( $crafter_enable_section || is_customize_preview() ) :
?>
<div id="video-section" class="video-section padding-top-medium bg-green" <?php if( false == $crafter_enable_section ): echo 'style="display: none;"'; endif ?>>
    <?php
      $bullet_points_image = wp_get_attachment_image_src( absint( get_theme_mod( 'crafter_image_image' ) ), 'full' );
      $bullet_points_image = $bullet_points_image[0];
      if ( empty( $bullet_points_image ) ) {
          $bullet_points_image = get_template_directory_uri() . '/images/bullet-points.jpeg';
      }
    ?>
    <div class="bullet-points-image wow fadeInRight" data-wow-delay="300ms">
        <img src="/wp-content/uploads/2017/02/appTelas.png" alt="" />
    </div>

    <div class="video-text-wrap wow fadeInRight" data-wow-delay="300ms">
    	<?php /* translators: Lorem ipsum text, It is not strictly necessary to translate. */ ?>
        <h3 class="video-text-title"><?php  echo esc_html( get_theme_mod( 'crafter_txt_title' ) ); ?></h3>
        <?php
        $wp_kses_args = array(
		    'a' => array(
		        'href' => array(),
		        'title' => array()
		    ),
		    'br' => array(),
		    'em' => array(),
		    'strong' => array(),
		    'span' => array(),
		);
		/* translators: Lorem ipsum text, It is not strictly necessary to translate. */
		$video_text = wp_kses( get_theme_mod( 'crafter_txt_text' ), $wp_kses_args );
        ?>
        <p><?php echo $video_text; ?></p>
        <?php $crafter_video_link_title = get_theme_mod( 'crafter_txt_link_title', esc_html__( 'Learn More', 'crafter' ) ); ?>
        <?php if ( !empty( $crafter_video_link_title ) || is_customize_preview() ) { ?>
        <a href="<?php echo esc_url( get_theme_mod( 'crafter_txt_link_url', '#' ) ); ?>" class="btn-ql-round"><?php echo esc_html( $crafter_video_link_title ); ?></a>
        <?php } ?>

    </div>
</div><!-- video-section -->
<?php endif ?>
