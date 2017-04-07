<?php
$crafter_enable_section = get_theme_mod( 'crafter_blogcarrousel_enable', true );
if ( $crafter_enable_section || is_customize_preview() ) :
?>
<div id="blog-section" class="blog-section" <?php if( false == $crafter_enable_section ): echo 'style="display: none;"'; endif ?>>

    <h3 class="section-title wow fadeIn"><a href="<?php echo esc_url( $blog_url ); ?>"><?php echo esc_html( get_theme_mod( 'crafter_blogcarrousel_title', __( 'From The Blog', 'crafter' ) ) ); ?></a></h3>

    	<?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 10
        );

        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) :
    	?>

      <div class="blog-wrap-carrousel">
        <?php echo do_shortcode('[wp_posts_carousel template="simple.css" post_types="post" all_items="10" show_only="id" exclude="" posts="" ordering="asc" categories="" relation="and" tags="" show_title="true" show_created_date="true" show_description="excerpt" allow_shortcodes="false" show_category="true" show_tags="false" show_more_button="true" show_featured_image="true" image_source="large" image_height="auto" image_width="100" items_to_show_mobiles="1" items_to_show_tablets="2" items_to_show="3" slide_by="1" margin="10" loop="true" stop_on_hover="true" auto_play="false" auto_play_timeout="1200" auto_play_speed="800" nav="true" nav_speed="800" dots="true" dots_speed="800" lazy_load="false" mouse_drag="true" mouse_wheel="false" touch_drag="true" easing="linear" auto_height="true" custom_breakpoints=""]'); ?>
      </div>

	<?php endif; ?>


</div><!-- blog-section -->
<?php endif ?>
