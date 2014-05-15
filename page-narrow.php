<?php
/*

Template Name: Narrow page


*/
get_header(); ?>
<div id="contentWrap">
<div id="content">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
    		
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
                <h2 class="entryTitle"><?php the_title(); ?></h2>
             
				<div class="entry contentGig">
					<?php the_content(); ?>
                </div>
             
				
			</article>
      <?php endwhile; ?>
    <?php else : ?>
    <h2>Not Found</h2>
    <?php endif; ?>
</div> <!--end content-->
</div> <!-- end contentWrap -->
<?php get_footer(); ?>
