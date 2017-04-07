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
      <!-- ==========================================================================================================================================
      BEGIN OF PORTIFOLIO BOX
      ==========================================================================================================================================
       -->
        <li class="portfolio-item">
          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">

              <div class="front">
                <div class="float-logo">
                  <!-- <img src="/wp-content/uploads/2017/02/thumb_youtube.png" alt="" /> -->
                </div>
                <a class="fancybox" title="Mauro Rezende" data-fancybox-group="works" href="#mauro">
                  <img src="/wp-content/uploads/2017/02/thumb_mauro_rezende.png" class="img-responsive" alt="Head of Technology Solutions para América Latina no YouTube">
                </a>
              </div>
              <div class="back">
                <a class="fancybox" title="Mauro Rezende" data-fancybox-group="works" href="#mauro">
                  <img src="/wp-content/uploads/2017/02/solo-doll-man2.png" class="img-responsive" alt="">
                </a>
              </div>
            </div>
          </div>

          <figcaption class="mask">
            <h3>Mauro Rezende</h3>
            <p>Head of Technology Solutions para América Latina no YouTube.</p>
          </figcaption>
          <ul class="external">
            <li><a class="fancybox" title="Mauro Rezende" data-fancybox-group="works" href="#mauro"><i class="fa fa-search"></i></a></li>
          </ul>
        </li>



      <!--
      ==========================================================================================================================================
      BEGIN OF PORTIFOLIO BOX
      ==========================================================================================================================================
       -->
       <li class="portfolio-item">
         <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
           <div class="flipper">
             <div class="front">
               <div class="float-logo">
                 <!-- <img src="/wp-content/uploads/2017/02/thumb_spotify.png" alt="" /> -->
               </div>
               <a class="fancybox" title="Celia Goldstein" data-fancybox-group="works" href="#celia">
                 <img src="/wp-content/uploads/2017/02/thumb_celia_goldstein.jpeg" class="img-responsive" alt="Country Sales Director na empresa Spotify">
               </a>
             </div>
             <div class="back">
               <a class="fancybox" title="Celia Goldstein" data-fancybox-group="works" href="#celia">
                 <img src="/wp-content/uploads/2017/02/solo-doll-girl.png" class="img-responsive" alt="">
               </a>
             </div>
           </div>
         </div>

         <figcaption class="mask">
           <h3>Celia Goldstein</h3>
           <p>Country Sales Director na empresa Spotify.</p>
         </figcaption>
         <ul class="external">
           <li><a class="fancybox" title="Celia Goldstein" data-fancybox-group="works" href="#celia"><i class="fa fa-search"></i></a></li>
         </ul>
       </li>


      <!--
      ==========================================================================================================================================
      BEGIN OF PORTIFOLIO BOX
      ==========================================================================================================================================
       -->
       <li class="portfolio-item">
         <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
           <div class="flipper">
             <div class="front">
               <div style="width: 45px;" class="float-logo">
                 <!-- <img src="/wp-content/uploads/2017/02/thumb_twitter.png" alt="" /> -->
               </div>
               <a class="fancybox" title="Guilherme Ribenboim" data-fancybox-group="works" href="#ribenboim">
                 <img src="/wp-content/uploads/2017/02/thumb_guilherme_ribenboin.png" class="img-responsive" alt="Vice-presidente do Twitter para a América Latina e presidente do conselho da IAB Brasil">
               </a>
             </div>
             <div class="back">
               <a class="fancybox" title="Guilherme Ribenboim" data-fancybox-group="works" href="#ribenboim">
                 <img src="/wp-content/uploads/2017/02/solo-doll-man1.png" class="img-responsive" alt="">
               </a>
             </div>
           </div>
         </div>

         <figcaption class="mask">
           <h3>Guilherme Ribenboim</h3>
           <p>Vice-presidente do Twitter para a América Latina e presidente do conselho da IAB Brasil.</p>
         </figcaption>
         <ul class="external">
           <li><a class="fancybox" title="Guilherme Ribenboim" data-fancybox-group="works" href="#ribenboim"><i class="fa fa-search"></i></a></li>
         </ul>
       </li>


      <!--
      ==========================================================================================================================================
      BEGIN OF PORTIFOLIO BOX
      ==========================================================================================================================================
       -->
       <li class="portfolio-item">
         <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
           <div class="flipper">
             <div class="front">
               <div class="float-logo">
                 <!-- <img src="/wp-content/uploads/2017/02/thumb_johnson-johnson.png" alt="" /> -->
               </div>
               <a class="fancybox" title="Neivia Justa" data-fancybox-group="works" href="#neivia">
                 <img src="http://www.triggers.com.br/wp-content/uploads/2017/02/neivia_justa.png" class="img-responsive" alt="Director Latin America Communications and Corporate Social Responsability, Johnson & Johnson">
               </a>
             </div>
             <div class="back">
               <a class="fancybox" title="Neivia Justa" data-fancybox-group="works" href="#neivia">
                 <img src="/wp-content/uploads/2017/02/solo-doll-girl.png" class="img-responsive" alt="">
               </a>
             </div>
           </div>
         </div>

         <figcaption class="mask">
           <h3>Neivia Justa</h3>
           <p>Director Latin America Communications and Corporate Social Responsability, Johnson & Johnson.</p>
         </figcaption>
         <ul class="external">
           <li><a class="fancybox" title="Neivia Justa" data-fancybox-group="works" href="#neivia"><i class="fa fa-search"></i></a></li>
         </ul>
       </li>


      <!--
      ==========================================================================================================================================
      BEGIN OF PORTIFOLIO BOX
      ==========================================================================================================================================
       -->
       <li class="portfolio-item">
         <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
           <div class="flipper">
             <div class="front">
               <div class="float-logo">
                 <!-- <img src="http://www.triggers.com.br/wp-content/uploads/2017/02/f-biz.png" alt="" /> -->
               </div>
               <a class="fancybox" title="Roberto Grosman" data-fancybox-group="works" href="#rgrosman">
                 <img src="/wp-content/uploads/2017/02/thumb_roberto_grosman.png" class="img-responsive" alt="Membro do board, sócio, Co-Fundador e Co-Ceo da F.biz e investidor do Visionários">
               </a>
             </div>
             <div class="back">
               <a class="fancybox" title="Roberto Grosman" data-fancybox-group="works" href="#rgrosman">
                 <img src="/wp-content/uploads/2017/02/solo-doll-man1.png" class="img-responsive" alt="">
               </a>
             </div>
           </div>
         </div>

         <figcaption class="mask">
           <h3>Roberto Grosman</h3>
           <p>Membro do board, sócio, Co-Fundador e Co-Ceo da F.biz e investidor do Visionários.</p>
         </figcaption>
         <ul class="external">
           <li><a class="fancybox" title="Roberto Grosman" data-fancybox-group="works" href="#rgrosman"><i class="fa fa-search"></i></a></li>
         </ul>
       </li>


      <!--
      ==========================================================================================================================================
      BEGIN OF PORTIFOLIO BOX
      ==========================================================================================================================================
       -->
        <li class="portfolio-item">
          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
              <div class="front">
                <div class="float-logo">
                  <!-- <img src="http://www.triggers.com.br/wp-content/uploads/2017/02/cappuccino.png" alt="" /> -->
                </div>
                <a class="fancybox" title="Vitor Elman" data-fancybox-group="works" href="#velmann">
                  <img src="/wp-content/uploads/2017/02/thumb_vitor_elman.png" alt="Membro do board, sócio fundador da Cappuccino Digital e investidor do Visionários">
                </a>
              </div>
              <div class="back">
                <img src="/wp-content/uploads/2017/02/solo-doll-man2.png" class="img-responsive" alt="">
              </div>
            </div>
          </div>
          <figcaption class="mask">
            <h3>Vitor Elman</h3>
            <p>Membro do board, sócio fundador da Cappuccino Digital e investidor do Visionários.</p>
          </figcaption>
          <ul class="external">
            <li><a class="fancybox" title="Vitor Elman" data-fancybox-group="works" href="#velmann"><i class="fa fa-search"></i></a></li>
          </ul>
        </li>

        <!--
        ==========================================================================================================================================
        BEGIN OF PORTIFOLIO BOX
        ==========================================================================================================================================
         -->

        <li class="portfolio-item">
          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
              <div class="front">
                <div class="float-logo">
                  <!-- <img src="http://www.triggers.com.br/wp-content/uploads/2017/02/pulsara.png" alt="" /> -->
                </div>
                <a class="fancybox" title="Cristiane Pedote" data-fancybox-group="works" href="#cpedote">
                  <img src="/wp-content/uploads/2017/02/thumb_cristiane_pedote.png" class="img-responsive" alt="Investidora social e fundadora de Pulsara">
                </a>
              </div>
              <div class="back">
                  <img src="/wp-content/uploads/2017/02/solo-doll-girl.png" class="img-responsive" alt="">
              </div>
            </div>
          </div>

          <figcaption class="mask">
            <h3>Cristiane Pedote</h3>
            <p>Investidora social e fundadora de Pulsara.</p>
          </figcaption>
          <ul class="external">
            <li><a class="fancybox" title="Cristiane Pedote" data-fancybox-group="works" href="#cpedote"><i class="fa fa-search"></i></a></li>
          </ul>
        </li>

        <!--
        ==========================================================================================================================================
        BEGIN OF PORTIFOLIO BOX
        ==========================================================================================================================================
         -->
          <li class="portfolio-item">
            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
              <div class="flipper">
                <div class="front">
                  <div class="float-logo">
                    <!-- <img src="http://www.triggers.com.br/wp-content/uploads/2017/02/thumb_trigg.png" alt="" /> -->
                  </div>
                  <a class="fancybox" title="Guilherme Muller" data-fancybox-group="works" href="#gmuller">
                    <img src="/wp-content/uploads/2017/02/thumb_guilherme_muller.png" alt="Membro do board da Fintecc e sócio fundador da Trigg">
                  </a>
                </div>
                <div class="back">
                  <img src="/wp-content/uploads/2017/02/solo-doll-man2.png" class="img-responsive" alt="">
                </div>
              </div>
            </div>
            <figcaption class="mask">
              <h3>Guilherme Muller</h3>
              <p>Membro do board da Fintecc e sócio fundador da Trigg.</p>
            </figcaption>
            <ul class="external">
              <li><a class="fancybox" title="Guilherme Muller" data-fancybox-group="works" href="#gmuller"><i class="fa fa-search"></i></a></li>
            </ul>
          </li>

          <!--
          ==========================================================================================================================================
          BEGIN OF PORTIFOLIO BOX
          ==========================================================================================================================================
           -->
            <li class="portfolio-item">
              <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                <div class="flipper">
                  <div class="front">
                    <div class="float-logo">
                      <!-- <img src="http://www.triggers.com.br/wp-content/uploads/2017/02/brain_comunicacao_white.png" alt="" /> -->
                    </div>
                    <a class="fancybox" title="Rodrigo Padron" data-fancybox-group="works" href="#rpadron">
                      <img src="/wp-content/uploads/2017/02/thumb_rodrigo_padron.png" alt="Fundador e CEO da Brain Comunicação">
                    </a>
                  </div>
                  <div class="back">
                    <img src="/wp-content/uploads/2017/02/solo-doll-man2.png" class="img-responsive" alt="">
                  </div>
                </div>
              </div>
              <figcaption class="mask">
                <h3>Rodrigo Padron</h3>
                <p>Fundador e CEO da Brain Comunicação.</p>
              </figcaption>
              <ul class="external">
                <li><a class="fancybox" title="Rodrigo Padron" data-fancybox-group="works" href="#rpadron"><i class="fa fa-search"></i></a></li>
              </ul>
            </li>

            <li class="portfolio-item">
              <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                <div class="flipper">
                  <div class="front">
                    <div class="float-logo">
                      <!-- <img src="/wp-content/uploads/2017/02/thumb_whirlpool.png" alt="" /> -->
                    </div>
                    <a class="fancybox" title="Renata Marques" data-fancybox-group="works" href="#rmarques">
                      <img src="/wp-content/uploads/2017/02/thumb_renata_marques.png" class="img-responsive" alt="CIO América Latina na Whirpool">
                    </a>
                  </div>
                  <div class="back">
                    <a class="fancybox" title="Renata Marques" data-fancybox-group="works" href="#rmarques">
                      <img src="/wp-content/uploads/2017/02/solo-doll-girl.png" class="img-responsive" alt="">
                    </a>
                  </div>
                </div>
              </div>

              <figcaption class="mask">
                <h3>Renata Marques</h3>
                <p>CIO América Latina na Whirpool</p>
              </figcaption>
              <ul class="external">
                <li><a class="fancybox" title="Renata Marques" data-fancybox-group="works" href="#rmarques"><i class="fa fa-search"></i></a></li>
              </ul>
            </li>
      </ul>

    </div>
  </div>
