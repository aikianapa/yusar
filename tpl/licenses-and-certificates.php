<html lang="ru">
<wb-include wb-tpl="head.inc.php" />

<body class="loading">
<wb-var bkg="header-4.jpg" />
<wb-include wb-tpl="header.inc.php" />

<div class="container pt-3r pb-3r licenses-and-certificates">
  <h3 class="mt-0">{{_lang.title}}</h3>

  <div
     class="slick"
     data-slick-options='{"infinite":true,"lazyLoad":"ondemand",
     "responsive":[{"breakpoint":1800,"settings":{"slidesToShow":6,
     "slidesToScroll":1}},{"breakpoint":1200,"settings":{"slidesToShow":5,
     "slidesToScroll":1}},{"breakpoint":992,"settings":{"slidesToShow":4,
     "slidesToScroll":1}},{"breakpoint":768,"settings":{"slidesToShow":3,
     "slidesToScroll":1}},{"breakpoint":640,"settings":{"slidesToShow":2,
     "slidesToScroll":1}},{"breakpoint":480,"settings":{"slidesToShow":1,
     "slidesToScroll":1}}],"slidesToShow":7,"slidesToScroll":1}'>
     <wb-foreach wb="count=10">
      <a data-fslightbox="medicine" href="/tpl/assets/img/certificate.jpg">
        <img src="/tpl/assets/img/certificate.jpg" alt="">
      </a>
    </wb-foreach>
     <!-- <a data-fslightbox="license" href="https://via.placeholder.com/320x400.png?text=Лицензия+1">
      <img src="https://via.placeholder.com/320x400.png?text=Лицензия+1" alt="">
    </a>
    <a data-fslightbox="license" href="https://via.placeholder.com/320x400.png?text=Лицензия+1">
      <img src="https://via.placeholder.com/320x400.png?text=Лицензия+2" alt="">
    </a>
    <a data-fslightbox="license" href="https://via.placeholder.com/320x400.png?text=Лицензия+1">
      <img src="https://via.placeholder.com/320x400.png?text=Лицензия+3" alt="">
    </a>
    <a data-fslightbox="license" href="https://via.placeholder.com/320x400.png?text=Лицензия+1">
      <img src="https://via.placeholder.com/320x400.png?text=Лицензия+4" alt="">
    </a>
    <a data-fslightbox="license" href="https://via.placeholder.com/320x400.png?text=Лицензия+1">
      <img src="https://via.placeholder.com/320x400.png?text=Лицензия+5" alt="">
    </a>
    <a data-fslightbox="license" href="https://via.placeholder.com/320x400.png?text=Лицензия+1">
      <img src="https://via.placeholder.com/320x400.png?text=Лицензия+6" alt="">
    </a>
    <a data-fslightbox="license" href="https://via.placeholder.com/320x400.png?text=Лицензия+1">
      <img src="https://via.placeholder.com/320x400.png?text=Лицензия+7" alt="">
    </a>
    <a data-fslightbox="license" href="https://via.placeholder.com/320x400.png?text=Лицензия+1">
      <img src="https://via.placeholder.com/320x400.png?text=Лицензия+8" alt="">
    </a>
    <a data-fslightbox="license" href="https://via.placeholder.com/320x400.png?text=Лицензия+1">
      <img src="https://via.placeholder.com/320x400.png?text=Лицензия+9" alt="">
    </a>
    <a data-fslightbox="license" href="https://via.placeholder.com/320x400.png?text=Лицензия+1">
      <img src="https://via.placeholder.com/320x400.png?text=Лицензия+10" alt="">
    </a>
    <a data-fslightbox="license" href="https://via.placeholder.com/320x400.png?text=Лицензия+1">
      <img src="https://via.placeholder.com/320x400.png?text=Лицензия+11" alt="">
    </a>
    <a data-fslightbox="license" href="https://via.placeholder.com/320x400.png?text=Лицензия+1">
      <img src="https://via.placeholder.com/320x400.png?text=Лицензия+12" alt="">
    </a>
    <a data-fslightbox="license" href="https://via.placeholder.com/320x400.png?text=Лицензия+1">
      <img src="https://via.placeholder.com/320x400.png?text=Лицензия+13" alt="">
    </a>
    <a data-fslightbox="license" href="https://via.placeholder.com/320x400.png?text=Лицензия+1">
      <img src="https://via.placeholder.com/320x400.png?text=Лицензия+14" alt="">
    </a>
    <a data-fslightbox="license" href="https://via.placeholder.com/320x400.png?text=Лицензия+1">
      <img src="https://via.placeholder.com/320x400.png?text=Лицензия+15" alt="">
    </a> -->
  </div>
</div>

<script src="/tpl/assets/js/fslightbox.js"></script>

<wb-include wb-tpl="footer.inc.php" />
</body>

</html>
<wb-lang>
  [en]
  title = Gallery
  [ru]
  title = Галерея
</wb-lang>
