    <wb-include wb-snippet="wbapp" />
    <script src="/engine/lib/bootstrap/js/bootstrap.min.js"></script>

<script type="wbapp">
    wbapp.loadStyles(['/tpl/assets/slick/slick-theme.css',
    '/tpl/assets/slick/slick.min.css']);
    wbapp.loadScripts(['/tpl/assets/slick/slick.min.js'],null,function(){
        if ($('.slick').length) {
        $('.slick').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4
        });
        }
    })