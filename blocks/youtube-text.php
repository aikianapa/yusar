<edit header="Youtube и текст">
    <div>
        <wb-include wb-src="/engine/modules/yonger/common/blocks/common.inc.php" />
    </div>
    <div class="row mb-1">
        <label class="form-control-label col-md-3">Заголовок</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="title" placeholder="Заголовок" wb-module="langinp">
        </div>
    </div>

    <div class="row">
        <div class="col-sm-9 mb-1">
            <label class="form-control-label">Ссылка Youtube</label>
            <input class="form-control" name="youtube" placeholder="Ссылка Youtube" wb-module="langinp">
        </div>
        <div class="col-sm-3 mb-1">
            <label class="form-control-label">Позиция</label>
            <select class="form-control" wb-select2 name="pos">
                <option value="order-0">Слева</option>
                <option value="order-1">Справа</option>
            </select>
        </div>


        <div class="col-12 mb-1">
            <label class="form-control-label">Текст сбоку</label>
            <textarea class="form-control" rows="auto" name="text" placeholder="Текст" wb-module="langinp"></textarea>
        </div>

        <div class="col-12 mb-1">
            <label class="form-control-label">Текст внизу</label>
            <textarea class="form-control" rows="auto" name="text_bottom" placeholder="Текст" wb-module="langinp"></textarea>
        </div>

    </div>
</edit>

<view>
    <style>
    @media (max-width: 767px) {
        .service-text {
            margin-top: 14px;
        }
    }

    iframe {
        min-width: 780px;
        min-height: 420px;
    }
    </style>
    <div class="container software-service">
        <h3 class="mt-0">{{_lang.title}}</h3>

        <div class="row software-service--content">
            <div class="col-lg-6 col-md-12 {{pos}}">
                <div style="border-radius: 10px; height: 420px; overflow: hidden;">
                    <iframe wb-if="'{{youtube.{{_sess.lang}}}}'>''"
                        src="{{urldecode({{youtube.{{_sess.lang}}}})}}"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 service-text text-break">
                {{text.{{_sess.lang}}}}
            </div>
        </div>
  <div class="software-service--info text-break" wb-if="'{{text_bottom.{{_sess.lang}}}}'>''">
    {{text_bottom.{{_sess.lang}}}}
  </div>
    </div>
</view>