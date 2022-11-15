<edit header="Катрочки с сылками">
    <div>
        <wb-include wb-src="/engine/modules/yonger/common/blocks/common.inc.php" />
    </div>

    <wb-multiinput name="cards">
        <div class="col-sm-4 pr-3">
            <wb-module wb="module=filepicker&mode=single&width=300&height=150" name="image"
                wb-path="/uploads/blocks/card-links" wb-ext="webp,jpg,png,jpeg,svg"></wb-module>
        </div>

        <div class="col-sm-8">
            <div class="form-group row">
                <label class="col-sm-3 form-control-label mb-1">Заголовок</label>
                <div class="col-sm-9 mb-1">
                    <input type="text" name="title" class="form-control tx-bold" placeholder="Заголовок"
                        wb-module="langinp">
                </div>
                <label class="col-sm-3 form-control-label mb-1">Ссылка</label>
                <div class="col-sm-9 mb-1">
                    <input type="text" name="link" class="form-control" placeholder="Ссылка кнопки">
                </div>

            </div>

        </div>
    </wb-multiinput>
</edit>

<view>
    <div class="pt-3r s-indent-bottom widget-service widget-service--service">
        <div class="container widget ">
            <div class="row">
                <wb-foreach wb="from=cards&tpl=false">
                    <div class="col-md-6" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'>
                        <a href="{{link}}">
                            <div class="card card--second">
                                <div class="image__container">
                                    <img class="card-img-top" data-src="{{image.0.img}}" alt="">
                                </div>
                                <div class="card-body">
                                    <p class="card-title">{{title.{{_sess.lang}}}}</p>
                                </div>
                                <div class="more">
                                    <span class="link-text">{{_lang.more}}</span>
                                    <img class="link-icon" src="/tpl/assets/img/more.svg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                </wb-foreach>
            </div>
        </div>
    </div>
    <wb-lang>
        [en]
        more = "More"
        [ru]
        more = "Подробнее"
    </wb-lang>
</view>