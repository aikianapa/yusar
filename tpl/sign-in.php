<html lang="ru">
<wb-include wb-tpl="head.inc.php" />

<body class="loading">
<wb-var bkg="header-4.jpg" />
<wb-include wb-tpl="header.inc.php" />

<div class="container pt-3r pb-3r sign-in">
  <div class="row justify-content-sm-center">
    <div class="col-12 col-sm-8 col-lg-5 pb-2r">
      <h1>Логин</h1>

      <form class="si-form">
        <div class="si-input">
          <input type="email" placeholder="Ваш email или телефон">
        </div>
        <div class="si-input">
          <input type="password" placeholder="Пароль">
        </div>

        <div class="text-center">
          <button type="button" class="btn btn-link si-button">Восстановить</button>
        </div>


        <a href="#" class="si-link">
          Забыли пароль?
        </a>
      </form>
    </div>
  </div>
</div>

<wb-include wb-tpl="footer.inc.php" />
</body>

</html>
