<html lang="ru">
<wb-include wb-tpl="head.inc.php" />

<body class="loading">
<wb-var bkg="header-4.jpg" />
<wb-include wb-tpl="header.inc.php" />

<style>
.service-grid {
  margin-left: -15px;
  margin-right: -15px;
}

.picture {
  height: auto;
  padding-left: 15px;
  padding-right: 15px;
}

.image__container {
  overflow: hidden;
}

.image__container img {
  transition: transform 1.2s cubic-bezier(.215,.61,.355,1);
}

.image__container img:hover {
  transform: scale(1.1);
}
</style>

<div class="container pt-3r s-indent-bottom service-equipment" style="overflow-x: visible !important">
  <!-- <div class="row service-equipment--gallery">
    <div class="col-12 col-md-6">
      <div class="image__container">
        <img src="/tpl/assets/img/service-equipment/1.png" alt="" />
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="image__container">
        <img src="/tpl/assets/img/service-equipment/2.png" alt="" />
      </div>
    </div>
  </div> -->

  <div class="slick mb-3r service-grid" data-autoplay="2000" data-scroll="1">
    <wb-foreach wb="from=images">
      <div class="picture">
        <div class="image__container">
          <img class="img-fluid" src="/780x420/src{{img}}" alt="">
            </div>
          </div>
      </wb-foreach>
  </div>

  <div class="row service-equipment--info">
    <div class="col-12">
      <div class="service-equipment--info--title">
        Команда сервисного отдела
      </div>

      <div class="ul">
        <div class="li">
          Суммарный опыт инженеров более 30 лет, два инженера работают в компании с 1998 года
        </div>
        <div class="li">
          5 инженеров по стационарному ремонту, 3 специалиста по выездному сервису, 2 специалиста работают в филиалах
        </div>
        <div class="li">
          В 2003 году нами впервые в России успешно осуществлен ремонт ультразвукового эндоскопа
        </div>
        <div class="li">
          Более 1000 ремонтируемых и обслуживаемых приборов в год
        </div>
      </div>

      <div class="service-equipment--info--title service-equipment--info--title__last">
        Самый большой в России склад запасных частей для эндоскопов
      </div>

      <div class="ul">
        <div class="li">
          Склад аппаратов для диагностики
        </div>
        <div class="li">
          Склад аппаратов, ожидающих запасные части
        </div>
        <div class="li">
          Склад аппаратов для ремонта
        </div>
        <div class="li">
          Аппараты после ремонта перемещаются на склад готовой продукции
        </div>
      </div>
    </div>
  </div>
</div>

<script wb-app>
$(document).one('ready-all', function (e) {
    $(".slick").slick({
      slidesToShow: 2,
      responsive: [
        {
          breakpoint: 568,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    })
})
</script>

<wb-include wb-tpl="submit-request.inc.php" />

<wb-include wb-tpl="footer.inc.php" />
</body>

</html>
