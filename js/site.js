$(document).ready(function() {
	
	//top drop down menu
	
	// $('.drop-down').hide();
	// 	
	// 	$('#top_nav ul > li').hover(function(e) {
	// 	
	// 		$(this).find('.drop-down').slideDown('fast');
	// 	},	
	// 	function(e) {
	// 		$(this).find('.drop-down').hide('slow');
	// 		    
	// 	});	
	
	// footer bar
	
	
	$('#footer').hide();
	
	$(window).scroll(function(){
	
		scrollTop = $(window).scrollTop();
	
			if(scrollTop > 3200) {
				$('#footer').slideDown('slow');
			} 
			else {
				$('#footer').slideUp('slow');
			}
	});
	
	//load about page with ajax
	
	// var links = $('.main_nav a');
	// 	
	// 	
	// 	
	// 	links.live('click', function(e) {
	// 		
	// 		var div = '<div class="new-content"></div>';
	// 		
	// 		$('#content').before(div);
	// 		
	// 		$('.new-content').css('display','none');
	// 		
	// 		var $this = $(this);
	// 		
	// 		var target = $this.attr('href') + ' .ajax-content';
	// 		
	// 		$('.new-content').load(target, function(){
	// 			
	// 			
	// 			$('.ajax-content').show('10000').css({'width':'100%', 'overflow':'hidden'}).animate({'height':'300px'}, 3000);
	// 			
	// 		});
	// 		
	// 
	// 		
	// 		console.log(target);
	// 		
	// 		console.log('you clicked the link');
	// 		
	// 		e.preventDefault();
	// 
	// 	});
	// 	
	// 	console.log(links);
	
	
	//scrip for navigation cloning and hiding
	
	// var clonedEl, el = $('.main_nav');
	// 	
	// 	clonedEl = el;
	// 	
	// 	clonedEl.before(el.clone()).addClass("fixed");
	// 	
	// $(window).scroll(function(){
	// 	
	// 	var el = $('.main_nav'),
	// 	offset	= el.offset(),
	// 	scrollTop = $(window).scrollTop();
	// 	
	// 	if(scrollTop > offset.top) {
	// 		
	// 		clonedEl.css({'visibility':'visible'}).find('a').each(function (){
	// 			$(this).css('color','#ffffff');
	// 		});
	// 		//el.addClass("fixed");
	// 		// el.css({'position':'fixed', 'top': '0', 'z-index' :'4500'})
	// 		//el.stop().animate({"marginTop": ($(window).scrollTop() + 30) + "px"}, "slow");
	// 	}
	// 	
	// 	else {
	// 		clonedEl.css('visibility','hidden');
	// 		//el.removeClass("fixed");
	// 	}
	// 	
	// }).trigger("scroll");	



	// $('.post img:first').hover(
	// 		
	// 		function() {
	// 			$('.post h2, .post h3').fadeOut("slow");
	// 		},
	// 		
	// 		function() {
	// 			$('.post h2, .post h3').fadeIn("slow");
	// 		}
	// 	);
	
});