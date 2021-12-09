let lf2_flag = true

let lf2_f = 0

window.addEventListener('scroll', function() {
	var top = $('.lf-menu02').offset().top - $(window).scrollTop();
	var delta =lf2_f - pageYOffset
	var h = document.documentElement.clientHeight
	
	if(delta<0 && top<h && top>0 && lf2_flag){
			lf2_flag = false
	
			requestAnimFrame(move)
	
			function move(){				
				window.scrollBy(0,+30)
				var top = $('.lf-menu02').offset().top - $(window).scrollTop();

				if(top>30){
					requestAnimFrame(move)
				}else{
					lf2_flag = true
					window.scrollBy(0,top)
				}
			}
	}
	lf2_f = pageYOffset
})
