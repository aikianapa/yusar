<div class="pt-3r pb-3r">
    <div class="container widget widget-news">
        <div class="border-bottom pb-1r mb-2r position-relative">
            <a class="position-absolute float-right link-arrow link-news" href="/news">
                {{lang.{{_sess.lang}}.label}}
                <!-- <img width="24" height="24" src="/tpl/assets/img/black-arrow.svg" class="ml-10"> -->
                <div class="arrow-mask ml-10"></div>
            </a>
            <h3>{{lang.{{_sess.lang}}.header}}</h3>
        </div>

        <div class="slick news-grid pb-1r" id="widgetNewsList">
            <wb-foreach wb="form=news&sort=date:d&limit={{limit}}">
                <a href="/news/id603273b10a95/">
                    <div class="card">
                        <div class="image__container">
                            <!-- <img class="card-img-top" width="500" height="320" src="/thumb/500x320/src/tpl/assets/img/widget-news.jpg" alt=""> -->
                            <img data-src="/thumbc/500x320/src{{images.0.img}}" class="card-img-top">
                        </div>
                        <div class="card-body mt-1r">
                            <h4 class="card-title">{{date}}</h4>
                            <p class="card-text">{{header}}</p>
                        </div>
                    </div>
                </a>
            </wb-foreach>
        </div>
    </div>
</div>
