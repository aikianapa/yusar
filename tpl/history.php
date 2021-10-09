<html lang="ru">
<style>
.slick-slide {
    transition: .2s ease-in-out;
}

.slick-slide:hover {
    font-size: 20px !important;
}

.slick-current {
    font-weight: 700 !important;
    font-size: 20px !important;
}

.slick-current:before {
    font-weight: 700 !important;
}

.slick-vertical, .slick-slide {
    border: none !important;
}


</style>

<wb-include wb-tpl="head.inc.php" />

<body class="loading">
    <wb-var bkg="header-2.jpg" />
    <wb-include wb-tpl="header.inc.php" />

    <div class="container" id="History">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="mt-3r">2018</h1>
                <h3 class="tx-28 mt-2r">Активное развитие</h3>
                <p class="tx-16">{{text}}</p>
            </div>
            <div class="col-lg-6">
                <div class="row" style="height:100%;">
                    <div class="col-3 col-sm-2 pt-3r dates">
                        <wb-var start='1996' />
                        <wb-var year='{{ date("Y") - 1}}' />
                        <wb-var navs='{{ {{_var.year}} - {{_var.start}} }}' />
                        <div class="slick-uninit slick-nav">
                            <wb-foreach wb-count="{{_var.start}};{{_var.year}}">
                                <div class="d-block slick-slide" data-year="{{_value}}">{{_value}}</div>
                            </wb-foreach>
                        </div>
                    </div>
                    <div class="col-9 col-sm-10" style="padding-left: 0 !important;">
                        <div class="slick slick-for dates-slider" data-options="vertical=true&verticalSwiping=true&dots=false&slidesToShow=1&slidesToScroll=1&responsive=false&dots=false&infinite=true&arrows=false&adaptiveHeight&true">
                            <!-- обязательно через src !!! -->
                            <wb-foreach wb-count="{{_var.start}}; {{_var.year}};">
                                <div>
                                    <div>
                                        <img class="img-fluid" width="660" height="480" src="/thumbc/655x480/src/{{_parent.images.{{_idx}}.img}}" alt="{{_value}}">
                                    </div>

                                    <div data-year="{{_value + 1}}">
                                      <img class="img-fluid" width="660" height="480" src="/thumbc/655x480/src/{{_parent.images.{{_ndx}}.img}}" alt="{{_value + 1}}">
                                    </div>
                                </div>
                            </wb-foreach>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <wb-include wb-tpl="footer.inc.php" />
</body>

</html>
