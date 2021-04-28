<div class="container">
    <div class="row list">
        <wb-foreach wb="table=news&sort=date:d&render=server&offset=-100" wb-filter="{'active':'on'}">
            <div class="col-12 col-lg-6 mb-3r">
                <div class="media">
                    <a class="d-flex mr-1r" href="/news/{{id}}/">
                        <img width="120" height="120" data-src="/thumbc/120x120/src/tpl/assets/img/widget-holder.jpg" alt="">
                    </a>

                    <div class="media-body">
                        <h4>Тепловизоры</h4>
                            <p class="card-text tx-16">Тепловизорная система с функцией определения лиц с повышенной температурой тела</p>

                            <a class="link-arrow" href="/thermal-imagers">
                                Подробнее
                                <svg width="24" height="24" class="ml-10">
                                    <image width="24" height="24" xlink:href="/tpl/assets/img/right-arrow.svg" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </wb-foreach>
    </div>
</div>