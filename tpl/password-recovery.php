<html lang="ru">
<wb-include wb-tpl="head.inc.php" />

<body class="loading">
<wb-var bkg="header-4.jpg" />
<wb-include wb-tpl="header.inc.php" />

<div class="container pt-3r pb-3r password-recovery">
  <div class="row justify-content-sm-center">
    <div class="col-12 col-sm-8 col-lg-5 pb-2r">
      <h1>Восстановление пароля</h1>
      <div class="pr-info">
        Введите email, который вы использовали при регистрации
      </div>
      <form class="pr-form">
        <div class="pr-input">
          <input type="email" placeholder="Ваш email">
        </div>

        <div>
          <button type="button" class="btn btn-link pr-button">Восстановить</button>
        </div>
      </form>
    </div>
  </div>
</div>

<wb-include wb-tpl="footer.inc.php" />
</body>

</html>
