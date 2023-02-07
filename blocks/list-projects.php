<edit header="Список проектов">
  <wb-include wb-src="/engine/modules/yonger/common/blocks/common.inc.php" />
</edit>

<view>
  <wb-lang>
    [en]
    inter = International
    local = Russian
    sort = Sort
    popular = "By popularity"
    novelty = "By novelty"
    categories = Categories
    all = All
    year = Year
    [ru]
    inter = Международные
    local = Российские
    sort = Сортировать
    popular = "По популярности"
    novelty = "По новизне"
    categories = Категории
    all = Все
    year = Год
  </wb-lang>

  <div class="container pt-3r projects" id="projectsList">
    <div class="tabs">
      <div class="tabs--item tabs--item--active" data-value="r" data-prop="type" on-click="setFilter">{{_lang.local}}</div>
      <div class="separator"></div>
      <div class="tabs--item" data-value="m" data-prop="type" on-click="setFilter">{{_lang.inter}}</div>
    </div>

    <div class="row pb-3r">
      <div class="col-lg-12">
        <div style="width: 100%; box-sizing: border-box; display: flex; flex-wrap: wrap;" class="sorting-block">
          <div class="item-inner sorting">
            <span>{{_lang.sort}}</span>

            <div class="custom-select-wrapper">
              <div class="select-block">
                {{_lang.popular}}
              </div>

              <div class="select-block-options sort">
                <span class="custom-option" data-value="_created:a" on-click="setSort">{{_lang.popular}}</span>
                <span class="custom-option" data-value="_created:d" on-click="setSort">{{_lang.novelty}}</span>
              </div>
            </div>
          </div>

          <div class="item-inner category">
            <span>{{_lang.categories}}</span>
            <div class="custom-select-wrapper">
              <div class="select-block">
                {{_lang.all}}
              </div>
              <div class="select-block-options category" wb-tree="dict=project_category&tpl=false">
                <span class="custom-option" data-value="{{id}}" data-prop="category" on-click="setFilter">{{data.lang.{{_sess.lang}}}}</span>
              </div>
              <wb-jq wb-prepend=".select-block-options.category">
                <span class="custom-option" data-value="null" data-prop="category" on-click="setFilter">{{_lang.all}}</span>
              </wb-jq>
            </div>
          </div>

          <div class="item-inner year">
            <span>{{_lang.year}}</span>
            <wb-var year='{{date("Y")}}' />
            <div class="custom-select-wrapper">
              <div class="select-block">
                {{_lang.all}}
              </div>
              <div class="select-block-options">
                <span class="custom-option" data-value='null' data-prop="year" on-click="setFilter">{{_lang.all}}</span>
                <span class="custom-option" data-value='{{_var.year}}' data-prop="year" on-click="setFilter">{{_var.year}}</span>
                <wb-var years wb-api="/api/v2/list/projects?@sort=year:d&@group=year&@supress&@return=year" />
                <wb-foreach wb='from=_var.years&tpl=false'>
                  <span class="custom-option" data-value='{{_val}}' data-prop="year" on-click="setFilter">{{_val}}</span>
                </wb-foreach>
              </div>
            </div>
          </div>

          <div class="item-inner" style="margin-left: auto;">
            <a href="javascript:" on-click="@this.view('media')">
              <div class="ml-10 icon-list"></div>
            </a>
            <a href="javascript:" on-click="@this.view('grid')">
              <div class="ml-10 icon-grid"></div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="projects--list" wb-off>
      {{#if type == 'grid'}}
        <div class="grid row" id="projectsListGrid">
          {{#each result}}
            <div class="col-md-4 col-sm-6 col-lg-3 mb-3r">
              <div class="card-project">
                <a data-href="{{url}}" style="color: #333333;">
                  <div class="image__container">
                    <img data-src="/thumbc/510x328/src{{cover}}" class="card-img-top">
                  </div>

                  <div class="card-body" style="padding-left: 0;">
                    <h4 class="card-title">{{year}}</h4>
                    <p class="card-text">{{header}}</p>
                  </div>
                </a>
              </div>
            </div>
          {{/each}}
        </div>
      {{/if}}
      {{#if type == 'media'}}
        <div class="row list" id="projectsListMedia">
          {{#each result}}
            <div class="col-12 col-lg-6 mb-3r">
              <div class="media">
                <a class="d-flex" data-href="{{url}}" style="color: #4F4F4F;">
                  <div class="image__container">
                    <img width="255" height="118" data-src="/thumbc/255x118/src{{cover}}" class="card-img-top">
                  </div>

                  <div class="media-body" style="margin-left: 30px; font-weight: 400 !important;">
                    <h4 class="card-title" style="margin-top: 0 !important; font-weight: 400 !important;">
                      {{year}}
                    </h4>
                    <p class="card-text">{{header}}</p>
                  </div>
                </a>
              </div>
            </div>
          {{/each}}
        </div>
      {{/if}}

      {{#~/pages }} {{#if ~/pages != 1 }}
          <nav class="col-xs-12 col-12">
            <ul class="mb-40 pagination justify-content-center">
              {{#each pagination}} {{#if ~/page == .page}}
                  <li class="page-item active">
                    <a class="page-link active" data-page="{{.page}}" on-click="setPage" href="#">
                      {{.label}}
                    </a>
                  </li>
                {{/if}} {{#if ~/page != .page}}
                  <li class="page-item">
                    <a class="page-link" data-page="{{.page}}" on-click="setPage" href="#">
                      {{#if .label == "prev"}}
                        <span>&lt; Назад</span>
                      {{/if}} {{#if .label == "next"}}
                        <span>Далее &gt;</span>
                      {{/if}}
                      {{#if .label != "prev"}}{{#if .label != "next"}}
                          {{.label}}
                        {{/if}}
                      {{/if}}
                    </a>
                  </li>
                {{/if}} {{/each}}
            </ul>
          </nav>
        {{/if}} {{/pages}}

    </div>
  </div>
  <script wb-app remove>
    var base = '/api/v2/list/projects?@size=12'
    if (!wbapp.data('prj.filter')) {
      wbapp.data('prj.filter', {
        active: 'on',
        type: 'r'
      });
      wbapp.data('prj.sort', '_created:d');
      wbapp.data('prj.type', 'grid');
    }

    var prjList = new Ractive({
      el: '#projectsList',
      template: $('#projectsList').html(),
      data: {
        result: {},
        type: wbapp.data('prj.type')
      },
      on: {
        init() {
          wbapp.loader = false
          this.fire("loadPage")
        },
        update() {
          setTimeout(function() {
            $('#projectsList').find('[data-href]').each(async function() {
              $(this).attr('href', $(this).attr('data-href')).removeAttr('data-href');
            })
            $('#projectsList').find('[data-src]').each(async function() {
              $(this).attr('src', $(this).attr('data-src')).removeAttr('data-src');
            })
          }, 10)
        },
        loadPage(ev, page = 1) {
          let sort = wbapp.data('prj.sort')
          let filter = wbapp.data('prj.filter')
          wbapp.post(`${base}&@page=${page}&@sort=${sort}`, {
            filter: filter
          }, function(data) {
            prjList.set("result", data.result);
            prjList.set("pagination", data.pagination);
            prjList.set("page", data.page);
            prjList.set("pages", data.pages);
            prjList.update()
          })
        },
        setPage(ev) {
          let page = $(ev.node).attr("data-page");
          prjList.fire("loadPage", page)
          return false
        },
        setFilter(ev) {
          let that = ev.node
          let data = $(that).data();
          wbapp.data('prj.filter.' + data.prop, data.value)
          switch (data.prop) {
            case 'type':
              $(that).parent('.tabs').find('.tabs--item--active').removeClass('tabs--item--active')
              $(that).addClass('tabs--item--active')
              wbapp.data('prj.filter.category', null)
              wbapp.data('prj.filter.year', null)
              break;
            case 'category':
              $(that).parents('.custom-select-wrapper').find('.select-block').text($(that).text())
              break;
            case 'year':
              $(that).parents('.custom-select-wrapper').find('.select-block').text($(that).text())
              break;
          }
          prjList.fire("loadPage")
        },
        setSort(ev) {
          let data = $(ev.node).data();
          wbapp.data('prj.sort', data.value);
          prjList.fire("loadPage", prjList.get('page'))
        }
      },
      view(view) {
        wbapp.data('prj.type', view);
        prjList.set('type', view)
        prjList.update()
      }
    })
  </script>
</view>