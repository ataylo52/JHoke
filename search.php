<?php get_header(); ?>
<div id="contentWrap">
<div id="content">
	<?php if ( have_posts() ) : ?>
 <h2 id="pageTitle"><?php _e( 'You are searching for "' . get_search_query() . '"' ); ?> </h2> 
  <h3> <?php get_search_form(); ?></h3>
  
		<?php while ( have_posts() ) : the_post(); ?>
    		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
             
                <div class="meta">
                    <em>Posted on:</em> <?php the_time('F jS, Y') ?>
                    <em>by</em> <?php the_author() ?>
                </div>
				<div class="entry">
					<?php the_excerpt(); ?>
                </div>
			</article>
      <?php endwhile; ?>
    <?php else : ?>
    <h2>Sorry, No search results found</h2>
    <?php endif; ?>
</div> <!--end content-->
<?php get_sidebar(); ?>
</div> <!-- end contentWrap -->
<?php get_footer(); ?>

