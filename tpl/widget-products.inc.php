<div class="pt-3r pb-3r">
    <div class="container widget widget-products">
        <div class="border-bottom pb-1r">
            <h3>{{lang.{{_sess.lang}}.header}}</h3>
        </div>

        <div class="blocks mt-1r">
            <wb-foreach wb-from="lang.{{_sess.lang}}.products">
            <div class="image-block">
                <div class="card-image">
                    <div class="image__container">
                        <img class="card-img-top img-note" src="/thumb/330x330/src/tpl/{{image.0.img}}" alt="">
                    </div>
                </div>

                <div class="card-body mt-3r">
                    <div class="card-title-text">
                        <p class="card-title">{{title}}</p>
                        <p class="card-text">{{subtitle}}</p>
                    </div>

                    <div class="content text">
                        {{text}}
                    </div>
                </div>
            </div>
            </wb-foreach>
        </div>
    </div>
</div>
