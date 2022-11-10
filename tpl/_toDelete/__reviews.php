<html lang="ru">
  <wb-include wb-tpl="head.inc.php" />

  <style>
  .reviews a {
    /* padding-left: 10px;
    padding-right: 10px; */
  }

  .reviews img {
    margin: 0 !important;
   
  }
  </style>

  <body class="loading">
    <wb-var bkg="header-4.jpg" />
    <wb-include wb-tpl="header.inc.php" />

<div class="container pt-3r reviews pb-0">
  <h3 class="mt-0">{{_lang.title1}}</h3>

  <div class="slick" data-slick-options='{"autoplay":true,"infinite":true,
    "lazyLoad":"ondemand","responsive":[{"breakpoint":1800,"settings":{"slidesToShow":6,"slidesToScroll":1}},
    {"breakpoint":1200,"settings":{"slidesToShow":5,"slidesToScroll":1}},{"breakpoint":992,"settings":
    {"slidesToShow":4,"slidesToScroll":1}},{"breakpoint":768,"settings":{"slidesToShow":3,"slidesToScroll":1}},
    {"breakpoint":640,"settings":{"slidesToShow":2,"slidesToScroll":1}},{"breakpoint":480,"settings":{"slidesToShow":1,
    "slidesToScroll":1}}],"slidesToShow":7,"slidesToScroll":1}'>
    <wb-foreach wb="count=10">
      <a data-fslightbox="medicine" href="/tpl/assets/img/certificate.jpg">
        <img src="/tpl/assets/img/certificate.jpg" alt="">
      </a>
    </wb-foreach>
    <!-- <a data-fslightbox="medicine" href="http://via.placeholder.com/320x400.png?text=Медицина+2">
      <img src="http://via.placeholder.com/320x400.png?text=Медицина+2" alt="">
    </a>
    <a data-fslightbox="medicine" href="https://via.placeholder.com/320x400.png?text=Медицина+9">
      <img src="https://via.placeholder.com/320x400.png?text=Медицина+9" alt="">
    </a> -->
  </div>

  <h3 class="s-indent-top">{{_lang.title2}}</h3>
  <div class="slick" data-slick-options='{"autoplay":true,"infinite":true,"lazyLoad":"ondemand","responsive":
    [{"breakpoint":1800,"settings":{"slidesToShow":6,"slidesToScroll":1}},{"breakpoint":1200,
    "settings":{"slidesToShow":5,"slidesToScroll":1}},{"breakpoint":992,"settings":{"slidesToShow":
    4,"slidesToScroll":1}},{"breakpoint":768,"settings":{"slidesToShow":3,"slidesToScroll":1}},
    {"breakpoint":640,"settings":{"slidesToShow":2,"slidesToScroll":1}},{"breakpoint":480,"settings":
    {"slidesToShow":1,"slidesToScroll":1}}],"slidesToShow":7,"slidesToScroll":1}'>
    <wb-foreach wb="count=10">
      <a data-fslightbox="medicine" href="/tpl/assets/img/certificate.jpg">
        <img src="/tpl/assets/img/certificate.jpg" alt="">
      </a>
    </wb-foreach>
    <!-- <a data-fslightbox="management" href="https://via.placeholder.com/320x400.png?text=Управление+2">
      <img src="https://via.placeholder.com/320x400.png?text=Управление+2" alt="">
    </a>
    <a data-fslightbox="management" href="https://via.placeholder.com/320x400.png?text=Управление+9">
      <img src="https://via.placeholder.com/320x400.png?text=Управление+9" alt="">
    </a> -->
  </div>
  <h3 class="s-indent-top">{{_lang.title3}}</h3>

  <div class="slick integration" data-slick-options='{"infinite":true,"lazyLoad":"ondemand",
    "responsive":[{"breakpoint":1800,"settings":{"slidesToShow":6,"slidesToScroll":1}},
    {"breakpoint":1200,"settings":{"slidesToShow":4,"slidesToScroll":1}},{"breakpoint":992,"settings":
    "slidesToShow":4,"slidesToScroll":1},{"breakpoint":768,"settings":{"slidesToShow":3,"slidesToScroll":1}},
    {"breakpoint":640,"settings":{"slidesToShow":2,"slidesToScroll":1}},{"breakpoint":480,"settings":
    {"slidesToShow":1,"slidesToScroll":1}}],"slidesToShow":4,"slidesToScroll":1}'>
    <wb-foreach wb="count=10">
      <a data-fslightbox="medicine" href="/tpl/assets/img/certificate.jpg">
        <img src="/tpl/assets/img/certificate.jpg" alt="">
      </a>
    </wb-foreach>
  </div>
</div>

<script src="/tpl/assets/js/fslightbox.js"></script>

<wb-include wb-tpl="footer.inc.php" />
</body>

<wb-lang>
  [en]
  title1 = Медицина
  title2 = Управление производством
  title3 = Системная интеграция
  [ru]
  title1 = Медицина
  title2 = Управление производством
  title3 = Системная интеграция
</wb-lang>

</html>