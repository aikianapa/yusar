
var sections = [
    //картинка органа появляется снизу
    {
        "height": 1000,
        "handler": function(position) {
        	console.log('fffff')
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
        "height": 1500,
        "handler": function(position) {
            lf_statistics.page1.setValue(position)
        }
    },
    {
        "height": 1500,
        "handler": function(position) {
            lf_statistics.page2.setValue(position)
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

var placeholder = document.querySelector('#qbody')
var title = document.querySelector('title')

var sum = 0

for (var i in sections) {
    var section = sections[i]
    section.start = sum
    sum += section.height
    section.end = sum
    section.index = i
}

placeholder.style.height = sum + 'px'

var old_index

window.addEventListener('load',function(){
	var btn_top
	var h = document.documentElement.clientHeight
	
	window.addEventListener('scroll', function() {
		if(!btn_top){
			btn_top = $('.lf-header-btn').offset().top
		}

		var pad = btn_top - h + 100
		var y = pageYOffset - pad

		if(y<0) return;
		
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
    	section.handler(Math.min(100, pos))

	    old_index = index
	})
	
})

