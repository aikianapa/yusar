<style>
    iframe {
        min-width: 382px;
        min-height: 244px;
    }
</style>
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
            <wb-foreach wb="from=images" wb-limit="7">
                <div class="col-md-4 col-sm-6 col-lg-3 mb-3r">
                    <div class="card">
                        <!-- <div class="image__container"> -->
                        <div style="border-radius: 10px; min-width: 382px; min-height: 244px; overflow: hidden;">
                            <a class="d-flex" href="/article/{{id}}/">
                                <!-- <img class="img-fluid" width="500" height="320" src="/thumbc/500x320/src{{img}}" alt=""> -->
                                <!-- <div style="border-radius: 10px; min-width: 382px; min-height: 244px; overflow: hidden;"> -->
                                    <iframe src="https://www.youtube.com/embed/XlT9aoylb74?modestbranding=1;iv_load_policy=3;rel=0;autohide=1;" 
                                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                    allowfullscreen></iframe>
                                <!-- </div> -->
                            </a>
                        </div>

                        <input type="checkbox" class="d-none" name="active" id="check{{id}}">
                        <label class="favorite" for="check{{id}}"></label>

                        <div class="card-body">
                            <p class="card-text" style="margin-top: 15px;">ФГБУ "Российский онкологический научный центр имени Н.Н. Блохина"...</p>
                        </div>
                    </div>
                </div>
            </wb-foreach>
        </div>
    </div>
</div>
