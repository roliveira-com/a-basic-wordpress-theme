<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Crafter
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


  <?php if ( !has_post_thumbnail() ) : ?>
  <header class="entry-header">
    <h1 class="post-title"><?php the_title(); ?></h1>
  </header><!-- .entry-header -->
  <?php endif; ?>



	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'crafter' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

  <?php echo do_shortcode('[rainmaker_form id="429"]'); ?>

</article><!-- #post-## -->
