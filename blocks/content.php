<view>
    <section class="block-{{name}}">
        <h3 wb-if="'{{title.{{_sess.lang}}}}' > ''">{{title.{{_sess.lang}}}}</h3>
        <p wb-if=" '{{imgpos}}' == 'bottom' ">{{text}}</p>
        <wb-var mrg="mr-{{imgmrg}}" wb-if=" '{{imgpos}}' == 'left'" />
        <wb-var mrg="ml-{{imgmrg}}" wb-if=" '{{imgpos}}' == 'right'" />
        <div class="image__container" wb-if="in_array('{{imgpos}}',['none','bottom']) && '{{image.0.img}}' > ''">
            <img data-src="{{image.0.img}}" alt="{{title.{{_sess.lang}}}}"
                class="w-{{imgwidth}} mb-{{imgmrg}} {{_var.mrg}}" />
        </div>
        <img data-src="{{image.0.img}}" alt="{{title.{{_sess.lang}}}}"
            class="img-fluid w-{{imgwidth}} float-{{imgpos}} mb-{{imgmrg}} {{_var.mrg}}"
        wb-if="in_array('{{imgpos}}',['left','right']) && '{{image.0.img}}' > ''" />
        <p wb-if=" '{{imgpos}}' !== 'bottom' ">
            {{text}}
        </p>
    </section>
</view>
<edit header="{{_lang.header}}">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>

    <div class="row mb-1">
        <label class="form-control-label col-md-3">{{_lang.name}}</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="title" placeholder="{{_lang.name}}" wb-module="langinp">
        </div>
    </div>
    <div class="row mb-1">
        <div class="col-lg-8">
            <div class="row mb-1">
                <label class="col-md-6 form-control-label">Картинка</label>
                <div class="col-md-6">
                    <select class="form-control" name="imgpos">
                        <option value="none">{{_lang.block}}</option>
                        <option value="left">{{_lang.left}}</option>
                        <option value="right">{{_lang.right}}</option>
                        <option value="bottom">{{_lang.bottom}}</option>
                    </select>
                </div>
            </div>
            <div class="row mb-1">
                <label class="col-md-6 form-control-label">Отступ</label>
                <div class="col-md-6">
                    <select class="form-control" name="imgmrg">
                        <option value="0">0pt</option>
                        <option value="1">1pt</option>
                        <option value="2">2pt</option>
                        <option value="3">3pt</option>
                        <option value="4">4pt</option>
                        <option value="5">5pt</option>
                    </select>
                </div>
            </div>
            <div class="row mb-1">
                <label class="col-md-6 form-control-label">Ширина</label>
                <div class="col-md-6">
                    <select class="form-control" name="imgwidth">
                        <option value="25">25%</option>
                        <option value="50">50%</option>
                        <option value="75">75%</option>
                        <option value="100">100%</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <wb-module wb="module=filepicker&mode=single&width=150&height=100" name="image" />
        </div>
    </div>
    <div class="form-group row">
        <div class="col-12">
            <wb-multilang wb-lang="{{_sett.locales}}" name="lang">
                <wb-module wb="{'module':'editor'}" name="text" />
            </wb-multilang>
        </div>
    </div>
    <wb-lang>
        [ru]
        header = Блок контента
        name = "Заголовок блока"
        active = "Отображать блок"
        template = Шаблон
        block = "Блок сверху"
        left = Слева
        right = Справа
        bottom = "Блок снизу"
        [ут]
        header = Content block
        name = "Block name"
        active = "Show block"
        template = Template
        block = "Block top"
        left = Left
        right = Right
        bottom = "Block bottom"
    </wb-lang>
</edit>