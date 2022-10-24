<edit header="Яндекс карта">
    <div>
        <wb-include wb-src="/engine/modules/yonger/common/blocks/common.inc.php" />
    </div>

    <div class="form-group row">
        <label class="col-sm-3">Заголовок</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="title" placeholder="Заголовок" wb-module="langinp">
        </div>
    </div>

    <div>
        <input name="yamap" wb-module="yamap" height="300" />
    </div>
</edit>

<view>
    <div class="container">
        <h3 class="mt-0" wb-if="'{{title.{{_sess.lang}}}}'>''">{{title.{{_sess.lang}}}}</h3>
        <div class="row" style="height:500px;">
            <div class="col-12">
                <div wb-module="yamap" zoom="{{yamap.0.zoom}}">
                    <wb-foreach wb="from=yamap">
                        <geopos value="{{geopos}}" title="{{address}}"></geopos>
                    </wb-foreach>
                </div>
            </div>
        </div>
    </div>
</view>