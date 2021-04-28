<div class="pt-3r pb-3r">
    <wb-data wb="table=pages&item=widget-projects">
        <div class="container widget widget-projects">
            <div class="border-bottom pb-1r mb-2r position-relative">
                <h3>Реализованные проекты</h3>

                <a class="float-right link-arrow" href="/news">
                    Все проекты
                    <svg width="24" height="24" class="ml-10">
                        <image width="24" height="24" xlink:href="/tpl/assets/img/right-arrow.svg" />
                    </svg>
                </a>
            </div>

            <div class="slick pb-1r projects-grid" id="widgetProjectsList">
                <wb-foreach wb="table=pages&from=images">
                    <a href="http://yusar.yonger.ru/news/id603273b10a95/">
                        <div class="card">
                            <div class="image__container">
                            <!-- <img class="card-img-top" width="500" height="320" data-src="/thumb/500x320/src/tpl/assets/img/widget-news.jpg" alt=""> -->
                                <img class="card-img-top" width="254" height="164" src="/thumbc/254x164/src{{img}}" alt="">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Март 2017</h4>
                                <p class="card-text">
                                    {{_ndx}}) ФГБУ "Российский онкологический научный центр имени Н.Н. Блохина"...
                                </p>
                            </div>
                        </div>
                    </a>
                </wb-foreach>
            </div>
        </div>
    </wb-data>
</div>
