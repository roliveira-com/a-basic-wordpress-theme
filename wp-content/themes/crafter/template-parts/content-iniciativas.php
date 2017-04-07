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

  <section id="portfolio">
  <div class="container">
    <div class="row">

      <!-- <div class="sec-title text-center wow animated fadeInDown">
        <h2>FEATURED PROJECTS</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div> -->

      <ul class="project-wrapper wow animated fadeInUp">

        <li class="portfolio-item">
          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
              <div class="front">
                <a class="fancybox" title="" data-fancybox-group="works" href="#graac">
                  <img src="/wp-content/uploads/2017/02/graac.png" class="img-responsive" alt="">
                </a>
              </div>
              <div class="back">
                <a class="fancybox" data-fancybox-group="works" href="#graac">
                  <img src="/wp-content/uploads/2017/02/solo-doll-man2.png" class="img-responsive" alt="">
                </a>
              </div>
            </div>
          </div>

          <figcaption class="mask">
            <h3>GRAAC</h3>
            <p></p>
          </figcaption>
          <ul class="external">
            <li><a class="fancybox"data-fancybox-group="works" href="#graac"><i class="fa fa-search"></i></a></li>
          </ul>
        </li>

        <li class="portfolio-item">
          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
              <div class="front">
                <a class="fancybox" title="" data-fancybox-group="works" href="#soma">
                  <img src="/wp-content/uploads/2017/02/soma.png" class="img-responsive" alt="">
                </a>
              </div>
              <div class="back">
                <a class="fancybox" data-fancybox-group="works" href="#soma">
                  <img src="/wp-content/uploads/2017/02/solo-doll-man2.png" class="img-responsive" alt="">
                </a>
              </div>
            </div>
          </div>

          <figcaption class="mask">
            <h3>Soma</h3>
            <p></p>
          </figcaption>
          <ul class="external">
            <li><a class="fancybox"data-fancybox-group="works" href="#soma"><i class="fa fa-search"></i></a></li>
          </ul>
        </li>

        <li class="portfolio-item">
          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
              <div class="front">
                <a class="fancybox" title="" data-fancybox-group="works" href="#ifhistoria">
                  <img src="/wp-content/uploads/2017/02/inst-fazendo-historia.png" class="img-responsive" alt="">
                </a>
              </div>
              <div class="back">
                <a class="fancybox" data-fancybox-group="works" href="#ifhistoria">
                  <img src="/wp-content/uploads/2017/02/solo-doll-man2.png" class="img-responsive" alt="">
                </a>
              </div>
            </div>
          </div>

          <figcaption class="mask">
            <h3>Instituto Fazendo História</h3>
            <p></p>
          </figcaption>
          <ul class="external">
            <li><a class="fancybox"data-fancybox-group="works" href="#ifhistoria"><i class="fa fa-search"></i></a></li>
          </ul>
        </li>

        <li class="portfolio-item">
          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
              <div class="front">
                <a class="fancybox" title="" data-fancybox-group="works" href="#teto">
                  <img src="/wp-content/uploads/2017/02/teto.png" class="img-responsive" alt="">
                </a>
              </div>
              <div class="back">
                <a class="fancybox" data-fancybox-group="works" href="#teto">
                  <img src="/wp-content/uploads/2017/02/solo-doll-man2.png" class="img-responsive" alt="">
                </a>
              </div>
            </div>
          </div>

          <figcaption class="mask">
            <h3>TETO</h3>
            <p></p>
          </figcaption>
          <ul class="external">
            <li><a class="fancybox"data-fancybox-group="works" href="#teto"><i class="fa fa-search"></i></a></li>
          </ul>
        </li>

        <li class="portfolio-item">
          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
              <div class="front">
                <a class="fancybox" title="" data-fancybox-group="works" href="#arredondar">
                  <img src="/wp-content/uploads/2017/02/arredondar.png" class="img-responsive" alt="">
                </a>
              </div>
              <div class="back">
                <a class="fancybox" data-fancybox-group="works" href="#arredondar">
                  <img src="/wp-content/uploads/2017/02/solo-doll-man2.png" class="img-responsive" alt="">
                </a>
              </div>
            </div>
          </div>

          <figcaption class="mask">
            <h3>Arredondar</h3>
            <p></p>
          </figcaption>
          <ul class="external">
            <li><a class="fancybox"data-fancybox-group="works" href="#arredondar"><i class="fa fa-search"></i></a></li>
          </ul>
        </li>

        <li class="portfolio-item">
          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
              <div class="front">
                <a class="fancybox" title="" data-fancybox-group="works" href="#edn">
                  <img src="/wp-content/uploads/2017/02/escola-de-noticias.png" class="img-responsive" alt="">
                </a>
              </div>
              <div class="back">
                <a class="fancybox" data-fancybox-group="works" href="#edn">
                  <img src="/wp-content/uploads/2017/02/solo-doll-man2.png" class="img-responsive" alt="">
                </a>
              </div>
            </div>
          </div>

          <figcaption class="mask">
            <h3>Escola de Notícias</h3>
            <p></p>
          </figcaption>
          <ul class="external">
            <li><a class="fancybox"data-fancybox-group="works" href="#edn"><i class="fa fa-search"></i></a></li>
          </ul>
        </li>

        <li class="portfolio-item">
          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
              <div class="front">
                <a class="fancybox" title="" data-fancybox-group="works" href="#litro">
                  <img src="/wp-content/uploads/2017/02/litro-de-luz.png" class="img-responsive" alt="">
                </a>
              </div>
              <div class="back">
                <a class="fancybox" data-fancybox-group="works" href="#litro">
                  <img src="/wp-content/uploads/2017/02/solo-doll-man2.png" class="img-responsive" alt="">
                </a>
              </div>
            </div>
          </div>

          <figcaption class="mask">
            <h3>Litro de Luz</h3>
            <p></p>
          </figcaption>
          <ul class="external">
            <li><a class="fancybox"data-fancybox-group="works" href="#litro"><i class="fa fa-search"></i></a></li>
          </ul>
        </li>

        <li class="portfolio-item">
          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
              <div class="front">
                <a class="fancybox" title="" data-fancybox-group="works" href="#arrastao">
                  <img src="/wp-content/uploads/2017/02/projeto-arrastao.png" class="img-responsive" alt="">
                </a>
              </div>
              <div class="back">
                <a class="fancybox" data-fancybox-group="works" href="#arrastao">
                  <img src="/wp-content/uploads/2017/02/solo-doll-man2.png" class="img-responsive" alt="">
                </a>
              </div>
            </div>
          </div>

          <figcaption class="mask">
            <h3>Projeto Arrastão</h3>
            <p></p>
          </figcaption>
          <ul class="external">
            <li><a class="fancybox"data-fancybox-group="works" href="#arrastao"><i class="fa fa-search"></i></a></li>
          </ul>
        </li>

        <li class="portfolio-item">
          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
              <div class="front">
                <a class="fancybox" title="" data-fancybox-group="works" href="#moradigna">
                  <img src="/wp-content/uploads/2017/02/moradigna.png" class="img-responsive" alt="">
                </a>
              </div>
              <div class="back">
                <a class="fancybox" data-fancybox-group="works" href="#moradigna">
                  <img src="/wp-content/uploads/2017/02/solo-doll-man2.png" class="img-responsive" alt="">
                </a>
              </div>
            </div>
          </div>

          <figcaption class="mask">
            <h3>Moradigna</h3>
            <p></p>
          </figcaption>
          <ul class="external">
            <li><a class="fancybox"data-fancybox-group="works" href="#moradigna"><i class="fa fa-search"></i></a></li>
          </ul>
        </li>

        <li class="portfolio-item">
          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
              <div class="front">
                <a class="fancybox" title="" data-fancybox-group="works" href="#handtalk">
                  <img src="/wp-content/uploads/2017/02/handtalks.png" class="img-responsive" alt="">
                </a>
              </div>
              <div class="back">
                <a class="fancybox" data-fancybox-group="works" href="#handtalk">
                  <img src="/wp-content/uploads/2017/02/solo-doll-man2.png" class="img-responsive" alt="">
                </a>
              </div>
            </div>
          </div>

          <figcaption class="mask">
            <h3>Hand Talk</h3>
            <p></p>
          </figcaption>
          <ul class="external">
            <li><a class="fancybox"data-fancybox-group="works" href="#handtalk"><i class="fa fa-search"></i></a></li>
          </ul>
        </li>

      </ul>

    </div>
  </div>
