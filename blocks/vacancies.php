<edit header="Вакансии">
    <div>
        <wb-include wb-src="/engine/modules/yonger/common/blocks/common.inc.php" />
    </div>
    <div>
        <div class="row">
            <div class="col-12 mb-2">
                <label>Заголовок</label>
                <input class="form-control" type="text" name="title" placeholder="Заголовок виджета" wb-module="langinp">
            </div>
        </div>
        <wb-multiinput name="blocks">
                <div class="col-12 mb-2">
                    <input class="form-control tx-bold" type="text" name="vacancy" placeholder="Заголовок виджета" wb-module="langinp">
                </div>
                <div class="col-12">
                    <textarea class="form-control" rows="auto" name="text" placeholder="Текст" wb-module="langinp"></textarea>
                </div>
        </wb-multiinput>
    </div>
</edit>

<view>
    <div class="container">
    <h3 wb-if="'{{title.{{_sess.lang}}}}' > ''">{{title.{{_sess.lang}}}}</h3>
    <div class="row vacancy-list">
        <wb-foreach wb="from=blocks">
            <div class="col-sm-6 mb-3r vacancy-list__item">
                <wb-var vacancy="{{vacancy.{{_sess.lang}}}}" wb-if="'{{vacancy.{{_sess.lang}}}}'>''" else="{{vacancy.ru}}"/>
                <wb-var vactext="{{text.{{_sess.lang}}}}" wb-if="'{{text.{{_sess.lang}}}}'>''" else="{{text.ru}}"/>
                <h4 class="tx-28">{{_var.vacancy}}</h4>
                <p class="tx-20 text-break">{{_var.vactext}}</p>
            </div>
        </wb-foreach>
    </div>
</div>
</view>