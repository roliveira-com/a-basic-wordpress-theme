<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Crafter_Pro
 */

?>
<?php if ( get_option( 'show_on_front' ) == 'posts' || !is_front_page() ) : ?>
        <div class="clearfix"></div>
    </div><!-- /row -->

</div><!-- /#container -->
<?php endif; ?>

    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12">
                  <h3>Triggers</h3>
                  <ul>
                    <li><a href="/acompanheoprograma" target="_blank">Acompanhe o programa</a></li>
                    <li><a href="http://www.triggers.com.br/wp-content/uploads/2017/02/Regulamento-Triggers.pdf" target="_blank">Regulamento</a></li>
                    <li><a href="mailto:contato@triggers.com.br" target="_blank">contato@triggers.com.br</a></li>
                    <!-- <li><a href="#">Politica de Privacidade</a></li> -->
                  </ul>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-12">
                  <h3>Redes Sociais</h3>
                  <ul>
                    <li><i class="fa fa-facebook" aria-hidden="true"></i> <a target="_blank" href="https://www.facebook.com/triggbrasil"> Facebook</a></li>
                    <!-- <li><i class="fa fa-twitter" aria-hidden="true"></i> <a href="#">Twitter</a></li> -->
                    <li><i class="fa fa-instagram" aria-hidden="true"></i> <a target="_blank" href="https://www.instagram.com/triggers_br">Instagram</a></li>
                    <!-- <li><i class="fa fa-youtube" aria-hidden="true"></i> <a href="#">Youtube</a></li> -->
                  </ul>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12 text-right">
                  <ul>
                    <li class="footer-logo"><img src="http://www.triggers.com.br/wp-content/uploads/2017/02/logo-triggers-2.png" alt="" /></li>
                    <!-- <li class="footer-logo"><img src="/wp-content/uploads/2017/02/footer_logo_visionarios.png" alt="" /></li> -->
                  </ul>
                <?php //if( function_exists('slbd_display_widgets') ) { echo slbd_display_widgets(); } ?>
                </div>

            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .sub-footer -->
    <div class="bg-green">
      <div class="container">
        <div class="col-md-12 text-right">
          <p class="footer-copyright">
            <?php echo ' ' . date_i18n( 'Y' ) . '. ' . get_bloginfo( 'name' );  ?>. Todos os direitos reservados.
          </p>
        </div>
      </div>

    </div>


<?php wp_footer(); ?>

</body>
</html>
