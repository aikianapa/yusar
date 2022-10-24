<edit header="Виджет иконка и текст">
    <div>
        <wb-include wb-src="/engine/modules/yonger/common/blocks/common.inc.php" />
    </div>
    <div>
        <div class="row">
            <div class="col-12 mb-2">
                <label>Заголовок виджета</label>
                <input class="form-control" type="text" name="title" placeholder="Заголовок виджета" wb-module="langinp">
            </div>
        </div>
        <wb-multiinput name="blocks">
                <div class="col-sm-4">
                    <wb-module wb="module=filepicker&mode=single&width=100&height=100" name="image"
                        wb-path="/assets/img/widgets/icontext" />
                </div>
                <div class="col-sm-8">
                    <textarea class="form-control" rows="auto" name="text" placeholder="Текст" wb-module="langinp"></textarea>
                </div>
        </wb-multiinput>
    </div>
</edit>

<view>
    <div>
        <h3>{{title.{{_sess.lang}}}}</h3>
        <div class="row team-benefits">
            <wb-foreach wb="from=blocks">
            <div class="col-sm-6">
                <div class="bg-gray p-2r d-flex align-items-center tx-20" style="border-radius: 5px;">
                    <img src="{{image.0.img}}" class="mr-2r" alt="">{{text.{{_sess.lang}}}}
                </div>
            </div>
            </wb-foreach>
        </div>
    </div>
</view>