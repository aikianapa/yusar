var sections = [
	{
		"height":500,
		"handler":function(){}
	},
	//картинка органа появляется снизу
	{
		"height":300,
		"handler":function(position){
			var a = brain.start_pos
			var b = (document.documentElement.clientHeight - brain.getSize()) / 2
			var delta = b - a
			var percent = delta / 100
			brain.setPos(a + position * percent)
		}
	},
	
	//картинка органа вспыхивает
	{
		"height":100,
		"handler":function(position){
			brain.setSaturate(position)
			brain.setOpacity2(position)
		}
	},
	
	//картинка затемняется и уменьшается
	{
		"height":100,
		"handler":function(position){
			brain.setSaturate(100-position)
			brain.setSize(brain.start_size-position)
		}
	},
	//статистика
	{
		"height":1500,
		"handler":function(position){
			lf_statistics.page1.setValue(position)
		}		
	},
	{
		"height":1500,
		"handler":function(position){
			lf_statistics.page2.setValue(position)
		}		
	},
	{
		"height":200,
		"handler":function(position){
			brain.setOpacity2(100-position)
			brain.setOpacity(100-position)
		}
	},
]

var placeholder = document.querySelector('#qbody')
var title = document.querySelector('title')

var sum = 0

for(var i in sections){
	var section = sections[i]
	section.start = sum
	sum += section.height
	section.end = sum
	section.index=i
}

placeholder.style.height = sum + 'px'

var old_index

window.addEventListener('scroll', function() {
	var last_section = sections[sections.length-1]
	var section = sections.find(function(section){
		if(section.start<=pageYOffset && section.end>=pageYOffset){
			return true
		}
	}) || last_section

	var index = section.index

	if(index>old_index){
		for(var i=old_index;i<index;i++){
			sections[i].handler(100)
		}
	}else if(index<old_index){
		for(var i=old_index;i>index;i--){
			sections[i].handler(0)			
		}
	}
	
	var pos = (pageYOffset - section.start) / (section.height/100)
	section.handler(Math.min(100,pos))

	old_index = index
})
