<div id="sidebar">
	
	<a href="http://rstyle.me/ad/bkcwd6hw" target="_blank"><img src="http://www.lduhtrp.net/image-4441350-10519211" /></a>
		
	<h2>follow & connect</h2>
	
	<div id="social">
		
	<div class="center">
		
		<a href="http://www.facebook.com/pages/JustPatience/208612525847630
	 " target="blank" ><img class="no-border" src="<?php echo(get_bloginfo('template_directory')); ?>/images/facebook2.png" width="40" alt="" /></a>

	<a href="http://twitter.com/justpatie" alt="" target="blank" ><img class="no-border" src="<?php echo(get_bloginfo('template_directory')); ?>/images/twitter2.png" width="40" alt="" /></a>

	<a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><img class="no-border" src="<?php echo(get_bloginfo('template_directory')); ?>/images/rss2.png" width="40" alt="" /></a>

	

	<a href="<?php echo get_page_link(24); ?>"><img class="no-border" src="<?php echo(get_bloginfo('template_directory')); ?>/images/gmail2.png" width="40" alt="" /></a>

	<div class="blog_loving clearfix" style="text-align:center; margin-bottom:0px;">
	
	<a title="JustPatience on Bloglovin" href="http://www.bloglovin.com/en/blog/2700962/justpatience/follow"><img class="no-border" alt="bloglovin" border="0" src="http://www.bloglovin.com/widget/bilder/en/widget.gif" /></a>
	
	</div><!--/blog_loving-->
	
	</div><!--center-->

	</div><!--social-->

	
	<div class="center">
	
	<a href="http://rstyle.me/ad/ce2md6hw" target="_blank"><img src="http://ad.linksynergy.com/fs-bin/show?id=QFGLnEolOWg&bids=243082.10000096&type=4" width="240" height="250"/></a>
	
	<a href="http://rstyle.me/ad/bkcwd6hw" target="_blank"><img src="http://www.lduhtrp.net/image-4441350-10519211" /></a>
	
	</div><!--center-->
	
	<div id="categories">

			<h2>Categories</h2>



			<div class="category">
				<p>beauty</p>

				<?php $category_id = get_cat_ID( 'beauty' );

				    // Get the URL of this category
				    $category_link = get_category_link( $category_id );
				?>

				<a href="<?php echo esc_url( $category_link ); ?>" title="Category Name">
				<img src="<?php echo(get_bloginfo('template_directory')); ?>/images/beauty.jpg" width="250" height="" alt="" />
			</div></a>

			<div class="category">
				<p>outfits</p>

				<?php $category_id = get_cat_ID( 'outfits' );

				    // Get the URL of this category
				    $category_link = get_category_link( $category_id );
				?>

				<a href="<?php echo esc_url( $category_link ); ?>" title="Category Name">

				<img src="<?php echo(get_bloginfo('template_directory')); ?>/images/yellow.jpg" width="250" height="" alt="" />
			</div></a>

			<div class="category">
				<p>fashion</p>

				<?php $category_id = get_cat_ID( 'fashion' );

				    // Get the URL of this category
				    $category_link = get_category_link( $category_id );
				?>

				<a href="<?php echo esc_url( $category_link ); ?>" title="Category Name">

				<img src="<?php echo(get_bloginfo('template_directory')); ?>/images/giveaway.jpg" width="250" height="" alt="" />
			</div></a>

			<div class="category">
				<p>food</p>

				<?php $category_id = get_cat_ID( 'food' );

				    // Get the URL of this category
				    $category_link = get_category_link( $category_id );
				?>

				<a href="<?php echo esc_url( $category_link ); ?>" title="Category Name">

				<img src="<?php echo(get_bloginfo('template_directory')); ?>/images/food2.jpg" width="250" height="" alt="" />
			</div></a>

		</div>
	
	
	
	<h2>archives & blogroll</h2>
	
	<div class="sidebar-widget">
	
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("bottom Sidebar") ) : ?>
			  <div id="secondary" class="widget-area">
			   <ul class="xoxo">

			   </ul>
			  </div><!– #secondary .widget-area –>
			<?php endif; ?>
			
	</div><!-- archives -->
	
	<div class="center">
	
	<a href="http://rstyle.me/ad/c9qqd6hw" target="_blank"><img src="http://ad.linksynergy.com/fs-bin/show?id=QFGLnEolOWg&bids=206135.10000502&type=4" /></a>
	

	</div><!-- center -->
	
</div><!--sidebar-->