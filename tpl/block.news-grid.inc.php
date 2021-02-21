<div class="pt-3r pb-3r">
    <div class="container widget news-grid">

        <div class="row pb-3r">
            <div class="col-12 col-md-6 col-lg-4 nobr">
                <b>Сортировать:</b>
                <select>
                    <option>По новизне</option>
                    <option>По популярности</option>
                </select>
            </div>
            <div class="col-12 col-md-6 col-lg-4 nobr text-left text-md-right text-lg-left">
                <b>Категории:</b>
                <select>
                    <option>Медицина</option>
                    <option>Образование</option>
                </select>
            </div>
            <div class="col-12 col-md-6 col-lg-2 nobr">
                <b>Год:</b>
                <select>
                    <option>2021</option>
                    <option>2020</option>
                </select>
            </div>
            <div class="col-12 col-md-6 col-lg-2 nobr text-right">
                <a href="/module/listtype/grid/">
                    <svg width="24" height="24" class="ml-10">
                        <image width="24" height="24" xlink:href="/tpl/assets/img/icon-grid.svg" />
                    </svg>
                </a>
                <a href="/module/listtype/list/">
                    <svg width="24" height="24" class="ml-10">
                        <image width="24" height="24" xlink:href="/tpl/assets/img/icon-list.svg" />
                    </svg>
                </a>
            </div>
        </div>


        <div class="row" wb-if=" '{{_sess.listtype}}' == 'grid'">
            <wb-foreach wb="table=news&size=4&render=server">
                <div class="col-md-4 col-sm-6 col-lg-3 mb-3r">
                    <div class="card">
                        <img class="card-img-top" width="500" height="320" data-src="/thumb/500x320/src/tpl/assets/img/widget-news.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">6 декабря</h4>
                            <p class="card-text">ЮСАР+ на международной конференции «Рак груди: наука на стороне женщины»</p>
                        </div>
                    </div>
                </div>
            </wb-foreach>
        </div>
        <div class="row" wb-if=" '{{_sess.listtype}}' == 'list'">
            <wb-foreach wb="table=news&size=4&render=server">
                <div class="col-12 col-lg-6 mb-3r">
                    <div class="media">
                        <a class="d-flex" href="#">
                            <img class="card-img-top" width="255" height="118" data-src="/thumb/255x118/src/tpl/assets/img/widget-news.jpg" alt="">
                        </a>
                        <div class="media-body">
                            <h4>Media heading</h4>
                            <p class="card-text">ЮСАР+ на международной конференции «Рак груди: наука на стороне женщины»</p>
                        </div>
                    </div>
                </div>
            </wb-foreach>
        </div>
    </div>
</div>