</section>

<div id="mauro" class="mentor-area">
  <div class="mentor-header">
    <span class="mentor-image-avatar"><img src="/wp-content/uploads/2017/02/thumb_mauro_rezende.png" alt=""></span>
    <!-- <span class="mentor-image"><img src="/wp-content/uploads/2017/02/thumb_youtube.png" alt=""></span> -->
  </div>
  <div class="mentor-text">
    Atualmente Head of Technology Solutions para América Latina no YouTube, é um apaixonado por tecnologia. Iniciou sua carreira profissional empreendendo e tem experiência de projetos em tecnologia em diferentes indústrias. Antes do YouTube passou pelo BankBoston, Agência Click, Secretaria da Fazenda de São Paulo e foi o responsável por abrir a área de Operações da Google Enterprise (atualmente Google Cloud) na América Latina. É engenheiro de Computação pela UNICAMP.
  </div>
</div>

<div id="celia" class="mentor-area">
  <div class="mentor-header">
    <span class="mentor-image-avatar"><img src="/wp-content/uploads/2017/02/thumb_celia_goldstein.jpeg" alt=""></span>
    <!-- <span class="mentor-image"><img src="/wp-content/uploads/2017/02/thumb_spotify.png" alt=""></span> -->
  </div>
  <div class="mentor-text">
    Country Sales Director na empresa Spotify. Ela sempre escolheu estar em oportunidades inovadoras e de tendência. Formada em Administração com ênfase em Marketing pela ESPM, Celia dedicou e desenvolveu sua carreira em Marketing Digital quando muita gente nem sabia que este canal existia. Ela começou em 1999 no site Fulano.com.br e desde então teve passagem por empresas como WebMotors, UOL, Mercado Livre, a agência de publicidade F.biz onde ficou por 5 anos, antes de integrar o primeiro time do Facebook Brasil onde ficou mais de 4 anos.
  </div>
