<html>
<wb-include wb-tpl="head.inc.php" />

<body>
    <wb-var bkg="header-4.jpg" />
    <wb-include wb-tpl="header.inc.php" />

   <div class="container pt-3r pb-3r">
        <div class="row">
            <div class="col-md-8">
                <wb-include wb-tpl="widget.slideshow.inc.php" />
                <div class="pb-2r">{{text}}</div>
                <ul class="list-unstyled list-uploads">
                    <wb-foreach wb-count="3">
                    <li class="pb-1r w-100">
                        <a href="#">Техническая документация Телемедицина (ядро) PDF 14307 Kb</a>
                    </li>
                    </wb-foreach>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="row bg-sky p-1r pb-2r">
                    <h3 class="col-12 mt-1r mb-1r tx-20 font-weight-bold">Другие новости</h3>
                    <wb-foreach wb="table=news&limit=5&sort=date:d&render=server&offset=-100" wb-filter="{'active':'on'}">
                        <div class="col-12">
                            <div class="media mb-2r border-bottom">
                                <a class="d-flex" href="/news/{{id}}/">
                                    <img class="mt-2" width="60" height="60" data-src="/thumbc/60x60/src/tpl/assets/img/widget-news.jpg" alt="">
                                </a>
                                <div class="media-body ml-10">
                                    <p class="tx-16">ЮСАР+ на международной конференции «Рак груди: наука на стороне женщины»</p>
                                </div>
                            </div>
                        </div>
                    </wb-foreach>
                    <div class="col-12">
                        <a class="link-arrow" href="/news">
                            Все новости
                            <svg width="24" height="24" class="ml-10">
                                <image width="24" height="24" xlink:href="/tpl/assets/img/right-arrow.svg" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <wb-include wb-tpl="footer.inc.php" />
</body>

</html>