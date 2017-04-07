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


  <?php if ( is_page('inscricao') ) : ?>
    <!-- <div class="master-check">
        <input type="checkbox" name="name" value="" id="sign-1">
        <label class="sign-checkbox-label" for="sign-1">
          <span></span>Autorizo utilizar e veicular, gratuitamente, por prazo indeterminado a minha imagem, o som de minha voz, dados biográficos fornecidos, declarações e demais características físicas captadas durante as gravações de todas as etapas do Programa Triggers. <a href="http://www.triggers.com.br/wp-content/uploads/2017/02/uso_de_imagem.pdf" target="_blank">Clique aqui para ler a Autorização de Uso de Imagem, Som de Voz e Contribuição Intelectual.</a>
        </label>
    </div>
    <div class="master-check">
        <input type="checkbox" name="name" value="" id="sign-2">
        <label class="sign-checkbox-label" for="sign-2">
          <span></span>Declaro que li e concordo com o regulamento do programa, em especial das condições do prêmio e que todas as informações constantes na ficha de inscrição são verdadeiras. <a href="http://www.triggers.com.br/wp-content/uploads/2017/02/Regulamento-Triggers.pdf" target="_blank">Clique aqui para ler o regulamento.</a>
        </label>
    </div> -->
    <a id="btn-inscrever" class="enroll-btn" id="enroll-btn" href="http://inscrevase.triggers.com.br" target="_blank">Inscreva-se</a>
  <?php endif; ?>

</article><!-- #post-## -->
