<?php
/*
Template Name: Página de Iniciativas Sociais
*/
?>
<?php
/**
 * The template for displaying the mentors page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Crafter
 */
get_header(); ?>

<?php if ( has_post_thumbnail() ) : ?>
<div class="conteiner">
  <div class="row">
    <div class="fullwidth-image-header" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); ">
      <?php the_title( '<h1>', '</h1>' ); ?>
    </div>
  </div>
</div>
<?php endif; ?>

	<main id="main" class="site-main margin-top-medium col-md-12" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'iniciativas' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->

<?php get_footer(); ?>
