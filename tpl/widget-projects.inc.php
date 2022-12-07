
<!-- требует редакции -->
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
    <wb-lang>
        [en]
        all = "All projects"
        prj = "Released projects"
        [ru]
        all = "Все проекты"
        prj = "Реализованные проекты"
    </wb-lang>
    <wb-data wb="table=pages&item=widget-projects">
        <div class="container widget widget-projects">
            <div class="mb-3r position-relative">
                <h3 class="realize-projects">{{_lang.prj}}</h3>

                <a class="float-right link-arrow link-projects" href="/projects">
                    {{_lang.all}}
                    <!-- <img width="24" height="24" src="/tpl/assets/img/arrow-right-link.png" class="ml-10"> -->
                    <div class="arrow-mask ml-10"></div>
                </a>
            </div>

            <div class="slick projects-grid" id="widgetProjectsList">
                <wb-foreach wb="table=projects&sort=year:d&rand=true&limit=10" wb-filter="active=on">
                    <a href="/projects/{{wbFurlGenerate({{header}})}}">
                        <div class="card card--second">
                            <div class="image__container">
                            <!-- <img class="card-img-top" width="500" height="320" data-src="/thumb/500x320/src/tpl/assets/img/widget-news.jpg" alt=""> -->
                                <img class="card-img-top" width="254" height="164" src="/thumbc/254x164/src{{cover}}" alt="">
                            </div>
                            <div class="card-body mt-1r">
                                <h4 class="card-title">{{year}}</h4>
                                <p class="card-text">
                                    {{header}}
                                </p>
                            </div>
                        </div>
                    </a>
                </wb-foreach>
            </div>
        </div>
    </wb-data>
</div>
