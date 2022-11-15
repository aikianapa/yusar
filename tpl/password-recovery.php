<html lang="ru">
<wb-include wb-tpl="head.inc.php" />

<body class="loading">
  <wb-var bkg="header-4.jpg" />
  <wb-include wb-tpl="header.inc.php" />

  <div class="container pt-3r pb-3r password-recovery" id="recovery">
    <div class="row justify-content-sm-center">
      <div class="col-12 col-sm-8 col-lg-5 pb-2r">
        <h1>{{_lang.title}}</h1>
        <form class="pr-form" method="POST" action="/password-recovery">
          <div class="pr-info pb-3r">
            {{_lang.note}}
          </div>
          <div class="pr-input pb-2r">
            <input type="email" name="email" placeholder="{{_lang.email}}">
          </div>
          <div class="pr-input pb-2r">
            <input type="password" name="password" minlength="6" required placeholder="{{_lang.password}}">
          </div>

          <div class="pr-input">
            <input type="password" name="password-confirm" minlength="6" required placeholder="{{_lang.confirm}}">
          </div>
          <div>
            <button type="submit" class="btn btn-link pr-button">{{_lang.recovery}}</button>
          </div>
        </form>
        <div class="sign-up-success d-none">
          <div class="row justify-content-sm-center">
            <div class="col-12 pb-2r text-center">

              <svg width="160" height="160">
                <image width="160" height="160" xlink:href="/tpl/assets/img/star.svg" />
              </svg>
              <h1>{{_lang.warning}}!</h1>
              <div class="sus-info m1 d-none">
                {{_lang.sm1}}
              </div>
              <div class="sus-info m2 d-none">
                {{_lang.sm2}}
                <a class="btn btn-link su-button mt-3r" href="/account">{{_lang.account}}</a>
              </div>
            </div>
          </div>
        </div>

        <div class="signup-wrong d-none">
          <div class="row justify-content-sm-center">
            <div class="col-12 pb-2r text-center">
              <h1>{{_lang.error}}!</h1>
              <div class="sus-info m1 d-none">
                  {{_lang.wm1}}
              </div>
              <div class="sus-info m2 d-none">
                  {{_lang.wm2}}
              </div>
              <div class="sus-info m3 d-none">
                  {{_lang.wm3}}
              </div>
              <div class="sus-info m4 d-none">
                  {{_lang.wm4}}
              </div>
              <br>
              <a href="/password-recovery" class="btn btn-link su-button">
                {{_lang.repeat}}
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <wb-include wb-tpl="footer.inc.php" />
</body>
<wb-lang>
  [en]
  title = "Password Recovery"
  password = "New password"
  confirm = "Confirm password"
  recovery = "Recovery"
  email = "Your email"
  repeat = Repeat
  signup = "Sign Up"
  signin = "Sign In"
  error = "Error"
  account = "Account"
  warning = "Warning"
  sm1 = "The link to complete password recovery has been sent to your Email"
  sm2 = "Password recovery has been successfully completed. Now you can start work"
  wm1 = "The specified Email is not registered or the account is deactivated - contact the site administration"
  wm2 = "Invalid confirmation code"
  wm3 = "Sending Email failed. Try again later"
  wm4 = "Passwords must match"
  note = "Enter the email you used when registering"
  [ru]
  title = "Восстановление пароля"
  password = "Новый пароль"
  confirm = "Подтверждение пароля"
  recovery = "Восстановить"
  email = "Ваш email"
  repeat = Повторить
  signup = "Зарегистрироваться"
  signin = "Войти"
  error = "Ошибка"
  account = "Перейти в аккаунт"
  warning = "Внимание"
  sm1 = "Завершите восстановление пароля по ссылке в письме, которое мы отправили на ваш Email"
  sm2 = "Восстановление пароля успешно завершено. Теперь вы можете приступить к работе"
  wm1 = "Указанный Email не зарегистрирован или аккаунт деактивирован - обратитесь к администрации сайта"
  wm2 = "Неверный код подтверждения"
  wm3 = "Неудачная попытка отправки Email. Попробуйте позже"
  wm4 = "Пароли должны совпадать"
  note = "Введите email, который вы использовали при регистрации"
</wb-lang>
</html>