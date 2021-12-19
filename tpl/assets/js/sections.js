function is_mobile(){
	return document.documentElement.clientWidth<=750
}

//коэффициент наложения одного ряда блоков статистики на другой
var lf_overlap = is_mobile() ? 0 : 10
//высота зоны статистики
var lf_height  = is_mobile() ? 7000 : 3000

var sections = [
    //картинка органа появляется снизу
    {
        "height": 1000,
        "handler": function(position) {
            var a = brain.start_pos
            var b = (document.documentElement.clientHeight - brain.getSize()) / 2
            var delta = b - a
            var percent = delta / 100
            brain.setPos(a + position * percent)
        }
    },

    //картинка органа вспыхивает
    {
        "height": 200,
        "handler": function(position) {
            brain.setOpacity(100)
            brain.setSaturate(Math.min(50, position / 2))
            brain.setOpacity2(Math.min(50, position / 2))
        }
    },

	//ожидание
	{
		"height":850,
		"handler":function(pos){
//			console.log('зона ожидания: ' + pos)
		}
	},

    //картинка затемняется и уменьшается
    {
        "height": 200,
        "handler": function(position) {
            var oldsize = brain.getSize()

            brain.setSaturate(100 - position)
            brain.setOpacity(0)
            brain.setOpacity2(70 - position / 2)

            var newsize = brain.start_size - position + (window.innerWidth > 450 ? 50 : 0)
            var delta = oldsize - newsize

            brain.setSize(newsize)
            brain.setPos(brain.getPos() + delta / 2)
        }
    },
    //статистика
    {
    	"label":"stats",
    	"height": lf_height,
    	"handler":function(position,dir){
    		var f = lf_overlap   //высота области в которой обе подсекции накладываются друг на друга
    		var position1 //позиция в первой подсекции
    		var position2 //во второй
			var f2 = f/2  //половина области наложения
			var s1 = [0, 50+f2]   //первая подсекция
			var s2 = [50-f2, 100] //вторая
			var percent = s1[1]/100


			if(position<s1[1]){
				position1 = position/percent
				lf_statistics.page1.setValue(position1,dir)
			}else{
				lf_statistics.page1.setValue(100,dir)
			}

			if(position>s2[0]){
				position2 = (position - s2[0]) / percent
				lf_statistics.page2.setValue(position2,dir)
			}else{
				lf_statistics.page2.setValue(0,dir)
			}

    	}
    },
    //изчезновение картинки
    {
        "height": 200,
        "handler": function(position) {
            brain.setOpacity2(50 - position / 2)
            brain.setOpacity(0)
        }
    }
]

var current = 0
var $$y = 0
var $a
var $b
var $flag = true
var placeholder = document.querySelector('#qbody')
var title = document.querySelector('title')
var stats = sections.find(function(section){
	return section.label === 'stats'
})

var sum = 0

for (var i in sections) {
    var section = sections[i]
    section.start = sum
    sum += section.height
    section.end = sum
    section.index = i
}


var old_index

function getparams(index){
	var f = stats.height / 100 * lf_overlap / 2
	var page  = index<5 ? 1 : 2
	var start = page == 1 ? stats.start : stats.start + stats.height/2 - f
	start = start + get_pad()		
	var end   = start + stats.height/2 + f
	var h     = end - start
	if(index>4){ index = index - 5}		
	var h1 = h / (is_mobile() ? 5 : 6)
	var a = start + h1 * index //позиция прокрутки когда блок только начинает появляться
	var b = a + (is_mobile() ? h1/4 : h1/2) //позиция прокрутки когда блок чуть чуть показался
	var c = a + (is_mobile() ? h1/2 : h1) //позиция когда блок появился полностью
	var d = c - b //на сколько пикселей прокрутить

	return {a,b,c,d}	
}

//прокрутить страницу до определённого блока статистики
function $scroll_to(index,reverse){		
		console.log({index,reverse})
		if(!$flag){return;}

		$flag = false
		
		var {a,b,c,d} = getparams(index)
		$$y = (reverse ? c : b)
		window.scrollBy(0, $$y - pageYOffset)

		var y = pageYOffset
		var step = 15
		var offset = 0

		function move(){
			if(reverse){
				$$y = - offset + y
			}else{
				$$y = offset + y
			}
			var $offset = $$y - pageYOffset
			scrollBy(0,$offset)		
			offset = offset + step

			if(reverse){
				if(offset<d){
					requestAnimFrame(move)	
				}else{
					$$y=b
					scrollBy(0,b-pageYOffset)	
					if(reverse){
						current = current - 1
					}else{
						current = current + 1
					}
					$a = current ? getparams(current-1).c : -1
					$b = current == 10 ? Infinity : getparams(current).b
					console.log({current,$a,$b})

					$flag = true

				}
			}else if(offset<d){
				requestAnimFrame(move)
			}else{
				$$y = c
				scrollBy(0,c-pageYOffset)
				if(reverse){
					current = current - 1
				}else{
					current = current + 1
				}
				$a = current ? getparams(current-1).c : -1
				$b = current == 10 ? Infinity : getparams(current).b
				console.log({current,$a,$b})

				$flag = true
			}
		}

		move()
}	



var btn_top
var h

function get_pad(){
	return btn_top - h + 100
}

on_really_load(function(){
	console.log('load')
	h = document.documentElement.clientHeight

//	scrollBy(0,-pageYOffset)

	

	if(!btn_top){
//			btn_top = document
//				.querySelector('.lf-header-btn')
//				.getBoundingClientRect()
//				.top //+ pageYOffset
//			console.log({btn_top,pageYOffset})
		btn_top=750
	}


	var $$old_y = 0

	$a = current ? getparams(current-1).c : -1
	$b = getparams(current).b
	console.log({current,$a,$b})
	
	window.addEventListener('scroll', function() {
		var Y = $flag ? pageYOffset : $$y

		var dir = Y > $$old_y ? 'down' : 'up'

		if($flag && dir==='down' && Y>$b){
			console.log('выход за нижнюю границу')
			$scroll_to(current)
			return;
		}else if($flag && dir==='up' && Y<$a){
			console.log('выход за верхнюю границу')
			$scroll_to(current-1,true)
			return;
		}

		$$old_y = Y

		var pad = get_pad()
		stats.$start  = stats.start + pad
		var y = Y - pad

		window.placeholder_height = placeholder.style.height = sum + pad + 'px'

		if(y<0){
			sections[0].handler(0)
			return;
		}
		
    	var last_section = sections[sections.length - 1]
    	var section = sections.find(function(section) {
        	if (section.start <= y && section.end >= y) {
            	return true
        	}
	    }) || last_section

	    var index = section.index

    	if (index > old_index) {
        	for (var i = old_index; i < index; i++) {
            	sections[i].handler(100)
        	}
	    } else if (index < old_index) {
    	    for (var i = old_index; i > index; i--) {
        	    sections[i].handler(0)
        	}
	    }

    	var pos = (y - section.start) / (section.height / 100)


    	section.handler(Math.min(100, pos),dir)

	    old_index = index
	})
	
})

