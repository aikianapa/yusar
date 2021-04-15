<html lang="ru">
<wb-include wb-tpl="head.inc.php" />

<body class="loading">
<wb-var bkg="header-4.jpg" />
<wb-include wb-tpl="header.inc.php" />

<div class="container pt-3r pb-3r sign-up">
  <div class="row justify-content-sm-center">
    <div class="col-12 col-sm-8 col-lg-5 pb-2r">
      <h1>Регистрация</h1>

      <form class="su-form">
        <div class="su-input">
          <input type="email" placeholder="Ваш email или телефон">
        </div>
        <div class="su-input">
          <input type="password" placeholder="Пароль">
        </div>

        <div class="su-input">
          <input type="password" placeholder="Подтверждение пароля">
        </div>

        <div class="text-center">
          <button type="button" class="btn btn-link su-button">Отправить</button>
        </div>


        <a href="#" class="su-link">
          Войти?
        </a>
      </form>
    </div>
  </div>
</div>

<wb-include wb-tpl="footer.inc.php" />
</body>

</html>
