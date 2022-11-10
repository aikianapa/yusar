<edit header="Характеристики">
    <div>
    <wb-include wb-src="/engine/modules/yonger/common/blocks/common.inc.php" />
    </div>
    <div class="col-12 mb-1">
        <input class="form-control" type="text" name="title" placeholder="Заголовок" wb-module="langinp">
    </div>
    <div class="col-12 mb-1">
        <wb-multiinput name="prop">
            <div class="col-sm-6">
                <input class="form-control" type="text" name="prop_name" placeholder="Характеристика" wb-module="langinp">
            </div>
            <div class="col-sm-6">
                <input class="form-control" type="text" name="prop_value" placeholder="Значение" wb-module="langinp">
            </div>
        </wb-multiinput>
    </div>
</edit>

<view>
        <style>

    .params-selector {
        margin-top: 36px;
        margin-bottom: 72px;
    }

    .card {
        background-color: #F0F5F9 !important;
        border: none !important;
        border-radius: 0 !important;
    }

    .card-header {
        padding: 0 !important;
        min-height: 76px;
        background-color: #F0F5F9 !important;
        border: none !important;
    }

    .btn-link {
        /* Вверх Вправо Вниз Влево */
        text-decoration: none !important;
        padding: 0rem 0rem 0rem 2rem !important;
        color: #000 !important;

        font-size: 20px !important;
        
        position: relative;
        min-height: 76px;

        background-color: #F0F5F9 !important;
        border-color: #F0F5F9 !important;

        box-shadow: none !important;
    }

    .btn-link img {
        position: absolute;
        right: 24px;
        top: 15px;
        transform: rotate(90deg);
    }

    .card-item {
        margin-left: 10px;
        border-bottom: 1px solid rgba(43, 168, 221, 0.3);
        padding-bottom: 5px;
        margin-bottom: 15px;

        overflow: auto;
    }

    .card-item-title {
        display: inline-block;
        font-size: 20px;
        font-weight: 600;
        width: 40%;

        overflow: hidden;
        height: 100%;
    }

    .card-item-text {
        display: inline-block;
        float: right;
        width: 60%;
        font-size: 20px;

        overflow: hidden;
        height: 100%;
    }

    </style>

                <div class="params-selector">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <!-- <h2 class="mb-0"> -->
                                    <button class="btn btn-link btn-block text-left" type="button" 
                                        data-toggle="collapse" data-target="#collapseOne" 
                                        aria-expanded="true" aria-controls="collapseOne">
                                        {{title.{{_sess.lang}}}} <img src="/tpl/assets/img/chevron.svg" alt="">
                                    </button>
                                <!-- </h2> -->
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <wb-foreach wb="from=prop&tpl=false">
                                    <div class="card-item">
                                        <span class="card-item-title">{{prop_name.{{_sess.lang}}}}</span>
                                        <span class="card-item-text">{{prop_value.{{_sess.lang}}}}</span>
                                    </div>
                                    </wb-foreach>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

</view>