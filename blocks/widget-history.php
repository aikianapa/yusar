<edit header="История">
    <wb-include wb-src="/engine/modules/yonger/common/blocks/common.inc.php" />
    <wb-multiinput name="history">
        <div class="col-12">
            <wb-module wb="module=filepicker&width=150&height=100" name="image" />
        </div>
        <div class="pl-3 col-12">
            <div class="mb-2 row">
                <div class="mt-1 col-sm-2">
                    <input class="form-control" type="text" name="year" placeholder="Год">
                </div>
                <div class="mt-1 col-sm-10">
                    <input class="form-control" type="text" name="title" placeholder="Заголовок" wb-module="langinp">
                </div>
                <div class="mt-1 col-12">
                    <textarea class="form-control" type="text" name="text" rows="auto" placeholder="Текст" wb-module="langinp"></textarea>
                </div>

            </div>
        </div>
    </wb-multiinput>


</edit>

<view>

    <section id="History">
        <div class="row">
            <div class="col-lg-6 dst-data">
                <h1 class="mt-3r year">{{history.0.year}}</h1>
                <h3 class="tx-28 mt-2r title">{{history.0.title.{{_sess.lang}}}}</h3>
                <p class="tx-16 text">{{history.0.text.{{_sess.lang}}}}</p>
            </div>
            <div class="col-lg-6">
                <div class="row" style="height:100%;">
                    <div class="col-3 pt-3r dates">
                        <div class="text-center">
                            <wb-foreach wb="from=history">
                                <div class="pb-1 cursor-pointer d-block" data-year="{{year}}">{{year}}</div>
                                <div class="d-none src-data" data-title="{{title.{{_sess.lang}}}}">{{text.{{_sess.lang}}}}</div>
                            </wb-foreach>
                        </div>
                    </div>
                    <div class="col-9 slides">
                        <wb-foreach wb="from=history&tpl=false">
                            <div class="year-block d-none" data-year="{{year}}">
                                <wb-foreach wb="from=image&tpl=false">
                                    <div wb-if="'{{_idx}}'=='0'" data-year="{{_parent.year}}">
                                        <img class="img-fluid" width="660" height="480" src="/thumbc/655x480/src/{{img}}" alt="">
                                    </div>
                                    <div wb-if="'{{_idx}}'>'0'">
                                        <img class="img-fluid" width="660" height="480" src="/thumbc/655x480/src/{{img}}" alt="">
                                    </div>
                            </div>
                        </wb-foreach>
                    </div>
                    </wb-foreach>
                </div>
            </div>
        </div>
        </div>
        <script wb-app remove>
            var hiAuto
            $('#History .dates [data-year]').click(function(ev) {
                ev.isTrigger == undefined && hiAuto !== undefined ? clearInterval(hiAuto) : null
                $('#History .dates [data-year]').removeClass('active')
                $(this).addClass('active')
                let $src = $(this).next('src-data');
                let $dst = $('#History div.dst-data');
                let year = $(this).data('year')
                $('#History .year-block').addClass('d-none')
                $(`#History .year-block[data-year=${year}]`).removeClass('d-none')
                let timeout = 200;
                let that = this;
                $dst.fadeOut(timeout);
                setTimeout(function() {
                    let $src = $('#History div.src-data[data-year=' + year + ']');
                    $dst.children('.year').html(year);
                    $dst.children('.title').html($src.data('title'));
                    $dst.children('.text').html($src.html());
                    $dst.fadeIn(timeout);
                }, timeout / 2)
            })

            var historyAuto = function() {
                hiAuto = setInterval(function() {
                    let $active = $('#History .dates [data-year].active')
                    let idx = $active.index() / 2
                    idx + 1 >= $('#History .dates [data-year]').length ? idx = 0 : idx++
                    $active.removeAttr('active')
                    $(`#History .dates [data-year]:eq(${idx})`).trigger('click', null)
                }, 3000)
            }

            $('#History .dates [data-year]:eq(0)').trigger('click')
            historyAuto()
        </script>
    </section>

</view>