</div>

<div id="ribenboim" class="mentor-area">
  <div class="mentor-header">
    <span class="mentor-image-avatar"><img src="/wp-content/uploads/2017/02/thumb_guilherme_ribenboin.png" alt=""></span>
    <!-- <span class="mentor-image"><img style="width: 250px;" src="/wp-content/uploads/2017/02/thumb_twitter.png" alt=""></span> -->
  </div>
  <div class="mentor-text">
     (@guilhermerib) é vice-presidente do Twitter para a América Latina e presidente do conselho da IAB Brasil. Antes disso, trabalhou no Yahoo! por mais de 12 anos onde ocupou diversos cargos, sendo o último deles vice-presidente do Yahoo! Latin America and US Hispanics. É formado em economia pela PUC-RJ e tem mestrado também em economia pela mesma faculdade.
  </div>
</div>

<div id="rgrosman" class="mentor-area">
  <div class="mentor-header">
    <span class="mentor-image-avatar"><img src="/wp-content/uploads/2017/02/thumb_roberto_grosman.png" alt=""></span>
    <!-- <span class="mentor-image"><img src="http://www.triggers.com.br/wp-content/uploads/2017/02/f-biz.png" alt=""></span> -->
  </div>
  <div class="mentor-text">
    Sócio, Co-Fundador e Co-Ceo da F.biz, agência de comunicação que foi comprada pelo grupo WPP (maior de comunicação do mundo). Foi sócio no Fulano, trabalhou na Amazon e no Google. É formado na FGV com MBA no MIT.
  </div>
