<?php get_header() ?>

<div class="main-container">
    <section class="page-header" style="background-image: url(<?php the_post_thumbnail_url() ?>);">
        <h2><?php the_title(); ?></h2>
    </section>
    <div class="main wrapper clearfix">
        <article>
    <?php if(have_posts()) :  ?>
            
        <?php while( have_posts() ) : the_post(); ?>
                <section class="single-page-section">                               
                    <p><?php the_content(); ?></p>
                </section>
        <?php endwhile ?>

    <?php endif ?>

        </article>

    <?php  if( is_page('home') ) :?>
        <article class="logo-footer-conteiner">
            <img src="/wp-content/uploads/2017/01/Marca_Triggers-12.png" alt="">
        </article>
    <?php endif ?>

    </div> <!-- #main -->
</div> <!-- #main-container -->

<?php get_footer() ?>