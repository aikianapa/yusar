<html lang="ru">
<wb-include wb-tpl="head.inc.php" />

<body class="loading">
  <wb-var bkg="header-4.jpg" />
  <wb-include wb-tpl="header.inc.php" />

  <div class="container pt-3r pb-3r password-recovery" id="recovery">
    <div class="row justify-content-sm-center">
      <div class="col-12 col-sm-8 col-lg-5 pb-2r">
        <h1>Восстановление пароля</h1>
        <form class="pr-form" method="POST" action="/password-recovery">
          <div class="pr-info pb-3r">
            Введите email, который вы использовали при регистрации
          </div>
          <div class="pr-input pb-2r">
            <input type="email" name="email" placeholder="Ваш email">
          </div>
          <div class="pr-input pb-2r">
            <input type="password" name="password" minlength="6" required placeholder="Новый пароль">
          </div>

          <div class="pr-input">
            <input type="password" name="password-confirm" minlength="6" required placeholder="Подтверждение пароля">
          </div>
          <div>
            <button type="submit" class="btn btn-link pr-button">Восстановить</button>
          </div>
        </form>
        <div class="sign-up-success d-none">
          <div class="row justify-content-sm-center">
            <div class="col-12 pb-2r text-center">

              <svg width="160" height="160">
                <image width="160" height="160" xlink:href="/tpl/assets/img/star.svg" />
              </svg>
              <h1>Внимание!</h1>
              <div class="sus-info m1 d-none">
                Завершите восстановление пароля по ссылке в письме, которое мы отправили на ваш Email
              </div>
              <div class="sus-info m2 d-none">
                Восстановление пароля успешно завершено. Теперь вы можете приступить к работе
                <a class="btn btn-link su-button mt-3r" href="/account">Перейти в аккаунт</a>
              </div>
            </div>
          </div>
        </div>

        <div class="signup-wrong d-none">
          <div class="row justify-content-sm-center">
            <div class="col-12 pb-2r text-center">
              <h1>Ошибка!</h1>
              <div class="sus-info m1 d-none">
                  Указанный Email не зарегистрирован или аккаунт деактивирован - обратитесь к администрации сайта
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
              <br>
              <a href="/password-recovery" class="btn btn-link su-button">
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