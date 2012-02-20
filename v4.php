<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Your Website</title>
	
	<link rel="stylesheet" type="text/css" href="style4.css" media="screen" />
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
	
		
		
	</script>
	
	<script type="text/javascript" charset="utf-8">
	
		$(document).ready(function() {
			
			var clonedEl, el = $('.main_nav');
			
			clonedEl = el;
			
			clonedEl.before(el.clone()).addClass("fixed");
			
		$(window).scroll(function(){
			
			var el = $('.main_nav'),
			offset	= el.offset(),
			scrollTop = $(window).scrollTop();
			
			if(scrollTop > offset.top) {
				
				clonedEl.css('visibility','visible');
				//el.addClass("fixed");
				// el.css({'position':'fixed', 'top': '0', 'z-index' :'4500'})
				//el.stop().animate({"marginTop": ($(window).scrollTop() + 30) + "px"}, "slow");
			}
			
			else {
				clonedEl.css('visibility','hidden');
				//el.removeClass("fixed");
			}
			
		}).trigger("scroll");	
			
			
		});
		
	</script>
	
</head>

<body>
	

<div id="wrapper">
			
	<div id="header">
		
		
			
	<div class="clear"></div>
		
		<h1 id="logo"><span>Just</span>Patience</h1>
		
		
		
	</div><!--/header-->	
		
		
	<ul class="main_nav">
		<li class="selected"><a   href="index.php">home</a></li>
		<li><a href="music.php">about</a></li>
		<li><a href="video.php">shopping</a></li>
		<li><a href="gallery.php">contact</a></li>
	</ul>
	
	<div class="clear"></div>
	
	<div id="content" class="clearfix">
		
		<div id="main_content">
			
			<div class="post">
				
				<div class="date">
					
					<h3>29</h3>
					
					<h4>jan</h4>
					
				</div><!--/date-->
				
				<h2>lookbook: ASOS dress shirt and shoes</h2>
				
					<!-- <div class="post-meta">
										<p><img src="images/user_female.png" width="18" alt="" />  by <span>patience</span>            <img src="images/calendar.png" width="18" alt="" />  posted on <span>jan 29</span>        <img src="images/comment.png" width="24" alt="" />55<span> comments</span></p>
									</div> -->
				
				<img src="images/jp5.jpg" width="640px" height="" alt="" />
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				
				<img src="images/jp6.jpg" width="640px" height="" alt="" />
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				
				<img src="images/jp7.jpg" width="640px" height="" alt="" />
				
				<div class="post-info">
					
					<p>posted under: <span>fashion, home, lookbook, travel</span>| tagged <span>fashion, home, lookbook, travel</span></p>
					
				</div>
				
				
				
			</div>
			
			
			
			
			<div class="post">
				
				<div class="date">
					
					<h3>29</h3>
					
					<h4>january</h4>
					
					<p>posted under: <span>fashion, home, lookbook, travel</span>| tagged <span>fashion, home, lookbook, travel</span></p>
					
				</div><!--/date-->
				
				<h2>lookbook: ASOS dress shirt and shoes</h2>
				
					<div class="post-meta">
						<p><img src="images/user_female.png" width="24" alt="" />  by <span>patience</span>  	        posted on <span>jan 29</span>        55<span> comments</span></p>
					</div>
				
				<img src="images/jp1.jpg" width="640px" height="" alt="" />
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				
				<img src="images/jp2.jpg" width="640px" height="" alt="" />
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				
				<img src="images/jp3.jpg" width="640px" height="" alt="" />
				
				<div class="post-info">
					
					<p>posted under: <span>fashion, home, lookbook, travel</span>| tagged <span>fashion, home, lookbook, travel</span></p>
					
				</div>
				
				
				
			</div>
			
			
			
			
		</div>
		
		<div id="sidebar">
			
			<img src="images/ad4.jpg" width="250" height="" alt="" />
			
			<h2>follow</h2>
			
			<div class="blog_loving clearfix" style="text-align:center; margin-bottom:24px;">
			
			<a title="JustPatience on Bloglovin" href="http://www.bloglovin.com/en/blog/2700962/justpatience/follow"><img alt="bloglovin" border="0" src="http://www.bloglovin.com/widget/bilder/en/widget.gif" /></a>
			
			</div><!--/blog_loving-->
			
			<img src="images/rss2.png" width="50" height="" alt="" />
			<img src="images/facebook2.png" width="50" height="" alt="" />
			<img src="images/twitter2.png" width="50" height="" alt="" />
			<img src="images/google2.png" width="50" height="" alt="" />
			
			<img src="images/imgad.jpeg" width="250" height="" alt="" />
			
			<h2>About the blog</h2>
			
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
				</p>
				
			<h2>Categories</h2>
				
				<ul>
					<li><a href="index.php">home</a></li>
					<li><a href="music.php">music</a></li>
					<li><a href="video.php">video</a></li>
					<li><a href="gallery.php">gallery</a></li>
					<li><a href="blog.php">blog</a></li>
					<li><a href="events.php">events</a></li>
					<li><a href="bio.php">bio</a></li>
				</ul>
				
			<img src="images/imgadf.jpeg" width="250" height="" alt="" />
			
			<img src="images/asos_ad.gif" width="250" height="" alt="" />
			
			<img src="images/ad4.jpg" width="250" height="" alt="" />
			
			<h2>Archives</h2>
				
				<ul>
					<li><a href="index.php">February</a></li>
					<li><a href="music.php">January</a></li>
					<li><a href="video.php">2011</a></li>
					<li><a href="gallery.php">2010</a></li>
					<li><a href="blog.php">2009</a></li>
				</ul>
			
		</div>
	
</body>

</html>