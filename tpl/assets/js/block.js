
var lf_statistics = (function(){
	var $page1 = document.querySelector('.lf-stats1')
	var $page2 = document.querySelector('.lf-stats2')
	var _count = 0
	var current = -1

	function is_mobile(){
		return document.documentElement.clientWidth<=750
	}

	function Block(block, $label){
		var outer = block.querySelector('.lf-stats-value-outer')
		var inner = block.querySelector('.lf-stats-value-inner')
		var text  = block.querySelector('.lf-stats-text')
		var count = _count++


		//плавно двигать блок. pos - положение центра блока от верхнего края страницы, в процентах
		function move_block(pos, label){

//			if(count == current && pos<=75){
//				automove()
//				console.log('k')
//			}
			
			if(is_mobile()){
				pos = pos - 50
			}
			var a = block.style.marginTop
			var percent = document.documentElement.clientHeight/100
			block.style.marginTop = pos*percent - block.offsetHeight/2 + 'px'
			if($label=='page10'){
			//	console.log('move: '+pos+', margin: '+a+'/'+block.style.marginTop +', label: '+label)
			}
		}

		//проявить текст. val=0 - текст скрыт, val=100 - проявлен
		function show_text(val){
			text.style.opacity = val/100
		}

		//показать значение. val=0 - текст скрыт, val=100 - проявлен
		function show_value(val){
			var size = outer.offsetHeight
			inner.style.marginTop = size/100 * (100-val) + 'px'
		}

		var val = 0

		return {
			setValue(_val){
				val = _val
				var pos = 75 - val * 0.25
				var val2 = Math.max(val-60,0) * 2.5
				move_block(pos, 'setval')
				show_value(val)
				show_text( val2 )			
			},
			
			getValue(){ return val },

			hide(val){
				block.style.marginTop = - val/4 + '%'
				var op = Math.max(1 - val/100,0)
				block.style.opacity = op
			},
			move(pos,label){
				return move_block(pos,label)
			}
		}		
	}


	function Page(el, label){
		var $blocks = el.querySelectorAll('.lf-stats-item')
		var blocks = [];
		var c = 0;
		var l = $blocks.length;

		[].forEach.call($blocks,function($block){
			var block = Block($block,label + c++)
			blocks.push(block)
		})

		//плавно скрыть страницу. val=0 - страница видна, val=100 - скрыта		
		function hide(val){
			el.style.top = - val/4 + '%'
			el.style.opacity   = Math.max(1 - val/100,0)
		}

		var val = 0

		function draw(index,value){
			for(var i=0;i<index;i++){
				blocks[i].setValue(100)	
			}

//			current = index
			
			if(index<l){
				hide(0)
				blocks[index].setValue(value)

				for(var i=index+1;i<l;i++){
					blocks[i].setValue(0)						
				}
			}else{
				hide(Math.min(value*2,100))
			}
		}

		function set_value(_val,dir){
			var $val = _val
			_val = _val * (l+1)
			var index = Math.min(l,Math.floor(_val/100))
			_val = _val===(l*100 + 100) ? 100 : _val%100
			if(_val === 99) _val = 100
			//check(index,dir,_val)

			draw(index, _val)
		}

		function check(index,dir,val){
			var cur_label = current < l ? 'page1' : 'page2'
			if(label!=cur_label) return;
			if(label=='page2'){ index = index+l }
			console.log({label,index,dir,val})
		}

		function set_value_mob(_val,dir){
			var $val = _val
			var a = 2 //перекрытие блоков
			var max = blocks.length-1
			_val = _val * blocks.length * 2
			var index = Math.min(max, Math.floor(_val/200))
			_val = Math.min(200, _val%200)
			if(_val === 199) _val = 200

			var block = blocks[index]


			for(var i=0;i<blocks.length;i++){
				if(i!=index){
				//	console.log('обработан блок '+i)
					blocks[i].setValue(0)										
				}
			}

			//console.log({index})

			if(_val<100){
				if(label=='page1'){
					//console.log(label+': уст. знач. : '+_val)
				}
				//check(index,dir,_val)

				block.setValue(_val)
			}else{
				_val = _val-100
				block.hide(_val)
				var mov = 50 - _val/2
				block.move(mov, 'mobile')
				if(label=='page1'){
					//console.log(label + ': сокрытие: '+_val+', движение: '+mov)
				}
			}


		}

		var o = {
			setValue(_val,dir){
				val = _val

				var $val = val

				if(val == 100 || val == 0){
					el.style.display = 'none'	
				}else{
					el.style.display = 'flex'						
				}

				if(is_mobile()){
					set_value_mob(_val,dir)	
				}else{
					set_value(_val,dir)
				}	
			},
			getValue(){return val},
			len: l
		}

		o.setValue(0)

		return o
	}

	var o = {
		page1: Page($page1, 'page1'),
		page2: $page2 && Page($page2, 'page2')
	}

	return o
})()
