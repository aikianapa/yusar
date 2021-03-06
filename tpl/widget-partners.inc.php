    <div class="container widget-partners">
        <wb-data wb="table=pages&item=partners">
            <h3>{{header}}</h3>
            {{text}}

            <div class="slick pb-1r border-bottom border-top pt-3r pb-3r">
                <wb-foreach wb-from="images">
                        <img width="150" height="100" data-src="/thumb/150x100/src{{img}}" alt="">
                </wb-foreach>
            </div>
        </wb-data>
    </div>