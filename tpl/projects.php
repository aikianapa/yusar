<html lang="ru">
<wb-include wb-tpl="head.inc.php" />

<body class="loading">
<wb-var bkg="header-4.jpg" />
<wb-include wb-tpl="header.inc.php" />

<div class="container pt-3r pb-3r projects">
  <div class="tabs">
    <div class="tabs--item tabs--item--active">Российские</div>
    <div class="separator"></div>
    <div class="tabs--item">Международные</div>
  </div>

  <div class="filters">
    <div>
      <div class=filters--sorting>
        <div class="filters--title">Сортировать:</div>
        <div class="filters--sort filters--sort--active">
          По популярности
        </div>
        <div class="filters--sort">
          По новизне
        </div>
      </div>
      <div class="filters--categories">
        <div class="filters--category">
          <div class="filters--title">Категории:</div>
          <div class="selector">
            <select>
              <option value="">Образование</option>
            </select>
            <img data-src="/tpl/assets/img/arrow-select.svg">
          </div>
        </div>
        <div class="filters--year">
          <div class="filters--title">Год:</div>
          <div class="selector">
          <select>
            <option value="">2020</option>
            <option value="">2021</option>
          </select>
          <img data-src="/tpl/assets/img/arrow-select.svg">
        </div>
      </div>
    </div>
  </div>
  <div class="sorting-selector">
    <a href="javascript:yusar.listmode('grid');">
      <svg width="24" height="24" class="ml-10">
        <image width="24" height="24" xlink:href="/tpl/assets/img/sort-rows.svg" />
      </svg>
    </a>

    <a href="javascript:yusar.listmode('list');">
      <svg width="24" height="24" class="ml-10">
        <image width="24" height="24" xlink:href="/tpl/assets/img/sort-cols.svg" />
      </svg>
    </a>
  </div>
</div>

<wb-var listtype="{{_cook.listtype}}" wb-if="'{{_cook.listtype}}' > ''" else="list" />

<div class="projects--list">
    <!-- <div class="row"">
      <div class="col-12 col-sm-6 col-md-4 col-xl-3">
        <img src="https://via.placeholder.com/510x328.png" alt="">
        <div><a href="/project">ФГБУ "Российский онкологический научный центр имени Н.Н. Блохина"</a></div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-xl-3">
        <img src="https://via.placeholder.com/510x328.png" alt="">
        <div><a href="/project">Краевая клиническая больница № 1 им. С.В. Очаповского (г. Краснодар, Россия)</a></div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-xl-3">
        <img src="https://via.placeholder.com/510x328.png" alt="">
        <div><a href="/project">Новый уровень диагностики в Мурманской области</a></div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-xl-3">
        <img src="https://via.placeholder.com/510x328.png" alt="">
        <div><a href="/project">Реализация программы снижения смертности от рака молочной железы</a></div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-xl-3">
        <img src="https://via.placeholder.com/510x328.png" alt="">
        <div><a href="/project">Республиканский онкологический диспансер им. Тимошкаевой Э.С.</a></div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-xl-3">
        <img src="https://via.placeholder.com/510x328.png" alt="">
        <div><a href="/project">Перинатальный центр г. Брянск</a></div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-xl-3">
        <img src="https://via.placeholder.com/510x328.png" alt="">
        <div><a href="/project">Курская область</a></div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-xl-3">
        <img src="https://via.placeholder.com/510x328.png" alt="">
        <div><a href="/project">Модернизация системы удаленных телемедицинских консультаций</a></div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-xl-3">
        <img src="https://via.placeholder.com/510x328.png" alt="">
        <div><a href="/project">Телемедицина в Приморском крае</a></div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-xl-3">
        <img src="https://via.placeholder.com/510x328.png" alt="">
        <div><a href="/project">Федеральный центр "Цереброваскулярной патологии и инсульта МЗ РФ"</a></div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-xl-3">
        <img src="https://via.placeholder.com/510x328.png" alt="">
        <div><a href="/project">Федеральный центр "Травматологии, ортопедии и эндопротезирования</a></div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-xl-3">
        <img src="https://via.placeholder.com/510x328.png" alt="">
        <div><a href="/project">Федеральный центр "Травматологии, ортопедии и эндопротезирования</a></div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-xl-3">
        <img src="https://via.placeholder.com/510x328.png" alt="">
        <div><a href="/project">Телемедицина в Приморском крае</a></div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-xl-3">
        <img src="https://via.placeholder.com/510x328.png" alt="">
        <div><a href="/project">Федеральный центр "Цереброваскулярной патологии и инсульта МЗ РФ"</a></div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-xl-3">
        <img src="https://via.placeholder.com/510x328.png" alt="">
        <div><a href="/project">Федеральный центр "Травматологии, ортопедии и эндопротезирования</a></div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-xl-3">
        <img src="https://via.placeholder.com/510x328.png" alt="">
        <div><a href="/project">Федеральный центр "Травматологии, ортопедии и эндопротезирования</a></div>
      </div>
    </div> -->

    <div class="row grid" wb-if="'{{_var.listtype}}' == 'grid'">
      <wb-foreach wb="table=news&size=4&sort=date:d&render=server&offset=-100&from=images" wb-filter="{'active':'on'}">
      <!-- <wb-foreach wb="from=images" wb-filer="{'active': 'on'}"> -->
        <div class="col-md-4 col-sm-6 col-lg-3 mb-3r">
          <div class="card-project">
            <a class="d-flex" href="/news/id603273b10a95/">
            <div class="image__container">
              <!-- <img class="card-img-top" src="https://via.placeholder.com/510x328.png" alt=""> -->
              <img src="/thumbc/510x328/src{{img}}" class="card-img-top">
                <!-- <img class="card-img-top p-1" width="254" height="164" data-src="/thumbc/254x164/src/tpl/assets/img/widget-holder.jpg" alt=""> -->
            </div>
            </a>

            <div class="card-body" style="padding-left: 0;">
              <h4 class="card-title">6 декабря</h4>
                <p class="card-text">ЮСАР+ на международной конференции «Рак груди: наука на стороне женщины»</p>
            </div>
          </div>
        </div>
      </wb-foreach>
    </div>

    <div class="row list" wb-if="'{{_var.listtype}}' == 'list'">
      <wb-foreach wb="table=news&size=4&sort=date:d&render=server&offset=-100&from=images" wb-filter="{'active':'on'}">
        <div class="col-12 col-lg-6 mb-3r">
        <div class="media">
            <a class="d-flex" href="/news/id603273b10a95/" style="margin-right: 30px;">
              <!-- <img class="card-img-top" src="https://via.placeholder.com/240x118.png" alt=""> -->
              <img src="/thumbc/510x328/src{{img}}" class="card-img-top">
            </a>

            <div class="media-body">
                <h4>6 декабря</h4>
                <p class="card-text">ЮСАР+ на международной конференции «Рак груди: наука на стороне женщины»</p>
            </div>
          </div>
        </div>
      </wb-foreach>
    </div>
  </div>

  <!-- <div class="breadcrumbs">
    <button class="prev">«</button>

    <div>
      <button>1</button>
      <button class="breadcrumbs--active">2</button>
      <button>3</button>
      <button>4</button>
    </div>

    <button class="next">»</button>
  </div> -->
</div>

<wb-include wb-tpl="footer.inc.php" />
<script src="/tpl/assets/js/yusar.js"></script>
</body>

</html>
