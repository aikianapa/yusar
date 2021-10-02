<wb-include wb-tpl="popup.php" />
<style>
.btn-link {
    margin-top: 16px;
}
</style>
<div class="container widget widget-quote">
    <h3 class="mt-0 pb-2r">{{_lang.feedback}}</h3>
    <form method="post">
    <div class="row">
        <div class="col-12">
        <input type="text" name="fullname" class="form-control" placeholder="{{_lang.fullname}}">
        </div>
        <div class="col-md-6">
        <input type="phone" name="phone" class="form-control" placeholder="{{_lang.phone}}">
        </div>
        <div class="col-md-6">
        <input type="email" name="email" class="form-control" placeholder="{{_lang.email}}">
        </div>
        <div class="col-12">
              <textarea class="form-control" name="comment" rows="auto" placeholder="{{_lang.comment}}"></textarea>
        </div>
        <div class="col-12">
            <a href="#" class="add-file pb-1r">Приложить документ до 10 мб.</a></div>
        <div class="col-12">
              <!-- <button type="button" class="btn btn-link w-100">{{_lang.quotebtn}}</button> -->
              <button type="button" class="btn btn-link feedback" data-toggle="modal" data-target="#feedbackModal" style="margin-bottom: 72px;">{{_lang.quotebtn}}</button>
        </div>

    </div>
    </form>

</div>
<wb-lang>
[en]
feedback = Feedback
quotebtn = Get a Callback
fullname = Full name
phone = Your PhoneNumber
email = Your Email
comment = Comment
[ru]
feedback = Обратная связь
quotebtn = Заказать обратный звонок
fullname = Ф.И.О.
phone = Ваш Телефон
email = Ваш Email
comment = Комментарий
</wb-lang>