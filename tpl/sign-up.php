<html lang="ru">
<wb-include wb-tpl="head.inc.php" />

<body class="loading">
  <wb-var bkg="header-4.jpg" />
  <wb-include wb-tpl="header.inc.php" />
  <div class="container pt-3r pb-3r sign-up" id="signup">
    <div class="row justify-content-sm-center">
      <div class="col-12 col-sm-8 col-lg-5 pb-2r">
        <h1>{{_lang.reg}}</h1>
        <form class="su-form" method="POST" action="/sign-up" wb-if="'{{_post}}'=='[]'">
          <div class="su-input">
            <input type="email" name="email" required placeholder="{{_lang.email}}">
          </div>
          <div class="su-input">
            <input type="password" name="password" minlength="6" required placeholder="{{_lang.password}}">
          </div>

          <div class="su-input">
            <input type="password" name="password-confirm" minlength="6" required placeholder="{{_lang.confirm}}">
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-link su-button">{{_lang.signup}}</button>
          </div>


          <a href="/sign-in" class="su-link">
            {{_lang.signin}}?
          </a>
        </form>

        <div class="sign-up-success d-none">
          <div class="row justify-content-sm-center">
            <div class="col-12 text-center">

              <svg width="160" height="160">
                <image width="160" height="160" xlink:href="/tpl/assets/img/star.svg" />
              </svg>
              <h1>{{_lang.thanks}}!</h1>
              <div class="sus-info m1 d-none">
                {{_lang.sm1}}
              </div>
              <div class="sus-info m2 d-none">
                {{_lang.sm2}}
                <a class="su-link" href="/account">{{_lang.account}}</a>
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
              <a href="/sign-up" class="btn btn-link su-button">
                {{_lang.repeat}}
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
<wb-lang>
  [en]
  reg = Registration
  password = "Password"
  confirm = "Confirm password"
  repeat = "Repeat"
  email = "Your email"
  signup = "Sign Up"
  signin = "Sign In"
  error = "Error"
  account = "Account"
  thanks = "Thank You"
  sm1 = "The link to complete your registration has been sent to your Email"
  sm2 = "Registration has been successfully completed. Now you can start work"
  wm1 = "Registration fails with the specified Email address - contact the site administration"
  wm2 = "Invalid confirmation code"
  wm3 = "Sending Email failed. Try again later"
  wm4 = "Passwords must match"
  [ru]
  reg = Регистрация
  password = "Пароль"
  confirm = "Подтверждение пароля"
  repeat = "Повторить"
  email = "Ваш email"
  signup = "Зарегистрироваться"
  signin = "Войти"
  error = "Ошибка"
  account = "Перейти в аккаунт"
  thanks = "Спасибо"
  sm1 = "Завершите регистрацию по ссылке в письме, которое мы отправили на ваш Email"
  sm2 = "Регистрация успешно завершена. Теперь вы можете приступить к работе"
  wm1 = "Невозможно зарегистрировать пользователя с указанным Email - обратитесь к администрации сайта"
  wm2 = "Неверный код подтверждения"
  wm3 = "Неудачная попытка отправки Email. Попробуйте позже"
  wm4 = "Пароли должны совпадать"
</wb-lang>
  <wb-include wb-tpl="footer.inc.php" />
</body>

</html>