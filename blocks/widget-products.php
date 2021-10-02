<edit header="Виджет IT-продукты">
    <wb-include wb-src="/modules/yonger/common/blocks/common.inc.php" />
    <wb-multilang wb-lang="{{_sett.locales}}" name="lang">
        <div class="row">
            <div class="col-12 mb-2">
                <label>Заголовок виджета</label>
                <input class="form-control" type="text" name="header" placeholder="Заголовок виджета">
            </div>
        </div>

        <wb-multiinput name="products">
            <div class="row mx-3">
                <div class="col-lg-4">
                    <wb-module wb="module=filepicker&mode=single&width=150&height=100" name="image" wb-path="/assets/img/notes" />
                </div>
                <div class="col-lg-8">
                    <div class="row pl-3">
                        <div class="col-12 mb-2">
                            <input class="form-control" type="text" name="title" placeholder="Заголовок">
                        </div>
                        <div class="col-12 mb-2">
                            <input class="form-control" type="text" name="subtitle" placeholder="Подзаголовок">
                        </div>
                        <div class="col-12 mb-2">
                            <textarea class="form-control" rows="auto" name="text" placeholder="Текст"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </wb-multiinput>

    </wb-multilang>
</edit>

<view>
    <wb-include wb-tpl="widget-products.inc.php" />
</view>