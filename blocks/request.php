<edit header="Форма заявки">
    <wb-include wb-src="/engine/modules/yonger/common/blocks/common.inc.php" />
    <wb-multilang wb-lang="{{_sett.locales}}" name="lang">
        <div class="row">
            <div class="col-sm-6">
                <label>Заголовок</label>
                <input class="form-control" type="text" name="title" placeholder="Заголовок">
            </div>
            <div class="col-sm-6">
                <label>Кнопка</label>
                <input class="form-control" type="text" name="button" placeholder="Кнопка">
            </div>

        </div>
    </wb-multilang>
</edit>

<view>
    <wb-include wb-tpl="submit-request.inc.php" />
</view>