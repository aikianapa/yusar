<wb-include wb-tpl="popup.php" />

<!-- <div class="container widget submit-request-widget">
  <h3 class="mt-0 pb-2r">{{_lang.feedback}}</h3>
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
        <textarea class="message footer__message" name="comment"  placeholder="{{_lang.comment}}"></textarea>
      </div>
      <div class="col-12">
        <a href="#" class="add-file pb-1r">Приложить документ до 10 мб.</a>
      </div>
      <div class="col-12">
      
        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#feedbackModal" >{{_lang.quotebtn}}</button>
      </div>
    </div>
  </form>
</div> -->


<div class="footer container pb-0">
    <span class="card-text request">Оставить заявку</span>

    <form action="send.php" method="POST" class="footer__form form">

        <div class="footer__top-wrapper">
            <div class="footer__input-group">
                <input type="text" class="input footer__input" placeholder="ФИО" name="fullname" required
                    minlength="2">
            </div>
            <div class="footer__input-group">
                <input type="tel" class="input footer__input phone" placeholder="Ваш телефон" name="phone" required
                    minlength="5">
            </div>
            <div class="footer__input-group">
                <input type="tel" class="input footer__input email" placeholder="Ваш E-mail*" name="email" required>
            </div>
        </div>

        <div class="footer__bottom-wrapper">
            <textarea class="message footer__message" placeholder="Комментарий" name="message"></textarea>
            <div class="add-doc">
                <div class="add-doc__inner">
                    <input type="file" class="add-doc__input-file">
                    <img class="footer-icon" src="tpl/assets/img/clip.svg" alt="icon">
                    <span class="card-text">Приложить документ до 10 мб</span>
                </div>
            </div>
            <button class="btn btn-link" type="submit">Оформить заявку</button>
        </div>
    </form>
</div>

<wb-lang>
  [en]
    feedback = Feedback
    quotebtn = Get a Callback
    fullname = Full name
    phone = Phone
    email = Your Email
    comment = Comment
  [ru]
    feedback = Оставить заявку
    quotebtn = Отправить заявку
    fullname = Ф.И.О.
    phone = Телефон
    email = Ваш Email
    comment = Комментарий
</wb-lang>
