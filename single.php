<?php get_header(); ?>

<div class="clear"></div>

<div id="content" class="clearfix">
	
	<div id="main_content" class="ajax-content">
		
		<?php the_post(); ?>
		
		<div class="entry">
		
		<div class="post">
			
			<div class="postdate">
			        <div class="day"><span><?php the_time('d') ?></span></div>
					<div class="month"><h4><?php the_time('M') ?></h4></div>
					<div class="year"><h4><?php the_time('Y') ?></h4></div>
			</div>

		<h2 class="entry-title"><?php the_title(); ?></h2>
		
		<!-- <div class="entry-meta">
			      <p><span class="meta-prep meta-prep-author"><?php _e('By ', 'your-theme'); ?></span>
			      <span class="author vcard"><a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'your-theme' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
			    
			      <?php edit_post_link( __( 'Edit', 'your-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?><p>
			     </div> --><!– .entry-meta –>
		
		
		<?php if(function_exists('get_attribute_data')) {
			get_attribute_data('post-img', 'Alt text for the image', 'Title text for the image', 540, 450); 
		} ?>
		
		<p><?php the_content(); ?></p>
		<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'your-theme' ) . '&after=</div>') ?>
		
		<div id="like">
		
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
		
		
		
		<div class="entry-utility">
		     <?php printf( // __( 'This entry was posted in %1$s%2$s.' ),
		     // 		      get_the_category_list(', '),
		      get_the_tag_list( __( 'Tags ', 'your-theme' ), ', ', '' ),
		      get_permalink(),
		      the_title_attribute('echo=0'),
		      comments_rss() ) ?>
		
			<br />
			<br />

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
		     </div><!– .entry-utility –>
		
		
		
			
		
		</div><!--/post-->
		
		<div id="nav-below" class="navigation">
		     <div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">&laquo;</span> %title' ) ?></div>
		     <div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">&raquo;</span>' ) ?></div>
		</div><!– #nav-below –>
		
			
		<?php // $orig_post = $post;
		// 		global $post;
		// 		$categories = get_the_category($post->ID);
		// 		if ($categories) {
		// 		$category_ids = array();
		// 		foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
		// 
		// 		$args=array(
		// 		'category__in' => $category_ids,
		// 		'post__not_in' => array($post->ID),
		// 		'posts_per_page'=> 3, // Number of related posts that will be shown.
		// 		'caller_get_posts'=>1
		// 		);
		
		//for use in the loop, list 5 post titles related to first tag on current post
		$tags = wp_get_post_tags($post->ID);
		if ($tags) {
		  $first_tag = $tags[0]->term_id;
		
		   $tag_ids  = array();
		
		foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
						
		  $args=array(
		    'tag__in' => $tag_ids,
		    'post__not_in' => array($post->ID),
		    'showposts'=>4,
		    'caller_get_posts'=>1
		   );
		
		$my_query = new wp_query( $args );
		if( $my_query->have_posts() ) {
		echo '<div id="related_posts"><h3>Related Posts</h3><ul>';
		while( $my_query->have_posts() ) {
		$my_query->the_post();?>
		
		
		
			
		<li><div class="relatedthumb"><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail(array(90,120)); ?></a></div>
		<div class="relatedcontent">
		<h3 class="related_header"><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
		<!-- <h4><?php the_time('M j, Y') ?></h4> -->
		</div>
		</li>
		
	
		
		<?
		}
		echo '</ul>'; ?>
		
		<div class="clear"></div>
		
		<?php
		
		echo '</div>';
		}
		}
		$post = $orig_post;
		wp_reset_query(); ?>
		
		
		<?php comments_template('', true); ?>
		
		</div><!--/entry-->
		
		<div class="bottom_ad">

			<a href="http://rstyle.me/ad/c3sqd6hw" target="_blank"><img src="http://ad.linksynergy.com/fs-bin/show?id=QFGLnEolOWg&bids=243030.10000018&type=4" /></a>

		</div>

	</div><!--/maincontent-->
	
	<?php get_sidebar(); ?>

		<div class="clear"></div>

	</div><!--content-->

	</div><!--wrapper-->

	<?php get_footer(); ?>

</body>

</html>