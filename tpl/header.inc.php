<wb-var path_video='/tpl/assets/video' />
<header wb-if="'{{_route.name}}' == 'home'" class="homepage">
    <wb-var header="" />
    <wb-foreach wb="from=blocks&tpl=false">
        <wb-var header="{{_parent.blocks.{{_idx}}}}" wb-if="'{{name}}'=='header'" />
    </wb-foreach>

    <div id="homeCarousel" class="carousel slide" data-ride="carousel" data-interval="6000" data-pause="none">
        <wb-include wb-tpl="topmenu.inc.php" />
        <div class="container p-0">
            <ol class="carousel-indicators">
                <wb-foreach wb="count={{count({{blocks.header.lang.{{_sess.lang}}.slides}})}}">
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
            <wb-foreach wb-from="_var.header.lang.{{_sess.lang}}.slides">
                <wb-var active="active" wb-if='"{{_idx}}" == "0"' else="" />
                <div class="carousel-item {{_var.active}}">
                    <div class="container position-relative">
                        <div class="carousel-caption text-left">
                            <div class="jumbotron transparent row">
                                <h1 class="mb-3r">
                                    {{header}}
                                </h1>

                                <div class="col-12 col-lg-6 px-0">
                                    <p class="lead lead-text">
                                        {{text}}
                                    </p>
                                    <p class="lead lead-button mt-3r">
                                        <a class="btn btn-primary rounded-30 btn-lg" href="{{link}}"
                                            role="button">{{button}}</a>
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
            <span class="sr-only">&lt;</span>
        </a>

        <a class="carousel-control-next" href="#homeCarousel" role="button" data-slide="next">
            <svg width="21" height="42" class="ml-10">
                <image width="21" height="42" xlink:href="/tpl/assets/img/slider-arrow-next.svg" />
            </svg>
            <span class="sr-only">&gt;</span>
        </a>
    </div>
</header>
<header wb-if="'{{_route.name}}' !== 'home'">
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
                        <wb-include wb-tpl="breadcrumbs.inc.php" />
                        </nav>
                        <div class="col-12 px-0">
                            <h1>{{header}}</h1>
                        </div>
                        <div class="col-12 col-lg-6 px-0">
                            <p class="lead-text" wb-if="'{{_route.uri}}'!=='/project' && '{{_form}}' !== 'news'">
                                {{text}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>