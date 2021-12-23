(function(){
	var video = document.querySelector('#lf-video')

	function get_browser(){
		var ua = navigator.userAgent.toLowerCase(); 

		if((/trident/gi).test(ua) || (/msie/gi).test(ua)){return 'ie'}
	
		/*@cc_on
			return 'ie'
		@*/

		if (ua.indexOf('safari') != -1) { 
		  if (ua.indexOf('chrome') > -1) {
		    return 'chrome'
		  } else {
		    return 'safari'
		  }
		}
	}

	var w =
		screen.width <= 640 ? 640 :
		screen.width <= 854 ? 854 :
		screen.width <= 960 ? 960 :
		screen.width <= 1280 ? 1280 : 1440

	var browser = get_browser()

	var ext = browser === 'ie' || browser === 'safari' ? 'mp4' : 'webm'

	video.src = 'assets/video/equipment-' + w + '.' + ext
})()
