<style>
.partners-img {
    /* min-width: 100px; */
    max-width: 200px;
    height: auto;
}

.slick-arrow {
    width: 40px;
    height: 40px;
}

.slick-prev {
    top: 42%;
    left: -45px;
}

.slick-next {
    right: -45px;
}
</style>

<div class="container widget-partners" style="overflow-x: visible !important">
    <wb-data wb="table=pages&item=partners">
        <h3>{{header}}</h3>
        {{text}}

        <div class="slick pb-1r border-bottom border-top pt-3r pb-3r partners-widget" data-autoplay="2000" data-scroll="1">
            <wb-foreach wb-from="images">
                <img src="/200x200/src{{img}}" alt="" class="partners-img">
            </wb-foreach>
        </div>
    </wb-data>
</div>