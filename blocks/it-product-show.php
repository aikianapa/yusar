<edit header="Страница отдельного IT-продукта">
    <div class="pb-5 mb-5">
        <div>
            <wb-include wb-src="/engine/modules/yonger/common/blocks/common.inc.php" />
        </div>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#tab_scroller" role="tab"
                    aria-controls="tab_scroller" aria-selected="true">Скроллер</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab_target" role="tab" aria-controls="tab_target"
                    aria-selected="false">Цель</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab_descr" role="tab" aria-controls="tab_descr"
                    aria-selected="false">Описание</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab_benef" role="tab" aria-controls="tab_benef"
                    aria-selected="false">Преимущества</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab_rvs" role="tab" aria-controls="tab_rvs"
                    aria-selected="false">Отзывы</a>
            </li>
        </ul>
        <div class="tab-content bd bd-gray-300 bd-t-0 pd-20" id="myTabContent">
            <div class="tab-pane fade show active" id="tab_scroller" role="tabpanel" aria-labelledby="tab_scroller">
                <div class="row mb-1">
                    <label class="form-control-label col-md-3">Отображать блок</label>
                    <div class="col-md-9  mb-1">
                        <input name="scrsw" wb-module="switch">
                    </div>
                </div>
                <div class="row mb-1">
                    <label class="form-control-label col-md-3">Заголовок строка 1</label>
                    <div class="col-md-9  mb-1">
                        <input type="text" class="form-control" name="title1" placeholder="Заголовок"
                            wb-module="langinp">
                    </div>
                    <label class="form-control-label col-md-3">Заголовок строка 2</label>
                    <div class="col-md-9  mb-1">
                        <input type="text" class="form-control" name="title2" placeholder="Заголовок"
                            wb-module="langinp">
                    </div>
                    <label class="form-control-label col-md-3">Ссылка</label>
                    <div class="col-md-9  mb-1">
                        <input type="text" class="form-control" name="link" placeholder="Ссылка">
                    </div>
                    <div class="col-sm-12">
                        <textarea class="form-control" rows="auto" name="text" placeholder="Текст"
                            wb-module="langinp"></textarea>
                    </div>
                </div>
                <div class="divider-text mb-0">Счётчики</div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="divider-text mt-0">Первый блок</div>
                        <div class="row">
                            <div class="col-4  mb-1">
                                <input type="text" class="form-control" name="tc1" placeholder="Счётчик">
                            </div>
                            <div class="col-8  mb-1">
                                <input type="text" class="form-control" name="tt1" placeholder="Текст"
                                    wb-module="langinp">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4  mb-1">
                                <input type="text" class="form-control" name="tc2" placeholder="Счётчик">
                            </div>
                            <div class="col-8  mb-1">
                                <input type="text" class="form-control" name="tt2" placeholder="Текст"
                                    wb-module="langinp">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4  mb-1">
                                <input type="text" class="form-control" name="tc3" placeholder="Счётчик">
                            </div>
                            <div class="col-8  mb-1">
                                <input type="text" class="form-control" name="tt3" placeholder="Текст"
                                    wb-module="langinp">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4  mb-1">
                                <input type="text" class="form-control" name="tc4" placeholder="Счётчик">
                            </div>
                            <div class="col-8  mb-1">
                                <input type="text" class="form-control" name="tt4" placeholder="Текст"
                                    wb-module="langinp">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4  mb-1">
                                <input type="text" class="form-control" name="tc5" placeholder="Счётчик">
                            </div>
                            <div class="col-8  mb-1">
                                <input type="text" class="form-control" name="tt5" placeholder="Текст"
                                    wb-module="langinp">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="divider-text mt-0">Второй блок</div>
                        <div class="row">
                            <div class="col-4  mb-1">
                                <input type="text" class="form-control" name="bc1" placeholder="Счётчик">
                            </div>
                            <div class="col-8  mb-1">
                                <input type="text" class="form-control" name="bt1" placeholder="Текст"
                                    wb-module="langinp">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4  mb-1">
                                <input type="text" class="form-control" name="bc2" placeholder="Счётчик">
                            </div>
                            <div class="col-8  mb-1">
                                <input type="text" class="form-control" name="bt2" placeholder="Текст"
                                    wb-module="langinp">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4  mb-1">
                                <input type="text" class="form-control" name="bc3" placeholder="Счётчик">
                            </div>
                            <div class="col-8  mb-1">
                                <input type="text" class="form-control" name="bt3" placeholder="Текст"
                                    wb-module="langinp">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4  mb-1">
                                <input type="text" class="form-control" name="bc4" placeholder="Счётчик">
                            </div>
                            <div class="col-8  mb-1">
                                <input type="text" class="form-control" name="bt4" placeholder="Текст"
                                    wb-module="langinp">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4  mb-1">
                                <input type="text" class="form-control" name="bc5" placeholder="Счётчик">
                            </div>
                            <div class="col-8  mb-1">
                                <input type="text" class="form-control" name="bt5" placeholder="Текст"
                                    wb-module="langinp">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="divider-text mb-0 col-12">Изображения скроллера шапки</div>
                    <div class="col-auto">
                        <wb-module wb="module=filepicker&mode=single&width=150&height=100" name="slide1"
                            wb-path="/uplods/slides" />
                    </div>
                    <div class="col-auto">
                        <wb-module wb="module=filepicker&mode=single&width=150&height=100" name="slide2"
                            wb-path="/uplods/slides" />
                    </div>
                    <div class="col-auto sltype">
                        <label class="form-control-label">Тип скроллера</label>
                        <select class="form-control" name="sltype" wb-select2 onchange="wbapp.fn_sltype()">
                            <option value="b">Переход</option>
                            <option value="w">Ширина</option>
                            <option value="v">Видео</option>
                        </select>
                        <script>
                        wbapp.fn_sltype = function() {
                            let sel = $("#yongerBlocksForm .sltype select")
                            let val = sel.val()
                            if (val == 'b') {
                                sel.parent().prev().show()
                            } else {
                                sel.parent().prev().hide()
                            }
                        }
                        wbapp.fn_sltype()
                        </script>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab_target" role="tabpanel" aria-labelledby="tab_target">
                <div class="row mb-1">
                    <label class="form-control-label col-md-3">Отображать блок</label>
                    <div class="col-md-9  mb-1">
                        <input name="trgsw" wb-module="switch">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="mb-1">
                            <input class="form-control" type="text" name="trg_title" placeholder="Заголовок блока"
                                wb-module="langinp">
                        </div>
                        <div class="mb-1">
                            <textarea class="form-control" rows="auto" name="trg_text" placeholder="Текст"
                                wb-module="langinp"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6  pl-0">
                        <div class="bd rounded-5">
                            <div class="row p-2">
                                <div class="col-12">
                                    <wb-module wb="module=filepicker&mode=single&width=400&height=200" name="trg_bkg1"
                                        wb-path="/uploads/it-products" />
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <input class="form-control" type="text" name="trg_title1"
                                            placeholder="Заголовок виджета" wb-module="langinp">
                                    </div>
                                    <div class="mb-1">
                                        <textarea class="form-control" rows="auto" name="trg_text1" placeholder="Текст"
                                            wb-module="langinp"></textarea>
                                    </div>
                                    <div class="">
                                        <input class="form-control" type="text" name="trg_link1" placeholder="Ссылка">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6  pl-0">
                        <div class="bd rounded-5">
                            <div class="row p-2">
                                <div class="col-12">
                                    <wb-module wb="module=filepicker&mode=single&width=400&height=200" name="trg_bkg2"
                                        wb-path="/uploads/it-products" />
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <input class="form-control" type="text" name="trg_title2"
                                            placeholder="Заголовок виджета" wb-module="langinp">
                                    </div>
                                    <div class="mb-1">
                                        <textarea class="form-control" rows="auto" name="trg_text2" placeholder="Текст"
                                            wb-module="langinp"></textarea>
                                    </div>
                                    <div class="">
                                        <input class="form-control" type="text" name="trg_link2" placeholder="Ссылка">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab_descr" role="tabpanel" aria-labelledby="tab_descr">
                <div class="row mb-1">
                    <label class="form-control-label col-md-3">Отображать блок</label>
                    <div class="col-md-9  mb-1">
                        <input name="dscsw" wb-module="switch">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="mb-1">
                            <input class="form-control" type="text" name="dsc_title" placeholder="Заголовок блока"
                                wb-module="langinp">
                        </div>
                        <div class="mb-1">
                            <textarea class="form-control" rows="auto" name="dsc_text" placeholder="Текст"
                                wb-module="langinp"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6  pl-0">
                        <div class="bd rounded-5">
                            <div class="row p-2">
                                <div class="col-12">
                                    <wb-module wb="module=filepicker&mode=single&width=400&height=200" name="dsc_bkg1"
                                        wb-path="/uploads/it-products" />
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <input class="form-control" type="text" name="dsc_title1"
                                            placeholder="Заголовок виджета" wb-module="langinp">
                                    </div>
                                    <div class="mb-1">
                                        <textarea class="form-control" rows="auto" name="dsc_text1" placeholder="Текст"
                                            wb-module="langinp"></textarea>
                                    </div>
                                    <div class="divider-text">Проценты</div>
                                    <wb-multiinput name="dsc_percent">
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
                                    <wb-module wb="module=filepicker&mode=single&width=400&height=200" name="dsc_bkg2"
                                        wb-path="/uploads/it-products" />
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <input class="form-control" type="text" name="dsc_title2"
                                            placeholder="Заголовок виджета" wb-module="langinp">
                                    </div>
                                    <div class="mb-1">
                                        <textarea class="form-control" rows="auto" name="dsc_text2" placeholder="Текст"
                                            wb-module="langinp"></textarea>
                                    </div>
                                    <div class="divider-text">Список</div>
                                    <wb-multiinput name="dsc_list">
                                        <div class="col-12 mb-1">
                                            <input type="text" name="dsc_lstitle" class="form-control tx-bold"
                                                placeholder="Заголовок" wb-module="langinp">
                                        </div>
                                        <div class="col-12 mb-1">
                                            <textarea class="form-control" rows="auto" name="dsc_lstext"
                                                placeholder="Текст" wb-module="langinp"></textarea>
                                        </div>
                                    </wb-multiinput>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider-text">Горизонтальный блок</div>
                <div class="row">
                    <div class="col-sm-4">
                        <wb-module wb="module=filepicker&mode=single&width=300&height=140" name="dsc_bimage"
                            wb-path="/uploads/it-products" />
                    </div>
                    <div class="col-sm-8">
                        <div class="row pl-3">
                            <div class="col-12 mb-2">
                                <input class="form-control" type="text" name="dsc_btitle" placeholder="Заголовок"
                                    wb-module="langinp">
                            </div>
                            <div class="col-12 mb-2">
                                <textarea class="form-control" rows="auto" name="dsc_btext" placeholder="Текст"
                                    wb-module="langinp"></textarea>
                            </div>
                            <div class="col-12 mb-2">
                                <input class="form-control" type="text" name="dsc_blink" placeholder="Ссылка">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider-text">Нижние блоки</div>
                <div class="row mt-2">
                    <div class="col-6  pl-0">
                        <div class="bd rounded-5">
                            <div class="row p-2">
                                <div class="col-12">
                                    <div class="mb-1">
                                        <input class="form-control tx-bold" type="text" name="dsc_title3"
                                            placeholder="Заголовок виджета" wb-module="langinp">
                                    </div>
                                    <div class="mb-1">
                                        <input class="form-control" type="text" name="dsc_subtitle3"
                                            placeholder="Подзаголовок виджета" wb-module="langinp">
                                    </div>

                                    <div class="mb-1">
                                        <textarea class="form-control" rows="auto" name="dsc_text3" placeholder="Текст"
                                            wb-module="langinp"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6  pl-0">
                        <div class="bd rounded-5">
                            <div class="row p-2">
                                <div class="col-12">
                                    <wb-multiinput name="dsc_list4">
                                        <div class="col-12 mb-1">
                                            <input type="text" name="dsc_lstitle4" class="form-control"
                                                placeholder="Слайд" wb-module="langinp">
                                        </div>
                                    </wb-multiinput>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="tab_benef" role="tabpanel" aria-labelledby="tab_benef">
                <div class="row mb-1">
                    <label class="form-control-label col-md-3">Отображать блок</label>
                    <div class="col-md-9  mb-1">
                        <input name="bnfsw" wb-module="switch">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="mb-1">
                            <input class="form-control" type="text" name="bnf_title" placeholder="Заголовок блока"
                                wb-module="langinp">
                        </div>
                        <div class="mb-1">
                            <textarea class="form-control tx-bold" rows="auto" name="bnf_text" placeholder="Текст"
                                wb-module="langinp"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6  pl-0">
                        <div class="bd rounded-5">
                            <div class="row p-2">
                                <div class="col-12">
                                    <wb-module wb="module=filepicker&mode=single&width=400&height=200" name="bnf_bkg1"
                                        wb-path="/uploads/it-products" />
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <textarea class="form-control" rows="auto" name="bnf_text1" placeholder="Текст"
                                            wb-module="langinp"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6  pl-0">
                        <div class="bd rounded-5">
                            <div class="row p-2">
                                <div class="col-12">
                                    <wb-module wb="module=filepicker&mode=single&width=400&height=200" name="bnf_bkg2"
                                        wb-path="/uploads/it-products" />
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <textarea class="form-control" rows="auto" name="bnf_text2" placeholder="Текст"
                                            wb-module="langinp"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab_rvs" role="tabpanel" aria-labelledby="tab_rvs">
                <div class="row mb-1">
                    <label class="form-control-label col-md-3">Отображать блок</label>
                    <div class="col-md-9  mb-1">
                        <input name="rvssw" wb-module="switch">
                    </div>
                </div>
                <wb-multiinput name="reviews">
                        <div class="col-12 mb-1">
                            <textarea class="form-control" rows="auto" name="rvs_text" placeholder="Текст"
                                wb-module="langinp"></textarea>
                        </div>
                        <div class="col-sm-6 mb-1">
                                <input class="form-control tx-bold" type="text" name="rvs_title" placeholder="Автор"
                                    wb-module="langinp">
                        </div>      
                        <div class="col-sm-6 mb-1">
                                <input class="form-control" type="text" name="rvs_subtitle" placeholder="Подпись"
                                    wb-module="langinp">
                        </div>
                </wb-miltiinput>
            </div>
        </div>
    </div>
