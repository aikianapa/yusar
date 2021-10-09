<style>
.image__container {
    overflow: hidden;
}

.image__container img {
    transition: .3s ease-in-out;
}

.image__container img:hover {
    transform: scale(1.1);
}
</style>
<div class="container" style="overflow-x: visible !important">
    <div class="slick mb-3r company-grid" data-autoplay="2000" data-scroll="1">
        <wb-foreach wb="from=images">
            <div class="picture">
                <div class="image__container">
                    <img class="img-fluid" src="/thumbc/500x320/src{{img}}" alt="">
                </div>
            </div>
        </wb-foreach>
    </div>
</div>
            <!-- <div class="col-md-4 col-sm-6 col-lg-3 mb-3r">
                <div class="image__container">
                    <img class="img-fluid" data-src="/thumbc/500x320/src/tpl/assets/img/about/about-1.jpg" alt="">
                </div>
            </div> -->
            <!-- <div class="col-md-4 col-sm-6 col-lg-3 mb-3r">
                <div class="image__container">
                    <img class="img-fluid" data-src="/thumbc/500x320/src/tpl/assets/img/about/about-2.jpg" alt="">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-lg-3 mb-3r">
                <div class="image__container">
                    <img class="img-fluid" data-src="/thumbc/500x320/src/tpl/assets/img/about/about-3.jpg" alt="">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-lg-3 mb-3r">
                <div class="image__container">
                    <img class="img-fluid" data-src="/thumbc/500x320/src/tpl/assets/img/about/about-4.jpg" alt="">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-lg-3 mb-3r">
                <div class="image__container">
                    <img class="img-fluid" data-src="/thumbc/500x320/src/tpl/assets/img/about/about-5.jpg" alt="">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-lg-3 mb-3r">
                <div class="image__container">
                    <img class="img-fluid" data-src="/thumbc/500x320/src/tpl/assets/img/about/about-6.jpg" alt="">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-lg-3 mb-3r">
                <div class="image__container">
                    <img class="img-fluid" data-src="/thumbc/500x320/src/tpl/assets/img/about/about-7.jpg" alt="">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-lg-3 mb-3r">
                <div class="image__container">
                    <img class="img-fluid" data-src="/thumbc/500x320/src/tpl/assets/img/about/about-8.jpg" alt="">
                </div>
            </div> -->
        <!-- </wb-foreach> -->
    <!-- </div> -->
