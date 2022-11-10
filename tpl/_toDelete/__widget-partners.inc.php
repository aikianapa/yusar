<style>
.partners-img {
    display: block;
    max-width: 100%;
    max-height: 100%;
    width: auto;
    height: auto;
}

.image-inner {
    display: flex !important;
    align-items: center;
    justify-content: center;
    width: auto;
    height: 200px;
}

/* .image-inner::before {
    position: absolute;
    content: '';
    display: block;
    width: 100%;
    height: 1px;
    background-color: red;
    top: 50%;
    left: 0;
    z-index: 5;
} */
</style>

<div class="container widget-partners" style="overflow-x: visible !important">
    <wb-data wb="table=pages&item=partners">
        <h3 class="mb-1r">{{header}}</h3>
        {{text}}

        <div class="slick border-bottom border-top pt-3r pb-3r partners-widget" data-autoplay="2000" data-scroll="1">
            <wb-foreach wb-from="images">
                <div class="image-inner">
                    <img src="/200x200/src{{img}}" alt="" class="partners-img">
                </div>
            </wb-foreach>
        </div>
    </wb-data>
</div>