<div id="footer">
	
<!-- <div id="footer-menu">	
	<ul class="footer-nav">
		<?php wp_nav_menu(array('menu' => 'top_menu')); ?>
	</ul>
</div> --><!--footer_menu-->
	
	<div id="footer-categories">
		
		<div class="footer-category">
			<p>beauty</p>
			
			<?php $category_id = get_cat_ID( 'beauty' );

			    // Get the URL of this category
			    $category_link = get_category_link( $category_id );
			?>
			
			<a href="<?php echo esc_url( $category_link ); ?>" title="Category Name">
			<img src="<?php echo(get_bloginfo('template_directory')); ?>/images/beauty.jpg" width="250" height="" alt="" />
		</div></a>
		
		<div class="footer-category">
			<p>outfits</p>
			
			<?php $category_id = get_cat_ID( 'outfits' );

			    // Get the URL of this category
			    $category_link = get_category_link( $category_id );
			?>
			
			<a href="<?php echo esc_url( $category_link ); ?>" title="Category Name">
			
			<img src="<?php echo(get_bloginfo('template_directory')); ?>/images/outfits.jpg" width="250" height="" alt="" />
		</div></a>
		
		<div class="footer-category">
			<p>giveaways</p>
			
			<?php $category_id = get_cat_ID( 'giveaways' );

			    // Get the URL of this category
			    $category_link = get_category_link( $category_id );
			?>
			
			<a href="<?php echo esc_url( $category_link ); ?>" title="Category Name">
			
			<img src="<?php echo(get_bloginfo('template_directory')); ?>/images/giveaway.jpg" width="250" height="" alt="" />
		</div></a>
		
		<div class="footer-category">
			<p>food</p>
			
			<?php $category_id = get_cat_ID( 'food' );

			    // Get the URL of this category
			    $category_link = get_category_link( $category_id );
			?>
			
			<a href="<?php echo esc_url( $category_link ); ?>" title="Category Name">
			
			<img src="<?php echo(get_bloginfo('template_directory')); ?>/images/food.jpg" width="250" height="" alt="" />
		</div></a>
		
	</div>
	
	
</div><!-- footer -->