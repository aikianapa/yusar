<edit header="Страница Комплексные инженерные системы">
    <div>
        <wb-include wb-src="/engine/modules/yonger/common/blocks/common.inc.php" />
    </div>
    <div>
        <div class="px-3">

            <div class="row mt-2">
                <div class="col-12">
                    <div class="divider-text my-1">Верхний виджет</div>
                    <div class="row bd py-2 rounded-5">
                        <div class="col-sm-4">
                            <wb-module wb="module=filepicker&mode=single&width=400&height=200" name="bkg5"
                                wb-path="/uploads/complex" />
                        </div>
                        <div class="col-sm-8">
                            <div class="mb-1">
                                <input class="form-control" type="text" name="title5" placeholder="Заголовок виджета"
                                    wb-module="langinp">
                            </div>
                            <div class="mb-1">
                                <textarea class="form-control" rows="auto" name="text5" placeholder="Текст"
                                    wb-module="langinp"></textarea>
                            </div>
                            <div class="">
                                <input class="form-control" type="text" name="link5" placeholder="Ссылка">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-6  pl-0">
                    <div class="divider-text my-1">Левая колонка</div>
                    <div class="bd rounded-5 mb-2">
                        <div class="row p-2">
                            <div class="col-12">
                                <wb-module wb="module=filepicker&mode=single&width=400&height=400" name="bkg1"
                                    wb-path="/uploads/complex" />
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <input class="form-control" type="text" name="title1"
                                        placeholder="Заголовок виджета" wb-module="langinp">
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

                    <div class="bd rounded-5 mb-2">
                        <div class="row p-2">
                            <div class="col-12">
                                <wb-module wb="module=filepicker&mode=single&width=400&height=200" name="bkg2"
                                    wb-path="/uploads/complex" />
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <input class="form-control" type="text" name="title2"
                                        placeholder="Заголовок виджета" wb-module="langinp">
                                </div>
                                <div class="mb-1">
                                    <textarea class="form-control" rows="auto" name="text2" placeholder="Текст"
                                        wb-module="langinp"></textarea>
                                </div>
                                <div class="mb-1">
                                    <input class="form-control" type="text" name="subtitle2"
                                        placeholder="Подзаголовок виджета" wb-module="langinp">
                                </div>
                                <div class="mb-1">
                                    <wb-multiinput name="list2">
                                        <input class="form-control" type="text" name="subtext2" placeholder="Текст"
                                            wb-module="langinp">
                                    </wb-multiinput>
                                </div>
                            </div>
                            <div class="col-12">
                                <input class="form-control" type="text" name="link2" placeholder="Ссылка">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 pr-0">
                    <div class="divider-text my-1">Правая колонка</div>
                    <div class="bd rounded-5 mb-2">
                        <div class="row p-2">
                            <div class="col-12">
                                <wb-module wb="module=filepicker&mode=single&width=400&height=200" name="bkg3"
                                    wb-path="/uploads/complex" />
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <input class="form-control" type="text" name="title3"
                                        placeholder="Заголовок виджета" wb-module="langinp">
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

                    <div class="bd rounded-5 mb-2">
                        <div class="row p-2">
                            <div class="col-12">
                                <wb-module wb="module=filepicker&mode=single&width=400&height=400" name="bkg4"
                                    wb-path="/uploads/complex" />
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <input class="form-control" type="text" name="title4"
                                        placeholder="Заголовок виджета" wb-module="langinp">
                                </div>
                                <div class="mb-1">
                                    <textarea class="form-control" rows="auto" name="text4" placeholder="Текст"
                                        wb-module="langinp"></textarea>
                                </div>
                                <div class="divider-text">Список</div>
                                <wb-multiinput name="list4">
                                    <div class="col-12 mb-1">
                                        <input type="text" name="ls4title" class="form-control tx-bold"
                                            placeholder="Заголовок" wb-module="langinp">
                                    </div>
                                    <div class="col-12 mb-1">
                                        <textarea class="form-control" rows="auto" name="ls4text" placeholder="Текст"
                                            wb-module="langinp"></textarea>
                                    </div>
                                </wb-multiinput>
                                <div class="">
                                    <input class="form-control" type="text" name="link4" placeholder="Ссылка">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-6">
                    <div class="bd rounded-5 mb-2">
                        <div class="row p-2">
                            <div class="col-12">
                                <wb-module wb="module=filepicker&mode=single&width=400&height=400" name="bkg6"
                                    wb-path="/uploads/complex" />
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <input class="form-control" type="text" name="title6"
                                        placeholder="Заголовок виджета" wb-module="langinp">
                                </div>
                                <div class="mb-1">
                                    <textarea class="form-control" rows="auto" name="text6" placeholder="Текст"
                                        wb-module="langinp"></textarea>
                                </div>
                                <div class="">
                                    <input class="form-control" type="text" name="link6" placeholder="Ссылка">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="bd rounded-5">
                        <div class="row p-2">
                            <div class="col-12">
                                <wb-module wb="module=filepicker&mode=single&width=400&height=200" name="bkg7"
                                    wb-path="/uploads/complex" />
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <input class="form-control" type="text" name="title7"
                                        placeholder="Заголовок виджета" wb-module="langinp">
                                </div>
                                <div class="mb-1">
                                    <textarea class="form-control" rows="auto" name="text7" placeholder="Текст"
                                        wb-module="langinp"></textarea>
                                </div>
                                <div class="">
                                    <input class="form-control" type="text" name="link7" placeholder="Ссылка">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mt-2">
                <div class="col-6  pl-0">
                    <div class="bd rounded-5 mb-2">
                        <div class="row p-2">
                            <div class="col-12">
                                <wb-module wb="module=filepicker&mode=single&width=400&height=400" name="bkg14"
                                    wb-path="/uploads/complex" />
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <input class="form-control" type="text" name="title14"
                                        placeholder="Заголовок виджета" wb-module="langinp">
                                </div>
                                <div class="mb-1">
                                    <textarea class="form-control" rows="auto" name="text14" placeholder="Текст"
                                        wb-module="langinp"></textarea>
                                </div>
                                <div class="">
                                    <input class="form-control" type="text" name="link14" placeholder="Ссылка">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 pr-0">
                    <div class="bd rounded-5 mb-2">
                        <div class="row p-2">
                            <div class="col-12">
                                <wb-module wb="module=filepicker&mode=single&width=400&height=400" name="bkg15"
                                    wb-path="/uploads/complex" />
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <input class="form-control" type="text" name="title15"
                                        placeholder="Заголовок виджета" wb-module="langinp">
                                </div>
                                <div class="mb-1">
                                    <textarea class="form-control" rows="auto" name="text15" placeholder="Текст"
                                        wb-module="langinp"></textarea>
                                </div>
                                <div class="">
                                    <input class="form-control" type="text" name="link15" placeholder="Ссылка">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mt-2">
                <div class="col-6  pl-0">
                    <div class="divider-text my-1">Левая колонка</div>
                    <div class="bd rounded-5 mb-2">
                        <div class="row p-2">
                            <div class="col-12">
                                <wb-module wb="module=filepicker&mode=single&width=400&height=200" name="bkg8"
                                    wb-path="/uploads/complex" />
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <input class="form-control" type="text" name="title8"
                                        placeholder="Заголовок виджета" wb-module="langinp">
                                </div>
                                <div class="mb-1">
                                    <textarea class="form-control" rows="auto" name="text8" placeholder="Текст"
                                        wb-module="langinp"></textarea>
                                </div>
                                <div class="">
                                    <input class="form-control" type="text" name="link8" placeholder="Ссылка">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bd rounded-5 mb-2">
                        <div class="row p-2">
                            <div class="col-12">
                                <wb-module wb="module=filepicker&mode=single&width=400&height=400" name="bkg9"
                                    wb-path="/uploads/complex" />
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <input class="form-control" type="text" name="title9"
                                        placeholder="Заголовок виджета" wb-module="langinp">
                                </div>
                                <div class="mb-1">
                                    <textarea class="form-control" rows="auto" name="text9" placeholder="Текст"
                                        wb-module="langinp"></textarea>
                                </div>
                                <div class="">
                                    <input class="form-control" type="text" name="link9" placeholder="Ссылка">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 pr-0">
                    <div class="divider-text my-1">Правая колонка</div>
                    <div class="bd rounded-5 mb-2">
                        <div class="row p-2">
                            <div class="col-12">
                                <wb-module wb="module=filepicker&mode=single&width=400&height=400" name="bkg10"
                                    wb-path="/uploads/complex" />
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <input class="form-control" type="text" name="title10"
                                        placeholder="Заголовок виджета" wb-module="langinp">
                                </div>
                                <div class="mb-1">
                                    <textarea class="form-control" rows="auto" name="text10" placeholder="Текст"
                                        wb-module="langinp"></textarea>
                                </div>
                                <div class="">
                                    <input class="form-control" type="text" name="link10" placeholder="Ссылка">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bd rounded-5 mb-2">
                        <div class="row p-2">
                            <div class="col-12">
                                <wb-module wb="module=filepicker&mode=single&width=400&height=200" name="bkg11"
                                    wb-path="/uploads/complex" />
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <input class="form-control" type="text" name="title11"
                                        placeholder="Заголовок виджета" wb-module="langinp">
                                </div>
                                <div class="mb-1">
                                    <textarea class="form-control" rows="auto" name="text11" placeholder="Текст"
                                        wb-module="langinp"></textarea>
                                </div>
                                <div class="">
                                    <input class="form-control" type="text" name="link11" placeholder="Ссылка">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-6  pl-0">
                    <div class="bd rounded-5">
                        <div class="row p-2">
                            <div class="col-12">
                                <wb-module wb="module=filepicker&mode=single&width=400&height=400" name="bkg16"
                                    wb-path="/uploads/complex" />
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <input class="form-control" type="text" name="title16"
                                        placeholder="Заголовок виджета" wb-module="langinp">
                                </div>
                                <div class="mb-1">
                                    <textarea class="form-control" rows="auto" name="text16" placeholder="Текст"
                                        wb-module="langinp"></textarea>
                                </div>
                                <div class="divider-text">Проценты</div>
                                <wb-multiinput name="percent16">
                                    <div class="input-group col-6">
                                        <input type="number" name="dsc_prc" class="form-control tx-right">
                                        <div class="input-group-append">
                                            <span class="input-group-text">%</span>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <select name="dsc_col" class="form-control" wb-select2>
                                            <option value="gray">Серый</option>
                                            <option value="blue">Синий</option>
                                        </select>
                                    </div>
                                </wb-multiinput>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6  pl-0">
                    <div class="bd rounded-5">
                        <div class="row p-2">
                            <div class="col-12">
                                <wb-module wb="module=filepicker&mode=single&width=400&height=400" name="bkg17"
                                    wb-path="/uploads/complex" />
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <input class="form-control" type="text" name="title17"
                                        placeholder="Заголовок виджета" wb-module="langinp">
                                </div>
                                <div class="mb-1">
                                    <textarea class="form-control" rows="auto" name="text17" placeholder="Текст"
                                        wb-module="langinp"></textarea>
                                </div>
                                <div class="">
                                    <input class="form-control" type="text" name="link17" placeholder="Ссылка">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mt-2">
                <div class="col-6  pl-0">
                    <div class="bd rounded-5 mb-2">
                        <div class="row p-2">
                            <div class="col-12">
                                <wb-module wb="module=filepicker&mode=single&width=400&height=200" name="bkg12"
                                    wb-path="/uploads/complex" />
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <input class="form-control" type="text" name="title12"
                                        placeholder="Заголовок виджета" wb-module="langinp">
                                </div>
                                <div class="mb-1">
                                    <textarea class="form-control" rows="auto" name="text12" placeholder="Текст"
                                        wb-module="langinp"></textarea>
                                </div>
                                <div class="">
                                    <input class="form-control" type="text" name="link12" placeholder="Ссылка">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 pr-0">
                    <div class="bd rounded-5 mb-2">
                        <div class="row p-2">
                            <div class="col-12">
                                <wb-module wb="module=filepicker&mode=single&width=400&height=200" name="bkg13"
                                    wb-path="/uploads/complex" />
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <input class="form-control" type="text" name="title13"
                                        placeholder="Заголовок виджета" wb-module="langinp">
                                </div>
                                <div class="mb-1">
                                    <textarea class="form-control" rows="auto" name="text13" placeholder="Текст"
                                        wb-module="langinp"></textarea>
                                </div>
                                <div class="">
                                    <input class="form-control" type="text" name="link13" placeholder="Ссылка">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</edit>

