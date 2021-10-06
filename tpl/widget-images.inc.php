<div class="container" style="overflow-x: visible !important">
    <h3 wb-if="'{{title}}'>''">{{title}}</h3>
    <p class="text" wb-if="'{{text}}'>''">{{text}}</p>
    <wb-var width="500" wb-if="'{{width}}'==''" else="{{width}}" />
    <wb-var height="320" wb-if="'{{height}}'==''" else="{{height}}" />
    <wb-var show="4" wb-if="'{{show}}'==''" else="{{show}}" />
    <wb-var scroll="4" wb-if="'{{scroll}}'==''" else="{{scroll}}" />
    <wb-var zoom="zoom" wb-if="'{{zoom}}'=='on'" else="" />
    <wb-var method="thumb" wb-if="'{{method}}'==''" else="{{method}}" />
    <wb-var hrtop="border-top pt-2r" wb-if="'{{hrtop}}'=='on'" else="" />
    <wb-var hrbot="border-bottom" wb-if="'{{hrbot}}'=='on'" else="" />
    <wb-var speed="" wb-if="'{{speed}}'==''" else="{{speed}}" />
    <wb-var view="" wb-if="'{{view}}'==''" else="{{view}}" />
    
    <div class="slick {{_var.hrbot}} {{_var.hrtop}} pb-3r mb-0 slick-slider slick-dotted" data-autoplay="{{_var.speed}}" data-scroll="{{_var.scroll}}" data-show="{{_var.show}}">
        <wb-foreach wb="from=images">
            <div class="picture">
                <div class="image__container">
                    <a data-fslightbox="{{_parent.id}}" href="{{img}}" wb-if="'{{_var.view}}'=='on'">
                        <img class="img-fluid {{_var.zoom}}" src="/{{_var.method}}/{{_var.width}}x{{_var.height}}/src{{img}}" alt="{{_parent.title}}">
                    </a>
                    <img class="img-fluid {{_var.zoom}}" src="/{{_var.method}}/{{_var.width}}x{{_var.height}}/src{{img}}" alt="{{_parent.title}}"  wb-if="'{{_var.view}}'==''">
                </div>
            </div>
        </wb-foreach>
    </div>
</div>
<script wb-app remove src="/tpl/assets/js/fslightbox.js"></script>
<style>
.image__container {
    overflow: hidden;
}

.image__container img.zoom {
    transition: .3s ease-in-out;
}

.image__container img.zoom:hover {
    transform: scale(1.1);
}
</style>