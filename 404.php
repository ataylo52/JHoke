<?php get_header(); ?>
<div id="contentWrap">
<div id="content">
	<h2> Sorry, but I couldn't find what you're looking for. Please use the navigation above or below and try again.</h2>
   <h3><?php get_search_form(); ?></h3>
  
  <div class="widget"><?php dynamic_sidebar( '404' ); ?></div>
    
</div> <!--end content-->
</div> <!-- end contentWrap -->
<?php get_footer(); ?>

