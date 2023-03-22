<edit header="Контакты">
    <div>
        <wb-include wb-src="/engine/modules/yonger/common/blocks/common.inc.php" />
    </div>
    <div>

        <wb-multilang wb-lang="{{_sett.locales}}" name="lang">
            <div class="form-group row">
                <label class="col-sm-3">Заголовок</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" name="title" placeholder="Заголовок">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3">Адрес</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" name="address" placeholder="Адрес" placeholder="{{_sett.address}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3">Режим работы</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" name="worktime" placeholder="{{_sett.worktime}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3">Телефон</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" name="phone" placeholder="{{_sett.phone}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3">Эл.почта</label>
                <div class="col-sm-9">
                    <input class="form-control" type="email" name="email" placeholder="{{_sett.email}}">
                </div>
            </div>

    </div>
</edit>

<view>
    <div class="container">
        <div class="row">
            <div class="col-md-6 pt-3r">
                <h3 class="mt-0" wb-if="'{{lang.title}}'>' '">{{lang.title}}</h3>
                <h3 class="mt-0" wb-if="'{{lang.title}}'==''">{{_lang.contacts}}</h3>
                <p wb-if="'{{lang.address}}'>' '"><b>{{_lang.address}}</b>: {{lang.address}}</p>
                <p wb-if="'{{lang.address}}'==''"><b>{{_lang.address}}</b>: {{_sett.address}}</p>

                <p wb-if="'{{lang.worktime}}'>' '"><b>{{_lang.schedule}}</b>: {{lang.worktime}}</p>
                <p wb-if="'{{lang.worktime}}'==''"><b>{{_lang.schedule}}</b>: {{_sett.worktime}}</p>

                <p wb-if="'{{lang.phone}}'>' '"><b>{{_lang.phone}}</b>: {{lang.phone}}</p>
                <p wb-if="'{{lang.phone}}'==''"><b>{{_lang.phone}}</b>: {{_sett.phone}}</p>

                <p wb-if="'{{lang.email}}'>' '"><b>{{_lang.email}}</b>: {{lang.email}}</p>
                <p wb-if="'{{lang.email}}'==''"><b>{{_lang.email}}</b>: {{_sett.email}}</p>
            </div>
            <div class="col-md-6">
                <wb-module wb="module=yonger&mode=render&view=form-feedback" />
            </div>
        </div>
    </div>
    <wb-lang>
        [en]
        contacts = Contact Info
        address = Address
        phone = PhoneNumber
        schedule = Schedule
        email = Email
        [ru]
        contacts = Контактная информация
        address = Адрес
        schedule = Режим работы
        phone = Телефон
        email = "Эл.почта"
        comment = Комментари
    </wb-lang>
</view>