</section>

<div id="graac" class="ong-area">
  <div class="ong-header">
    <span class="ong-image-avatar"><img src="/wp-content/uploads/2017/02/graac.png" alt=""></span>
  </div>
  <div class="ong-text">
    O GRAACC é um centro de referência no tratamento no câncer infantil, especialmente nos casos de alta complexidade, oferecendo diagnóstico, tratamento, assistência multiprofissional, ensino e pesquisa.
  </div>
</div>

<div id="soma" class="ong-area">
  <div class="ong-header">
    <span class="ong-image-avatar"><img src="/wp-content/uploads/2017/02/soma.png" alt=""></span>
  </div>
  <div class="ong-text">
    Fundada há 02 anos, a so+ma é o único programa de fidelidade para a baixa renda, gratuito e baseado em comportamento. Utiliza os resíduos como "moeda" de engajamento para criar novos hábitos e um ambiente empreendedor nas periferias.
  </div>
</div>

<div id="ifhistoria" class="ong-area">
  <div class="ong-header">
    <span class="ong-image-avatar"><img src="/wp-content/uploads/2017/02/inst-fazendo-historia.png" alt=""></span>
  </div>
  <div class="ong-text">
    O Instituto Fazendo História é uma ONG fundada há mais de 11 anos que tem como missão colaborar com o desenvolvimento de crianças e adolescentes com experiência em acolhimento, a fim de fortalecê-los para que se apropriem e transformem suas histórias. São mais de 5000 crianças e adolescentes atendidos diretamente e mais de 3000 voluntários engajados ao longo dos anos.
  </div>
