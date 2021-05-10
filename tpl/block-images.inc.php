<style>
.slick-arrow {
    width: 40px;
    height: 40px;
}

.slick-prev {
    top: 42%;
    left: -45px;
}

.slick-next {
    right: -45px;
}

.company-grid {
    margin-left: -15px;
    margin-right: -15px;
}

.picture {
    padding-left: 15px;
    padding-right: 15px;
}

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

<script wb-app>
// $(document).one('ready-all',function(e){
//     $(".slick").slick({
//         slidesToShow: 4,
//         slidesToScroll: 1,
//         autoplay: true,
//         autoplaySpeed: 2000,
//     })
// })
</script>
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
