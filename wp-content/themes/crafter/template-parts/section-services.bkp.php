<?php
$crafter_enable_section = get_theme_mod( 'crafter_services_enable', true );
if ( $crafter_enable_section || is_customize_preview() ) :
?>

<div id="services-section" class="services-section bg-green">
		<h2 class="section-title wow fadeInUp">Programa</h2>
		<p class="wow fadeInUp">
			Uma competição de empreendedorismo social, onde grupos de jovens empreendedores, mentorados por grandes executivos, resolvem desafios de organizações sociais e, com esse aprendizado, desenvolvem  novos negócios.
			<br />
			<br />
			Empreendedores de todo o país poderão se inscrever no Triggers powered by Visionários até o dia 15 de março de 2017. Serão consideradas todas as ideias, com preferência para aquelas baseadas em novas tecnologias.
			<br />
			<br />
			O programa será rodado integralmente na cidade de São Paulo. Por isso, é fundamental que os inscritos planejem suas jornadas.
		</p>
		<img class="service-image wow fadeInUp" src="wp-content/uploads/2017/02/triggers_people_white.png" alt="" />
</div>

<div id="services-section" class="services-section bg-dark-pattern padding-bottom-medium"  <?php if( false == $crafter_enable_section ): echo 'style="display: none;"'; endif ?>>
	<h2 class="section-title"><?php echo esc_html( get_theme_mod( 'crafter_services_title', esc_html__( 'What We Do', 'crafter' ) ) ); ?></h2>


			<?php
			$id = get_theme_mod( 'crafter_services_page', '' );
			$post = get_post( $id );

			if ( is_a( $post, 'WP_Post' ) ) {

				$content = apply_filters( 'the_content', $post->post_content );
				echo $content;

			}else{
			?>
			<div class="widget widget_service-widget service wow fadeInUp">
			    <div class="service-category">Success <span></span></div>

			    <div class="service-text">
			        <img src="http://demo.quemalabs.com/crafter/wp-content/uploads/2016/11/layers_64px.png" alt="" class="service-icon">
			        <h4>Start Up Projects</h4>
			        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
			        <a href="#" class="read-more">Learn More <i class="fa fa-angle-right"></i></a>
			    </div>
			    <div class="clearfix"></div>
			</div>

			<div class="widget widget_service-widget service wow fadeInUp">
			    <div class="service-category">Economy <span></span></div>

			    <div class="service-text">
			        <img src="http://demo.quemalabs.com/crafter/wp-content/uploads/2016/11/linegraph_64px.png" alt="" class="service-icon">
			        <h4>Marketing Strategy</h4>
			        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
			        <a href="#" class="read-more">Learn More <i class="fa fa-angle-right"></i></a>
			    </div>
			    <div class="clearfix"></div>


			</div>

			<div class="widget widget_service-widget service wow fadeInUp">

			    <div class="service-category">Inspiring <span></span></div>

			    <div class="service-text">
			        <img src="http://demo.quemalabs.com/crafter/wp-content/uploads/2016/11/megaphone_64px.png" alt="" class="service-icon">
			        <h4>Creative Campaigns</h4>
			        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
			        <a href="#" class="read-more">Learn More <i class="fa fa-angle-right"></i></a>
			    </div>
			    <div class="clearfix"></div>

			</div>

			<div class="widget widget_service-widget service wow fadeInUp">
			    <div class="service-category">Creative <span></span></div>

			    <div class="service-text">
			        <img src="http://demo.quemalabs.com/crafter/wp-content/uploads/2016/11/tools_64px.png" alt="" class="service-icon">
			        <h4>Innovative Ideas</h4>
			        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
			        <a href="#" class="read-more">Learn More <i class="fa fa-angle-right"></i></a>
			    </div>
			    <div class="clearfix"></div>

			</div>
			<?php

			};
			?>

</div><!-- services-section -->
<?php endif ?>
