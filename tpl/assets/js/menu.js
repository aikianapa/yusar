let lf2_flag = true

let lf2_f = 0

var $menu

window.addEventListener('load', function(){
	$menu  = $('.lf-menu02')
})

var lf_old_y = 0

window.addEventListener('scroll', function() {
	if($menu){
		var top    = $menu.offset().top - pageYOffset;
		var bottom = document.documentElement.clientHeight - $menu.height() - top

		if(bottom>40 && lf2_flag && pageYOffset > lf_old_y){
			console.time('lf-menu')
//			lf_menu_scroll(top)
		}
		
		lf_old_y = pageYOffset;
	}
})

function lf_menu_scroll(top){
	var y = pageYOffset
	lf2_flag = false
	requestAnimFrame(move)

	function move(){
	
		window.scrollBy(0,20)
		top-=20

		if(top>20){
			requestAnimFrame(move)
		}else{
			lf2_flag = true
			top    = $menu.offset().top - pageYOffset;
			window.scrollBy(0,top)
			console.timeEnd('lf-menu')
		}

	}
}

/*
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
*/
