<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en-US" xmlns:fb="http://www.facebook.com/2008/fbml">

<head profile="http://gmpg.org/xfn/11">
    <title></title>
 
 <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 

 
 <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
 
 <?php wp_head(); ?>

	<link rel="image_src" href="<?php bloginfo('template_url'); ?>/images/screenshot.jpg" />
 
 <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
 <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
 <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

 <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24019212-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>


<body>
	
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	

<div id="wrapper">
			
	<div id="header">
			
	<div class="clear"></div>
		
		<div id="logo-wrapper" onclick="window.location.href='<?php bloginfo( 'url' ) ?>/'" style="cursor: pointer;">
		    <h1 id="logo"><span><a href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a></span></h1>
		<!-- <?php if ( is_home() || is_front_page() ) { ?>
				        <p id="blog-description"><?php bloginfo( 'description' ); ?></p>
				<?php } else { ?>
				        <div id="blog-description"><?php bloginfo( 'description' ); ?></div>
				<?php } ?> -->
		   </div><!– #logo-wrapper –>
	
	</div><!--/header-->
	
<div id="menu">
	
	<ul class="main_nav">
		<?php wp_nav_menu(array('menu' => 'top_menu')); ?>
	</ul>
	
		
	<form id="search-form">
			
		<input type="text" id="search" name="search" value="search"/>
		<input type="image" id="search-submit" src="<?php echo(get_bloginfo('template_directory')); ?>/images/search_icon.png" name="search-submit" alt="search" />
		
	</form>	
		
</div><!--/menu-->