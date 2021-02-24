<html>
<wb-include wb-tpl="head.inc.php" />

<body>
    <wb-var bkg="header-2.jpg" />
    <wb-include wb-tpl="header.inc.php" />

    <div class="container" id="History">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="mt-3r">2018</h1>
                <h3 class="tx-28 mt-2r">Активное развитие</h3>
                <p class="tx-16">
                    {{text}}
                </p>
            </div>
            <div class="col-lg-6">
                <div class="row pt-3r">
                    <div class="col-3 col-sm-2" style="height:100%;">
                        <wb-var start='1996' />
                        <wb-var year='{{ date("Y")}}' />
                        <wb-var navs='{{ _var.year - {{_var.start}}' />
                        <div class="slick slick-nav" data-options="vertical=true&verticalSwiping=false&responsive=false&useCSS=false&useTransform=false&slidesToScroll=1&slidesToShow={{_var.navs}}&infinite=false">
                            <wb-foreach wb-count="{{_var.start}};{{_var.year}}">
                                <div class="d-block">{{_value}}</div>
                            </wb-foreach>
                        </div>
                    </div>
                    <div class="col-9 col-sm-10">
                        <div class="slick slick-for pb-1r" data-options="vertical=true&verticalSwiping=true&slidesToShow=1&slidesToScroll=1&responsive=false&dots=false&infinite=false&arrows=false">
                            <wb-foreach wb-count="{{_var.start}};{{_var.year}}">
                                <div>
                                <div data-year="{{_value}}">
                                    <img class="img-fluid" data-src="/thumbc/800x600/src/tpl//assets/img/widget-holder.jpg">
                                </div>
                                <div>
                                      <img class="img-fluid" data-src="/thumbc/800x600/src/{{_parent.images.{{_idx}}.img}}">
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