<html lang="ru">
<wb-include wb-tpl="head.inc.php" />

<style>
  @media (max-width: 767px) {
    .service-text {
      margin-top: 14px;
    }
  }

  iframe {
    min-width: 780px;
    min-height: 420px;
  }
</style>

<body class="loading">
<wb-var bkg="header-4.jpg" />
<wb-include wb-tpl="header.inc.php" />

<div class="container pt-3r software-service">
  <h3 class="mt-0">{{_lang.title}}</h3>

  <div class="row software-service--content">
    <div class="col-lg-6 col-md-12">
      <!-- <div class="image__container" style="overflow: hidden;"> -->
      <div style="border-radius: 10px; height: 420px; overflow: hidden;">
        <!-- <img src="/tpl/assets/img/video-image.png" alt=""> -->

        <iframe src="https://www.youtube.com/embed/XlT9aoylb74?modestbranding=1;iv_load_policy=3;rel=0;autohide=1;" 
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen></iframe>

      </div>
    </div>
    <div class="col-lg-6 col-md-12 service-text">
      ЮСАР+ осуществляет поставку медицинского оборудования "под ключ", 
      включая новейшие мобильные диагностические комплексы ПЭТ/КТ. 
      Обеспечивает полный комплекс работ: от проектирования (стадия П и РД) 
      до разработки и внедрения сложных информационных и автоматизированных систем
    </div>
  </div>

  <div class="software-service--info">
    Включая поставку, настройку и обьединение всего парка диагностического оборудования (ПЭТ, МРТ, КТ, УЗИ и т.д.),
     операционных, с подключением видеокамер из операционных, лабораторных установок.
  </div>
</div>

<wb-include wb-tpl="submit-request.inc.php" />

<wb-include wb-tpl="footer.inc.php" />
<wb-lang>
  [en]
  title = Как мы работаем
  [ru]
  title = Как мы работаем
</wb-lang>
</body>

</html>
