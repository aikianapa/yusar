<!-- <div class="slider slider-for pb-1r" data-options="arrows=false">
    <wb-foreach wb="from=images">
		<div class="text-center" style="background-image:url(/thumbc/8x10/src{{img}});background-size:cover;">
			<img data-lazy="/thumb/800x500/src{{img}}" class="img-fluid" width="800" height="500">
		</div>
    </wb-foreach>
</div>

<div class="slider slider-nav pb-3r" data-options="arrows=false">
    <wb-foreach wb="from=images">
		<div style="background-image:url(/thumbc/8x10/src{{img}});background-size:cover;">
			<img data-lazy="/thumbc/128x96/src{{img}}" class="img-fluid" width="128" height="96"> 
		</div>
    </wb-foreach>
</div> -->

<style>
	.slider-block {
		margin-top: 30px;
	}

	.slider-block img {
        height: auto;
        max-width: 100%;
    }

	.big-img {
		min-width: 100%;
		height: auto;
	}

    .block {
        margin-bottom: 20px;
    }

	@media (max-width: 991px) {
		.blocks {
			margin-top: 20px;
		}
	}
</style>
<div class="slider slider-for slide-pics" data-options="arrows=false">
	<wb-foreach wb="count=10">
		<div class="slider-block">

			<!-- <button class="button-prev slick-prev" aria-label="Previous" type="button">
				"Previous"
				<svg width="21" height="42" class="ml-10">
    				<image width="21" height="42" xlink:href="/tpl/assets/img/slider-arrow-prev.svg" />
    			</svg>
			</button> -->

			<div class="row">
				<div class="col-lg-8 col-lg-7">
					<!-- <img data-src="/tpl/assets/img/exam-bigimg.png" alt=""> -->
					<!-- <img data-src="https://via.placeholder.com/756x494.png" -->
					<img src="/tpl/assets/img/team/team-1.jpg" alt="" class="big-img">
				</div>

				<div class="col-lg-4 blocks">
					<div class="block">
						<!-- <img data-src="/tpl/assets/img/exam-smallimg.png" alt=""> -->
						<!-- <img src="https://via.placeholder.com/510x250.png" alt=""> -->
						<img src="/tpl/assets/img/team/team-2.jpg" alt="">
					</div>

					<div class="block">
						<!-- <img data-src="/tpl/assets/img/exam-smallimg.png" alt=""> -->
						<!-- <img src="https://via.placeholder.com/510x250.png" alt=""> -->
						<img src="/tpl/assets/img/team/team-3.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</wb-foreach>
</div>

<div class="slider slider-nav pb-3r" data-options="arrows=false">
    <wb-foreach wb="from=images">
		<div style="background-image:url(/thumbc/8x10/src{{img}});background-size:cover;">
			<!-- <img data-lazy="/thumbc/128x96/src{{img}}" class="img-fluid" width="128" height="96">  -->
		</div>
    </wb-foreach>
</div>