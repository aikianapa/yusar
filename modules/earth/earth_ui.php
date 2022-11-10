<html>
<script type="wbapp">
  wbapp.loadStyles(["/modules/earth/style.css"]);
  wbapp.loadScripts([
    "/modules/earth/miniature.earth.core.js"
    ,"/modules/earth/earth.js"
  ],"earth-js");
</script>
<div>
<a id="map_presence">
	<div id="myearth">
		<div id="glow"></div>
	</div>
</a>
<div id="globeData">
<wb-foreach wb="table=dealers&tpl=false" wb-filter="active=on">
<meta data-geopos="{{yamap.0.geopos}}" data-reg="{{region}}" data-email="{{email}}" data-name="{{name}}" data-img="{{image.0.img}}">
</wb-foreach>
<div class="modal fade" id="globeReg" tabindex="-1" role="dialog" aria-labelledby="globeReg" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">
            <img src="" height="80" width="80" alt="">
        </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="region"></div>
		<div class="name"></div>
		<div class="email"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>

</div>
</div>
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

</html>