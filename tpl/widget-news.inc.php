<div class="pt-3r">
    <div class="container widget widget-news">
        <div class="mb-3r position-relative">
            <wb-lang>
                [en]
                allnews = "All news"
                title = "News"
                [ru]
                allnews = "Все новости"
                title = "Новости компании"
            </wb-lang>
            <a class="position-absolute float-right link-arrow link-news" href="/news">
                {{_lang.allnews}}
                <!-- <img width="24" height="24" src="/tpl/assets/img/black-arrow.svg" class="ml-10"> -->
                <div class="arrow-mask ml-10"></div>
            </a>
            <h3>{{_lang.title}}</h3>
        </div>
        <wb-data wb="table=pages&item=home">
        <div class="slick news-grid" id="widgetNewsList">
            <wb-foreach wb="table=news&tpl=false&sort=date:d&limit=10">
                <a href="/news/{{wbFurlGenerate({{header}})}}">
                    <div class="card card--second">
                        <div class="image__container">
                            <!-- <img class="card-img-top" width="500" height="320" src="/thumb/500x320/src/tpl/assets/img/widget-news.jpg" alt=""> -->
                            <img src="/thumbc/500x320/src{{cover}}" class="card-img-top">
                        </div>
                        <div class="card-body mt-1r">
                            <h4 class="card-title">{{date}}</h4>
                            <p class="card-text">{{header}}</p>
                        </div>
                    </div>
                </a>
            </wb-foreach>
        </div>
        </wb-data>
    </div>
</div>
