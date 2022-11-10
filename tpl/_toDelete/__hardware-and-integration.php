<html lang="ru">
<wb-include wb-tpl="head.inc.php" />

<style>
.mad {
  display: block;
  width: 100%; 
  height: 400px;
  object-fit: cover;
}

.img2 {
  max-height: 520px;
}
</style>

<body class="loading body-hardware cont-color-w">
<wb-var bkg="header-4.jpg" />
<wb-include wb-tpl="header.inc.php" />

<div class="mo card container" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'>
    <img class="background" src="tpl/assets/img/mo.png" alt="background">
    <div class="wrapper">
      <h3 class="card-title">
        Медицинское оборудование
      </h3>
    </div>
    <a href="/equipment">
      <span class="link-text">Подробнее</span>
      <img class="link-icon" src="tpl/assets/img/more.svg" alt="Подробнее">
    </a>
  </div>

  <div class="complex container double-card">

    <div class="card card-1" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'>
      <img class="background" src="tpl/assets/img/complex.png" alt="background">
      <div class="wrapper">
        <h3 class="card-title">
          Комплексные инженерные системы
        </h3>
        <p class="card-text">Тепловизорная система с функцией определения лиц</p>
      </div>
      <a href="/complex">
        <span class="link-text">Подробнее</span>
        <img class="link-icon" src="tpl/assets/img/more.svg" alt="Подробнее">
      </a>
    </div>

    <div class="card card-2" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'>
      <div class="wrapper">
        <div class="section-title">68</div>
        <div class="card-title">Инжинерных систем</div>
      </div>
      <div class="wrapper">
        <div class="section-title">7 млн</div>
        <div class="card-title">Постоянных пользователей</div>
      </div>
      <div class="wrapper">
        <div class="section-title">340</div>
        <div class="card-title">Количество установок</div>
      </div>
      <div class="wrapper">
        <div class="section-title">24/7</div>
        <div class="card-title">Круглосуточная поддержка</div>
      </div>
      <div class="wrapper">
        <div class="section-title">24/7</div>
        <div class="card-title">Круглосуточная поддержка</div>
      </div>
      <div class="wrapper">
        <div class="section-title">24/7</div>
        <div class="card-title">Круглосуточная поддержка</div>
      </div>
    </div>
  </div>

  <div class="system-integration container double-card">

    <div class="card card-1 swiper-container integration-swiper" data-aos="fade-up" data-aos-duration="1700"
      data-aos-offset='200'>
      <div class="swiper-wrapper">
        <h2 class="card-title_big swiper-slide">
          Обследование сетей
        </h2>
        <h2 class="card-title_big swiper-slide">
          Согласование документов
        </h2>
        <h2 class="card-title_big swiper-slide">
          Поставка оборудования
        </h2>
      </div>
    </div>

    <div class="card card-2" data-aos="fade-up" data-aos-duration="1700" data-aos-offset='200'>
      <img class="background" src="tpl/assets/img/system-integration.png" alt="background">
      <div class="wrapper">
        <h3 class="card-title">
          Системная интеграция
        </h3>
      </div>
      <a href="/system">
        <span class="link-text">Подробнее</span>
        <img class="link-icon" src="tpl/assets/img/more.svg" alt="Подробнее">
      </a>
    </div>
  </div>

  <div class="footer container">
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

<wb-include wb-tpl="footer.inc.php" />

</body>
</html>