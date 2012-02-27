<?php get_header(); 

?>
	<div class="clear"></div>
	
	<div id="content" class="clearfix">
		
		<div id="main_content">
			
			<?php /* The Loop — with comments! */  

			if ( is_home()) {

				global $query_string;
			   query_posts( $query_string.'&cat=-31'); 
			}

			?>
			
			<?php
			global $query_string;

			$query_args = explode("&", $query_string);
			$search_query = array();

			foreach($query_args as $key => $string) {
				$query_split = explode("=", $string);
				$search_query[$query_split[0]] = urldecode($query_split[1]);
			} // foreach

			$search = new WP_Query($search_query);
			?>



			<?php while ( have_posts() ) : the_post() ?>


			<div class="entry">


						<div class="postdate">
						        <div class="day"><span><?php the_time('d') ?></span></div>
								<div class="month"><h4><?php the_time('M') ?></h4></div>
								<div class="year"><h4><?php the_time('Y') ?></h4></div>
						</div>


			<?php /* Create a div with a unique ID thanks to the_ID() and semantic classes with post_class() */ ?>  
			    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>    
			<?php /* an h2 title */ ?>      
			     <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

			<?php /* Microformatted, translatable post meta */ ?>          
			     <!-- <div class="entry-meta">
			     			      <p><span class="meta-prep meta-prep-author"><?php _e('By ', 'your-theme'); ?></span>
			     			      <span class="author vcard"><a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'your-theme' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
			     			      <?php edit_post_link( __( 'Edit', 'your-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?><p>
			     			     </div> --><!– .entry-meta –>



				<?php if(function_exists('get_attribute_data')) {
					get_attribute_data('post-img', 'Alt text for the image', 'Title text for the image', 530, 450); 
				} ?>





			<?php /* The entry content */ ?>    
			     <div class="entry-content">
					<p><?php the_content( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'your-theme' )  ); ?></p>
					<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'your-theme' ) . '&after=</div>') ?>
			     </div><!– .entry-content –>




			<div class="clear"></div>




			<?php /* Microformatted category and tag links along with a comments link */ ?>    
			     <div class="entry-utility">
			      <p><span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Posted in ', 'your-theme' ); ?></span><?php echo get_the_category_list(', '); ?></span>
			      <span class="meta-sep"> | </span>
			      <?php the_tags( '<span class="tag-links"><span class="entry-utility-prep entry-utility-prep-tag-links">' . __('Tagged ', 'your-theme' ) . '</span>', ", ", "</span>\n\t\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
			
				<span class="meta-sep"></span>
				
				<br />
				<br />
			      <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'your-theme' ), __( '1 Comment', 'your-theme' ), __( '% Comments', 'your-theme' ) ) ?></span>
			      <?php edit_post_link( __( 'Edit', 'your-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t\n" ) ?><p>
			     </div><!– #entry-utility –>



			    </div><!– #post-<?php the_ID(); ?> -->

			<?php /* Close up the post div and then end the loop with endwhile */ ?>  

			<div class="clear"></div>

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
		

			
			
			<?php $orig_post = $post;
					global $post;
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
			//wp_reset_query(); 
			
			 ?>
			
			</div><!-- entry -->
			
			<?php endwhile; ?>

			<? kriesi_pagination($pages = '', $range = 4); ?>
			
			

			<div class="bottom_ad">

				<a href="http://rstyle.me/ad/c3sqd6hw" target="_blank"><img src="http://ad.linksynergy.com/fs-bin/show?id=QFGLnEolOWg&bids=243030.10000018&type=4" /></a>

			</div>
			
				
		</div><!-- main content -->
		
<?php get_sidebar(); ?>

	<div class="clear"></div>

</div><!--content-->

</div><!--wrapper-->

<?php get_footer(); ?>
	
</body>

</html>