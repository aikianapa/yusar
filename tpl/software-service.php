<html lang="ru">
<wb-include wb-tpl="head.inc.php" />

<style>
  @media (max-width: 767px) {
    .service-text {
      margin-top: 14px;
    }
  }
</style>

<body class="loading">
<wb-var bkg="header-4.jpg" />
<wb-include wb-tpl="header.inc.php" />

<div class="container pt-3r software-service">
  <h3 class="mt-0">{{_lang.title}}</h3>

  <div class="row software-service--content">
    <div class="col-12 col-md-6">
      <div class="image__container">
        <img src="/tpl/assets/img/video-image.png" alt="">
      </div>
    </div>
    <div class="col-12 col-md-6 service-text">
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
</body>

</html>
<wb-lang>
  [en]
  title = Как мы работаем
  [ru]
  title = Как мы работаем
</wb-lang>
