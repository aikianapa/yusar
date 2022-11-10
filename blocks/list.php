<edit header="Список с заголовком">
    <wb-include wb-src="/engine/modules/yonger/common/blocks/common.inc.php" />

    <div class="col-12 mb-2">
        <input class="form-control" type="text" name="title" placeholder="Заголовок" wb-module="langinp">
    </div>
    <wb-multiinput name="list">
        <textarea class="form-control" rows="auto" name="li"  wb-module="langinp"></textarea>
    </wb-multiinput>

</edit>

<view>
    <section>
        <div class="row service-equipment--info mt-0 pt-3r">
            <div class="col-12">
                <div class="service-equipment--info--title">
                    {{title.{{_sess.lang}}}}
                </div>

                <div class="ul">
                    <wb-foreach wb-from="list">
                        <div class="li text">{{li.{{_sess.lang}}}}</div>
                    </wb-foreach>
                </div>

            </div>
        </div>
    </section>
</view>