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

<body class="loading">
<wb-var bkg="header-4.jpg" />
<wb-include wb-tpl="header.inc.php" />

<div class="container pt-3r hardware-and-integration">
  <div class="row">
    <div class="col-12">
      <div class="image__container">
        <a href="/equipment" class="" style="display: block">
          <!-- <div class="image__container"> -->
            <!-- <img src="/tpl/assets/img/med-equipment.jpg" alt="" class="mad"> -->
            <img data-src="/tpl/assets/img/med-equipment.jpg" alt="" class="mad">
            <div>Медицинское оборудование</div>
          <!-- </div> -->
        </a>
      </div>
    </div>
  </div>
  <div class="row hardware-and-integration--row2">
    <div class="col-12 col-md-6">
      <div class="image__container">
        <a href="/complex" class="" style="display: block; max-height: 400px">
          <!-- <img src="tpl/assets/img/inger-2.jpg" alt="" class="img2"> -->
          <img class="card-img-top" data-src="/tpl/assets/img/inger-2.jpg" alt="">
          <div>Комплексные инжинерные системы</div>
        </a>
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="image__container">
        <a href="/system" class="" style="display: block; max-height: 400px;">
          <!-- <img src="/tpl/assets/img/integr-2.jpg" alt="" class="img2"> -->
          <img class="card-img-top" data-src="/tpl/assets/img/integr-2.jpg" alt="">
          <div>Системная интеграция</div>
        </a>
      </div>
    </div>
  </div>
</div>

<wb-include wb-tpl="submit-request.inc.php" />
<wb-include wb-tpl="footer.inc.php" />

</body>
</html>