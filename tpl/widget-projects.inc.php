<style>
@media (max-width: 767px) {
    .realize-projects {
        max-width: 50%;
    }
}

.card-title {
    font-weight: 400;
    line-height: 24px;
}
</style>

<div class="s-indent-top">
    <wb-data wb="table=pages&item=widget-projects">
        <div class="container widget widget-projects">
            <div class="mb-3r position-relative">
                <h3 class="realize-projects">Реализованные проекты</h3>

                <a class="float-right link-arrow link-projects" href="/projects">
                    Все проекты
                    <!-- <img width="24" height="24" src="/tpl/assets/img/arrow-right-link.png" class="ml-10"> -->
                    <div class="arrow-mask ml-10"></div>
                </a>
            </div>

            <div class="slick projects-grid" id="widgetProjectsList">
                <wb-foreach wb="table=pages&from=images">
                    <a href="/project">
                        <div class="card card--second">
                            <div class="image__container">
                            <!-- <img class="card-img-top" width="500" height="320" data-src="/thumb/500x320/src/tpl/assets/img/widget-news.jpg" alt=""> -->
                                <img class="card-img-top" width="254" height="164" src="/thumbc/254x164/src{{img}}" alt="">
                            </div>
                            <div class="card-body mt-1r">
                                <h4 class="card-title">Март 2017</h4>
                                <p class="card-text">
                                    ГБУ "Российский онкологический научный центр имени Н.Н. Блохина"...
                                </p>
                            </div>
                        </div>
                    </a>
                </wb-foreach>
            </div>
        </div>
    </wb-data>
</div>
