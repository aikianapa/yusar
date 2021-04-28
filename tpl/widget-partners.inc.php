<style>
    .partners-img {
        max-width: 200px;
        max-height: 200px;
    }
</style>

<div class="container widget-partners">
    <wb-data wb="table=pages&item=partners">
        <h3>{{header}}</h3>
        {{text}}

        <div class="slick pb-1r border-bottom border-top pt-3r pb-3r partners-widget">
            <wb-foreach wb-from="images">
                <img src="/150x100/src{{img}}" alt="" class="partners-img">
            </wb-foreach>
        </div>
    </wb-data>
</div>