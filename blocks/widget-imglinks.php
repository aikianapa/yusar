<edit header="Виджет картинки-ссылки">
    <wb-include wb-src="/modules/yonger/common/blocks/common.inc.php" />

    <div class="row">
        <div class="col-sm-6 mb-2">
            <label>Заголовок виджета</label>
            <input class="form-control" wb-module="langinp" type="text" name="head" placeholder="Заголовок виджета">
        </div>

        <div class="col-sm-3 mb-2">
            <label>Ширина</label>
            <input class="form-control" type="number" name="width" placeholder="Ширина">
        </div>
        <div class="col-sm-3 mb-2">
            <label>Высота</label>
            <input class="form-control" type="number" name="height" placeholder="Высота">
        </div>
    </div>


    <wb-multilang wb-lang="{{_sett.locales}}" name="lang">
        <wb-multiinput name="products">
            <div class="row mx-3">
                <div class="col-lg-4">
                    <wb-module wb="module=filepicker&mode=single&width=150&height=100" name="image"
                        wb-path="/assets/img/widgets" />
                </div>
                <div class="col-lg-8">
                    <div class="row pl-3">
                        <div class="col-12 mb-2">
                            <input class="form-control" type="text" name="title" placeholder="Текст ссылки">
                        </div>
                        <div class="col-12 mb-2">
                            <input class="form-control" type="text" name="link" placeholder="Ссылка">
                        </div>
                    </div>
                </div>
            </div>
        </wb-multiinput>

    </wb-multilang>
</edit>

<view>
    <section>
        <div class="container widget widget-equipment pt-3r pb-3r">
            <div class="border-bottom pb-1r mb-2r">
                <h3>{{head.{{_sess.lang}}}}</h3>
            </div>
            <div class="row">
                <wb-var count="{{count({{lang.{{_sess.lang}}.products}})}}" />
                <wb-foreach wb-from="lang.{{_sess.lang}}.products">
                    <wb-var class="col-auto" />
                    <wb-var class="col-12" wb-if="'{{_var.count}}'=='1'" />
                    <wb-var class="col-md-6" wb-if="'{{_var.count}}'=='2'" />
                    <wb-var class="col-md-4" wb-if="'{{_var.count}}'=='3'" />
                    <wb-var class="col-md-3" wb-if="'{{_var.count}}'=='4'" />
                    <wb-var class="col-md-2" wb-if="'{{_var.count}}'=='6'" />
                    <wb-var img="{{image.0.img}}" wb-if="'{{image.0.img}}'>''"
                        else="{{_parent.lang.ru.products.{{_idx}}.image.0.img}}" />
                    <div class="{{_var.class}}">
                        <a href="{{link}}">
                            <div class="card">
                                <div class="image__container">
                                    <img class="card-img-top"
                                        data-src="/thumbc/{{_parent.width}}x{{_parent.height}}/src{{_var.img}}"
                                        width="{{_parent.width}}" height="{{_parent.height}}" alt="{{title}}">
                                </div>
                                <div class="card-body">
                                    <p class="card-text" style="margin-top: 15px;">{{title}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </wb-foreach>
            </div>
        </div>
    </section>
</view>