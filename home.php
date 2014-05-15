<?php get_header(); ?>
<div id="contentWrap">
<div id="content">
<div class="flexslider">

	<ul class="slides">
						
		<?php 

		$args = array( 
		'post_type' => 'quote',
        'posts_per_page'   => 30,	
	);

		$postQuery = get_posts($args);
					
		foreach( $postQuery as $post ) : setup_postdata($post);

			if ( has_post_thumbnail() ) { ?>

				<li>

						<?php the_post_thumbnail('page-featured-image'); ?> </a>
				</li>

			<?php 

			}

		endforeach; ?>					

	</ul>
</div>

	
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
        <?php the_post_thumbnail( 'post-thumb' ); ?>
		
				<div class="entry">
					<?php the_content(); ?>
                </div>                

      <?php endwhile; ?>
    <?php else : ?>
    <h2>Sorry, we couldn't find what you're looking for.</h2>
    <?php endif; ?>
</div> <!--end content-->

</div> <!-- end contentWrap -->
<?php get_footer(); ?>

