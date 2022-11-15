<html lang="ru">
<wb-include wb-tpl="head.inc.php" />

<body class="loading">
  <wb-var bkg="header-4.jpg" />
  <wb-include wb-tpl="header.inc.php" />
  <div class="container pt-3r pb-3r sign-up" id="signup">
    <div class="row justify-content-sm-center">
      <div class="col-12 col-sm-8 col-lg-5 pb-2r">
        <h1>Регистрация</h1>
        <form class="su-form" method="POST" action="/sign-up" wb-if="'{{_post}}'=='[]'">
          <div class="su-input">
            <input type="email" name="email" required placeholder="Ваш email">
          </div>
          <div class="su-input">
            <input type="password" name="password" minlength="6" required placeholder="Пароль">
          </div>

          <div class="su-input">
            <input type="password" name="password-confirm" minlength="6" required placeholder="Подтверждение пароля">
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-link su-button">Зарегистрироваться</button>
          </div>


          <a href="/sign-in" class="su-link">
            Войти?
          </a>
        </form>

        <div class="sign-up-success d-none">
          <div class="row justify-content-sm-center">
            <div class="col-12 text-center">

              <svg width="160" height="160">
                <image width="160" height="160" xlink:href="/tpl/assets/img/star.svg" />
              </svg>
              <h1>Спасибо!</h1>
              <div class="sus-info m1 d-none">
                Завершите регистрацию по ссылке в письме, которое мы отправили на ваш Email
              </div>
              <div class="sus-info m2 d-none">
                Регистрация успешно завершена. Теперь вы можете приступить к работе
                <a class="su-link" href="/account">Перейти в аккаунт</a>
              </div>
            </div>
          </div>
        </div>

        <div class="signup-wrong d-none">
          <div class="row justify-content-sm-center">
            <div class="col-12 pb-2r text-center">
              <h1>Ошибка!</h1>
              <div class="sus-info m1 d-none">
                  Невозможно зарегистрировать пользователя с указанным Email - обратитесь к администрации сайта
              </div>
              <div class="sus-info m2 d-none">
                  Неверный код подтверждения
              </div>
              <div class="sus-info m3 d-none">
                  Неудачная попытка отправки Email. Попробуйте позже
              </div>
              <div class="sus-info m4 d-none">
                  Пароли должны совпадать
              </div>
              <a href="/sign-up" class="btn btn-link su-button">
                Повторить
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <wb-include wb-tpl="footer.inc.php" />
</body>

</html>