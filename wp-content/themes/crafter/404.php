<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Crafter
 */

get_header(); ?>

	<main id="main" class="site-main col-md-8" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! Página não encontrada.', 'crafter' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'Parece que nada foi encontrado no endereço solicitado. Tente em um dos links abaixo ou através da busca.', 'crafter' ); ?></p>

					<?php get_search_form(); ?>


					<div class="clearfix"></div>
					<div class="widgets-404">
						<div class="row">

							<div class="col-md-4">

								<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

							</div>

							<div class="col-md-4">

								<?php if ( crafter_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
								<div class="widget widget_categories">
									<h2 class="widget-title"><?php esc_html_e( 'Categorias mais populares', 'crafter' ); ?></h2>
									<ul>
									<?php
										wp_list_categories( array(
											'orderby'    => 'count',
											'order'      => 'DESC',
											'show_count' => 1,
											'title_li'   => '',
											'number'     => 10,
										) );
									?>
									</ul>
								</div><!-- .widget -->
								<?php endif; ?>

							</div>

							<div class="col-md-4">

								<?php
									/* translators: %1$s: smiley */
									$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'crafter' ), convert_smilies( ':)' ) ) . '</p>';
									the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
								?>
							</div>

							<div class="col-md-3">
								<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
							</div>

						</div>
					</div><!-- .widgets-404 -->

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

	</main><!-- #main -->

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
