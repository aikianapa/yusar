<html lang="ru">
    <style>
    .content-block {
        margin-top: 72px;
    }

    .block-title {
        font-size: 36px;
        font-weight: 500;
    }

    .block-text {
        margin-top: 20px;
        font-size: 20px;
        font-weight: 500;
    }

    .content-block-two {
        margin-top: 36px;
        display: flex;
    }
    
    .content-block-two img {
        height: auto;
        max-width: 100%;
    }

    .block-text-two {
        margin-left: 30px;
        font-size: 20px;
    }

    .content-block-three {
        margin-top: 36px;
    }

    .mini-title {
        font-size: 20px;
        font-weight: 700;
    }

    .block-list {
        margin-top: 12px;
        list-style: none;
        margin-left: 0;
        padding-left: 0;
    }

    .block-list li {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .content-block-four {
        margin-top: 40px;
    }

    .mini-block {
        margin-top: 24px;
    }

    .block-text-four {
        margin-top: 12px;
        font-size: 20px;
    }

    .params-selector {
        margin-top: 36px;
        margin-bottom: 72px;
    }

    .card {
        background-color: #F0F5F9 !important;
        border: none !important;
        border-radius: 0 !important;
    }

    .card-header {
        padding: 0 !important;
        min-height: 76px;
        background-color: #F0F5F9 !important;
        border: none !important;
    }

    .btn-link {
        /* Вверх Вправо Вниз Влево */
        text-decoration: none !important;
        padding: 0rem 0rem 0rem 2rem !important;
        color: #000 !important;

        font-size: 20px !important;
        
        position: relative;
        min-height: 76px;

        background-color: #F0F5F9 !important;
        border-color: #F0F5F9 !important;

        box-shadow: none !important;
    }

    .btn-link img {
        position: absolute;
        right: 24px;
        top: 15px;
        transform: rotate(90deg);
    }

    .card-item {
        margin-left: 10px;
        border-bottom: 1px solid rgba(43, 168, 221, 0.3);
        padding-bottom: 5px;
        margin-bottom: 15px;

        overflow: auto;
    }

    .card-item-title {
        display: inline-block;
        font-size: 20px;
        font-weight: 600;
        width: 40%;

        overflow: hidden;
        height: 100%;
    }

    .card-item-text {
        display: inline-block;
        float: right;
        width: 60%;
        font-size: 20px;

        overflow: hidden;
        height: 100%;
    }

    .thermal-video-block {
        border-radius: 10px; 
        height: 290px; 
        overflow: hidden;
        min-width: 540px;
    }

    @media screen and (max-width: 991px) {
        .content-block-two {
            flex-direction: column;
        }

        .block-text-two {
            margin-left: 0;
            margin-top: 12px;
        }

        iframe, .thermal-video-block {
            min-width: 100% !important;
        }
    }

    iframe {
        min-width: 540px;
        min-height: 290px;
    }
    </style>

    <wb-include wb-tpl="head.inc.php" />
    <body class="loading">
        <wb-include wb-tpl="header.inc.php" />
        <div class="container">
            <div class="content-block">
                <span class="block-title">Тепловизор «Pro_Jemys.2020»</span>
                <div class="block-text">
                    Тепловизор «Pro_Jemys.2020»  – инновационный продукт, позволяющий выявлять лиц с повышенной температурой тела. 
                    Устройство тепловизор «Pro_Jemys.2020»  быстро сканирует всех проходящих мимо оператора людей и дает сигнал при 
                    обнаружении человека с повышенной температурой тела. Такие устройства в основном применяются в аэропортах для проверки 
                    пассажиров и борьбы с распространением таких заболеваний, как атипичная пневмония, птичий грипп, 
                    лихорадка Эбола и недавней эпидемии коронавируса (также известного под названием «уханьский вирус»).
                </div>
            </div>

            <div class="content-block-two">
                <!-- <img src="/tpl/assets/img/video-image.png" alt=""> -->
                <div class="thermal-video-block">
                    <iframe src="https://www.youtube.com/embed/XlT9aoylb74?modestbranding=1;iv_load_policy=3;rel=0;autohide=1;" 
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen></iframe>
                </div>

                <div class="block-text-two">
                    Камера-тепловизор оборудована встроенным графическим процессором, поддерживающим высокоинтеллектуальный алгоритм поведенческого анализа,
                    адаптером оцифровки изображения, обеспечивающим распознавание с высоким уровнем точности, и оповещение в реальном масштабе времени. 
                    Камера-тепловизор, наряду с выявлением людей с повышенной температурой тела, может применяться для 
                    предупреждения возгораний в помещениях, напр. в машинных залах.
                </div>
            </div>

            <div class="content-block-three">
                <span class="mini-title">Функции</span>

                <ul class="block-list">
                    <li>
                        <img src="/tpl/assets/img/mini-check.svg" alt="">
                        Технология обработки изображений
                    </li>

                    <li>
                        <img src="/tpl/assets/img/mini-check.svg" alt="">
                        Функция аварийной сигнализации при заданной температуре
                    </li>

                    <li>
                        <img src="/tpl/assets/img/mini-check.svg" alt="">
                        Совмещение изображений видимого и ИК-спектрах, 
                        предварительный просмотр с опцией "кадр в кадре"
                    </li>

                    <li>
                        <img src="/tpl/assets/img/mini-check.svg" alt="">
                        Стробирующий источник света и звуковая сигнализация
                    </li>

                    <li>
                        <img src="/tpl/assets/img/mini-check.svg" alt="">
                        Высокочувствительный датчик
                    </li>

                    <li>
                        <img src="/tpl/assets/img/mini-check.svg" alt="">
                        3D DNR, 15 регулируемых цветовых палитр, регулировка чёткости изображения и контрастности
                    </li>

                    <li>
                        <img src="/tpl/assets/img/mini-check.svg" alt="">
                        Зеркальное изображение, цифровое увеличение (zoom)
                    </li>
                </ul>
            </div>

            <div class="content-block-four">
                <span class="block-title title-two">Тепловизор «Pro_Jemys.2020.lite»</span>
                <div class="block-text">Тепловизионная система с функцией идентификации лиц с повышенной температурой тела.</div>

                
                <div class="mini-block">
                    <span class="mini-title">Сценарий использования</span>
                    <div class="block-text-four">
                        Технология инфракрасного теплового изображения, использует инфракрасный датчик и 2-мегапиксельную 
                        бинокулярную широкоугольную динамическую камеру в режиме реального времени, распознавание лиц на расстоянии от 0,2 до 0,8 м 
                        при измерении температуры тела. Работает при наличии защитной маски на лице.
                    </div>
                </div>

                <div class="mini-block">
                    <span class="mini-title">Функциональные особенности</span>
                    <div class="block-text-four">
                        Технология инфракрасного теплового изображения, использует инфракрасный датчик и 2-мегапиксельную бинокулярную широкоугольную 
                        динамическую камеру в режиме реального времени, распознавание лиц на расстоянии от 0,2 до 0,8 м при измерении температуры тела. 
                        Работает при наличии защитной маски на лице.
                    </div>
                </div>

                <div class="mini-block">
                    <span class="mini-title">Профилактика и борьба с эпидемиями</span>
                    <div class="block-text-four">
                        При настройке тепловизора устанавливается порог предупреждения о высокой температуре. 
                        Когда тепловизор выявляет, что температура человека превышает порог предупреждения, 
                        немедленно включается механизм речевого оповещения, указывающий на риск заражения.
                    </div>
                </div>

                <div class="mini-block">
                    <span class="mini-title">Платформа управления</span>
                    <div class="block-text-four">
                        Продукт поддерживает функцию загрузки по сети передачи данных, 
                        которая может формировать данные результатов измерения температуры 
                        в таблицу в режиме реального времени передавать SMS администратору 
                        для отслеживания запроса.
                    </div>
                </div>

                <div class="params-selector">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <!-- <h2 class="mb-0"> -->
                                    <button class="btn btn-link btn-block text-left" type="button" 
                                        data-toggle="collapse" data-target="#collapseOne" 
                                        aria-expanded="true" aria-controls="collapseOne">
                                        Параметры <img src="/tpl/assets/img/chevron.svg" alt="">
                                    </button>
                                <!-- </h2> -->
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="card-item">
                                        <span class="card-item-title">Операционная система</span>
                                        <span class="card-item-text">Android Standart</span>
                                    </div>

                                    <div class="card-item">
                                        <span class="card-item-title">Тепловое разрешение</span>
                                        <span class="card-item-text">32 * 32 / 12um</span>
                                    </div>

                                    <div class="card-item">
                                        <span class="card-item-title">Поле зрения</span>
                                        <span class="card-item-text">33° * 33 °</span>
                                    </div>

                                    <div class="card-item">
                                        <span class="card-item-title">Максимальный размер инфракрасного изображения</span>
                                        <span class="card-item-text">≥ 320 * 240,0,5 м </span>
                                    </div>

                                    <div class="card-item">
                                        <span class="card-item-title">Погрешность</span>
                                        <span class="card-item-text">± 0,3 °</span>
                                    </div>

                                    <div class="card-item">
                                        <span class="card-item-title">Разрешение камеры</span>
                                        <span class="card-item-text">аппаратное обеспечение, 2 миллиона пикселей в динамике</span>
                                    </div>

                                    <div class="card-item">
                                        <span class="card-item-title">Точность проверки лица</span>
                                        <span class="card-item-text">> 99% </span>
                                    </div>

                                    <div class="card-item">
                                        <span class="card-item-title">Расстояние распознавания лица</span>
                                        <span class="card-item-text">0,2 м ~ 0,8 м</span>
                                    </div>

                                    <div class="card-item">
                                        <span class="card-item-title">Ёмкость хранилища</span>
                                        <span class="card-item-text">20 000 карт, 10 Вт записи событий</span>
                                    </div>

                                    <div class="card-item">
                                        <span class="card-item-title">Диапазон измерения</span>
                                        <span class="card-item-text">30 ° C ~ 45 ° C</span>
                                    </div>

                                    <div class="card-item">
                                        <span class="card-item-title">Экран дисплея</span>
                                        <span class="card-item-text">8 "IPS</span>
                                    </div>

                                    <div class="card-item">
                                        <span class="card-item-title">Чип</span>
                                        <span class="card-item-text">четырехъядерный RK3288 ARM-A17 1.8GH</span>
                                    </div>

                                    <div class="card-item">
                                        <span class="card-item-title">Процессор</span>
                                        <span class="card-item-text">Mail-T764</span>
                                    </div>

                                    <div class="card-item">
                                        <span class="card-item-title">Озу</span>
                                        <span class="card-item-text">2 Гб</span>
                                    </div>

                                    <div class="card-item">
                                        <span class="card-item-title">ROM</span>
                                        <span class="card-item-text">4 Гб</span>
                                    </div>

                                    <div class="card-item">
                                        <span class="card-item-title">Порты</span>
                                        <span class="card-item-text">DC * 1, RJ45 * 1, USB * 2 (OTG * 1), HDMI * 1</span>
                                    </div>

                                    <div class="card-item">
                                        <span class="card-item-title">Слот для TF</span>
                                        <span class="card-item-text">SD * 1 / аудио * 1</span>
                                    </div>

                                    <div class="card-item">
                                        <span class="card-item-title">Режим связи</span>
                                        <span class="card-item-text">SD * 1 / аудио * 1</span>
                                    </div>

                                    <div class="card-item">
                                        <span class="card-item-title">Входная мощность</span>
                                        <span class="card-item-text">AC220V</span>
                                    </div>

                                    <div class="card-item">
                                        <span class="card-item-title">Рабочая температура</span>
                                        <span class="card-item-text">10 ° C ~ 30 ° C</span>
                                    </div>
                                    
                                    <div class="card-item">
                                        <span class="card-item-title">Рабочая влажность</span>
                                        <span class="card-item-text">меньше 90% относительной влажности</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <wb-include wb-tpl="footer.inc.php" />
    </body>
</html>