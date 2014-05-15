<?php
/*
Template Name: Full Width
*/
?>
<?php get_header(); ?>
<div id="contentWrap">
<div id="content">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
    		<?php the_post_thumbnail( 'fullwidth-featured-image' ); ?>
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
                <nav class="breadcrumbs">
    				<p><?php if(function_exists('bcn_display')){
        		bcn_display();
    }?> </p></nav>
                <h2><?php the_title(); ?></h2>
             
				<div class="entry">
					<?php the_content(); ?>
                </div>
                <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
			</article>
      <?php endwhile; ?>
    <?php else : ?>
    <h2>Not Found</h2>
    <?php endif; ?>
</div> <!--end content-->
</div> <!-- end contentWrap -->
<?php get_footer(); ?>
