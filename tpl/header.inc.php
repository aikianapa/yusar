<wb-var path_video='/tpl/assets/video' />

<header wb-if="id == 'home'" class="homepage">
    <div id="homeCarousel" class="carousel slide" data-ride="carousel" data-interval="6000" data-pause="none">
        <wb-include wb-tpl="topmenu.inc.php" />
        <div class="container p-0">
            <ol class="carousel-indicators">
                <wb-foreach wb-count="3">
                    <wb-var active="active" wb-if='"{{_idx}}" == "0"' else='' />
                    <li data-target="#homeCarousel" data-slide-to="{{_idx}}" class="{{_var.active}}"></li>
                </wb-foreach>
            </ol>
        </div>

        <div class="carousel-inner">
			<video autoplay="true" muted="true" playsinline="true" loop="true" wb-if='"{{video}}" > ""'>
                <source data-src="{{_var.path_video}}/{{video}}.webm" type="video/webm">
                <source data-src="{{_var.path_video}}/{{video}}.mp4" type="video/mp4">
            </video>

            <wb-foreach wb-from="prop.data.slider.children">
            <wb-var active="active" wb-if='"{{_idx}}" == "0"' else="" />
            <div class="carousel-item {{_var.active}}">
                <div class="container position-relative">
                    <div class="carousel-caption text-left">
                        <div class="jumbotron transparent row">
                            <h1 class="mb-3r">
                                {{name}}
                            </h1>

                            <div class="col-12 col-lg-6 px-0">
                                <p class="lead lead-text">
                                    {{data.text}}
                                </p>

                                <p class="lead lead-button mt-3r">
                                    <a class="btn btn-primary rounded-30 btn-lg" href="Jumbo action link" role="button">Подробнее</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </wb-foreach>
        </div>

        <a class="carousel-control-prev" href="#homeCarousel" role="button" data-slide="prev">
            <svg width="21" height="42" class="ml-10">
                <image width="21" height="42" xlink:href="/tpl/assets/img/slider-arrow-prev.svg" />
            </svg>
            <span class="sr-only">Предыдущий</span>
        </a>   
        
        <a class="carousel-control-next" href="#homeCarousel" role="button" data-slide="next">
            <svg width="21" height="42" class="ml-10">
                <image width="21" height="42" xlink:href="/tpl/assets/img/slider-arrow-next.svg" />
            </svg>
            <span class="sr-only">Следующий</span>
        </a>
    </div>
</header>
<header wb-if="id !== 'home'">
    <div class="carousel" data-interval="6000">
        <wb-include wb-tpl="topmenu.inc.php" />
            <div class="carousel-inner">
                <video autoplay="true" muted="true" playsinline="true" loop="true" wb-if='"{{video}}" > ""'>
                    <source data-src="{{_var.path_video}}/{{video}}.webm" type="video/webm">
                    <source data-src="{{_var.path_video}}/{{video}}.mp4" type="video/mp4">
                </video>
                <video autoplay="true" muted="true" playsinline="true" loop="true" wb-if='"{{video}}" == ""'>
                    <source data-src="{{_var.path_video}}/about.webm" type="video/webm">
                    <source data-src="{{_var.path_video}}/about.mp4" type="video/mp4">
                </video>
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
                                <h1>{{lang.ru.header}}</h1>
                            </div>
                            <div class="col-12 col-lg-6 px-0">
                                <p class="lead-text">В жизни нашей компании регулярно случаются интересные события. 
                                Мы с удовольствием делимся ими с вами в этом разделе. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</header>
