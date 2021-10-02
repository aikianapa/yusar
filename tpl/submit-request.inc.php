<div class="pb-3r widget submit-request-widget">
  <wb-var title="{{title}}" wb-if="'{{title}}' > ''" else="{{_lang.feedback}}"/>
  <wb-var button="{{button}}" wb-if="'{{button}}' > ''" else="{{_lang.quotebtn}}"/>
  <h3 class="mt-0 pb-2r">{{_var.title}}</h3>
  <form method="post">
    <div class="row">
      <div class="col-12 col-md-6">
        <input type="text" name="fullname" class="form-control" placeholder="{{_lang.fullname}}">
      </div>
      <div class="col-md-3">
        <input type="phone" name="phone" class="form-control" placeholder="{{_lang.phone}}">
      </div>
      <div class="col-md-3">
        <input type="email" name="email" class="form-control" placeholder="{{_lang.email}}">
      </div>
      <div class="col-12">
        <textarea class="form-control" name="comment" rows="auto" placeholder="{{_lang.comment}}"></textarea>
      </div>
      <div class="col-12">
        <a href="#" class="add-file pb-1r">{{_lang.adddoc}}</a>
      </div>
      <div class="col-12">
        <!-- <button type="button" class="btn btn-link">{{_lang.quotebtn}}</button> -->
        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#feedbackModal" style="margin-bottom: 72px;">{{_var.button}}</button>
      </div>
    </div>
  </form>  
</div>
<wb-include wb-tpl="popup.php" />
<style>
.btn-link {
    max-width: 200px;
    margin-top: 16px;
}
</style>

<wb-lang>
  [en]
    feedback = Feedback
    quotebtn = Get a Callback
    fullname = Full name
    phone = Phone
    email = Your Email
    comment = Comment
    adddoc = "Append file"
  [ru]
    feedback = Оставить заявку
    quotebtn = Отправить заявку
    fullname = Ф.И.О.
    phone = Телефон
    email = Ваш Email
    adddoc = "Приложить документ"
    comment = Комментарий
</wb-lang>
