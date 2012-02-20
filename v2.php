<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Your Website</title>
	
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
	
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
				
				clonedEl.css({'visibility':'visible'}).find('a').each(function (){
					$(this).css('color','#ffffff');
				});
				//el.addClass("fixed");
				// el.css({'position':'fixed', 'top': '0', 'z-index' :'4500'})
				//el.stop().animate({"marginTop": ($(window).scrollTop() + 30) + "px"}, "slow");
			}
			
			else {
				clonedEl.css('visibility','hidden');
				//el.removeClass("fixed");
			}
			
		}).trigger("scroll");	
		
		
		
			$('.post img:first').hover(
				
				function() {
					$('.post h2, .post h3').fadeOut("slow");
				},
				
				function() {
					$('.post h2, .post h3').fadeIn("slow");
				}
			);
			
		});
		
</script>
	
</head>

<body>
	

<div id="wrapper">
			
	<div id="header">
		
	<p class="tagline">fashion, lifestyle and other stuff</p>	
			
	<div class="clear"></div>
		
		<h1 id="logo"><span>Just</span>Patience</h1>
	
	</div><!--/header-->
	
<div id="menu">
	
	<ul class="main_nav">
		<li class="selected"><a href="index.php">home</a></li>
		<li><a href="music.php">about</a></li>
		<li><a href="video.php">shopping</a></li>
		<li><a href="gallery.php">contact</a></li>
	</ul>
	
		
	<form id="search-form">
			
		<input type="text" id="search" name="search" value="search"/>
		<input type="submit" id="search-submit" name="search-submit" value="search" />
		
	</form>	
		
</div><!--/menu-->
	
	<div class="clear"></div>
	
	<div id="content" class="clearfix">
		
		<div id="main_content">
			
			<div class="post">
				
				<div class="date">
					
					<h3>29</h3>
					
					<h4>jan</h4>
					
					<h4>2012</h4>
					
					<!-- <img src="images/rss2.png" width="50" height="" alt="" />
										<img src="images/facebook2.png" width="50" height="" alt="" />
										<img src="images/twitter2.png" width="50" height="" alt="" />
										<img src="images/google2.png" width="50" height="" alt="" /> -->
					
				</div><!--/date-->
				
				<h2>lookbook: ASOS dress shirt and shoes</h2>
				
				<h3 class="comment"><span>{244}</span> comments</h3>	
				
				<img src="images/jp5.jpg" width="640px" height="" alt="" />
								
				<img src="images/jp6.jpg" width="640px" height="" alt="" />
				
				<img src="images/jp7.jpg" width="640px" height="" alt="" />
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				
				<div class="post-info">
					
					<p>posted under: <span>fashion, home, lookbook, travel</span>| tagged <span>fashion, home, lookbook, travel</span></p>
					
				<h3>123 comments</h3>
					
				</div>
				
				<div id="similar-posts">
					
					<h3>some similar posts you might like</h3>

					<div class="similar-post">
						<p>this is a similar post</p>
						<img src="images/jp5.jpg" width="220px" height="" alt="" />
					</div>

					<div class="similar-post">
						<p>this is another similar post</p>
						<img src="images/jp5.jpg" width="220px" height="" alt="" />
					</div>

					<div class="similar-post">
						<p>this is a long heading for a similar post</p>
						<img src="images/jp5.jpg" width="220px" height="" alt="" />
					</div>
					
				</div><!--/similar_posts-->
				
		</div>
			
			
			
			
			<div class="post">
				
				<div class="date">
					
					<h3>29</h3>
					
					<h4>january</h4>
					
					<p>posted under: <span>fashion, home, lookbook, travel</span>| tagged <span>fashion, home, lookbook, travel</span></p>
					
				</div><!--/date-->
				
				<h2>lookbook: ASOS dress shirt and shoes</h2>
				
					<div class="post-meta">
						<p>by <span>patience</span>  	     posted on <span>jan 29</span>        55<span> comments</span></p>
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
			
			<img src="images/ad4.jpg" width="259" height="" alt="" />
				
			
			
			<h2>follow</h2>
			
			<div class="blog_loving clearfix" style="text-align:center; margin-bottom:24px;">
			
			<a title="JustPatience on Bloglovin" href="http://www.bloglovin.com/en/blog/2700962/justpatience/follow"><img alt="bloglovin" border="0" src="http://www.bloglovin.com/widget/bilder/en/widget.gif" /></a>
			
			</div><!--/blog_loving-->
			
			<img src="images/rss2.png" width="50" height="" alt="" />
			<img src="images/facebook2.png" width="50" height="" alt="" />
			<img src="images/twitter2.png" width="50" height="" alt="" />
			<img src="images/google2.png" width="50" height="" alt="" />
			
			<img src="images/asos_ad.gif" width="259" height="" alt="" />
			
			<img src="images/imgad.jpeg" width="259" height="" alt="" />
			
			<div id="categories">
				
				<h2>Categories</h2>
				
				<div class="category">
					<p>lookbook</p>
					<img src="images/jp5.jpg" width="110px" height="" alt="" />
				</div>
				
				<div class="category">
					<p>fashion</p>
					<img src="images/jp5.jpg" width="110px" height="" alt="" />
				</div>
				
				<div class="category">
					<p>dresses</p>
					<img src="images/jp5.jpg" width="110px" height="" alt="" />
				</div>
				
				<div class="category">
					<p>Lookbooks</p>
					<img src="images/jp5.jpg" width="110px" height="" alt="" />
				</div>
				
				
				
			</div>
			
			<h2>About the blog</h2>
			
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
				</p>
				
			
				
			<img src="images/imgadf.jpeg" width="259" height="" alt="" />
			
			<img src="images/asos_ad.gif" width="259" height="" alt="" />
			
			<img src="images/ad4.jpg" width="259" height="" alt="" />
			
			<h2>Archives</h2>
				
				<ul>
					<li><a href="index.php">February</a></li>
					<li><a href="music.php">January</a></li>
					<li><a href="video.php">2011</a></li>
					<li><a href="gallery.php">2010</a></li>
					<li><a href="blog.php">2009</a></li>
				</ul>
				
				
				<img src="images/imgadf.jpeg" width="259" height="" alt="" />

				<img src="images/asos_ad.gif" width="259" height="" alt="" />

				<img src="images/ad4.jpg" width="259" height="" alt="" />
			
		</div>
	
</body>

</html>