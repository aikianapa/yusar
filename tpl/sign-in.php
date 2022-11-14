<html lang="ru">
<wb-include wb-tpl="head.inc.php" />

<body class="loading">
<wb-var bkg="header-4.jpg" />
<wb-include wb-tpl="header.inc.php" />

<div class="container pt-3r pb-3r sign-in" id="signin">
  <div class="row justify-content-sm-center">
    <div class="col-12 col-sm-8 col-lg-5 pb-2r">
      <h1>Логин</h1>

      <form class="si-form" onsubmit="signin.fire('submit');return false;">
        <div class="si-input">
          <input type="email" name="login" placeholder="Ваш email">
        </div>
        <div class="si-input">
          <input type="password" name="password" placeholder="Пароль">
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-link si-button">Войти</button>
        </div>
        <a href="/password-recovery" class="si-link">
          Забыли пароль?
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

</html>
