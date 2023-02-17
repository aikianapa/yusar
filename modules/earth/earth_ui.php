<html>
<script type="wbapp">
	wbapp.loadStyles(["/modules/earth/style.css"]);
  wbapp.loadScripts([
    "/modules/earth/miniature.earth.js"
    ,"/modules/earth/earth.js"
  ],"earth-js");
  if ($('footer').prev().is('.widget-globe')) {
	$('footer').addClass('mt-0');
  }
</script>
<wb-var map wb-api="/api/v2/list/map?active=on&@sort=name" />
<div>
	<div class="position-relative">
		<div class="p-4 ml-4 rounded position-absolute w-25 scrollbar-none" style="margin-top:10vh;background-color: #0000009e;z-index:9999;height:60vh;overflow:auto;">
			<h4 class="text-white ">География присутствия</h4>
			<div class="text-white" id="mapFinder" wb-off>
				<h5 class="mt-3 text-white">Россия</h5>
				<div class=" row row-cols-2 text-sm-left">
					{{#each cities}}
  						{{#if country == "Россия"}}
						<small class="cursor-pointer col" on-click="link" data-pos="{{yamap.0.geopos}}">{{name}}</small>
						{{/if}}
					{{/each}}
				</div>
				<h5 class="mt-3 text-white">В мире</h5>
				<div class=" row text-sm-left">
					{{#each country}}
						<h6 class="mt-2 col-12">{{@key}}</h6>
						<div class="col-12">
							<div class="row row-cols-2 text-sm-left">
								{{#each cities}}
									<small class="cursor-pointer col" on-click="link" data-pos="{{yamap.0.geopos}}">{{name}}</small>
								{{/each}}
							</div>
						</div>
					{{/each}}
				</div>
			</div>
		</div>
	</div>
	<div id="map_presence">
		<div id="myearth">
			<div id="glow"></div>
		</div>
	</div>
	<div id="globeData">
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
	.scrollbar-none::-webkit-scrollbar {
		display: none;
	}

	.widget-globe .tooltip {
		white-space: nowrap;
		text-transform: uppercase;
		letter-spacing: 0.025em;
		font-weight: bold;
		font-size: 1.25em;
		padding: 0.25em 0.5em 0.25em 1.8em;
		color: white;
		filter: drop-shadow(0 2px 1px #003399) drop-shadow(0 1px 3px #003399);
		line-height: 120%;
		transform: translate(-50%, 100%);
		opacity: 1;
	}

	.widget-globe .select2-container--default .select2-selection--single {
		background-color: #0000003b;
		color: white;
	}

	.widget-globe .select2-container--default .select2-selection--single .select2-selection__rendered {
		color: white;
	}


	#back-link {
		position: fixed;
		top: 0;
		left: 0;
		background: #0d130e;
		padding: 0.5em;
		font-size: 26px;
		z-index: 10000;
		border-right: 1px RGBA(255, 255, 255, 0.5) solid;
		border-bottom: 1px RGBA(255, 255, 255, 0.5) solid;
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