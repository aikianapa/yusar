<header>
    <div id="homeCarousel" class="carousel slide" data-ride="carousel">
        <wb-include wb-tpl="topmenu.inc.php" />
        <div class="container p-0">
            <ol class="carousel-indicators">
                <wb-foreach wb-count="3">
                <wb-var active="active" wb-if='"{{_idx}}" == "0"' else="" />
                <li data-target="#homeCarousel" data-slide-to="{{_idx}}" class="{{_var.active}}"></li>
                </wb-foreach>
            </ol>
        </div>
        <div class="carousel-inner">
            <wb-foreach wb-count="3">
            <wb-var active="active" wb-if='"{{_idx}}" == "0"' else="" />
            <div class="carousel-item {{_var.active}}">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <div class="jumbotron transparent row">
                            <h1 class="mb-3r">25 лет рядом с вами</h1>
                            <div class="col-12 col-lg-6 px-0">
                                <p class="lead">Основной задачей ЮСАР+ является поддержка текущих решений и выпуск новейших высокотехнологичных
                                    программных продуктов на рынке медицинских информационных технологий за счет накопленного
                                    опыта, профессиональной компетенции компании, поступательного развития и гибкости в реализации
                                    проектов</p>

                                <p class="lead mt-3r">
                                    <a class="btn btn-primary rounded-30 btn-lg" href="Jumbo action link" role="button">Подробнее</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </wb-foreach>
        </div>
    </div>

</header>