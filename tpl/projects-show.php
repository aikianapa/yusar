<html lang="ru">
<wb-include wb-tpl="head.inc.php" />

<body class="loading">
  <wb-var bkg="header-4.jpg" />
  <wb-include wb-tpl="header.inc.php" />

  <style>
    .jumbotron {
      margin-top: 9rem !important;
    }

    @media (max-width: 767px) {
      .jumbotron {
        margin-top: 64px !important;
      }
    }

    @media (max-width: 375px) {
      .jumbotron h1 {
        font-size: 28px !important;
        line-height: 40px !important;
      }
    }
  </style>

  <div class="container pt-3r project">

    <div class="row align-items-start">
      <div class="col-12 col-md-8">
        <h3 class="mt-0">{{header}}</h3>

        <p>{{text}}</p>


        <div class="image__container" wb-if="'{{cover.0.img}}' > ''">
        <img src=" /thumbc/730x395/src{{cover.0.img}}" alt="">
        </div>
        <div>
          <wb-module wb="module=yonger&mode=render" />
        </div>
        <!--
      <h3>Отзывы и благодарности</h3>

      <div class="slick">
        <div>
          <img src="/tpl/assets/img/certificate.jpg" alt="">
        </div>
        <div>
        <img src="/tpl/assets/img/certificate.jpg" alt="">
        </div>
        <div>
        <img src="/tpl/assets/img/certificate.jpg" alt="">
        </div>
        <div>
        <img src="/tpl/assets/img/certificate.jpg" alt="">
        </div>
        <div>
        <img src="/tpl/assets/img/certificate.jpg" alt="">
        </div>
        <div>
        <img src="/tpl/assets/img/certificate.jpg" alt="">
        </div>
      </div>
-->
      </div>
      <div class="col-12 col-md-4">
        <div class="project--sidebar">
          <div class="project--sidebar--title">
            {{_lang.others}}
          </div>
          <wb-lang>
            [ru]
            others = "Другие проекты"
            [en]
            others = "Other projects"
          </wb-lang>
          <wb-foreach wb="table=projects&limit=5&rand=true&tpl=false" wb-filter="active=on&id!={{id}}">
            <div class="project--sidebar--item">
              <a href="/project" class="d-flex">
                <img src="/thumbc/60x60/src{{cover.0.img}}" alt="">
                <div>{{header}}</div>
              </a>
            </div>
          </wb-foreach>
          <a href="/projects" class="link-more-detailed bold">
            Все проекты
            <div class="arrow-mask"></div>
          </a>

        </div>
      </div>
    </div>
  </div>

  <wb-include wb-tpl="footer.inc.php" />
</body>

</html>