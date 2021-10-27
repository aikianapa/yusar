<div class="pt-3r pb-3r">
    <div class="container widget widget-news">
        <div class="border-bottom pb-1r mb-2r position-relative">
            <a class="position-absolute float-right link-arrow link-news" href="/news">
                Все новости
                <!-- <img width="24" height="24" src="/tpl/assets/img/black-arrow.svg" class="ml-10"> -->
                <div class="arrow-mask ml-10"></div>
            </a>
            <h3>Новости компании</h3>
        </div>

        <div class="slick news-grid pb-1r" id="widgetNewsList">
            <wb-data wb="table=pages&item=home">
            <wb-foreach wb="from=images">
                <a href="/news/id603273b10a95/">
                    <div class="card card--second">
                        <div class="image__container">
                            <!-- <img class="card-img-top" width="500" height="320" src="/thumb/500x320/src/tpl/assets/img/widget-news.jpg" alt=""> -->
                            <img src="/thumbc/500x320/src{{img}}" class="card-img-top">
                        </div>
                        <div class="card-body mt-1r">
                            <h4 class="card-title">{{_ndx}} декабря</h4>
                            <p class="card-text">ЮСАР+ на международной конференции «Рак груди: наука на стороне женщины»</p>
                        </div>
                    </div>
                </a>
            </wb-foreach>
            </wb-data>
        </div>
    </div>
</div>
