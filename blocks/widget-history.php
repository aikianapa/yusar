<edit header="История">
    <wb-include wb-src="/modules/yonger/common/blocks/common.inc.php" />

    <wb-multiinput name="history">
        <div class="col-3">
            <input class="form-control" type="text" name="year" placeholder="Год">
            <wb-module wb="module=filepicker&mode=single&width=150&height=100" name="image" />
        </div>
        <div class="col-9 pl-3">
            <wb-multilang wb-lang="{{_sett.locales}}" name="lang">
                <div class="col-12">
                    <input class="form-control" type="text" name="title" placeholder="Заголовок">
                </div>
                <div class="col-12">
                    <textarea class="form-control" type="text" name="text" rows="auto" placeholder="Текст"></textarea>
                </div>
            </wb-multilang>
        </div>
    </wb-multiinput>

</edit>

<view>

<section id="History">
        <div class="row">
            <div class="col-lg-6 dst-data">
                <h1 class="mt-3r year">{{history.0.year}}</h1>
                <h3 class="tx-28 mt-2r title">{{history.0.lang.{{_sess.lang}}.title}}</h3>
                <p class="tx-16 text">{{history.0.lang.{{_sess.lang}}.text}}</p>
            </div>
            <div class="col-lg-6">
                <div class="row" style="height:100%;">
                    <div class="col-3 col-sm-2 pt-3r dates">
                        <div class="slick-uninit slick-nav">
                            <wb-foreach wb="from=history">
                                <div class="d-block slick-slide" data-year="{{year}}">{{year}}</div>
                            </wb-foreach>
                        </div>
                    </div>
                    <div class="col-9 col-sm-10" style="padding-left: 0 !important;">
                        <div class="slick slick-for dates-slider" data-options="vertical=true&verticalSwiping=true&dots=false&slidesToShow=1&slidesToScroll=1&responsive=false&dots=false&infinite=true&arrows=false&adaptiveHeight&true">
                            <!-- обязательно через src !!! -->
                            <wb-foreach wb="from=history">
                                <div>
                                    <div>
                                        <img class="img-fluid" width="660" height="480" src="/thumbc/655x480/src/{{image.0.img}}" alt="{{year}}">
                                    </div>

                                    <div data-year="{{year*1 + 1}}">
                                      <img class="img-fluid" width="660" height="480" src="/thumbc/655x480/src/{{_parent.history.{{_ndx}}.image.0.img}}" alt="{{year*1 + 1}}">
                                    </div>
                                    <div class="d-none src-data" data-year="{{year}}" data-title="{{lang.{{_sess.lang}}.title}}">{{lang.{{_sess.lang}}.text}}</div>
                                </div>
                            </wb-foreach>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script wb-app remove>
            let $src = $('#History .slick div.src-data:first');
            let $dst = $('#History div.dst-data');
            //$dst.children('.year').html($src.data('year'));
            //$dst.children('.title').html($src.data('title'));
            //$dst.children('.text').html($src.html());
            $('#History .dates [data-year]').off('click');
            $('#History .dates [data-year]').on('click',function(){
                let timeout = 200;
                let that = this;
                $dst.hide(timeout);
                setTimeout(function(){
                    let year = $(that).data('year');
                    let $src = $('#History div.src-data[data-year='+year+']');
                    $dst.children('.year').html($src.data('year'));
                    $dst.children('.title').html($src.data('title'));
                    $dst.children('.text').html($src.html());
                    $dst.show(timeout);
                },timeout)

            });
        </script>
</section>

</view>