<?php
$crafter_enable_section = get_theme_mod( 'crafter_textimg_enable', true );
if ( $crafter_enable_section || is_customize_preview() ) :
?>
<div id="video-section" class="video-section" <?php if( false == $crafter_enable_section ): echo 'style="display: none;"'; endif ?>>
    <?php
      $bullet_in_points_image = wp_get_attachment_image_src( absint( get_theme_mod( 'crafter_in_image_image' ) ), 'full' );
      $bullet_in_points_image = $bullet_in_points_image[0];
      if ( empty( $bullet_in_points_image ) ) {
          $bullet_in_points_image = get_template_directory_uri() . '/images/bullet-points.jpeg';
      }
    ?>
    <div class="video-text-wrap wow fadeInRight" data-wow-delay="300ms">
      <?php /* translators: Lorem ipsum text, It is not strictly necessary to translate. */ ?>
        <h3 class="video-text-title"><?php  echo esc_html( get_theme_mod( 'crafter_in_txt_title' ) ); ?></h3>
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
    $video_in_text = wp_kses( get_theme_mod( 'crafter_in_txt_text' ), $wp_kses_args );
        ?>
        <p><?php echo $video_in_text; ?></p>
        <?php $crafter_in_video_link_title = get_theme_mod( 'crafter_in_txt_link_title', esc_html__( 'Learn More', 'crafter' ) ); ?>
        <?php if ( !empty( $crafter_in_video_link_title ) || is_customize_preview() ) { ?>
        <a href="<?php echo esc_url( get_theme_mod( 'crafter_in_txt_link_url', '#' ) ); ?>" class="btn-ql-round"><?php echo esc_html( $crafter_in_video_link_title ); ?></a>
        <?php } ?>

    </div>

    <div class="bullet-points-image wow fadeInRight" data-wow-delay="300ms" style="background-image: url(<?php echo esc_url( $bullet_in_points_image ) ?>);">
        <h3 class="bullet-points-title"><?php  echo esc_html( get_theme_mod( 'crafter_in_image_ttl_title' ) ); ?></h3>

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
        $main_text = wp_kses( get_theme_mod( 'crafter_in_image_main_desc' ), $wp_kses_args );
        ?>
        <p><?php echo $main_text; ?></p>
        <?php $crafter_bullet_points_link_title = get_theme_mod( 'crafter_in_image_link_title', esc_html__( 'Learn More', 'crafter' ) ); ?>
        <?php if ( !empty( $crafter_bullet_points_link_title ) || is_customize_preview() ) { ?>
        <a href="<?php echo esc_url( get_theme_mod( 'crafter_in_image_link_url', '#' ) ); ?>" class="btn-ql"><?php echo esc_html( $crafter_bullet_points_link_title ); ?></a>
        <?php } ?>
    </div>

</div><!-- video-section -->
<?php endif ?>
