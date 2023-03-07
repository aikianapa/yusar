<edit header="Виджет слайдшоу">
    <div>
        <wb-include wb-src="/engine/modules/yonger/common/blocks/common.inc.php" />
    </div>
    <div>
        <wb-module wb="module=filepicker&mode=multiple&width=150&height=100" name="images" wb-path="/uploads/widget/slideshow" />
    </div>
</edit>

<view>
    <style>
        .slider-block {
            margin-top: 30px;
        }

        .slider-block img {
            height: auto;
            max-width: 100%;
        }

        .big-img {
            min-width: 100%;
            height: auto;
        }

        .block {
            margin-bottom: 20px;
        }

        .image__container {
            overflow: hidden;
        }

        .image__container img {
            transition: transform 1.2s cubic-bezier(.215, .61, .355, 1);
        }

        .image__container img:hover {
            transform: scale(1.1);
        }

        @media (max-width: 991px) {
            .blocks {
                margin-top: 20px;
            }
        }
    </style>
    <div class="container">
        <div class="slider slider-for slide-pics" data-options="arrows=false" style="max-width: 1620px;">
            <wb-var pgs="{{array_chunk({{images}},3)}}"></wb-var>
            <wb-foreach wb="from=_var.pgs">
                <div class="slider-block" style="margin-top: 0;">
                    <div class="row">
                        <div class="col-lg-8 col-lg-7">
                            <div class="image__container">
                                <img src="/thumbc/1000x700/src{{_val.0.img}}" alt="" class="big-img">
                            </div>

                        </div>

                        <div class="col-lg-4 blocks">
                            <div class="block">
                                <div class="image__container">
                                    <img src="/thumbc/600x420/src{{_val.1.img}}" alt="">
                                </div>
                            </div>
                            <div class="block">
                                <div class="image__container">
                                    <img src="/thumbc/600x420/src{{_val.2.img}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </wb-foreach>
        </div>

        <div class="slider slider-nav" data-options="arrows=false">
            <wb-foreach wb="from=images">
                <div style="background-image:url(/thumbc/8x10/src{{img}});background-size:cover;">
                </div>
            </wb-foreach>
        </div>
    </div>
</view>