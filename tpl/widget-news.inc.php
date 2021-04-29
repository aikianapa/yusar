<div class="pt-3r pb-3r">
    <div class="container widget widget-news">
        <div class="border-bottom pb-1r mb-2r">
            <a class="position-absilute float-right link-arrow pt-1r" href="/news">
                Все новости
                <svg width="24" height="24" class="ml-10">
                    <image width="24" height="24" xlink:href="/tpl/assets/img/right-arrow.svg" />
                </svg>
            </a>
            <h3>Новости компании</h3>
        </div>

        <div class="slick news-grid pb-1r" id="widgetNewsList">
            <wb-foreach wb="from=images">
                <a href="/news/id603273b10a95/">
                    <div class="card">
                        <div class="image__container">
                            <!-- <img class="card-img-top" width="500" height="320" src="/thumb/500x320/src/tpl/assets/img/widget-news.jpg" alt=""> -->
                            <img src="/thumbc/500x320/src{{img}}" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">{{_ndx}} декабря</h4>
                            <p class="card-text">{{_ndx}}) ЮСАР+ на международной конференции «Рак груди: наука на стороне женщины»</p>
                        </div>
                    </div>
                </a>
            </wb-foreach>
        </div>
    </div>
</div>
