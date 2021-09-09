<style>
    /* @media (max-width: 424px) {
        .media-equipment {
            margin-bottom: 1rem;
        }
    }

    @media (max-width: 375px) {
        .media-equipment {
            margin-bottom: 2rem;
        }
    } */
</style>

<div class="container">
    <div class="row list" style="margin-top: 56px;">
        <wb-foreach wb="table=news&sort=date:d&render=server&offset=-100" wb-filter="{'active':'on'}">
            <!-- <div class="col-12 col-lg-6 mt-1r"> -->
            <div class="col-md-12 col-lg-6">
                <!-- <div class="media-equipment"> -->
                    <a class="media-equipment" href="/thermal-imagers" style="color: #212529;">
                        <img data-src="/tpl/assets/img/thermal.jpg" alt="">

                        <div class="media-body-equipment position-relative">
                            <h4>Тепловизоры</h4>
                            <p class="card-text tx-16">Тепловизорная система с функцией определения лиц с повышенной температурой тела</p>

                            <!-- <a class="med-arrow" href="/thermal-imagers"> -->
                            <div class="med-arrow">
                                Подробнее
                                <div class="arrow-mask"></div>
                            </div>
                            <!-- </a> -->
                        </div>
                    </a>
                <!-- </div> -->
            </div>
        </wb-foreach>
    </div>
</div>