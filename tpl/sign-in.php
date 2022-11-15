<html lang="ru">
<wb-include wb-tpl="head.inc.php" />

<body class="loading">
<wb-var bkg="header-4.jpg" />
<wb-include wb-tpl="header.inc.php" />

<div class="container pt-3r pb-3r sign-in" id="signin">
  <div class="row justify-content-sm-center">
    <div class="col-12 col-sm-8 col-lg-5 pb-2r">
      <h1>{{_lang.login}}</h1>

      <form class="si-form" onsubmit="signin.fire('submit');return false;">
        <div class="si-input">
          <input type="email" name="login" placeholder="{{_lang.email}}">
        </div>
        <div class="si-input">
          <input type="password" name="password" placeholder="{{_lang.password}}">
        </div>
        <div class="row pt-2r">
        <div class="col-6 text-center">
          <button type="submit" class="btn btn-link d-inline">{{_lang.signin}}</button>
        </div>
        <div class="col-6 text-center">
          <a type="submit" class="btn btn-link d-inline" href="/sign-up">{{_lang.signup}}</a>
        </div>
        </div>
        <a href="/password-recovery" class="si-link">
          {{_lang.forgot}}?
        </a>
      </form>
    </div>
  </div>
</div>
<script wb-app>
    var signin = new Ractive({
      el: '#signin',
      template: $('#signin').html(),
      on: {
        submit() {
            let post = $(signin.el).find('form').serializeJson()
            wbapp.post('/api/v2/login/email',post,function(data){
                if (data.error === false) {
                    document.location.href = data.redirect
                }
            })
        }
      }
    })
</script>
<wb-include wb-tpl="footer.inc.php" />
</body>
<wb-lang>
  [en]
  login = "Login"
  password = "Password"
  email = "Your email"
  signup = "Sign Up"
  signin = "Sign In"
  thanks = "Thank You"
  forgot = "Forgot password"
  [ru]
  login = "Логин"
  password = "Пароль"
  email = "Ваш email"
  signup = "Регистрация"
  signin = "Войти"
  forgot = "Забыли пароль"

</wb-lang>
</html>
