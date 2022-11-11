<edit header="Форма обратной связи">
    <div>
        <wb-include wb-src="/engine/modules/yonger/common/blocks/common.inc.php" />
    </div>
    <div class="col-12 mb-2">
        <input class="form-control" type="text" name="title" placeholder="Заголовок" wb-module="langinp">
    </div>

</edit>

<view>
    <div class="footer contacts-feedback pt-3r">
        <span class="card-text request" wb-if="'{{title.{{_sess.lang}}}}'>''">{{title.{{_sess.lang}}}}</span>
        <span class="card-text request" wb-if="'{{title.{{_sess.lang}}}}'==''">{{_lang.feedback}}</span>

        <form method="POST" class="footer__form form">

            <div class="footer__top-wrapper">
                <div class="footer__input-group footer__input-group--full-w">
                    <input type="text" class="input footer__input" placeholder="{{_lang.fullname}}*" name="fullname"
                        required minlength="2">
                </div>
                <div class="footer__input-group">
                    <input type="tel" class="input footer__input phone" placeholder="{{_lang.phone}}*" name="phone"
                        required minlength="5">
                </div>
                <div class="footer__input-group">
                    <input type="tel" class="input footer__input email" placeholder="{{_lang.email}}*" name="email"
                        required>
                </div>
            </div>

            <div class="footer__bottom-wrapper">
                <textarea class="message footer__message" placeholder="{{_lang.comment}}" name="message"></textarea>
                <div class="add-doc">
                    <div class="add-doc__inner">
                        <input type="file" name="attachment" class="add-doc__input-file">
                        <img class="footer-icon" src="/tpl/assets/img/clip.svg" alt="icon">
                        <span class="card-text">{{_lang.attach}} 10 mb</span>
                    </div>
                </div>
                <button class="btn btn-link" type="submit">{{_lang.send}}</button>
            </div>
        </form>
        <script wb-app>
        $('form.footer__form').submit(function(ev) {
            let error = false;
            ev.stopPropagation();

            let form = this;

            $.ajax({
                url: "/form/quotes/submit",
                type: "POST",
                data: new FormData(form),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    $('#feedbackModal').modal('show')
                    $(form)[0].reset();
                },
                error: function() {
                    wbapp.toast('Ошибка', "Ошибка отправки формы", {
                        bgcolor: 'warning'
                    });
                }

            });
            return false;
        });
        </script>
    </div>
    <wb-include wb-tpl="popup.php" />
    <wb-lang>
        [en]
        feedback = Feedback
        quotebtn = "Get a Callback"
        fullname = "Full name"
        phone = "Your PhoneNumber"
        email = "Your Email"
        comment = Message
        attach = Attachment
        send = Send
        [ru]
        feedback = "Обратная связь"
        quotebtn = "Заказать обратный звонок"
        fullname = Ф.И.О.
        phone = "Ваш Телефон"
        email = "Ваш Email"
        comment = Сообщение
        attach = "Приложить документ до"
        send = Отправить
    </wb-lang>
</view>