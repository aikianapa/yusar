<div class="pt-3r pb-3r">
    <div class="widget news-grid">
        <div class="row pb-2r">
            <div class="col-auto">
                <a href="#inside" class="gray-link tx-20 active">Доступные</a>    
            </div>
            <div class="col-auto border-left">
                <a href="#outside" class="gray-link tx-20">Сохранённые</a>
            </div>
        </div>


            <div class="row grid">
                <wb-foreach wb="table=news&size=12&sort=date:d&render=server&offset=-100" wb-filter="{'active':'on'}">
                    <div class="col-md-4 col-sm-6 col-lg-3 mb-3r">
                        <div class="card">
                            <a class="d-flex" href="/article/{{id}}/">
                                <img class="img-fluid" width="500" height="320" data-src="/thumbc/500x320/src/tpl/assets/img/widget-holder.jpg" alt="">
                            </a>
                            <input type="checkbox" class="d-none" name="active" id="check{{id}}">
                            <label class="favorite" for="check{{id}}"></label>
                            <div class="card-body">
                                <p class="card-text">ФГБУ "Российский онкологический научный центр имени Н.Н. Блохина"...</p>
                            </div>
                        </div>
                    </div>
                </wb-foreach>
            </div>

    </div>
</div>