</div>

<div id="neivia" class="mentor-area">
  <div class="mentor-header">
    <span class="mentor-image-avatar"><img src="http://www.triggers.com.br/wp-content/uploads/2017/02/neivia_justa.png" alt=""></span>
    <!-- <span class="mentor-image"><img src="http://www.triggers.com.br/wp-content/uploads/2017/02/thumb_johnson-johnson.png" alt=""></span> -->
  </div>
  <div class="mentor-text">
    Neivia Justa é formada em Comunicação Social pela Universidade Federal do Ceará e ingressou na Johnson & Johnson em julho de 2016 como Diretora de Comunicação, Sustentabilidade e Responsabilidade Social LATAM da Johnson & Johnson Consumo do Brasil.
    Em sua atual posição, Neivia lidera um time integrado de comunicação em uma área estratégica que sustenta a jornada de crescimento de negócios da Johnson & Johnson no Brasil.
  </div>
</div>

<div id="velmann" class="mentor-area">
  <div class="mentor-header">
    <span class="mentor-image-avatar"><img src="/wp-content/uploads/2017/02/thumb_vitor_elman.png" alt=""></span>
    <!-- <span class="mentor-image"><img src="http://www.triggers.com.br/wp-content/uploads/2017/02/cappuccino.png" alt=""></span> -->
  </div>
  <div class="mentor-text">
    Sócio fundador na agência de comunicação Cappuccino Digital, onde é diretor de engajamento, responsável pelas áreas de planejamento, criação e redes sociais. Em 2010 fundou a YourGame, empresa com foco em publicação de browser games e jogos sociais adquirida pelo UOL em 2011. É formado em Publicidade pela FAAP.
  </div>
