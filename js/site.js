(function($){$.fn.hoverIntent=function(f,g){var cfg={sensitivity:7,interval:100,timeout:0};cfg=$.extend(cfg,g?{over:f,out:g}:f);var cX,cY,pX,pY;var track=function(ev){cX=ev.pageX;cY=ev.pageY};var compare=function(ev,ob){ob.hoverIntent_t=clearTimeout(ob.hoverIntent_t);if((Math.abs(pX-cX)+Math.abs(pY-cY))<cfg.sensitivity){$(ob).unbind("mousemove",track);ob.hoverIntent_s=1;return cfg.over.apply(ob,[ev])}else{pX=cX;pY=cY;ob.hoverIntent_t=setTimeout(function(){compare(ev,ob)},cfg.interval)}};var delay=function(ev,ob){ob.hoverIntent_t=clearTimeout(ob.hoverIntent_t);ob.hoverIntent_s=0;return cfg.out.apply(ob,[ev])};var handleHover=function(e){var ev=jQuery.extend({},e);var ob=this;if(ob.hoverIntent_t){ob.hoverIntent_t=clearTimeout(ob.hoverIntent_t)}if(e.type=="mouseenter"){pX=ev.pageX;pY=ev.pageY;$(ob).bind("mousemove",track);if(ob.hoverIntent_s!=1){ob.hoverIntent_t=setTimeout(function(){compare(ev,ob)},cfg.interval)}}else{$(ob).unbind("mousemove",track);if(ob.hoverIntent_s==1){ob.hoverIntent_t=setTimeout(function(){delay(ev,ob)},cfg.timeout)}}};return this.bind('mouseenter',handleHover).bind('mouseleave',handleHover)}})(jQuery);



$(document).ready(function() {
	
	// var config = {    
	// 	     over: function(){
	// 			$('#subscribe').animate({'right': 0});
	// 		}, 
	// 	     timeout: 500, // number = milliseconds delay before onMouseOut    
	// 	     out: function() {
	// 			$('#subscribe').animate({'right': -240});
	// 		}  
	// 	};
	// 
	// 	$("#subscribe").hoverIntent( config );
	
	// $('#subscribe').css({'margin-right': -240});
		$('#subscribe-link').click(function(e){
			e.preventDefault();
			$('#subscribe').animate({'right' : 0});
		});
		
		$('#subscribe span.close').click(function(e){
			e.preventDefault();
			$('#subscribe').animate({'right' : -240});
		});
	
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