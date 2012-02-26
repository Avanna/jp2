<?php
/*
Template Name: contact
*/
?>

<?php get_header(); ?>
	
	<div class="clear"></div>
	
	<div id="content" class="clearfix">
		
		<div id="main_content" class="ajax-content">
			
		<div class="padding_30">
			
		
		
		<div id="contact_form">
			
		<h3>contact me</h3>
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<?php the_content(); ?>

		<?php endwhile;?>

		<?php endif; ?>
		
		</div><!--contact_form-->
		
			
		</div><!--padding_30-->		
			
		</div><!--main_content-->
		
		<?php get_sidebar(); ?>

			<div class="clear"></div>

		</div><!--content-->

		</div><!--wrapper-->

		<?php get_footer(); ?>
	
</body>

</html>