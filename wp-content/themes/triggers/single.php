<?php get_header() ?>

<div class="main-container">
    <div class="main wrapper clearfix">
        <article>
	    <?php if(have_posts()) :  ?>

	    	<?php while( have_posts() ) : the_post(); ?>

	            <section class="single-post-section">
	                <h2><?php the_title(); ?></h2>
	                <p class="single-post-author">by <?php the_author() ?></p>
	                <p><?php the_content(); ?></m p>
	            </section>

	        <?php endwhile ?>

	    <?php endif ?>	
		
		<?php $video_dados = get_post_meta ( $post->ID ); ?>
	    <?php if( array_key_exists('video_link', $video_dados) ) :  ?>
	    <section class="single-post-section"> 
				<p><?= $video_dados['video_link'][0] ?></p>      		        	
				<div class="single-post-meta">
					<span>link:</span>
	        		<p><?=  $video_dados['video_link'][0]; ?></p>
	        	</div>
				<div class="single-post-meta">
					<span>locação</span>
	        		<p><?=  $video_dados['video_location'][0]; ?></p>
	        	</div>
				<div class="single-post-meta">
					<span>direção:</span>
	        		<p><?=  $video_dados['video_director'][0]; ?></p>
	        	</div>
	        </section>
	    <?php endif ?>    
        </article>

    </div> <!-- #main -->
</div> <!-- #main-container -->

<?php get_footer() ?>