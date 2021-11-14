<wb-include wb-tpl="popup.php" />
<div class="container widget widget-quote mt-6r">
    <h3 class="mt-0 pb-3r">{{_lang.getquote}}</h3>
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <input type="text" name="fullname" class="form-control" placeholder="{{_lang.fullname}}">
            </div>

            <div class="col-md-4">
                <!-- <input type="phone" name="phone" class="form-control" placeholder="{{_lang.phone}}"> -->
                <input type="phone" name="phone" class="form-control" placeholder="Ваш телефон">
                
            </div>

            <div class="col-md-4">
                <input type="email" name="email" class="form-control" placeholder="{{_lang.email}}">
            </div>

            <!-- <div class="col-md-3">
                <input type="text" name="vacancy" class="form-control" placeholder="{{_lang.vacancy}}">
            </div> -->

            <div class="col-12">
                <textarea class="form-control" name="comment" rows="auto" placeholder="{{_lang.comment}}"></textarea>
            </div>

            <div class="col-12">
                <a href="#" class="add-file pb-1r">Приложить документ до 10 мб.</a>
            </div>

            <div class="col-12">
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#feedbackModal" style=" margin-top: 16px;">{{_lang.quotebtn}}</button>
            </div>
        </div>
    </form>
</div>

<wb-lang>
[en]
getquote = Get a Quote
quotebtn = Get a Quote
fullname = Full name
vacancy = Vacancy
phone = Your PhoneNumber
email = Your Email
comment = Comment
[ru]
getquote = Оставьте свою заявку здесь
quotebtn = Отправить заявку
fullname = Ф.И.О.
vacancy = Вакансия на должность
phone - Ваш Телефон
email = Ваш Email
comment = Комментарий
</wb-lang>