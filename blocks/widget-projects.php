<edit header="Виджет проектов">
    <wb-include wb-src="/modules/yonger/common/blocks/common.inc.php" />
    <div class="row">
        <div class="col-12 mb-2">
            <label>Количество записей в виджете</label>
            <input class="form-control" type="number" name="limit" placeholder="Количество записей">
        </div>

    </div>

    <wb-multilang wb-lang="{{_sett.locales}}" name="lang">
        <div class="row">
            <div class="col-12 mb-2">
                <label>Заголовок блока</label>
                <input class="form-control" type="text" name="header" placeholder="Заголовок">
            </div>
            <div class="col-12 mb-2">
                <label>Текст ссылки перехода</label>
                <input class="form-control" type="text" name="label" placeholder="Текст ссылки">
            </div>
        </div>
    </wb-multilang>
</edit>

<view>
    <wb-include wb-tpl="widget-projects.inc.php" />
</view>