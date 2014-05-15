<?php get_header(); ?>
<div id="contentWrap">
<div id="content">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
        <?php the_post_thumbnail( 'page-featured-image'); ?>
    		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
            
				<h2><?php the_title(); ?></h2>
           
				<div class="entry">
					<?php the_content(); ?>
                </div>
         
         <ul class= "breadCrumbs">
             <?php previous_post_link(); ?> | 
              <?php next_post_link(); ?> </ul>
				
<!-- beginning of taxonomy (categories, tags) html-->
                <div class="tax">
                <div class="alignLeft">
                <p>Filed under: <?php the_category( ', '); ?></p>
                	</div>
                   <?php if( get_the_tags() ) { ?>
                   <div class=""alignRight txtrt">
                   <p><?php the_tags(); ?></p>
					</div>
                   <?php } ?>
                   </div><!-- end of Taxonomy html-->                      
 <em>Posted on:</em> <?php the_time('F jS, Y') ?>
     				 <em>by </em><?php the_author() ?> 
 <!--comments-->     
           <div class="postmetadata">
                <a href = "#comments"><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></a>
                </div>
			</article> <!--end of article -->
            <?php comments_template(); ?>
      <?php endwhile; ?>
    <?php else : ?>
    <h2>Not Found</h2>
    <?php endif; ?>
</div> <!--end content-->
<?php get_sidebar(); ?>
</div> <!-- end contentWrap -->
<?php get_footer(); ?>

