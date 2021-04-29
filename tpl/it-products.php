<html lang="ru">
<wb-include wb-tpl="head.inc.php" />

<body class="loading">
<wb-var bkg="header-4.jpg" />
<wb-include wb-tpl="header.inc.php" />

<div class="container pt-3r it-products">
  <h3 class="mt-0">{{_lang.title1}}</h3>

  <div class="slick" data-slick-options='{"infinite":
    true,"lazyLoad":"ondemand","responsive":
    [{"breakpoint":1800,"settings":{
      "slidesToShow":4,"slidesToScroll":1}},
      {"breakpoint":1200,"settings":
        {"slidesToShow":4,"slidesToScroll":1}},
        {"breakpoint":992,"settings":
          {"slidesToShow":3,"slidesToScroll":1}},
          {"breakpoint":768,"settings":{"slidesToShow":2,
            "slidesToScroll":1}},{"breakpoint":640,"settings":
              {"slidesToShow":1,"slidesToScroll":1}}],
              "slidesToShow":5,"slidesToScroll":1}'>
              <wb-foreach wb="from=images">
              <div>
                <img src="thumbc/318x164/src{{img}}" alt="">
              </div>
            </wb-foreach>
            </div>
    <!-- <div>
      <img src="https://via.placeholder.com/255x164.png" alt="">
    </div>
    <div>
      <img src="https://via.placeholder.com/255x164.png" alt="">
    </div>
    <div>
      <img src="https://via.placeholder.com/255x164.png" alt="">
    </div>
    <div>
      <img src="https://via.placeholder.com/255x164.png" alt="">
    </div>
    <div>
      <img src="https://via.placeholder.com/255x164.png" alt="">
    </div>
    <div>
      <img src="https://via.placeholder.com/255x164.png" alt="">
    </div>
    <div>
      <img src="https://via.placeholder.com/255x164.png" alt="">
    </div>
    <div>
      <img src="https://via.placeholder.com/255x164.png" alt="">
    </div>
    <div>
      <img src="https://via.placeholder.com/255x164.png" alt="">
    </div>
    <div>
      <img src="https://via.placeholder.com/255x164.png" alt="">
    </div>
  </div> -->

  <h3>{{_lang.title2}}</h3>

  <div class="row it-products--items">
    <div class="col-12 col-md-6">
      <img src="/tpl/assets/img/it-products/1.png" alt="">
      <div>
        <span>МИС</span>
        <span>Медицинская нформационная система</span>
        <a href="#" class="link-more-detailed">
          Подробнее
          <svg width="24" height="24">
            <image width="24" height="24" xlink:href="/tpl/assets/img/right-arrow.svg" />
          </svg>
        </a>
      </div>
    </div>
    <div class="col-12 col-md-6">
      <img src="/tpl/assets/img/it-products/2.png" alt="">
      <div>
        <span>РИС</span>
        <span>Радиологическая цифровая информационная система</span>
        <a href="#" class="link-more-detailed">
          Подробнее
          <svg width="24" height="24">
            <image width="24" height="24" xlink:href="/tpl/assets/img/right-arrow.svg" />
          </svg>
        </a>
      </div>
    </div>
  </div>
  <div class="row it-products--items">
    <div class="col-12 col-md-6">
      <img src="/tpl/assets/img/it-products/3.png" alt="">
      <div>
        <span>ПАКС</span>
        <span>Система архивации и передачи изображений</span>
        <a href="#" class="link-more-detailed">
          Подробнее
          <svg width="24" height="24">
            <image width="24" height="24" xlink:href="/tpl/assets/img/right-arrow.svg" />
          </svg>
        </a>
      </div>
    </div>
    <div class="col-12 col-md-6">
      <img src="/tpl/assets/img/it-products/4.png" alt="">
      <div>
        <span>Телемедицина</span>
        <span>Онлайн консультации</span>
        <a href="#" class="link-more-detailed">
          Подробнее
          <svg width="24" height="24">
            <image width="24" height="24" xlink:href="/tpl/assets/img/right-arrow.svg" />
          </svg>
        </a>
      </div>
    </div>
  </div>
  <div class="row it-products--items">
    <div class="col-12 col-md-6">
      <img src="/tpl/assets/img/it-products/5.png" alt="">
      <div>
        <span>Эндоскопия</span>
        <span>Полный эндо-анализ</span>
        <a href="#" class="link-more-detailed">
          Подробнее
          <svg width="24" height="24">
            <image width="24" height="24" xlink:href="/tpl/assets/img/right-arrow.svg" />
          </svg>
        </a>
      </div>
    </div>
    <div class="col-12 col-md-6">
      <img src="/tpl/assets/img/it-products/6.png" alt="">
      <div>
        <span>Аптека</span>
        <span>Онлайн реализация</span>
        <a href="#" class="link-more-detailed">
          Подробнее
          <svg width="24" height="24">
            <image width="24" height="24" xlink:href="/tpl/assets/img/right-arrow.svg" />
          </svg>
        </a>
      </div>
    </div>
  </div>
  <div class="row it-products--items">
    <div class="col-12 col-md-6">
      <img src="/tpl/assets/img/it-products/7.png" alt="">
      <div>
        <span>Искусственный интеллект</span>
        <span>Нейросети в медицине</span>
        <a href="#" class="link-more-detailed">
          Подробнее
          <svg width="24" height="24">
            <image width="24" height="24" xlink:href="/tpl/assets/img/right-arrow.svg" />
          </svg>
        </a>
      </div>
    </div>
    <div class="col-12 col-md-6">
      <img src="/tpl/assets/img/it-products/8.png" alt="">
      <div>
        <span>ЦАМИ</span>
        <span>Центральный архив медицинских изображений</span>
        <a href="#" class="link-more-detailed">
          Подробнее
          <svg width="24" height="24">
            <image width="24" height="24" xlink:href="/tpl/assets/img/right-arrow.svg" />
          </svg>
        </a>
      </div>
    </div>
  </div>
</div>

<wb-include wb-tpl="submit-request.inc.php" />

<wb-include wb-tpl="footer.inc.php" />
</body>

</html>
<!-- <wb-lang>
  [en]
  title1 = Галерея
  title2 = Наши продукты
  [ru]
  title1 = Галерея
  title2 = Наши продукты
</wb-lang> -->