</div>

<div id="teto" class="ong-area">
  <div class="ong-header">
    <span class="ong-image-avatar"><img src="/wp-content/uploads/2017/02/teto.png" alt=""></span>
  </div>
  <div class="ong-text">
    Há 10 anos no Brasil, o TETO é uma organização internacional presente na América Latina e Caribe, que trabalha pela defesa dos direitos de pessoas que vivem nas favelas mais precárias e invisíveis, diminuindo sua vulnerabilidade por meio do engajamento comunitário e da mobilização de jovens voluntários.
  </div>
</div>

<div id="arredondar" class="ong-area">
  <div class="ong-header">
    <span class="ong-image-avatar"><img src="/wp-content/uploads/2017/02/arredondar.png" alt=""></span>
  </div>
  <div class="ong-text">
    O Arredondar é um movimento que tem como missão alavancar a cultura de doação do Brasil. Surgiu em 2011 com a ideia simples de garantir que todos clientes de lojas parceiras possam arredondar os centavos de suas compras para cima e doar para organizações sociais e ambientais sérias e previamente selecionadas! Sempre trabalhando com doações de até 1 real, hoje apoia 23 organizações e já mobilizou mais de 25 marcas e 3 milhões de doadores em seu propósito. Foi premiado em 2016 pelo Desafio de Impacto Social do Google, e pelo Prêmio Empreendedor Social de Futuro da Folha de SP.
  </div>
</div>

<div id="edn" class="ong-area">
  <div class="ong-header">
    <span class="ong-image-avatar"><img src="/wp-content/uploads/2017/02/escola-de-noticias.png" alt=""></span>
  </div>
  <div class="ong-text">
    Iniciativa social liderada por jovens do Campo Limpo, zona sul de São Paulo, que usa as tecnologias de informação e comunicação como estratégia para o acesso e a ampliação de direitos sociais, culturais e econômicos da juventude e comunidade escolar. Acreditamos em uma comunicação que impulsiona movimentos de transformação nos espaços e nas relações.
  </div>
</div>

<div id="litro" class="ong-area">
  <div class="ong-header">
    <span class="ong-image-avatar"><img src="/wp-content/uploads/2017/02/litro-de-luz.png" alt=""></span>
  </div>
  <div class="ong-text">
    O Litro de Luz desenvolve soluções ecológicas e economicamente sustentáveis para combater a falta de iluminação em regiões que não possuem acesso à rede elétrica ou que não podem arcar com seu custo.
  </div>
</div>

<div id="arrastao" class="ong-area">
  <div class="ong-header">
    <span class="ong-image-avatar"><img src="/wp-content/uploads/2017/02/projeto-arrastao.png" alt=""></span>
  </div>
  <div class="ong-text">
    Fundado em 1968, o Projeto Arrastão é uma organização sem fins lucrativos que faz o acolhimento e dá suporte às famílias da região do Campo Limpo que vivem em condição de pobreza. Esse trabalho de promoção humana e de desenvolvimento das comunidades é feito junto com estas famílias e dão origem aos programas que oferecemos nas áreas de educação (incluindo cultura), geração de renda, habitação e qualidade de vida.
  </div>
</div>

<div id="moradigna" class="ong-area">
  <div class="ong-header">
    <span class="ong-image-avatar"><img src="/wp-content/uploads/2017/02/moradigna.png" alt=""></span>
  </div>
  <div class="ong-text">
    O Moradigna é um negócio social (modelo Yunus) que oferece soluções em habitação para população de classes C, D e E. A empresa surgiu pela empatia e necessidades enfrentadas pelo Matheus Cardoso, fundador, que ao desenvolver a empresa convidou Vivian Sória e Rafael Veiga para compor a sociedade. Em menos de 2 anos de atuação já são mais de 200 famílias atendidas. Nosso trabalho é proporcionar segurança, conforto e qualidade de vida para essas pessoas, através dos serviços de reformas de baixa complexidade, que resolvam os problemas de insalubridade das residências.
  </div>
</div>

<div id="handtalk" class="ong-area">
  <div class="ong-header">
    <span class="ong-image-avatar"><img src="/wp-content/uploads/2017/02/handtalks.png" alt=""></span>
  </div>
  <div class="ong-text">
    Desde 2013, nossa missão é quebrar barreiras entre surdos e ouvintes, espalhando por aí tudo o que as pessoas precisam saber sobre acessibilidade, principalmente a digital. Startup social premiada, em 2013 ganhamos o prêmio da ONU de melhor aplicativo social do mundo. Quando o assunto for Libras, a Língua Brasileira de Sinais ou Acessibilidade Digital, pode contar com o Hugo!
  </div>
</div>

</article><!-- #post-## -->
