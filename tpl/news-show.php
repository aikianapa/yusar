<html lang="ru">
<wb-include wb-tpl="head.inc.php" />

<body class="loading">
    <wb-var bkg="header-4.jpg" />
    <wb-include wb-tpl="header.inc.php" />

   <div class="container pt-3r pb-3r">
        <div class="row">
            <div class="col-md-8">
                <wb-include wb-tpl="widget-slideshow.inc.php" />
                <div class="pb-2r">{{text}}</div>
                <wb-include wb-tpl="widget-uploads.inc.php" />
            </div>
            <div class="col-md-4">
                <div class="row bg-sky p-1r pb-2r" style="border-radius: 5px">
                    <h3 class="col-12 mt-1r tx-20 font-weight-bold" style="margin-bottom: 0;">Другие новости</h3>
                    <wb-foreach wb="table=news&limit=5&sort=date:d&render=server&offset=-100" wb-filter="{'active':'on'}">
                        <div class="col-12">
                            <a href="/news/{{id}}/" style="color: #333333;">
                                <div class="media-news d-flex border-bottom">
                                    <img class="mt-1" width="60" height="60" data-src="/thumbc/60x60/src/tpl/assets/img/widget-news.jpg" alt="">

                                    <div class="media-body">
                                        <p class="tx-16">ЮСАР+ на международной конференции «Рак груди: наука на стороне женщины»</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </wb-foreach>
                    <div class="col-12">
                        <a class="link-news" href="/news" style="margin-top: 20px">
                            Все новости
                            <div class="arrow-mask ml-10"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <wb-include wb-tpl="footer.inc.php" />
</body>

</html>