</edit>

<view>
    <wb-lang>
        [en]
        more = More
        news = News
        newsall = All news
        products = Products
        purpose = Purpose
        descr = Description
        benefits = Benefits
        reviews = Reviews
        [ru]
        more = Подробнее
        news = Новости
        newsall = Все новости
        products = Продукты
        purpose = Цель
        descr = Описание
        benefits = Преимущества
        reviews = Отзывы
    </wb-lang>

    <div class=lf-placeholder></div>
    <div wb-if="'{{sltype}}' == 'w'" class="lf-image" style="background-image:url({{slide1.0.img}})"></div>
    <div wb-if="'{{sltype}}' == 'w'" class="lf-image2" style="background-image:url()"></div>
    <div wb-if="'{{sltype}}' == 'b'" class="lf-brain" style="background-image:url({{slide1.0.img}})"></div>
    <div wb-if="'{{sltype}}' == 'b'" class="lf-brain2" style="background-image:url({{slide2.0.img}})"></div>


    <div class="body-mis__container lf-main">
        <div class="qbody" id="qbody" wb-if="'{{scrsw}}'=='on'">
            <div class="staging staging-1">
                <div class="to-fix">
                    <div class="stage">
                        <div class="mis-top scene scene-1 lf-header-block">
                            <h3 class="title lf-site-title">
                                <div class="lf-site-title-row">
                                    <div class="lf-site-title-row-inner">{{title1.{{_sess.lang}}}}</div>
                                </div>
                                <div class="lf-site-title-row">
                                    <div class="lf-site-title-row-inner">{{title2.{{_sess.lang}}}}</div>
                                </div>
                            </h3>
                            <p class="text lf-site-subtitle text-break">{{text.{{_sess.lang}}}}</p>
                            <a class="btn lf-header-btn" href="{{link}}" data-transparent="true">
                                <span class="btn-text">{{_lang.more}}</span>
                            </a>
                        </div>
                        <div class="lf-stats lf-stats1">
                            <wb-foreach wb="count=5&tpl=false">
                            <wb-var tc="tc{{_ndx}}" />
                            <wb-var tc="{{_parent.{{_var.tc}}}}" />
                            <wb-var tt="tt{{_ndx}}" />
                            <wb-var tt="{{_parent.{{_var.tt}}.{{_sess.lang}}}}" />
                            <div class="lf-stats-item-container">
                                <div class="lf-stats-item">
                                    <span class="lf-stats-value-outer">
                                        <span class="lf-stats-value-inner" wb-if="'{{_var.tc}}'!=='CE'">{{_var.tc}}</span>
                                        <span class="lf-stats-value-inner" wb-if="'{{_var.tc}}' =='CE'" style="background-image:url(/tpl/assets/img/CE.svg)"></span>
                                    </span>
                                    <span class="lf-stats-text">{{_var.tt}}</span>
                                </div>
                            </div>
                            </wb-foreach>
                        </div>

                        <div class="lf-stats lf-stats2">
                            <wb-foreach wb="count=5&tpl=false">
                            <wb-var bc="bc{{_ndx}}" />
                            <wb-var bc="{{_parent.{{_var.bc}}}}" />
                            <wb-var bt="bt{{_ndx}}" />
                            <wb-var bt="{{_parent.{{_var.bt}}.{{_sess.lang}}}}" />
                            <div class="lf-stats-item-container">
                                <div class="lf-stats-item">
                                    <span class="lf-stats-value-outer">
                                        <span class="lf-stats-value-inner" wb-if="'{{_var.bc}}'!=='CE'">{{_var.bc}}</span>
                                        <span class="lf-stats-value-inner" wb-if="'{{_var.bc}}' =='CE'" style="background-image:url(/tpl/assets/img/CE.svg)"></span>
                                    </span>
                                    <span class="lf-stats-text">{{_var.bt}}</span>
                                </div>
                            </div>
                            </wb-foreach>
                        </div>

                        <div class="scene scene-2 mis-container">

                        </div>

                    </div>
                </div>
            </div>
        </div>
                <wb-var prp="{{_lang.purpose}}" if="'{{trg_title.{{_sess.lang}}}}'==''" else="{{trg_title.{{_sess.lang}}}}"/>
                <wb-var dsc="{{_lang.descr}}" if="'{{dsc_title.{{_sess.lang}}}}'==''" else="{{dsc_title.{{_sess.lang}}}}"/>
                <wb-var bnf="{{_lang.benefits}}" if="'{{bnf_title.{{_sess.lang}}}}'==''" else="{{bnf_title.{{_sess.lang}}}}"/>

        <section class="mis-menu-wrapper lf-menu02">
            <div class="mis-nav mis-container">
                <ul class="mis-menu">
                    <a href="#purpose">
                        <li class="mis-menu__item" id='item-1' wb-if="'{{trgsw}}'=='on'">
                            {{_var.prp}}
                        </li>
                    </a>
                    <a href="#descriprion" wb-if="'{{dscsw}}'=='on'">
                        <li class="mis-menu__item" id='item-2'>
                            {{_var.dsc}}
                        </li>
                    </a>
                    <a href="#benefits" wb-if="'{{bnfsw}}'=='on'">
                        <li class="mis-menu__item" id='item-3'>
                            {{_var.bnf}}
                        </li>
                    </a>
                    <a href="#news">
                        <li class="mis-menu__item" id='item-4'>
                            {{_lang.news}}
                        </li>
                    </a>
                    <a href="#reviews" wb-if="'{{rvssw}}'=='on'">
                        <li class="mis-menu__item" id='item-5'>
                            {{_lang.reviews}}
                        </li>
                    </a>
                    <a href="#products">
                        <li class="mis-menu__item" id='item-6'>
                            {{_lang.products}}
                        </li>
                    </a>
                </ul>
                <a href="#" class="btn btn-video">
                    <span class="btn-text">Смотреть видео</span>
                </a>

            </div>
            <!-- <div class="mis-hr"></div> -->
        </section>
        <div class="mob-nav mis-container lf-menu03">

            <div class="mob-nav-flex">
                <div class="mob-nav-wrapper" wb-if="'{{trgsw}}'=='on'">
                    <span class="drop-down-list">Цель</span>
                    <img class="drop-down-list-arrow" src="/tpl/assets/img/arrow-down-icon--gray.svg" alt="arrow">
                </div>
                <a href="#" class="btn btn-video">
                    <span class="btn-text">Смотреть видео</span>
                </a>
            </div>

            <ul class="mobile-menu-list">
                <li class="mobile-menu-list__item" wb-if="'{{trgsw}}'=='on'">
                    <a href="#purpose" class="mobile-menu-list__link">
                        {{_var.prp}}
                    </a>
                </li>
                <li class="mobile-menu-list__item" wb-if="'{{dscsw}}'=='on'">
                    <a href="#descriprion" class="mobile-menu-list__link">
                        {{_var.dsc}}
                    </a>
                </li>
                <li class="mobile-menu-list__item" wb-if="'{{bnfsw}}'=='on'">
                    <a href="#benefits" class="mobile-menu-list__link">
                        {{_var.bnf}}
                    </a>
                </li>
                <li class="mobile-menu-list__item">
                    <a href="#news" class="mobile-menu-list__link">
                        {{_lang.news}}
                    </a>
                </li>
                <li class="mobile-menu-list__item" wb-if="'{{rvssw}}'=='on'">
                    <a href="#reviews" class="mobile-menu-list__link">
                        {{_lang.reviews}}
                    </a>
                </li>
                <li class="mobile-menu-list__item">
                    <a href="#products" class="mobile-menu-list__link">
                        {{_lang.products}}
                    </a>
                </li>
            </ul>
        </div>
        <section class="purpose mis-container" id="purpose" wb-if="'{{trgsw}}'=='on'">
            <span class="section-label">{{trg_title.{{_sess.lang}}}}</span>
            <h2 class="section-title text-block">{{trg_text.{{_sess.lang}}}}</h2>
            <div class="double-card">
                <div class="card card-1" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'>
                    <img class="background" src="{{trg_bkg1.0.img}}" alt="background" wb-if="'{{trg_bkg1.0.img}}'>''">
                    <div class="wrapper">
                        <h3 class="card-title">
                            {{trg_title1.{{_sess.lang}}}}
                        </h3>
                        <p class="card-text text-break">{{trg_text1.{{_sess.lang}}}}</p>
                    </div>
                    <a href="{{trg_link1}}">
                        <span class="link-text">{{_lang.more}}</span>
                        <img class="link-icon" src="/tpl/assets/img/more.svg" alt="{{_lang.more}}">
                    </a>
                </div>
                <div class="card card-2" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'>
                    <img class="background" src="{{trg_bkg2.0.img}}" alt="background" wb-if="'{{trg_bkg2.0.img}}'>''">
                    <div class="wrapper">
                        <h3 class="card-title">
                            {{trg_title2.{{_sess.lang}}}}
                        </h3>
                        <p class="card-text text-break">{{trg_text2.{{_sess.lang}}}}</p>
                    </div>
                    <a href="{{trg_link2}}">
                        <span class="link-text">{{_lang.more}}</span>
                        <img class="link-icon" src="/tpl/assets/img/more.svg" alt="{{_lang.more}}">
                    </a>
                </div>
            </div>
        </section>

        <div id="descriprion"  wb-if="'{{dscsw}}'=='on'">
            <section class="description mis-container">
                <span class="section-label" id="description">{{dsc_title.{{_sess.lang}}}}</span>
                <h2 class="section-title">{{dsc_text.{{_sess.lang}}}}</h2>
                <div class="double-card">

                    <div class="card card-1" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'
                        data-aos-easing="ease-in-out">

                        <div class="card-wrapper">
                            <h3 class="card-title">
                                {{dsc_title1.{{_sess.lang}}}}
                            </h3>
                            <p class="card-text text-break">{{dsc_text1.{{_sess.lang}}}}</p>
                        </div>
                        <wb-include wb-tpl="percents.inc.php" wb-field="dsc_percent"></wb-include>
                    </div>

                    <div class="card card-2" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'
                        data-aos-easing="ease-in-out">
                        <div class="card-wrapper">
                            <h3 class="card-title">
                                {{dsc_title2.{{_sess.lang}}}}
                            </h3>
                            <p class="card-text text-break">{{dsc_text2.{{_sess.lang}}}}</p>
                        </div>

                        <div class="components">
                            <wb-var icon="1" />
                            <wb-foreach wb="from=dsc_list&tpl=false">
                                <div class="components__item">
                                    <img src="/tpl/assets/img/description-{{_var.icon}}.svg" alt="">
                                    <div class="components__wrapper">
                                        <span class="components__title">{{dsc_lstitle.{{_sess.lang}}}}</span>
                                        <span class="components__text text-break">{{dsc_lstext.{{_sess.lang}}}}</span>
                                    </div>
                                </div>
                                <div class="hr" wb-if="'{{count(_parent.dsc_list)}}'!=='{{_ndx}}'"></div>
                                <wb-var icon="{{intval({{_var.icon}})+1}}" wb-if="'{{_var.icon}}'<'4'" else="1" />
                            </wb-foreach>
                        </div>


                    </div>
                </div>
            </section>

            <div class="sistem card mis-container" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'
                data-aos-easing="ease-in-out">
                <img class="background" src="{{dsc_bimage.0.img}}" alt="background" wb-if="'{{dsc_bimage.0.img}}'>''">
                <div class="card-wrapper">
                    <h3 class="card-title" wb-if="'{{dsc_btitle.{{_sess.lang}}}}'>''">
                        {{dsc_btitle.{{_sess.lang}}}}
                    </h3>
                    <p class="card-text break-text" wb-if="'{{dsc_btext.{{_sess.lang}}}}'>''">
                        {{dsc_btext.{{_sess.lang}}}}</p>
                </div>

                <div class="card-bottom">
                    <img class="card-icon" src="/tpl/assets/img/description-1.svg" alt="icon">
                    <a href="{{dsc_blink}}" wb-if="'{{dsc_blink}}'>''">
                        <span class="link-text">Подробнее</span>
                        <img class="link-icon" src="/tpl/assets/img/more.svg" alt="icon">
                    </a>
                </div>
            </div>
            <section class="technical mis-container" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'>
                <div class="double-card">
                    <div class="card card-1 y-10">
                        <img class="card-icon" src="/tpl/assets/img/description-4.svg" alt="icon">
                        <h2 class="card-title_big">
                            {{dsc_title3.{{_sess.lang}}}}
                        </h2>
                        <h3 class="card-title">
                            {{dsc_subtitle3.{{_sess.lang}}}}
                        </h3>
                        <p class="card-text text-break">{{dsc_text3.{{_sess.lang}}}}</p>
                    </div>

                    <div class="card card-2 y-10 swiper-mis-container technical-swiper">
                        <div class="swiper-wrapper">
                            <wb-foreach wb="from=dsc_list4">
                            <h2 class="card-title_big swiper-slide">
                                {{dsc_lstitle4.{{_sess.lang}}}}
                            </h2>
                            </wb-foreach>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section class="benefits mis-container" id="benefits"  wb-if="'{{bnfsw}}'=='on'">
            <span class="section-label" id="benefits">{{bnf_title.{{_sess.lang}}}}</span>
            <h2 class="section-title text-break">{{bnf_text.{{_sess.lang}}}}</h2>
            <div class="double-card" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'>

                <div class="card card-1">
                    <img class="background" src="{{bnf_bkg1.0.img}}" alt="background" wb-if="'{{bnf_bkg1.0.img}}'>''">
                    <h3 class="card-title text-break">{{bnf_text1.{{_sess.lang}}}}</h3>
                    <img class="card-icon" src="/tpl/assets/img/description-3.svg" alt="icon">
                </div>

                <div class="card card-2 zoom">
                    <img class="background" src="{{bnf_bkg2.0.img}}" alt="background" wb-if="'{{bnf_bkg2.0.img}}'>''">
                    <h3 class="card-title text-break">{{bnf_text2.{{_sess.lang}}}}</h3>
                    <img class="card-icon" src="/tpl/assets/img/description-4.svg" alt="icon">
                </div>
            </div>
        </section>
        <section class="special mis-container" id="news">
            <div class="special__item-top">
                <div>
                    <span class="section-label" id="news">{{_lang.news}}</span>
                </div>
                <a href="/news">
                    <span class="link-text">{{_lang.newsall}}</span>
                    <img class="link-icon" src="/tpl/assets/img/chapter.svg" alt="icon">
                </a>
            </div>

            <wb-foreach wb="table=news&limit=4&sort=date:d&tpl=false" wb-filter="active=on">
            <div class="special__item _anim-items">
                <span class="card-date">{{dateshort}}</span>
                <a class="special__article" href="/news/{{wbFurlGenerate({{header}})}}">
                    <span class="card-text">{{header}}</span>
                    <img class="link-icon" src="/tpl/assets/img/news.svg" alt="icon">
                </a>
            </div>
            <div class="hr" wb-if="'{{_ndx}}'!=='4'"></div>
            </wb-foreach>
        </section>
        <section class="reviews pb-0 pt-9r" id="reviews" wb-if="'{{rvssw}}'=='on'">
            <div class="reviews__button-prev"></div>
            <div class="reviews__button-next"></div>
            <h4 class="card-text">{{_lang.reviews}}</h4>

            <div class="reviews__swiper-container swiper-container">
                <div class="swiper-wrapper reviews__wrapper">
                    <wb-foreach wb="from=reviews&tpl=false&minimal=5">
                    <div class="reviews__card swiper-slide y-10">
                        <p class="reviews__text">{{rvs_text.{{_sess.lang}}}}</p>

                        <div class="reviews__card-bottom">
                            <p class="reviews__name">{{rvs_title.{{_sess.lang}}}}</p>
                            <p class="reviews__position">{{rvs_subtitle.{{_sess.lang}}}}</p>
                        </div>
                    </div>
                    </wb-foreach>
                </div>
            </div>
        </section>

        <section class="products" id="products">
            <div class="products__button-prev"></div>
            <div class="products__button-next"></div>
            <h4 class="card-text">{{_land.products}}</h4>
            <div class="products__swiper-container swiper-container">

                <div class="swiper-wrapper products__wrapper">
                    <wb-foreach wb="table=pages&tpl=false&minimal=5" wb-filter="active=on&path=/it-products">
                    <a href="[{{name}}]" class="card products__card-1 swiper-slide y-10">
                        <div class="card-wrapper">
                            <h3 class="card-title">
                                {{header}}
                            </h3>
                            <wb-foreach wb="from=blocks&tpl=false" wb-filter="name=header_p">
                            <p class="card-text">
                            {{lang.{{_sess.lang}}.text}}
                            </p>
                            </wb-foreach>
                        </div>
                        <img class="link-icon" src="/tpl/assets/img/more.svg" alt="icon">
                    </a>
                    </wb-foreach>

                </div>
            </div>
        </section>
    </div>
    <script src="/tpl/assets/js/scroll.js"></script>
    <script src="/tpl/assets/js/requestAnimFrame.js" wb-if="'{{scrsw}}'=='on'"></script>
    <script src="/tpl/assets/js/brain.js" wb-if="'{{sltype}}' == 'b' && '{{scrsw}}'=='on'"></script>
    <script src="/tpl/assets/js/header.js"></script>
    <script src="/tpl/assets/js/block.js"></script>
    <script src="/tpl/assets/js/sections.js"></script>
    <script src="/tpl/assets/js/menu.js"></script>
    <script>
    document.body.classList.add("body-mis");
    document.body.classList.add("cont-color-w");
    </script>
</view>