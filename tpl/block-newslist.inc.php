<div class="pt-3r pb-3r">
<wb-data wb="table=pages&item=widget-news">
    <div class="container widget news-grid news-page">

        <div class="row pb-3r">
            <div class="col-12 col-md-6 col-lg-4 nobr">
                <b>Сортировать:</b>
                <button class="sort-but">По новизне</button>
                <button class="sort-but">По популярности</button>
                <!-- <select class="sort-select">
                    <option>По новизне</option>
                    <option>По популярности</option>
                </select> -->
            </div>
            <div class="col-12 col-md-6 col-lg-4 nobr text-left text-md-right text-lg-left">
                <b>Категории:</b>
                <select>
                    <option>Медицина</option>
                    <option>Образование</option>
                </select><img data-src="/tpl/assets/img/arrow-select.svg">
            </div>
            <div class="col-12 col-md-6 col-lg-2 nobr">
                <b>Год:</b>
                <select>
                    <option>2021</option>
                    <option>2020</option>
                </select><img data-src="/tpl/assets/img/arrow-select.svg">
            </div>
            <div class="col-12 col-md-6 col-lg-2 nobr text-right">
                <a href="javascript:yusar.listmode('grid');">
                    <svg width="24" height="24" class="ml-10">
                        <image width="24" height="24" xlink:href="/tpl/assets/img/icon-list.svg" />
                    </svg>
                </a>
                <a href="javascript:yusar.listmode('list');">
                    <svg width="24" height="24" class="ml-10">
                        <image width="24" height="24" xlink:href="/tpl/assets/img/icon-grid.svg" />
                    </svg>
                </a>
            </div>
        </div>

        <wb-var listtype="{{_cook.listtype}}" wb-if="'{{_cook.listtype}}' > ''" else="list" />

        <div>
            <div class="row grid" wb-if="'{{_var.listtype}}' == 'grid'">
                <wb-foreach wb="table=news&size=4&sort=date:d&render=server&offset=-100&from=images" wb-filter="{'active':'on'}">
                    <div class="col-md-4 col-sm-6 col-lg-3 mb-3r">
                        <a class="d-flex" href="/news/{{id}}/">
                            <div class="card">
                                <div class="image__container">
                                    <!-- <img class="card-img-top" width="500" height="320" data-src="/thumb/500x320/src/tpl/assets/img/widget-news.jpg" alt=""> -->
                                    <img class="card-img-top" width="500" height="320" data-src="/thumbc/500x320/src{{img}}" alt="">
                                </div>

                                <div class="card-body">
                                    <h4 class="card-title">6 декабря</h4>
                                    <p class="card-text">ЮСАР+ на международной конференции «Рак груди: наука на стороне женщины»</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </wb-foreach>
            </div>
            <div class="row list" wb-if=" '{{_var.listtype}}' == 'list'">
                <wb-foreach wb="table=news&size=4&sort=date:d&render=server&offset=-100&from=images" wb-filter="{'active':'on'}">
                    <div class="col-12 col-lg-6 mb-3r">
                        <div class="media">
                            <a class="d-flex" href="/news/{{id}}/">
                                <img class="card-img-top" width="255" height="118" data-src="/thumbc/255x118/src{{img}}" alt="">
                            </a>
                            <div class="media-body" style="margin-left: 15px;">
                                <h4>Media heading</h4>
                                <p class="card-text">ЮСАР+ на международной конференции «Рак груди: наука на стороне женщины»</p>
                            </div>
                        </div>
                    </div>
                </wb-foreach>
            </div>
        </div>
    </div>
</wb-data>
</div>
