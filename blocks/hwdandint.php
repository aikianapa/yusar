<edit header="Страница Оборудование и интеграция">
    <div>
        <wb-include wb-src="/engine/modules/yonger/common/blocks/common.inc.php" />
    </div>
    <div>
        <div class="px-3">
            <div class="row">
                <div class="col-12">
                    <div class="divider-text my-0">Верхний виджет</div>
                    <div class="row bd py-2 rounded-5">
                        <div class="col-sm-4 col-lg-3">
                            <wb-module wb="module=filepicker&mode=single&width=200&height=150" name="bkg1"
                                wb-path="/uploads/hwdandint" />
                        </div>
                        <div class="col-sm-8 col-lg-9">
                            <div class="mb-1">
                                <input class="form-control" type="text" name="title1" placeholder="Заголовок виджета"
                                    wb-module="langinp">
                            </div>
                            <div class="mb-1">
                                <textarea class="form-control" rows="auto" name="text1" placeholder="Текст"
                                    wb-module="langinp"></textarea>
                            </div>
                            <div class="">
                                <input class="form-control" type="text" name="link1" placeholder="Ссылка">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6">
                    <div class="row bd py-2 rounded-5">
                        <div class="col-12">
                            <wb-module wb="module=filepicker&mode=single&width=400&height=200" name="bkg2"
                                wb-path="/uploads/hwdandint" />
                        </div>
                        <div class="col-12">
                            <div class="mb-1">
                                <input class="form-control" type="text" name="title2" placeholder="Заголовок виджета"
                                    wb-module="langinp">
                            </div>
                            <div class="mb-1">
                                <textarea class="form-control" rows="auto" name="text2" placeholder="Текст"
                                    wb-module="langinp"></textarea>
                            </div>
                            <div class="">
                                <input class="form-control" type="text" name="link2" placeholder="Ссылка">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row bd py-2 rounded-5">
                        <div class="col-12">
                            <wb-module wb="module=filepicker&mode=single&width=400&height=200" name="bkg3"
                                wb-path="/uploads/hwdandint" />
                        </div>
                        <div class="col-12">
                            <div class="mb-1">
                                <input class="form-control" type="text" name="title3" placeholder="Заголовок виджета"
                                    wb-module="langinp">
                            </div>
                            <div class="mb-1">
                                <textarea class="form-control" rows="auto" name="text3" placeholder="Текст"
                                    wb-module="langinp"></textarea>
                            </div>
                            <div class="">
                                <input class="form-control" type="text" name="link3" placeholder="Ссылка">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mt-2">
                <div class="col-6">
                    <div class="bd rounded-5">
                        <div class="divider-text my-0">Счётчики</div>
                        <wb-multiinput name="counter" class="p-2">
                            <div class="col-4">
                                <input class="form-control" type="text" name="cnt_num" placeholder="Счётчик"
                                    wb-module="langinp">
                            </div>
                            <div class="col-8">
                                <input class="form-control" type="text" name="cnt_text" placeholder="Подпись"
                                    wb-module="langinp">
                            </div>
                        </wb-multiinput>
                    </div>
                </div>
                <div class="col-6">
                    <div class="bd rounded-5">
                        <div class="divider-text my-0">Слайды</div>
                        <wb-multiinput name="slides" class="p-2">
                            <div class="col-12">
                                <input class="form-control" type="text" name="text" placeholder="Надпись слайда"
                                    wb-module="langinp">
                            </div>
                        </wb-multiinput>
                    </div>
                </div>
            </div>
        </div>
    </div>
</edit>

<view>
    <div class="mo card container" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'>
        <img class="background" src="{{bkg1.0.img}}" alt="background" wb-if="'{{bkg1.0.img}}'>''">
        <div class="wrapper">
            <h3 class="card-title">{{title1.{{_sess.lang}}}}</h3>
            <p class="card-text text-break">{{text1.{{_sess.lang}}}}</p>
        </div>
        <a href="{{link1}}">
            <span class="link-text">{{_lang.more}}</span>
            <img class="link-icon" src="/tpl/assets/img/more.svg" alt="{{_lang.more}}">
        </a>
    </div>

    <div class="complex container double-card">
        <div class="card card-1" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'>
            <img class="background" src="{{bkg2.0.img}}" alt="background" wb-if="'{{bkg2.0.img}}'>''">
            <div class="wrapper">
                <h3 class="card-title">{{title2.{{_sess.lang}}}}</h3>
                <p class="card-text text-break">{{text2.{{_sess.lang}}}}</p>
            </div>
            <a href="{{link2}}">
                <span class="link-text">{{_lang.more}}</span>
                <img class="link-icon" src="/tpl/assets/img/more.svg" alt="{{_lang.more}}">
            </a>
        </div>

        <div class="card card-2" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'>
            <wb-foreach wb="from=counter&tpl=false">
                <div class="wrapper">
                    <div class="section-title" wb-if="'{{cnt_num.{{_sess.lang}}}}'>''">{{cnt_num.{{_sess.lang}}}}</div>
                    <div class="section-title" wb-if="'{{cnt_num.{{_sess.lang}}}}'==''">{{cnt_num.ru}}</div>
                    <div class="card-title">{{cnt_text.{{_sess.lang}}}}</div>
                </div>
            </wb-foreach>
        </div>
    </div>

    <div class="system-integration container double-card">

        <div class="card card-1 swiper-container integration-swiper" data-aos="fade-up" data-aos-duration="1700"
            data-aos-offset='200'>
            <div class="swiper-wrapper">
                <wb-foreach wb="from=slides&tpl-false">
                <h2 class="card-title_big swiper-slide">
                    {{text.{{_sess.lang}}}}
                </h2>
                </wb-foreach>
            </div>
        </div>

        <div class="card card-2" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'>
            <img class="background" src="{{bkg3.0.img}}" alt="background" wb-if="'{{bkg3.0.img}}'>''">
            <div class="wrapper">
                <h3 class="card-title">{{title3.{{_sess.lang}}}}</h3>
                <p class="card-text text-break">{{text3.{{_sess.lang}}}}</p>
            </div>
            <a href="{{link3}}">
                <span class="link-text">{{_lang.more}}</span>
                <img class="link-icon" src="/tpl/assets/img/more.svg" alt="{{_lang.more}}">
            </a>
        </div>
    </div>

    <wb-lang>
        [en]
        more = More
        [ru]
        more = Подробнее
    </wb-lang>
</view>