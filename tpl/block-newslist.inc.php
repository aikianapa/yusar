<div class="pt-3r pb-3r">
<wb-data wb="table=pages&item=widget-news">
    <div class="container widget news-grid news-page">
        <div class="row pb-3r">
            <!-- <div class="col-12 col-md-6 col-lg-2 nobr sorting">
                <span>Сортировать</span>

                <div class="custom-select-wrapper">
                    <div class="select-block">
                        По популярности
                    </div>

                    <div class="select-block-options">
                        <span class="custom-option" data-value="">По новизне</span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-2 nobr category">
                <span>Категории</span>

                <div class="custom-select-wrapper">
                    <div class="select-block">
                        Образование
                    </div>

                    <div class="select-block-options">
                        <span class="custom-option" data-value="">Технологии</span>
                        <span class="custom-option" data-value="">Открытия</span>
                        <span class="custom-option" data-value="">Наука</span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-2 nobr year">
                <span>Год</span>

                <div class="custom-select-wrapper">
                    <div class="select-block">
                        2020
                    </div>

                    <div class="select-block-options">
                        <span class="custom-option" data-value="">2021</span>
                        <span class="custom-option" data-value="">2022</span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-2 d-flex" style="justify-content: flex-end;">
                <a href="javascript:yusar.listmode('grid');">
                    <div class="icon-list ml-10"></div>
                </a>
                <a href="javascript:yusar.listmode('list');">
                    <div class="icon-grid ml-10"></div>
                </a>
            </div> -->

            <div class="col-lg-12">
                <div style="width: 100%; box-sizing: border-box; display: flex; flex-wrap: wrap;" class="sorting-block">
                    <div class="item-inner sorting">
                        <span>Сортировать</span>

                        <div class="custom-select-wrapper">
                            <div class="select-block">
                                По популярности
                            </div>

                            <div class="select-block-options">
                                <span class="custom-option" data-value="">По новизне</span>
                            </div>
                        </div>
                    </div>

                    <div class="item-inner category">
                        <span>Категории</span>
                        <div class="custom-select-wrapper">
                            <div class="select-block">
                                Образование
                            </div>

                            <div class="select-block-options">
                                <span class="custom-option" data-value="">Технологии</span>
                                <span class="custom-option" data-value="">Открытия</span>
                                <span class="custom-option" data-value="">Наука</span>
                            </div>
                        </div>
                    </div>

                    <div class="item-inner year">
                        <span>Год</span>

                        <div class="custom-select-wrapper">
                            <div class="select-block">
                                2020
                            </div>

                            <div class="select-block-options">
                                <span class="custom-option" data-value="">2017</span>
                                <span class="custom-option" data-value="">2018</span>
                                <span class="custom-option" data-value="">2019</span>
                                <span class="custom-option" data-value="">2020</span>
                                <span class="custom-option" data-value="">2021</span>
                            </div>
                        </div>
                    </div>

                    <div class="item-inner" style="margin-left: auto;">
                        <a href="javascript:yusar.listmode('grid');">
                            <div class="icon-list ml-10"></div>
                        </a>
                        <a href="javascript:yusar.listmode('list');">
                            <div class="icon-grid ml-10"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <wb-var listtype="{{_cook.listtype}}" wb-if="'{{_cook.listtype}}' > ''" else="list" />

        <div>
            <div class="row grid" wb-if="'{{_var.listtype}}' == 'grid'">
                <wb-foreach wb="table=news&size=4&sort=date:d&render=server&offset=-100" wb-filter="{'active':'on'}">
                    <div class="col-md-4 col-sm-6 col-lg-3 mb-3r">
                        <a class="d-flex" href="/news/{{_id}}/">
                            <div class="card">
                                <div class="image__container">
                                    <!-- <img class="card-img-top" width="500" height="320" data-src="/thumb/500x320/src/tpl/assets/img/widget-news.jpg" alt=""> -->
                                    <img class="card-img-top" width="500" height="320" data-src="/thumbc/500x320/src{{images.0.img}}" alt="" >
                                </div>

                                <div class="card-body mt-1r">
                                    <h4 class="card-title">6 декабря</h4>
                                    <p class="card-text">ЮСАР+ на международной конференции «Рак груди: наука на стороне женщины»</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </wb-foreach>
            </div>
            <div class="row list" wb-if=" '{{_var.listtype}}' == 'list'">
                <wb-foreach wb="table=news&size=4&sort=date:d&render=server&offset=-100" wb-filter="{'active':'on'}">
                    <div class="col-12 col-lg-6 mb-3r">
                        <div class="media">
                            <a class="d-flex" href="/news/{{_id}}/">
                                <div class="image__container">
                                    <img class="card-img-top" width="255" height="118" data-src="/thumbc/255x118/src{{images.0.img}}" alt="">
                                </div>

                                <div class="media-body" style="margin-left: 15px;">
                                    <h4 class="card-title" style="margin-top: 0 !important;">6 декабря</h4>
                                    <p class="card-text">ЮСАР+ на международной конференции «Рак груди: наука на стороне женщины»</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </wb-foreach>
            </div>
        </div>
    </div>
</wb-data>
</div>

<script src="/tpl/assets/js/yusar.js"></script>
