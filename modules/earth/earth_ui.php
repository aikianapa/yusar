<script type="wbapp">
  wbapp.loadStyles(["/modules/earth/style.css"]);
  wbapp.loadScripts([
    "/modules/earth/miniature.earth.core.js"
    ,"/modules/earth/earth.js"
  ],"earth-js");
</script>

<a id="map_presence">
	<div id="myearth">
		<div id="glow"></div>
	</div>
</a>

<style>

#back-link {
	position: fixed;
	top: 0;
	left: 0;
	background: #0d130e;
	padding: 0.5em;
	font-size: 26px;
	z-index: 10000;
	border-right: 1px RGBA(255,255,255,0.5) solid;
	border-bottom: 1px RGBA(255,255,255,0.5) solid;
}
#back-link img {
	display: block;
	width: 4em;
	height: auto;
}

@media (max-width: 1199px) {
	#back-link {
		font-size: 20px;
	}
}
@media (max-width: 511px) {
	#back-link {
		font-size: 16px;
	}
}

#legal-footer-wrap {
	position: relative;
	height: 0;
	z-index: 10002;
	font-family: Arial, sans-serif;
}

#legal-footer {
	position: absolute;
	bottom: 0.5em;
	right: 0.5em;
}

#legal-footer a {
	text-decoration: none;
	color: inherit;
	padding: 0 0.5em;
	font-size: 10px;
}

</style>

