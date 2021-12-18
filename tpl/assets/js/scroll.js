var on_really_load = (function(){
	var flag = true
	var funcs = []
	
	window.addEventListener('scroll', function() {
		if(flag){
			flag = false

			for(var i in funcs){
				funcs[i]()
			}
		}
	})

	return function(fn){
		if(flag){
			funcs.push(fn)
		}else{
			fn()
		}
	}
	
})()

