<div class="pt-3r pb-3r">
    <div class="container widget widget-projects">
        <div class="border-bottom pb-1r mb-2r">
            <a class="position-absilute float-right pt-1r" href="/news">
                Все проекты
                <svg width="24" height="24" class="ml-10">
                    <image width="24" height="24" xlink:href="/tpl/assets/img/right-arrow.svg" />
                </svg>
            </a>
            <h3>Реализованные проекты</h3>
        </div>

        <div class="slick pb-1r" id="widgetProjectsList">
            <wb-foreach wb="table=pages">
                <div class="card">
                    <img class="card-img-top p-1" width="254" height="164" data-src="/thumbc/254x164/src/tpl/assets/img/widget-holder.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Март 2017</h4>
                        <p class="card-text">{{_ndx}}) ФГБУ "Российский онкологический научный центр имени Н.Н. Блохина"...</p>
                    </div>
                </div>
            </wb-foreach>
        </div>

    </div>
</div>