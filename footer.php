<div id="footer">
	
<!-- <div id="footer-menu">	
	<ul class="footer-nav">
		<?php wp_nav_menu(array('menu' => 'top_menu')); ?>
	</ul>
</div> --><!--footer_menu-->

	<?php if ( is_home() || is_front_page() || is_page() ) { ?>
	
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
			
			<img src="<?php echo(get_bloginfo('template_directory')); ?>/images/yellow.jpg" width="250" height="" alt="" />
		</div></a>
		
		<div class="footer-category">
			<p>fashion</p>
			
			<?php $category_id = get_cat_ID( 'fashion' );

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
			
			<img src="<?php echo(get_bloginfo('template_directory')); ?>/images/food2.jpg" width="250" height="" alt="" />
		</div></a>
		
	</div><!-- footer categories -->
	
		<?php } else { ?>
			
			<div id="footer-wrapper">
			
		        <div id="footer-like">

				    <p><fb:like href="<?php echo get_permalink(); ?>" show_faces="true" width="350"></fb:like></p>

				    <div id="fb-root"></div>
				    <script>
				      window.fbAsyncInit = function() {
				        FB.init({appId: '185962248127628', status: true, cookie: true,
				                 xfbml: true});
				      };
				      (function() {
				        var e = document.createElement('script');
				        e.type = 'text/javascript';
				        e.src = document.location.protocol +
				          '//connect.facebook.net/en_US/all.js';
				        e.async = true;
				        document.getElementById('fb-root').appendChild(e);
				      }());
				    </script>
				</div>
				
				<div id="footer-comment-link">
					
					<?php if ( ('open' == $post->comment_status) && ('open' == $post->ping_status) ) : // Comments and trackbacks open ?>
					      <?php printf( __( '<a class="comment-link" href="#respond" title="Post a comment">Comment</a>', 'your-theme' ), get_trackback_url() ) ?>
					<?php elseif ( !('open' == $post->comment_status) && ('open' == $post->ping_status) ) : // Only trackbacks open ?>
					      <?php printf( __( 'Comments are closed, but you can leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'your-theme' ), get_trackback_url() ) ?>
					<?php elseif ( ('open' == $post->comment_status) && !('open' == $post->ping_status) ) : // Only comments open ?>
					      <?php _e( 'Trackbacks are closed, but you can <a class="comment-link" href="#respond" title="Post a comment">post a comment</a>.', 'your-theme' ) ?>
					<?php elseif ( !('open' == $post->comment_status) && !('open' == $post->ping_status) ) : // Comments and trackbacks closed ?>
					      <?php _e( 'Both comments and trackbacks are currently closed.', 'your-theme' ) ?>
					<?php endif; ?>
					<?php edit_post_link( __( 'Edit', 'your-theme' ), "\n\t\t\t\t\t<span class=\"edit-link\">", "</span>" ) ?>
				
				
					<div id="footer-social">


						<a href="http://www.facebook.com/pages/JustPatience/208612525847630
					 " target="blank" ><img class="no-border" src="<?php echo(get_bloginfo('template_directory')); ?>/images/facebook2.png" width="35" alt="" /></a>

					<a href="http://twitter.com/justpatie" alt="" target="blank" ><img class="no-border" src="<?php echo(get_bloginfo('template_directory')); ?>/images/twitter2.png" width="35" alt="" /></a>

					<a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><img class="no-border" src="<?php echo(get_bloginfo('template_directory')); ?>/images/rss2.png" width="35" alt="" /></a>



					<a href="<?php echo get_page_link(24); ?>"><img class="no-border" src="<?php echo(get_bloginfo('template_directory')); ?>/images/gmail2.png" width="35" alt="" /></a>

					<a title="JustPatience on Bloglovin" href="http://www.bloglovin.com/en/blog/2700962/justpatience/follow"><img alt="bloglovin" style="margin-top:10px;"  src="http://www.bloglovin.com/widget/bilder/en/lank.gif" /></a>

					</div><!--footer-social-->

					
				
				</div><!--footer-comment-link-->
				
			</div><!--footer-wrapper-->
				
		<?php } ?>
	
	
</div><!-- footer -->