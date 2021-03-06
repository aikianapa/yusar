<html lang="ru">
<wb-include wb-tpl="head.inc.php" />

<body class="loading">
<wb-var bkg="header-4.jpg" />
<wb-include wb-tpl="header.inc.php" />

<style>
.slick-arrow {
  width: 40px;
  height: 40px;
}

.slick-prev {
  top: 42%;
  left: -45px;
}

.slick-next {
  right: -45px;
}

.system-grid {
  margin-left: -15px;
  margin-right: -15px;
}

.picture {
  padding-left: 15px;
  padding-right: 15px;
}
</style>

<div class="container pt-3r system-integration" style="overflow-x: visible !important">
  <!-- <div class="row system-integration--gallery">
    <div class="col-12 col-md-3">
      <div class="image__container">
        <img src="/tpl/assets/img/system-integration/1.png" alt="" />
      </div>
    </div>
    <div class="col-12 col-md-3">
      <div class="image__container">
        <img src="/tpl/assets/img/system-integration/2.png" alt="" />
      </div>
    </div>
    <div class="col-12 col-md-3">
      <div class="image__container">
        <img src="/tpl/assets/img/system-integration/3.png" alt="" />
      </div>
    </div>
    <div class="col-12 col-md-3">
      <div class="image__container">
        <img src="/tpl/assets/img/system-integration/4.png" alt="" />
      </div>
    </div>
  </div> -->

  <div class="slick mb-3r system-grid" data-autoplay="2000" data-scroll="1">
    <wb-foreach wb="from=images">
      <div class="picture">
        <div class="image__container">
          <img class="img-fluid" src="/thumbc/500x320/src{{img}}" alt="">
        </div>
      </div>
      </wb-foreach>
  </div>

  <div class="ul system-integration--info">
    <div class="li">
      Аудит и предпроектное обследование сетей и информационной инфраструктуры предприятия;
    </div>
    <div class="li">
      Разработка и согласование необходимых документов;
    </div>
    <div class="li">
      Конфигурирование и поставка оптимального оборудования;
    </div>
    <div class="li">
      Аттестацию системы и ее отдельных компонентов;
    </div>
    <div class="li">
      Специальная проверка сложной техники на совместимость и отказоустойчивость;
    </div>
    <div class="li">
      Монтаж и ввод в эксплуатацию технических средств, системного программного обеспечения;
    </div>
    <div class="li">
      Ввод в эксплуатацию информационных систем, локально вычислительных сетей и активного оборудования;
    </div>
    <div class="li">
      Техническое сопровождение и поддержка;
    </div>
    <div class="li">
      Гарантийное и сервисное обслуживание;
    </div>
    <div class="li">
      Консультирование Заказчиков.
    </div>
  </div>
</div>

<wb-include wb-tpl="submit-request.inc.php" />

<wb-include wb-tpl="footer.inc.php" />
</body>

</html>
