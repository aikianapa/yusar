<div class="slider slider-for pb-1r">
    <wb-foreach wb="from=images">
				<div class="text-center" style="background-image:url(/thumb/8x10/src{{img}});background-size:cover;">
					    <img data-lazy="/thumb/800x600/src{{img}}" class="img-fluid" width="800" height="600">
				</div>
    </wb-foreach>
</div>
<div class="slider slider-nav pb-3r">
    <wb-foreach wb="from=images">
				<div style="background-image:url(/thumb/8x10/src{{img}});background-size:cover;">
					<img data-lazy="/thumbc/128x96/src{{img}}" class="img-fluid" width="128" height="96"> 
				</div>
    </wb-foreach>
</div>