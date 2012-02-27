<form id="search-form" action="/" method="get">
	<fieldset>
	<input type="text" id="search" name="search" value="<?php the_search_query(); ?>"/>
	<input type="image" id="search-submit" src="<?php echo(get_bloginfo('template_directory')); ?>/images/search_icon.png" name="search-submit" alt="search" />
	 </fieldset>
</form>

