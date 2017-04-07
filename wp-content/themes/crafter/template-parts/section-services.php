<?php
$crafter_enable_section = get_theme_mod( 'crafter_services_enable', true );
if ( $crafter_enable_section || is_customize_preview() ) :
?>

<div id="programa" class="services-section">
		<div class="row bg-dark-pattern">
			<div class="col-md-5 col-sm-5 col-xs-12 bg-white">
				<div class="section-text-center text-center wow fadeInUp">
					<h2 class="blue">O Programa</h2>
				</div>
				<p class="text18px" style="text-align: justify;" class="wow fadeInUp">
					Um programa de empreendedorismo social, em que grupos de jovens, mentorados por <a href="/inscricao">grandes lideranças</a>, resolvem desafios, participam de um programa de pré-aceleração e no final uma equipe recebe um aporte em dinheiro e 4 meses de aceleração!
					<br />
					<br />
					<b>As equipes podem se inscrever sem ter um projeto.</b> As etapas do programa vão auxiliar os grupos a desenvolverem ideias que gerem negócios de impacto social.
					<br />
					<br />
					Triggers não se trata de um desafio de vencedores e vencidos, é uma iniciativa de educação empreendedora, em que todos os participantes terão a chance de desenvolver e aprimorar um mindset de gestão de negócios sociais, além de seus próprios perfis de liderança.
					<br />
					<br />
					As inscrições encerraram no dia 15 de março de 2017.
					<br />
					<br />
					<a href="http://www.triggers.com.br/wp-content/uploads/2017/02/Regulamento-Triggers.pdf" target="_blank">Clique aqui</a> para ler o regulamento completo.
					<br />
					<br />
					<!-- <a class="enroll-btn" href="/inscricao">Inscreva-se agora!</a> -->
				</p>
				<img class="service-image wow fadeInUp image-responsive" src="http://www.triggers.com.br/wp-content/uploads/2017/02/bonecos-coloridosv2.png" alt="" />
			</div>
			<div class="col-md-7 col-sm-7 col-xs-12">
				<div id="etapas" class="services-section padding-bottom-medium"  <?php if( false == $crafter_enable_section ): echo 'style="display: none;"'; endif ?>>
							<div class="section-text-center text-center wow fadeInUp">
								<h2 class="green">As Etapas</h2>
							</div>
				      <div class="text-etapas">
				        <span>
				          <!-- <div class="img-etapas"><img src="/wp-content/uploads/2017/02/edit.png" alt="" /></div> -->
				          <h4>Inscrição</h4>
				          <p class="txt">Equipes de 2 a 4 pessoas, se candidatam ao programa respondendo o questionário de inscrição. Você pode se inscrever individualmente e depois trazer o seu grupo.</p>
				        </span>

				        <span>
				          <!-- <div class="img-etapas"><img src="/wp-content/uploads/2017/02/checked.png" alt="" /></div> -->
				          <h4>Seleção Inicial</h4>
				          <p class="txt">Pré-seleção dos inscritos. 20 grupos serão selecionados para entrarem no programa.</p>
				        </span>

				        <span>
				          <!-- <div class="img-etapas"><img src="/wp-content/uploads/2017/01/idea.png" alt="" /></div> -->
				          <h4>Desafio Inovação</h4>
				          <p class="txt">Desafio onde criatividade, inovação, e melhor utilização de recursos, classificará a equipe para a próxima etapa. Nessa fase, 10 equipes continuam.</p>
				        </span>

				        <span>
				          <!-- <div class="img-etapas"><img src="/wp-content/uploads/2017/01/presentation.png" alt="" /></div> -->
				          <h4>Funil Social</h4>
				          <p class="txt">Conexão com uma Iniciativa Social para realizarem o segundo desafio do projeto onde os mentores serão o diferencial. Nessa etapa, as equipes terão que resolver um problema apontado pela iniciativa. O projeto com a melhor resolução, garante R$20mil para a iniciativa social dar continuidade a implementação.</p>
				        </span>

				        <span>
				          <!-- <div class="img-etapas"><img src="/wp-content/uploads/2017/01/stats.png" alt="" /></div> -->
				          <h4>Desenvolvimento Startup</h4>
				          <p class="txt">Com a ajuda de vários mentores, as equipes desenvolverão seus projetos e também participarão, por 2 meses, do programa de pré aceleração do Quintessa, uma das maiores aceleradoras de negócios de impacto do Brasil.</p>
				        </span>

				        <span>
				          <!-- <div class="img-etapas"><img src="/wp-content/uploads/2017/01/medal.png" alt="" /></div> -->
				          <h4>Premiação go-to-market</h4>
				          <p class="txt">Uma banca com várias lideranças e aceleradoras decidirão pela equipe que desenvolveu um projeto de mais impacto e com melhor chance de sucesso. O projeto escolhido, recebe um aporte de R$50mil + quantia gerada por todos que queiram contribuir com o Cashback, obtidos no uso do Cartão Trigg + uma aceleração de 4 meses com lideranças focadas nos principais pilares: Tecnologia, Marketing, Negócios e Social.</p>
				        </span>

				        <!-- <span>
				          <p><a target="_blank" href="http://www.triggers.com.br/wp-content/uploads/2017/02/Regulamento-Triggers.pdf">Confira o Regulamento Completo!</a></p>
				        </span> -->
				      </div>

							<?php
							$id = get_theme_mod( 'crafter_services_page', '' );
							$post = get_post( $id );

							if ( is_a( $post, 'WP_Post' ) ) {

								$content = apply_filters( 'the_content', $post->post_content );
								echo $content;

							}else{
							?>

							<?php

							};
							?>

				</div><!-- services-section -->
			</div>
		</div>

