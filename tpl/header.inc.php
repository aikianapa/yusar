<header wb-if="id == 'home'">
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

			<video class="slideGallery__video" autoplay="true" muted="true" playsinline="true" loop="true">
                                <source src="/tpl/assets/video/yusar-plus.webm" type="video/webm">
                                <source src="/tpl/assets/video/yusar-plus.mp4" type="video/mp4">
                            </video>


            <!--video class="slideGallery__video" src="/assets/video/3.mp4" autoplay="" muted="" playsinline="" loop="" style="width: 1601.78px; height: 901px; margin-top: 0px; margin-left: -198.389px;"></video-->

            <wb-foreach wb-count="3">
            <wb-var active="active" wb-if='"{{_idx}}" == "0"' else="" />
            <div class="carousel-item {{_var.active}}">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <div class="jumbotron transparent row">
                            <h1 class="mb-3r">({{_ndx}}) 25 лет рядом с вами {{lang.ru.header}}</h1>
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
<header wb-if="id !== 'home'">
    <div class="carousel">
        <wb-include wb-tpl="topmenu.inc.php" />
            <div class="carousel-inner">
                <video src="/tpl/assets/video/yusar-plus.webm" autoplay="" muted="" playsinline="" loop=""></video>
                <div class="container">
                    <div class="carousel-caption text-left">
                        <div class="jumbotron transparent row mb-0 pb-1r no-home">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb transparent pl-0">
                                    <li class="breadcrumb-item"><a href="#">Главная</a></li>
                                    <li class="breadcrumb-item"><a href="#">Библиотека</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Данные</li>
                                </ol>
                            </nav>

                            <div class="col-12 px-0">
                                <h1>Новости ЮСАР</h1>
                            </div>
                            <div class="col-12 col-lg-6 px-0">
                                <p class="lead">В жизни нашей компании регулярно случаются интересные события. 
                                Мы с удовольствием делимся ими с вами в этом разделе. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</header>
<wb-include wb-tpl="widget-loader.inc.php" />
