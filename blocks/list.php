<edit header="Список с заголовком">
    <wb-include wb-src="/modules/yonger/common/blocks/common.inc.php" />
    <wb-multilang wb-lang="{{_sett.locales}}" name="lang">
    <div class="col-12 mb-2">
        <input class="form-control" type="text" name="header" placeholder="Заголовок">
    </div>
    <wb-multiinput name="list">
        <textarea class="form-control" rows="auto" name="li"></textarea>
    </wb-multiinput>
    </wb-multilang>
</edit>

<view>
    <section>
        <div class="row service-equipment--info mt-0 pb-3r">
            <div class="col-12">
                <div class="service-equipment--info--title">
                    {{header}}
                </div>

                <div class="ul">
                    <wb-foreach wb-from="list">
                        <div class="li text">{{li}}</div>
                    </wb-foreach>
                </div>

            </div>
        </div>
    </section>
</view>