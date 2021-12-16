window.addEventListener('load', function(){
	var $menu = $('.lf-menu02')
	var flag  = true
	var y1 = 0
	var y = 0
	var placeholder = document.querySelector('#qbody')
	var $placeholder = $(placeholder)
	var placeholder_top = $placeholder.offset().top

	console.log(placeholder_top)

	//ловим момент когда второе меню появляется и вызываем пристыковку
	window.addEventListener('scroll', function() {
		var top    = $menu.offset().top - pageYOffset;
		var bottom = document.documentElement.clientHeight - $menu.height() - top
		var y2 = pageYOffset
		var pad = 40

		if(bottom>pad && flag && y2 > y1 && top){
			flag = false
			var g = pad-bottom
			scrollBy(0,g)
			y = pageYOffset
			move()
		}

		y1 = y2
	})

	//пристыковка
	function move(){
		var step = 15

		window.scrollBy(0,step-(pageYOffset-y) )
		var top = $menu.offset().top - pageYOffset;

		if(top>step){
			requestAnimFrame(move)
		}else{
			window.scrollBy(0,top)
			flag = true
		}
		
		y = pageYOffset
	}
})
