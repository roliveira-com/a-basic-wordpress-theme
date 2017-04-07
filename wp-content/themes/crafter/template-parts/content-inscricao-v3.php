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
    <div class="master-check">
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
    </div>
    <div class="form-container">
      <form action="">
        <fieldset>
          <legend>Dados básicos</legend>
          <div class="field-box">
            <h4><span>1. </span>Você está aplicando individualmente ou em equipe?</h4>
            <input id="solo" type="radio" name="type-enroll" value="solo"> <label for="solo">Individualmente</label> <br>
            <input id="team" type="radio" name="type-enroll" value="team"> <label for="team">Equipe</label> <br>
          </div>

          <div class="field-box" style="display: none;">
            <h4><span>2. </span>Como ficou sabendo do Triggers powered by Visionários?</h4>
            <input id="social" type="radio" name="acknoledge" value="social"> <label for="social">Mídias Sociais</label> <br>
            <input id="indicacao" type="radio" name="acknoledge" value="indicacao"> <label for="indicacao">Indicação</label> <br>
            <input id="reportagens" type="radio" name="acknoledge" value="reportagens"> <label for="reportagens">Reportagens</label> <br>
            <input id="website" type="radio" name="acknoledge" value="website"> <label for="website">Website</label> <br>
            <input id="email" type="radio" name="acknoledge" value="email"> <label for="email">Email Marketing</label> <br>
            <input id="outro" type="radio" name="acknoledge" value="outro"> <label for="outro">Outro (especifique)</label> 
            <input id="outro" type="text">
          </div>

          <div class="field-box">
            <h4><span>3. </span>Email de quem está aplicando o questionário. </h4>
            <input id="email" type="text" name="email">
          </div>
        </fieldset>

        <fieldset>
          <legend>Dados do participante</legend>
          <div class="field-box">
            <h4><span>4. </span>Nome completo - Participante 1</h4>
            <input id="nome" type="text" name="nome">
          </div>

          <div class="field-box">
            <h4><span>5. </span>CPF ou No do Passaporte</h4>
            <input id="docs" type="text" name="docs">
          </div>

          <div class="field-box">
            <h4><span>6. </span>Gênero</h4>
            <input id="male" type="radio" name="gender" value="male"> <label for="male">Homem</label> <br>
            <input id="female" type="radio" name="gender" value="female"> <label for="female">Mulher</label> <br>
            <input id="noanswer" type="radio" name="gender" value="noanswer"> <label for="noanswer">Prefiro não responder</label> <br>
            <input id="outro" type="radio" name="gender" value="outro"> <label for="outro">Outro (especifique)</label> 
            \<input id="outro" type="text">
          </div>

          <div class="field-box">
            <h4><span>7. </span>País de Nascimento</h4>
            <input id="country" type="text" name="country">
          </div>

          <div class="field-box">
            <h4><span>8. </span>Cidade de residência</h4>
            <input id="city" type="text" name="city">
          </div>

          <div class="field-box">
            <h4><span>9. </span>Idade</h4>
            <input id="age" type="text" name="age">
          </div>

          <div class="field-box">
            <h4><span>10. </span>Telefone para contato</h4>
            <input id="phone" type="text" name="phone">
          </div>

          <div class="field-box">
            <h4><span>11. </span>Email</h4>
            <input id="email-2" type="text" name="email-2">
          </div>

          <div class="field-box">
            <h4><span>12. </span>Qual seu tamanho de camiseta? </h4>
            <label for="">Caso seja selecionado, cada participante terá a sua.</label> <br>
            <input id="pp" type="radio" name="size-shirt" value="pp"> <label for="pp">PP</label> <br>
            <input id="p" type="radio" name="size-shirt" value="p"> <label for="p">P</label> <br>
            <input id="m" type="radio" name="size-shirt" value="m"> <label for="m">M</label> <br>
            <input id="g" type="radio" name="size-shirt" value="g"> <label for="g">G</label> <br>
            <input id="gg" type="radio" name="size-shirt" value="gg"> <label for="gg">GG</label> <br>
            <input id="xgg" type="radio" name="size-shirt" value="xgg"> <label for="xgg">Extra GG</label> 
          </div>

          <div class="field-box">
            <h4><span>12. </span>Qual seu tamanho de camiseta? (Caso seja selecionado, cada participante terá a sua.)</h4>
            <select name="size-shirt" id="size-shirt">
              <option value="pp">PP</option>
              <option value="p">P</option>
              <option value="m">M</option>
              <option value="g">G</option>
              <option value="gg">GG</option>
              <option value="xgg">XGG</option>
            </select> 
          </div>

          <div class="field-box">
            <h4><span>13. </span>Nível de formação</h4>
            <input id="primeiro" type="radio" name="escolaridade" value="primeiro"> <label for="primeiro">1º Grau</label> <br>
            <input id="segundo" type="radio" name="escolaridade" value="segundo"> <label for="segundo">2º Grau</label> <br>
            <input id="superior" type="radio" name="escolaridade" value="superior"> <label for="superior">Ensino Superior cursando</label> <br>
            <input id="superior-completo" type="radio" name="escolaridade" value="superior-completo"> <label for="superior-completo">Ensino Superior completo</label> <br>
            <input id="tecnico" type="radio" name="escolaridade" value="tecnico"> <label for="tecnico">Técnico</label> <br>
            <input id="pos" type="radio" name="escolaridade" value="pos"> <label for="pos">Pós Graduação</label> <br>
            <input id="mestrado" type="radio" name="escolaridade" value="mestrado"> <label for="mestrado">Mestrado</label> <br>
            <input id="mba" type="radio" name="escolaridade" value="mba"> <label for="mba">MBA</label> <br>
            <input id="outro" type="radio" name="escolaridade" value="outro"> <label for="outro">Outro (especifique)</label> 
            <input id="outro" type="text">
          </div>

          <div class="field-box">
            <h4><span>14. </span>Renda Familiar</h4>
            <input id="up2000" type="radio" name="renda" value="up2000"> <label for="up2000">Até R$2.000,00</label> <br>
            <input id="2000to4000" type="radio" name="renda" value="2000to4000"> <label for="2000to4000">de R$2.000,01 até R$4.000,00</label> <br>
            <input id="4000to6000" type="radio" name="renda" value="4000to6000"> <label for="4000to6000">De R$4.000,01 até R$6.000,00</label> <br>
            <input id="6000to8000" type="radio" name="renda" value="6000to8000"> <label for="6000to8000">De R$6.000,01 até R$8.000,00</label> <br>
            <input id="8000up" type="radio" name="renda" value="8000up"> <label for="8000up">De R$8.000,01 para cima</label> <br>
          </div>

          <div class="field-box">
            <h4><span>15. </span>Você está empregado atualmente? Se sim, nos conte mais sobre seu trabalho, suas responsabilidades, carga horária, etc.</h4>
            <textarea name="jobdesc" id="jobdesc" cols="30" rows="10"></textarea>
          </div>

          <div class="field-box">
            <h4><span>16. </span>Linkedin</h4>
            <input id="linkedin" type="text" name="linkedin">
          </div>

          <div class="field-box">
            <h4><span>17. </span>Facebook</h4>
            <input id="facebook" type="text" name="facebook">
          </div>
        </fieldset>

        <fieldset>
          <div class="field-box">
            <h4><span>18. </span>Nos conte mais o que te levou pessoalmente a aplicar para o Triggers 2017?</h4>
            <textarea name="reasons" id="reasons" cols="30" rows="10"></textarea>
          </div>

          <div class="field-box">
            <h4><span>19. </span>Áreas sociais de interesse (Máximo 3)</h4>
            <input id="healthy" type="checkbox" name="interest" value="healthy"> <label for="healthy">Saúde e Bem estar</label> <br>
            <input id="education" type="checkbox" name="interest" value="education"> <label for="education">Educação</label> <br>
            <input id="poverty" type="checkbox" name="interest" value="poverty"> <label for="poverty">Combate a pobreza e redução das desigualdades </label> <br>
            <input id="food" type="checkbox" name="interest" value="food"> <label for="food">Alimentação adequada</label> <br>
            <input id="gender-equality" type="checkbox" name="interest" value="gender-equality"> <label for="gender-equality">Igualdade de gênero e de raças</label> <br>
            <input id="sanitation" type="checkbox" name="interest" value="sanitation"> <label for="sanitation">Saneamento Básico</label> <br>
            <input id="energy" type="checkbox" name="interest" value="energy"> <label for="energy">Consumo/Cidades sustentáveis</label> <br>
            <input id="enviroment" type="checkbox" name="interest" value="enviroment"> <label for="enviroment">Meio Ambiente</label> <br>
            <input id="animals" type="checkbox" name="interest" value="animals"> <label for="animals">Proteção aos Animais</label> <br>
            <input id="peace" type="checkbox" name="interest" value="peace"> <label for="peace">Promoção da PAZ e Justiça</label> <br>
            <input id="outro" type="checkbox" name="interest" value="outro"> <label for="outro">Outro (especifique)</label> 
            <input id="outro" type="text">
          </div>

          <div class="field-box">
            <h4><span>20. </span>Você já empreendeu ou atuou em alguma das áreas de interesse selecionadas? Se sim, conte-nos um pouco da sua experiência.</h4>
            <textarea name="experience" id="experience" cols="30" rows="10"></textarea>
          </div>

          <div class="field-box">
            <h4><span>21. </span>Imagine que é seu primeiro dia participando no Triggers, como você se apresentaria para seus colegas participantes?</h4>
            <textarea name="intro" id="intro" cols="30" rows="10"></textarea>
          </div>

          <div class="field-box">
            <h4><span>22. </span>O objetivo desse programa é capacitar e fomentar as equipes para que criem ideias inovadoras que gerem um impacto relevante na sociedade. Você já tem alguma ideia que gostaria de compartilhar? Se sim, nos conte mais sobre ela.</h4>
            <textarea name="idea" id="idea" cols="30" rows="10"></textarea>
          </div>
        </fieldset>
      </form>
    </div>
    <a class="enroll-btn" id="enroll-btn" href="https://pt.surveymonkey.com/r/tr1ggers" target="_blank">Inscreva-se</a>
  <?php endif; ?>

</article><!-- #post-## -->
