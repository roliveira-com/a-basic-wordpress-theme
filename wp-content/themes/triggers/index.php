<?php 
    $initialSearchEnable = array_key_exists('taxonomy',$_GET);
    if($initialSearchEnable && $_GET['taxonomy'] === ''){
        wp_redirect( home_url() );
    }
    get_header(); 
?>

<div class="main-container">
    <div class="main wrapper clearfix">

        <article>
            <?php $taxonomias = get_terms('tipo') ?>
            <form class="select-form" method="get" action="<?php bloginfo('url') ?>">
                <select class="cs-select cs-skin-underline" name="taxonomy">
                    <option value="" disabled selected>Selecione</option> 
                    <?php foreach ($taxonomias as $taxonomia) { ?>
                    <option value="<?= $taxonomia->slug ?>"><?= $taxonomia->name ?></option>
                    <?php } ?>
                    <option value="">Todos</option>                   
                </select>
                <button class="initial-search-btn" type="submit">Filtrar</button>
            </form>
        </article>
        <article>

        <?php
            if($initialSearchEnable){
                $searchTaxonomy = array(
                        array(
                            'taxonomy' => 'tipo',
                            'field' => 'slug',
                            'terms' => $_GET['taxonomy']
                        )
                    );
            };

            // Configurando o objeto Worpress para mostrar apenas conteúdo "videos"
            $args = array( 
                'post_type' => 'videos',
                // filtrando os resultados de acordo com as tags configuradas
                'tax_query' => $searchTaxonomy
            );
            $loop = new WP_Query( $args );
        ?>

        <?php if ( $loop->have_posts() ) : ?>

            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <section>
                <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
                <?php the_post_thumbnail(); ?>
                <p><?php the_content(); ?></p>
            </section>

            <?php endwhile; ?>

        <?php endif; ?>

        </article>

<!--         <aside>
            <h3>aside</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices.</p>
        </aside> -->

    </div> <!-- #main -->
</div> <!-- #main-container -->

<?php get_footer(); ?>

