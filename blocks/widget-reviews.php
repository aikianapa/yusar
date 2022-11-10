<edit header="Виджет отзывов">
    <wb-include wb-src="/engine/modules/yonger/common/blocks/common.inc.php" />
    <div class="row">
        <div class="col-12 mb-2">
            <label>Количество отзывов в виджете</label>
            <input class="form-control" type="number" name="limit" placeholder="Количество новостей">
        </div>
    </div>

    <wb-multilang wb-lang="{{_sett.locales}}" name="lang">
        <div class="row">
            <div class="col-12 mb-2">
                <label>Заголовок блока</label>
                <input class="form-control" type="text" name="header" placeholder="Заголовок">
            </div>
        </div>
    </wb-multilang>
</edit>

<view>
      <div>
        <wb-foreach wb="table=pages&tpl=false" wb-filter="name=reviews&active=on">
            <wb-module wb="module=yonger&mode=render&view=widget-images" />
        </wb-foreach>
      </div>
</view>