<html lang="ru">
  <wb-include wb-tpl="head.inc.php" />

  <body class="loading">
    <wb-var bkg="header-4.jpg" />
    <wb-include wb-tpl="header.inc.php" />

      <div class="container pt-3r  projects">
        <div class="tabs">
        <div class="tabs--item tabs--item--active">Российские</div>
        <div class="separator"></div>
        <div class="tabs--item">Международные</div>
      </div>

      <div class="row pb-3r">
        <div class="col-lg-12">
          <div style="width: 100%; box-sizing: border-box; display: flex; flex-wrap: wrap;" class="sorting-block">
            <div class="item-inner sorting">
                <span>Сортировать</span>

                <div class="custom-select-wrapper">
                  <div class="select-block">
                    По популярности
                  </div>

                  <div class="select-block-options">
                    <span class="custom-option" data-value="">По новизне</span>
                  </div>
                </div>
            </div>

            <div class="item-inner category">
                <span>Категории</span>
                <div class="custom-select-wrapper">
                  <div class="select-block">
                    Образование
                  </div>

                  <div class="select-block-options">
                    <span class="custom-option" data-value="">Технологии</span>
                    <span class="custom-option" data-value="">Открытия</span>
                    <span class="custom-option" data-value="">Наука</span>
                  </div>
                </div>
            </div>

            <div class="item-inner year">
              <span>Год</span>

              <div class="custom-select-wrapper">
                <div class="select-block">
                  2020
                </div>

                <div class="select-block-options">
                  <span class="custom-option" data-value="">2017</span>
                  <span class="custom-option" data-value="">2018</span>
                  <span class="custom-option" data-value="">2019</span>
                  <span class="custom-option" data-value="">2020</span>
                  <span class="custom-option" data-value="">2021</span>
                </div>
              </div>
            </div>

            <div class="item-inner" style="margin-left: auto;">
              <a href="javascript:yusar.listmode('grid');">
                <div class="icon-list ml-10"></div>
              </a>
              <a href="javascript:yusar.listmode('list');">
                <div class="icon-grid ml-10"></div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <wb-var listtype="{{_cook.listtype}}" wb-if="'{{_cook.listtype}}' > ''" else="list" />

    
      <wb-data wb="table=pages&item=widget-projects">
        
      <div class="projects--list">
        <div class="row grid" wb-if="'{{_var.listtype}}' == 'grid'">
          <wb-foreach wb="from=images&size=4&sort=date:d&render=server&offset=-100" >
          <!-- <wb-foreach wb="from=images" wb-filer="{'active': 'on'}"> -->
            <div class="col-md-4 col-sm-6 col-lg-3 mb-3r">
              <div class="card-project">
                <a href="/project" style="color: #333333;">
                  <div class="image__container">
                  <!-- <img class="card-img-top" src="https://via.placeholder.com/510x328.png" alt=""> -->
                    <img src="/thumbc/510x328/src{{img}}" class="card-img-top">
                    <!-- <img class="card-img-top p-1" width="254" height="164" data-src="/thumbc/254x164/src/tpl/assets/img/widget-holder.jpg" alt=""> -->
                  </div>

                  <div class="card-body" style="padding-left: 0;">
                    <h4 class="card-title">6 декабря</h4>
                      <p class="card-text">ЮСАР+ на международной конференции «Рак груди: наука на стороне женщины»</p>
                  </div>
                </a>
              </div>
            </div>
          </wb-foreach>
        </div>

        <div class="row list" wb-if="'{{_var.listtype}}' == 'list'">
          <wb-foreach wb="from=images&size=4&sort=date:d&render=server&offset=-100" >
            <div class="col-12 col-lg-6 mb-3r">
            <div class="media">
                <a class="d-flex" href="/projects/{{_id}}" style="color: #4F4F4F;">
                  <div class="image__container">
                  <!-- <img class="card-img-top" src="https://via.placeholder.com/240x118.png" alt=""> -->
                    <img width="255" height="118" src="/thumbc/255x118/src{{img}}" class="card-img-top">
                  </div>

                  <div class="media-body" style="margin-left: 30px; font-weight: 400 !important;">
                    <h4 class="card-title" style="margin-top: 0 !important; font-weight: 400 !important;">6 декабря</h4>
                    <p class="card-text">ЮСАР+ на международной конференции «Рак груди: наука на стороне женщины»</p>
                  </div>
                </a>
              </div>
            </div>
          </wb-foreach>
        </div>
      </div>
      </wb-data>
   
    </div>
    <wb-include wb-tpl="footer.inc.php"/>
    
    <script src="/tpl/assets/js/yusar.js"></script>
    
  </body>
</html>