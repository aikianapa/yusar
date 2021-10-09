<div class="container">
    <div class="row pt-3r">
        <div class="col-md-6">
            <h3 class="mt-0">{{_lang.contacts}}</h3>
            <p><b>{{_lang.address}}</b>: {{_sett.address}}</p>
            <p><b>{{_lang.schedule}}</b>: {{_sett.schedule}}</p>
            <p><b>{{_lang.phone}}</b>: {{_sett.phone}}</p>
            <p><b>{{_lang.email}}</b>: {{_sett.email}}</p>
        </div>
        <div class="col-md-6">
            <wb-include wb-tpl="form-feedback.inc.php" class="pb-3r" />
        </div>
    </div>
</div>
<wb-lang>
[en]
contacts = Contact Info
address = Address
phone = Your PhoneNumber
schedule = Schedule
email = Your Email
[ru]
contacts = Контактная информация
address = Адрес
schedule = Режим работы
phone = Телефон
email = "Эл.почта"
comment = Комментари
</wb-lang>