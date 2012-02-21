<?php
//hides wordpress version

remove_action('wp_head', 'wp_generator');

add_action('init', 'register_top_menu');
 
function register_top_menu() {
register_nav_menu('top_menu', __('Top Menu'));
}

//add widgetised sidebars 

if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'Top Sidebar',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'Bottom Sidebar',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3>',
'after_title' => '</h3>',
));


// add thumbnail support

add_theme_support( 'post-thumbnails' );

set_post_thumbnail_size( 90, 120, true );


//add kriesi pagination

function kriesi_pagination($pages = '', $range = 2)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class='pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
     }
}


// Produces an avatar image with the hCard-compliant photo class
function commenter_link() {
        $commenter = get_comment_author_link();
        if ( ereg( '<a[^>]* class=[^>]+>', $commenter ) ) {
                $commenter = ereg_replace( '(<a[^>]* class=[\'"]?)', '\\1url ' , $commenter );
        } else {
                $commenter = ereg_replace( '(<a )/', '\\1class="url "' , $commenter );
        }
        $avatar_email = get_comment_author_email();
        $avatar = str_replace( "class='avatar", "class='photo avatar", get_avatar( $avatar_email, 80 ) );
        echo $avatar . ' <span class="fn n">' . $commenter . '</span>';
} // end commenter_link


// Custom callback to list comments in the your-theme style
function custom_comments($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment;
        $GLOBALS['comment_depth'] = $depth;
  ?>

        <li id="comment-<?php comment_ID() ?>" <?php comment_class() ?>>
	
						
	
                <div class="comment-author vcard"><?php commenter_link() ?></div>
                <div class="comment-meta"><?php printf(__('Posted %1$s at %2$s', 'your-theme'),
                                        get_comment_date(),
                                        get_comment_time(),
                                        '#comment-' . get_comment_ID() );
                                        edit_comment_link(__('Edit', 'your-theme'), ' <span class="meta-sep">|</span> <span class="edit-link">', '</span>'); ?></div>

<span id="comment_number"><?php echo $GLOBALS['comment_number']; ?></span>


<?php $GLOBALS['comment_number']++ ; ?>

  <?php if ($comment->comment_approved == '0') _e("\t\t\t\t\t<span class='unapproved'>Your comment is awaiting moderation.</span>\n", 'your-theme') ?>
          <div class="comment-content">
                <?php comment_text() ?>
                </div>
                <?php // echo the comment reply link
                        if($args['type'] == 'all' || get_comment_type() == 'comment') :
                                comment_reply_link(array_merge($args, array(
                                        'reply_text' => __('Reply','your-theme'), 
                                        'login_text' => __('Log in to reply.','your-theme'),
                                        'depth' => $depth,
                                        'before' => '<div class="comment-reply-link">', 
                                        'after' => '</div>'
                                )));
     
                   endif;


                ?>
<?php } // end custom_comments


// Custom callback to list pings
function custom_pings($comment, $args, $depth) {
       $GLOBALS['comment'] = $comment;
        ?>
                <li id="comment-<?php comment_ID() ?>" <?php comment_class() ?>>
                        <div class="comment-author"><?php printf(__('By %1$s on %2$s at %3$s', 'your-theme'),
                                        get_comment_author_link(),
                                        get_comment_date(),
                                        get_comment_time() );
                                        edit_comment_link(__('Edit', 'your-theme'), ' <span class="meta-sep">|</span> <span class="edit-link">', '</span>'); ?></div>
    <?php if ($comment->comment_approved == '0') _e('\t\t\t\t\t<span class="unapproved">Your trackback is awaiting moderation.</span>\n', 'your-theme') ?>
            <div class="comment-content">
                        <?php comment_text() ?>
                        </div>
<?php } // end custom_pings

function get_attribute_data($key, $alt, $title, $width, $height) {
	global $post;
	$value = get_post_meta($post->ID, $key, true);
	if($value) {
		echo '<img src="'.$value.'" alt="'.$alt.'" title="'.$title.'" width="'.$width.'" height="'.$height.'" />';
	} else {
		return;
	}
}

?>