<view>

    <div class="card cable container" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'>
        <img class="background" src="{{bkg5.0.img}}" alt="background" wb-if="'{{bkg5.0.img}}'>''">
        <div class="wrapper">
            <h3 class="card-title">{{title5.{{_sess.lang}}}}</h3>
            <p class="card-text text-break">{{text5.{{_sess.lang}}}}</p>
        </div>
        <a href="{{link5}}" wb-if="'{{link5}}'>''">
            <span class="link-text">{{_lang.more}}</span>
            <img class="link-icon" src="/tpl/assets/img/more.svg" alt="{{_lang.more}}">
        </a>
    </div>

    <section class="lan container">

        <div class="double-card hours">
            <div class="card card-1" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'>
                <img class="background" src="{{bkg1.0.img}}" alt="background" wb-if="'{{bkg1.0.img}}'>''">
                <div class="wrapper">
                    <h3 class="card-title">{{title1.{{_sess.lang}}}}</h3>
                    <p class="card-text text-break">{{text1.{{_sess.lang}}}}</p>
                </div>
                <a href="{{link1}}" wb-if="'{{link1}}'>''">
                    <span class="link-text">{{_lang.more}}</span>
                    <img class="link-icon" src="/tpl/assets/img/more.svg" alt="{{_lang.more}}">
                </a>
            </div>
            <div class="card card-2" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'>

                <img class="background" src="{{bkg2.0.img}}" alt="background" wb-if="'{{bkg2.0.img}}'>''">
                <div class="wrapper">
                    <h3 class="card-title">{{title2.{{_sess.lang}}}}</h3>
                    <p class="card-text card-text_first text-break">{{text2.{{_sess.lang}}}}</p>
                    <h2 class="card-title_big">
                        {{subtitle2.{{_sess.lang}}}}
                    </h2>
                    <br>
                    <wb-var tmp="{{count({{list2}})}}" />
                    <wb-foreach wb="from=list2&tpl=false">
                        <p class="card-text text-break"> —&nbsp;{{subtext2.{{_sess.lang}}}}</p>
                        <br wb-if="'{{_ndx}}' !== '{{_var.tmp}}'">
                    </wb-foreach>
                </div>

                <a href="{{link2}}" wb-if="'{{link2}}'>''">
                    <span class="link-text">{{_lang.more}}</span>
                    <img class="link-icon" src="/tpl/assets/img/more.svg" alt="{{_lang.more}}">
                </a>
            </div>
        </div>

        <div class="double-card phone">

            <div class="card card-1" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'>
                <img class="background" src="{{bkg3.0.img}}" alt="background" wb-if="'{{bkg3.0.img}}'>''">
                <div class="wrapper">
                    <h3 class="card-title">{{title3.{{_sess.lang}}}}</h3>
                    <p class="card-text text-break">{{text3.{{_sess.lang}}}}</p>
                </div>
                <a href="{{link3}}" wb-if="'{{link3}}'>''">
                    <span class="link-text">{{_lang.more}}</span>
                    <img class="link-icon" src="/tpl/assets/img/more.svg" alt="{{_lang.more}}">
                </a>
            </div>

            <div class="card card-2" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'>
                <img class="background" src="{{bkg4.0.img}}" alt="background" wb-if="'{{bkg4.0.img}}'>''">
                <div class="wrapper">
                    <h3 class="card-title">{{title4.{{_sess.lang}}}}</h3>
                    <h2 class="card-title_big text-break">{{text4.{{_sess.lang}}}}</h2>

                    <div class="components">
                        <wb-var icon="1" />
                        <wb-foreach wb="from=list4&tpl=false">
                            <div class="components__item">
                                <img src="/tpl/assets/img/description-{{_var.icon}}.svg" alt="">
                                <div class="components__wrapper">
                                    <span class="components__title">{{ls4title.{{_sess.lang}}}}</span>
                                    <span class="components__text text-break">{{ls4text.{{_sess.lang}}}}</span>
                                </div>
                            </div>
                            <div class="hr" wb-if="'{{count(_parent.list4)}}'!=='{{_ndx}}'"></div>
                            <wb-var icon="{{intval({{_var.icon}})+1}}" wb-if="'{{_var.icon}}'<'4'" else="1" />
                        </wb-foreach>
                    </div>

                </div>
                <a href="{{link4}}" wb-if="'{{link4}}'>''">
                    <span class="link-text">{{_lang.more}}</span>
                    <img class="link-icon" src="/tpl/assets/img/more.svg" alt="{{_lang.more}}">
                </a>
            </div>

            <div class="card card-3" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'>
                <img class="background" src="{{bkg7.0.img}}" alt="background" wb-if="'{{bkg7.0.img}}'>''">
                <div class="wrapper">
                    <h3 class="card-title">{{title7.{{_sess.lang}}}}</h3>
                    <p class="card-text text-break">{{text7.{{_sess.lang}}}}</p>
                    <div class="icon-wrapper">
                        <img class="icon" src="/tpl/assets/img/ward.svg" alt="icon">
                        <img class="icon" src="/tpl/assets/img/headphones.svg" alt="icon">
                        <img class="icon" src="/tpl/assets/img/orbit.svg" alt="icon">
                    </div>
                </div>
                <a href="{{link7}}" wb-if="'{{link7}}'>''">
                    <span class="link-text">{{_lang.more}}</span>
                    <img class="link-icon" src="/tpl/assets/img/more.svg" alt="{{_lang.more}}">
                </a>
            </div>
        </div>

    </section>

    <div class="television container double-card">
        <div class="card card-1" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'>
            <img class="background" src="{{bkg14.0.img}}" alt="background" wb-if="'{{bkg14.0.img}}'>''">
            <div class="wrapper">
                <h3 class="card-title">{{title14.{{_sess.lang}}}}</h3>
                <p class="card-text text-break">{{text14.{{_sess.lang}}}}</p>
            </div>
            <a href="{{link14}}" wb-if="'{{link14}}'>''">
                <span class="link-text">{{_lang.more}}</span>
                <img class="link-icon" src="/tpl/assets/img/more.svg" alt="{{_lang.more}}">
            </a>
        </div>

        <div class="card card-2" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'>
            <img class="background" src="{{bkg15.0.img}}" alt="background" wb-if="'{{bkg15.0.img}}'>''">
            <div class="wrapper">
                <h3 class="card-title">{{title15.{{_sess.lang}}}}</h3>
                <p class="card-text text-break">{{text15.{{_sess.lang}}}}</p>
            </div>
            <a href="{{link15}}" wb-if="'{{link15}}'>''">
                <span class="link-text">{{_lang.more}}</span>
                <img class="link-icon" src="/tpl/assets/img/more.svg" alt="{{_lang.more}}">
            </a>
        </div>
    </div>

    <section class="camera container">

        <div class="double-card fire-alarm">
            <div class="card card-1" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'>
                <img class="background" src="{{bkg8.0.img}}" alt="background" wb-if="'{{bkg8.0.img}}'>''">
                <div class="wrapper">
                    <h3 class="card-title">{{title8.{{_sess.lang}}}}</h3>
                    <p class="card-text text-break">{{text8.{{_sess.lang}}}}</p>
                </div>
                <a href="{{link8}}" wb-if="'{{link8}}'>''">
                    <span class="link-text">{{_lang.more}}</span>
                    <img class="link-icon" src="/tpl/assets/img/more.svg" alt="{{_lang.more}}">
                </a>
            </div>

            <div class="card card-2" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'>
                <img class="background" src="{{bkg9.0.img}}" alt="background" wb-if="'{{bkg9.0.img}}'>''">
                <div class="wrapper">
                    <h3 class="card-title">{{title9.{{_sess.lang}}}}</h3>
                    <p class="card-text text-break">{{text9.{{_sess.lang}}}}</p>
                </div>
                <a href="{{link9}}" wb-if="'{{link9}}'>''">
                    <span class="link-text">{{_lang.more}}</span>
                    <img class="link-icon" src="/tpl/assets/img/more.svg" alt="{{_lang.more}}">
                </a>
            </div>
        </div>

        <div class="double-card dispatcher">
            <div class="card card-1" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'>
                <img class="background" src="{{bkg10.0.img}}" alt="background" wb-if="'{{bkg10.0.img}}'>''">
                <div class="wrapper">
                    <h3 class="card-title">{{title10.{{_sess.lang}}}}</h3>
                    <p class="card-text text-break">{{text10.{{_sess.lang}}}}</p>
                </div>
                <a href="{{link10}}" wb-if="'{{link10}}'>''">
                    <span class="link-text">{{_lang.more}}</span>
                    <img class="link-icon" src="/tpl/assets/img/more.svg" alt="{{_lang.more}}">
                </a>
            </div>

            <div class="card card-2" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'>
                <img class="background" src="{{bkg11.0.img}}" alt="background" wb-if="'{{bkg11.0.img}}'>''">
                <div class="wrapper">
                    <h3 class="card-title">{{title11.{{_sess.lang}}}}</h3>
                    <p class="card-text text-break">{{text11.{{_sess.lang}}}}</p>
                    <div class="icon-wrapper">
                        <img class="icon" src="/tpl/assets/img/three.svg" alt="icon">
                        <img class="icon" src="/tpl/assets/img/headphones.svg" alt="icon">
                        <img class="icon" src="/tpl/assets/img/orbit.svg" alt="icon">
                    </div>
                </div>
                <a href="{{link11}}" wb-if="'{{link11}}'>''">
                    <span class="link-text">{{_lang.more}}</span>
                    <img class="link-icon" src="/tpl/assets/img/more.svg" alt="{{_lang.more}}">
                </a>
            </div>
        </div>
    </section>

    <section class="evacuation container">

        <div class="double-card">
            <div class="card card-1" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'>
                <img class="background" src="{{bkg16.0.img}}" alt="background" wb-if="'{{bkg16.0.img}}'>''">
                <div class="card-wrapper">
                    <h3 class="card-title">{{title16.{{_sess.lang}}}}</h3>
                    <p class="card-text text-break">{{text16.{{_sess.lang}}}}</p>
                </div>
                <wb-include wb-tpl="percents.inc.php" wb-field="percent16"></wb-include>
            </div>

            <div class="card card-2" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'>
                <img class="background" src="{{bkg17.0.img}}" alt="background" wb-if="'{{bkg17.0.img}}'>''">
                <div class="wrapper">
                    <h3 class="card-title">{{title17.{{_sess.lang}}}}</h3>
                    <p class="card-text text-break">{{text17.{{_sess.lang}}}}</p>
                </div>
                <a href="{{link17}}" wb-if="'{{link17}}'>''">
                    <span class="link-text">{{_lang.more}}</span>
                    <img class="link-icon" src="/tpl/assets/img/more.svg" alt="{{_lang.more}}">
                </a>
            </div>


        </div>
    </section>

    <div class="automation container double-card">
        <div class="card card-1" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'>
            <img class="background" src="{{bkg12.0.img}}" alt="background" wb-if="'{{bkg12.0.img}}'>''">
            <div class="wrapper">
                <h3 class="card-title">{{title12.{{_sess.lang}}}}</h3>
                <p class="card-text text-break">{{text12.{{_sess.lang}}}}</p>
            </div>
            <a href="{{link12}}" wb-if="'{{link12}}'>''">
                <span class="link-text">{{_lang.more}}</span>
                <img class="link-icon" src="/tpl/assets/img/more.svg" alt="{{_lang.more}}">
            </a>
        </div>

        <div class="card card-2" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'>
            <img class="background" src="{{bkg13.0.img}}" alt="background" wb-if="'{{bkg13.0.img}}'>''">
            <div class="wrapper">
                <h3 class="card-title">{{title13.{{_sess.lang}}}}</h3>
                <p class="card-text text-break">{{text13.{{_sess.lang}}}}</p>
            </div>
            <a href="{{link13}}" wb-if="'{{link13}}'>''">
                <span class="link-text">{{_lang.more}}</span>
                <img class="link-icon" src="/tpl/assets/img/more.svg" alt="{{_lang.more}}">
            </a>
        </div>
    </div>



    <!-- старая верстка  -->

    <div class="container pt-3r comprehensive-engineering-solutions hide">
        <div class="row comprehensive-engineering-solutions--items">
            <!-- <div class="col-12 col-md-6"> -->
            <div class="col-md-12 col-lg-6">
                <a href="/local-area-network">
                    <img src="/tpl/assets/img/comprehensive-engineering-solutions/1.png" alt="">

                    <div class="inger-block">
                        <h4>Структурируемая кабельная система</h4>

                        <!-- <p class="tx-16">Тепловизорная система с функцией определения лиц с повышенной температурой тела</p> -->
                        <span class="tx-16" style="font-weight: 400;">Тепловизорная система с функцией определения
                            лиц</span>

                        <div class="inger-block-button">
                            <span class="link-more-detailed">Подробнее</span>
                            <div class="arrow-mask"></div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- <div class="col-12 col-md-6"> -->
            <div class="col-md-12 col-lg-6">
                <a href="/local-area-network">
                    <img src="/tpl/assets/img/comprehensive-engineering-solutions/2.png" alt="">

                    <div class="inger-block">
                        <h4>Локальная вычислительная сеть</h4>

                        <!-- <p class="tx-16">Тепловизорная система с функцией определения лиц с повышенной температурой тела</p> -->
                        <span class="tx-16" style="font-weight: 400;">Тепловизорная система с функцией определения
                            лиц</span>

                        <div class="inger-block-button">
                            <span class="link-more-detailed">Подробнее</span>
                            <div class="arrow-mask"></div>
                        </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row comprehensive-engineering-solutions--items">
        <!-- <div class="col-12 col-md-6"> -->
        <div class="col-md-12 col-lg-6">
            <a href="/local-area-network">
                <img src="/tpl/assets/img/comprehensive-engineering-solutions/3.png" alt="">

                <div class="inger-block">
                    <h4>Система телефонной связи</h4>

                    <!-- <p class="tx-16">Тепловизорная система с функцией определения лиц с повышенной температурой тела</p> -->
                    <span class="tx-16" style="font-weight: 400;">Тепловизорная система с функцией определения
                        лиц</span>

                    <div class="inger-block-button">
                        <span class="link-more-detailed">Подробнее</span>
                        <div class="arrow-mask"></div>
                    </div>
            </a>
        </div>
    </div>
    <!-- <div class="col-12 col-md-6"> -->
    <div class="col-md-12 col-lg-6">
        <a href="/local-area-network">
            <img src="/tpl/assets/img/comprehensive-engineering-solutions/4.png" alt="">

            <div class="inger-block">
                <h4>Система широковещательного телевидения и проводного радиовещания</h4>

                <!-- <p class="tx-16">Тепловизорная система с функцией определения лиц с повышенной температурой тела</p> -->
                <span class="tx-16" style="font-weight: 400;">Тепловизорная система с функцией определения лиц</span>

                <div class="inger-block-button">
                    <span class="link-more-detailed">Подробнее</span>
                    <div class="arrow-mask"></div>
                </div>
            </div>
        </a>
    </div>
    </div>
    <div class="row comprehensive-engineering-solutions--items">
        <!-- <div class="col-12 col-md-6"> -->
        <div class="col-md-12 col-lg-6">
            <a href="/local-area-network">
                <img src="/tpl/assets/img/comprehensive-engineering-solutions/5.png" alt="">

                <div class="inger-block">
                    <h4>Система электрочасофикации</h4>

                    <span class="tx-16" style="font-weight: 400;">Тепловизорная система с функцией определения
                        лиц</span>

                    <!-- <p class="tx-16">Тепловизорная система с функцией определения лиц с повышенной температурой тела</p> -->

                    <div class="inger-block-button">
                        <span class="link-more-detailed">Подробнее</span>
                        <div class="arrow-mask"></div>
                    </div>
                </div>
            </a>
        </div>
        <!-- <div class="col-12 col-md-6"> -->
        <div class="col-md-12 col-lg-6">
            <a href="/local-area-network">
                <img src="/tpl/assets/img/comprehensive-engineering-solutions/6.png" alt="">

                <div class="inger-block">
                    <h4>Система палатной связи и сигнализации</h4>

                    <!-- <p class="tx-16">Тепловизорная система с функцией определения лиц с повышенной температурой тела</p> -->
                    <span class="tx-16" style="font-weight: 400;">Тепловизорная система с функцией определения
                        лиц</span>

                    <div class="inger-block-button">
                        <span class="link-more-detailed">Подробнее</span>
                        <div class="arrow-mask"></div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row comprehensive-engineering-solutions--items">
        <!-- <div class="col-12 col-md-6"> -->
        <div class="col-md-12 col-lg-6">
            <a href="/local-area-network">
                <img src="/tpl/assets/img/comprehensive-engineering-solutions/7.png" alt="">

                <div class="inger-block">
                    <h4>Система охранного телевизионного наблюдения</h4>

                    <!-- <p class="tx-16">Тепловизорная система с функцией определения лиц с повышенной температурой тела</p> -->
                    <span class="tx-16" style="font-weight: 400;">Тепловизорная система с функцией определения
                        лиц</span>

                    <div class="inger-block-button">
                        <span class="link-more-detailed">Подробнее</span>
                        <div class="arrow-mask"></div>
                    </div>
                </div>
            </a>
        </div>
        <!-- <div class="col-12 col-md-6"> -->
        <div class="col-md-12 col-lg-6">
            <a href="/local-area-network">
                <img src="/tpl/assets/img/comprehensive-engineering-solutions/8.png" alt="">

                <div class="inger-block">
                    <h4>Система контроля доступа</h4>

                    <!-- <p class="tx-16">Тепловизорная система с функцией определения лиц с повышенной температурой тела</p> -->
                    <span class="tx-16" style="font-weight: 400;">Тепловизорная система с функцией определения
                        лиц</span>

                    <div class="inger-block-button">
                        <span class="link-more-detailed">Подробнее</span>
                        <div class="arrow-mask"></div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row comprehensive-engineering-solutions--items">
        <!-- <div class="col-12 col-md-6"> -->
        <div class="col-md-12 col-lg-6">
            <a href="/local-area-network">
                <img src="/tpl/assets/img/comprehensive-engineering-solutions/9.png" alt="">

                <div class="inger-block">
                    <h4>Система охранного видеонаблюдения</h4>

                    <!-- <p class="tx-16">Тепловизорная система с функцией определения лиц с повышенной температурой тела</p> -->
                    <span class="tx-16" style="font-weight: 400;">Тепловизорная система с функцией определения
                        лиц</span>

                    <div class="inger-block-button">
                        <span class="link-more-detailed">Подробнее</span>
                        <div class="arrow-mask"></div>
                    </div>
                </div>
            </a>
        </div>
        <!-- <div class="col-12 col-md-6"> -->
        <div class="col-md-12 col-lg-6">
            <a href="/local-area-network">
                <img src="/tpl/assets/img/comprehensive-engineering-solutions/10.png" alt="">

                <div class="inger-block">
                    <h4>Система диспетчеризации инженерных систем</h4>

                    <!-- <p class="tx-16">Тепловизорная система с функцией определения лиц с повышенной температурой тела</p> -->
                    <span class="tx-16" style="font-weight: 400;">Тепловизорная система с функцией определения
                        лиц</span>

                    <div class="inger-block-button">
                        <span class="link-more-detailed">Подробнее</span>
                        <div class="arrow-mask"></div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row comprehensive-engineering-solutions--items">
        <!-- <div class="col-12 col-md-6"> -->
        <div class="col-md-12 col-lg-6">
            <a href="/local-area-network">
                <img src="/tpl/assets/img/comprehensive-engineering-solutions/11.png" alt="">

                <div class="inger-block">
                    <h4>Система пожарной сигнализации</h4>

                    <!-- <p class="tx-16">Тепловизорная система с функцией определения лиц с повышенной температурой тела</p> -->
                    <span class="tx-16" style="font-weight: 400;">Тепловизорная система с функцией определения
                        лиц</span>

                    <div class="inger-block-button">
                        <span class="link-more-detailed">Подробнее</span>
                        <div class="arrow-mask"></div>
                    </div>
                </div>
            </a>
        </div>
        <!-- <div class="col-12 col-md-6"> -->
        <div class="col-md-12 col-lg-6">
            <a href="/local-area-network">
                <img src="/tpl/assets/img/comprehensive-engineering-solutions/12.png" alt="">

                <div class="inger-block">
                    <h4>Система охранной сигнализация</h4>

                    <!-- <p class="tx-16">Тепловизорная система с функцией определения лиц с повышенной температурой тела</p> -->
                    <span class="tx-16" style="font-weight: 400;">Тепловизорная система с функцией определения
                        лиц</span>

                    <div class="inger-block-button">
                        <span class="link-more-detailed">Подробнее</span>
                        <div class="arrow-mask"></div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row comprehensive-engineering-solutions--items">
        <!-- <div class="col-12 col-md-6"> -->
        <div class="col-md-12 col-lg-6">
            <a href="/local-area-network">
                <img src="/tpl/assets/img/comprehensive-engineering-solutions/13.png" alt="">

                <div class="inger-block">
                    <h4>Системы оповещения и управления эвакуацией людей при пожаре</h4>

                    <!-- <p class="tx-16">Тепловизорная система с функцией определения лиц с повышенной температурой тела</p> -->
                    <span class="tx-16" style="font-weight: 400;">Тепловизорная система с функцией определения
                        лиц</span>

                    <div class="inger-block-button">
                        <span class="link-more-detailed">Подробнее</span>
                        <div class="arrow-mask"></div>
                    </div>
                </div>
            </a>
        </div>
        <!-- <div class="col-12 col-md-6"> -->
        <div class="col-md-12 col-lg-6">
            <a href="/local-area-network">
                <img src="/tpl/assets/img/comprehensive-engineering-solutions/14.png" alt="">

                <div class="inger-block">
                    <h4>Система связи в конференц-зале</h4>

                    <!-- <p class="tx-16">Тепловизорная система с функцией определения лиц с повышенной температурой тела</p> -->
                    <span class="tx-16" style="font-weight: 400;">Тепловизорная система с функцией определения
                        лиц</span>

                    <div class="inger-block-button">
                        <span class="link-more-detailed">Подробнее</span>
                        <div class="arrow-mask"></div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row comprehensive-engineering-solutions--items">
        <!-- <div class="col-12 col-md-6"> -->
        <div class="col-md-12 col-lg-6">
            <a href="/local-area-network">
                <img src="/tpl/assets/img/comprehensive-engineering-solutions/15.png" alt="">

                <div class="inger-block">
                    <h4>Автоматическая противопожарная защита</h4>

                    <!-- <p class="tx-16">Тепловизорная система с функцией определения лиц с повышенной температурой тела</p> -->
                    <span class="tx-16" style="font-weight: 400;">Тепловизорная система с функцией определения
                        лиц</span>

                    <div class="inger-block-button">
                        <span class="link-more-detailed">Подробнее</span>
                        <div class="arrow-mask"></div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    </div>
    <wb-lang>
        [en]
        more = More
        [ru]
        more = Подробнее
    </wb-lang>
</view>