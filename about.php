<?php
/*
Template Name: about
*/
?>

<?php get_header(); ?>
	
	<div class="clear"></div>
	
	<div id="content" class="clearfix">
		
		<div id="main_content" class="ajax-content">
			
		<div id="about-wrapper" class="padding_30">
			
			<img src="<?php echo(get_bloginfo('template_directory')); ?>/images/about_pic.jpg" width="100%" height="" alt="" />
			
		<h2>About Me</h2>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			
		</div><!--padding_30-->	
			
		</div><!--main_content-->
		
		<?php get_sidebar(); ?>

			<div class="clear"></div>

		</div><!--content-->

		</div><!--wrapper-->

		<?php get_footer(); ?>
	
</body>

</html>