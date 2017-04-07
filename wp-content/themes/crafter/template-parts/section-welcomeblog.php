<?php
$crafter_enable_section = get_theme_mod( 'crafter_welcomeblog_enable', true );
if ( $crafter_enable_section || is_customize_preview() ) :
?>
<div class="welcome-blog-section" <?php if( false == $crafter_enable_section ): echo 'style="display: none;"'; endif ?>>
    <?php
    $blog_url = '';
    if( get_option( 'show_on_front' ) == 'page' ){
        $blog_url = get_permalink( get_option( 'page_for_posts' ) );
    }else{
        $blog_url = home_url();
    }
?>

    	<?php
        $args = array(
            'post_type' => 'post',
            'category_name' => 'Destaque',
            'posts_per_page' => 5
        );

        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) :
    	?>

		<div class="blog-wrap js-flickity" data-flickity-options='{ "cellAlign": "left", "contain": true, "prevNextButtons": false, "pageDots": false }'>

		<?php /* Start the Loop */ ?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<?php $blog_image = ''; ?>
            <?php if ( has_post_thumbnail() ) {
                $blog_image = 'style="background-image: url(' . esc_url( get_the_post_thumbnail_url( $the_query->post->ID, 'crafter_blog-section' ) ) . ');"';
            } ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('blog-item wow fadeIn');  echo $blog_image; ?>>
                <a href="<?php echo esc_url( get_permalink() ) ?>" class="blog-item-link"></a>
                <div class="blog-item-entry">
                    <div class="entry-half">
                        <time class="blog-time-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date( 'd M' ) ) ?></time>
                    </div>
                    <div class="entry-half2">
                        <?php the_title( sprintf( '<h2 class="blog-item-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                        <?php
                        $byline = sprintf(
                        esc_html_x( 'por %s', 'post author', 'crafter' ),
                        '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>' );

                        echo '<p>' . $byline . ' ';
                        if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
                            esc_html_e( ' - ', 'crafter' );
                            comments_popup_link( esc_html__( 'Sem comentários ainda', 'crafter' ), esc_html__( '1 Comentário', 'crafter' ), esc_html__( '% Comentários', 'crafter' ) );
                        }
                        echo '</p>';
                        ?>
                    </div>
                </div>

            </article>

		<?php endwhile; ?>

		</div><!-- .blog-wrap -->

	<?php endif; ?>


</div><!-- blog-section -->
<?php endif ?>
