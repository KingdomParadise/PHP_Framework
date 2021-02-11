jQuery(function($){
	
	var $window = $(window);
	var isTweening = false;
	
	document.onmousewheel = function(){ customScroll(); }
	if(document.addEventListener){
		document.addEventListener('DOMMouseScroll', customScroll, false);
		document.addEventListener('mousewheel', customScroll, false);
	}
	 
	function customScroll(event){
	   
	   var delta = 0;
	   
	   if (!event){
		   event = window.event;
	   }
	   
	   if (event.wheelDelta) {
		   delta = event.wheelDelta/120;
	   } else if(event.detail) {
		   delta = -event.detail/3;
	   }
	   
	   if (delta){
			
			var scrollTop = $window.scrollTop();
			var finScroll = scrollTop - parseInt(delta*100) * 3;
											   
			TweenMax.to($window, 1, {
				scrollTo : { y: finScroll, autoKill:true },
				ease: Power2.easeOut,
				autoKill: true,
				overwrite: 5,
				onComplete: function(){ 
				}
			});
	   }
	   
	   if (event.preventDefault){
		   event.preventDefault();
	   }
	   
	   event.returnValue = false;
							
	}	
});