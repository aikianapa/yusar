window.addEventListener('load', function(){
	var menu = getmenu()
	var flag  = true
	var y1 = 0
	var y = 0
	var placeholder = document.querySelector('#qbody')
	var placeholder_top = placeholder.getBoundingClientRect().top

	window.addEventListener('resize', function(){
		menu = getmenu()
	})

	//ловим момент когда второе меню появляется и вызываем пристыковку
	window.addEventListener('scroll', function() {
		var top    = menu.getBoundingClientRect().top
		var bottom = document.documentElement.clientHeight - menu.offsetHeight - top
		var y2 = pageYOffset
		var pad = 40

		if(bottom>pad && flag && y2 > y1 && top>1){
			flag = false
			var g = pad-bottom
			scrollBy(0,g)
			y = pageYOffset
			move()
		}

		y1 = y2
	})

	function getmenu(){
		return document.querySelector(
			document.documentElement.clientWidth<=768 ? '.lf-menu03' : '.lf-menu02'
		)
	}

	//пристыковка
	function move(){
		var step = 15

		window.scrollBy(0,step-(pageYOffset-y) )
		var top = menu.getBoundingClientRect().top

		if(top>step){
			requestAnimFrame(move)
		}else{
			window.scrollBy(0,top)
			flag = true
		}
		
		y = pageYOffset
	}
})