</div>
<div id="triggers" class="triggersetrigg padding-top-medium bg-blue">
	<div class="row">
		<div class="col-md-3 col-sm-3 col-xs-12">
			<div class="leg-side-image">
				<img class="triggers-side-image image-responsive" src="http://www.triggers.com.br/wp-content/uploads/2017/02/Trigg-v1.png" alt="" />
			</div>
		</div>
		<div class="col-md-9 col-sm-9 col-xs-12">
			<h3 class="section-subtitle">Triggers</h3>
			<p class="text18px">
				Triggers é uma iniciativa da Trigg, que está sendo adotada graças a uma nova lógica para o lançamento do primeiro cartão de crédito – o único no Brasil conectado à uma ideia de fomento ao empreendedorismo e negócios sociais.
			</p>
			<p class="text18px">
				Buscamos o melhor parceiro com experiência em projetos de empreendedorismo social e assim surgiu o programa, Triggers by Visionários. <a style="color: #FFF;" href="/visionarios/">Conheça o Visionários!</a>
			</p>
		</div>
	</div>
</div>


<div id="trigg" class="triggersetrigg padding-top-medium bg-blue">
	<div class="row">
		<div class="col-md-3 col-sm-3 col-xs-12">
			<div class="leg-side-image">
				<img class="trigg-side-image image-responsive" src="http://www.triggers.com.br/wp-content/uploads/2017/02/Trigg-v4.png" alt="" />
			</div>
		</div>
		<div class="col-md-9 col-sm-9 col-xs-12">
			<h3 class="section-subtitle">Trigg</h3>
			<p class="text18px">
				A Trigg é uma Fintech!  Um cartão digital, uma parte do seu dinheiro de volta a cada compra (cashback) e a possibilidade de contribuir para empreendedorismo de alto impacto social.  Benefícios para quem usa o cartão e para a nossa sociedade.
			</p>
			<p class="text18px">
				Melhorar processos e tornar a vida mais simples não é suficiente para criar a empresa que queremos.  Queremos compartilhar nossos valores com você.  Buscamos refletir nos nossos serviços os valores que desenvolvemos ao longo da nossa trajetória e que nos conectam a uma geração que defende sua forma de ver o mundo.
			</p>
			<p class="text18px">
				Be Triggers!
			</p>
		</div>
	</div>
</div>

<div id="comorparticipar" class="triggersetrigg" style="border-bottom: 4px solid rgb(93,183,160);">
	<!-- <h2 class="floating-section-title wow fadeInUp">Como Participar</h2> -->
	<div class="row">
		<div class="col-md-9 col-sm-9 col-xs-12">
			<div class="video-text-wrap wow fadeInRight" data-wow-delay="300ms">
					<h3 style="margin-left: 0;" class="section-subtitle">QUERO SER UM TRIGGERS</h3>
					<p>Encerramos as inscrições para o Triggers Powered by Visionários, mas você ainda pode participar desse projeto acompanhando o programa.</p>

					<p>Aqui no site você conhece os grupos selecionados, acompanha as Webséries de cada etapa, terá acesso a diversas entrevistas com lideranças de mercado e ainda pode aproveitar todo esse conhecimento para pensar no seu próximo projeto.</p>
					<p>
						<b>Quer contribuir com o projeto? </b></span> Tem interesse em fazer parte de iniciativas que direcionam investimentos para negócios que geram grande impacto social? Conheça um pouco mais sobre o Cashback da Trigg e saiba como contribuir com o retorno do dinheiro gasto com o uso do cartão de crédito. <a target="_blank" href="https://www.trigg.com.br/#cashback">Saiba mais!</a>
					</p>
					
					<p>
						Gostou do projeto e quer contar para os seus amigos? Compartilhe essa ideia e ajude na divulgação.
					</p>
					<p>
						As mudanças que queremos para o mundo, acontecem com a inciativa, com a vontade e a ação.
					</p>
					<p>
						<b>#BeTriggers</b>
					</p>
					<!-- <a href="" class="btn-ql-round">link</a> -->
			</div>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-12">
			<img class="betriggers-side-image image-responsive" src="http://www.triggers.com.br/wp-content/uploads/2017/02/03-img-site.png" alt="" />
		</div>
	</div>
</div>

</div>
<?php endif ?>
