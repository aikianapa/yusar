window.addEventListener('load', function() {


//выезжающий заголовок сайта
function lf_show_header(){
	var siteTitleRows = document.querySelectorAll('.lf-site-title-row-inner');

	[].forEach.call(siteTitleRows, function(row){
		var pad = parseInt(window.getComputedStyle(row,null).getPropertyValue('margin-top'))
		var x = pad/6

		function move(){
			row.style.marginTop = Math.max(pad=pad-(pad>x?5:1)) + 'px'
			if(pad>0){
				requestAnimFrame(move)
			}
		}

		move()			

		setTimeout(lf_show_header2,600)
	})
}

var lf_flag = true

window.addEventListener('scroll', function() {
	var top = $('.lf-site-title').offset().top - $(window).scrollTop();
	if(top<300 && lf_flag){
		lf_flag = false
		lf_show_header()
	}
})

//появляющийся подзаголовок сайта
function lf_show_header2(){
	var siteSubtitle = document.querySelector('.lf-site-subtitle')
	var button = document.querySelector('.lf-header-btn')
	var	siteSubtitleRGB = '33,37,41'
	var buttonRGB = '47,128,237'
	var siteSubtitleCount = 0

	function siteSubtitleShow(){
		siteSubtitle.style.color = 'rgb(' + siteSubtitleRGB + ',' + (siteSubtitleCount+=0.01) + ')'
		button.style.background = 'rgb(' + buttonRGB + ',' + (siteSubtitleCount+=0.01) + ')'
		button.dataset.transparent = "false"
		if(siteSubtitleCount<1){
			requestAnimFrame(siteSubtitleShow)
		}
	}

	siteSubtitleShow()
}

})