</div>

<div id="cpedote" class="mentor-area">
  <div class="mentor-header">
    <span class="mentor-image-avatar"><img src="/wp-content/uploads/2017/02/thumb_cristiane_pedote.png" alt=""></span>
    <!-- <span class="mentor-image"><img src="http://www.triggers.com.br/wp-content/uploads/2017/02/pulsara.png" alt=""></span> -->
  </div>
  <div class="mentor-text">
     Investidora Social e fundadora de Pulsara. Foi Managing Director do Barclays no Brasil, VP de Operações no Goldman Sachs e no J.P. Morgan. Membro da associação Women’s Corporate Directors e Rede Mulheres do Brasil, contribui regularmente como palestrante convidada por instituições privadas e não governamentais (Deloitte, Fundação Estudar, ONU Mulher, Women’s Fórum, Yunus & Youth). É formada em desenvolvimento organizacional pela Adigo Consultores, em economia pela USP e mestre em Administração de Empresas pela FGV.
  </div>
</div>

<div id="gmuller" class="mentor-area">
  <div class="mentor-header">
    <span class="mentor-image-avatar"><img src="/wp-content/uploads/2017/02/thumb_guilherme_muller.png" alt=""></span>
    <!-- <span class="mentor-image"><img src="http://www.triggers.com.br/wp-content/uploads/2017/02/thumb_trigg.png" alt=""></span> -->
  </div>
  <div class="mentor-text">
     Idealizador da Trigg, fintech. Trabalhou na IBM, participou da criação e desenvolvimento de diferentes empresas – todas do ramo de tecnologia. É formado em engenharia da comunicação pela PUC Rio e atua como mentor de diversos projetos de apoio e incentivo ao empreendedorismo.
  </div>
</div>


<div id="rpadron" class="mentor-area">
  <div class="mentor-header">
    <span class="mentor-image-avatar"><img src="/wp-content/uploads/2017/02/thumb_rodrigo_padron.png" alt=""></span>
    <!-- <span class="mentor-image">
      <img src="http://www.triggers.com.br/wp-content/uploads/2017/02/brain_comunicacao_white.png" alt="">
    </span> -->
  </div>
  <div class="mentor-text">
     Fundador e CEO da Brain Comunicação. Foi CEO da Ogilvy PR no Brasil (uma agência global do Grupo WPP), CEO da ConceptPR, Gerente de Comunicação da Fecomércio – SP e Repórter e Editor no Grupo O Estado de S. Paulo. É jornalista e professor, com especializações em Marketing, Public Affairs e Comunicação Digital.
  </div>
</div>

<div id="rmarques" class="mentor-area">
  <div class="mentor-header">
    <span class="mentor-image-avatar"><img src="/wp-content/uploads/2017/02/thumb_renata_marques.png" alt=""></span>
    <!-- <span class="mentor-image">
      <img src="/wp-content/uploads/2017/02/thumb_whirlpool.png" alt="">
    </span> -->
  </div>
  <div class="mentor-text">
    CIO América Latina na Whirpool, apaixonada por desenvolvimento humano e inovação. Tem experiência internacional e construiu sua carreira em empresas como a Monsanto e ABB. É formada em Tecnologia da Informação pelo Mackenzie, Pós Graduada em Administração de Empresas pela FAAP e possui MBA Internacional na Universidade de Pittsburgh - Katz.
  </div>
</div>


</article><!-- #post-## -->
