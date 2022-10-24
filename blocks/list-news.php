<edit header="Список новостей">
    <wb-include wb-src="/engine/modules/yonger/common/blocks/common.inc.php" />
</edit>

<view>
    <section>
        <div class="pt-3r" id="newsList">
            <div class="container widget news-grid news-page">
                <div class="row pb-3r">
                    <div class="col-lg-12">
                        <div style="width: 100%; box-sizing: border-box; display: flex; flex-wrap: wrap;" class="sorting-block">
          <div class="item-inner sorting">
            <span>Сортировать</span>

            <div class="custom-select-wrapper">
              <div class="select-block">
                По популярности
              </div>

              <div class="select-block-options sort">
                <span class="custom-option" data-value="_created:a" on-click="setSort">По популярности</span>
                <span class="custom-option" data-value="_created:d" on-click="setSort">По новизне</span>
              </div>
            </div>
          </div>

          <div class="item-inner category">
            <span>Категории</span>
            <div class="custom-select-wrapper">
              <div class="select-block">
                Все
              </div>
              <div class="select-block-options category" wb-tree="dict=project_category&tpl=false">
                <span class="custom-option" data-value="{{id}}" data-prop="category" on-click="setFilter">{{data.lang.{{_sess.lang}}}}</span>
              </div>
              <wb-jq wb-prepend=".select-block-options.category">
                <span class="custom-option" data-value="null" data-prop="category" on-click="setFilter">Все</span>
              </wb-jq>
            </div>
          </div>

          <div class="item-inner year">
            <span>Год</span>
            <wb-var year='{{date("Y")}}' />
            <div class="custom-select-wrapper">
              <div class="select-block">
                Все
              </div>
              <div class="select-block-options">
                <span class="custom-option" data-value='null' data-prop="year" on-click="setFilter">Все</span>
                <span class="custom-option" data-value='{{_var.year}}' data-prop="year" on-click="setFilter">{{_var.year}}</span>
                <wb-foreach wb='count={{_var.year - (date("Y") -6) }}&tpl=false'>
                  <span class="custom-option" data-value='{{ {{date("Y")}} - _value}}' data-prop="year" on-click="setFilter">{{ {{date("Y")}} - _value}}</span>
                </wb-foreach>
              </div>
            </div>
          </div>

          <div class="item-inner" style="margin-left: auto;">
            <a href="javascript:" on-click="@this.view('media')">
              <div class="icon-list ml-10"></div>
            </a>
            <a href="javascript:" on-click="@this.view('grid')">
              <div class="icon-grid ml-10"></div>
            </a>
          </div>
                        </div>
                    </div>
                </div>

                <div wb-off>
                    {{#if type == 'grid'}}
                    <div class="row grid" wb-if="'{{_var.listtype}}' == 'grid'" id="newsListGrid">
                        {{#each result}}
                        <div class="col-md-4 col-sm-6 col-lg-3 mb-3r">
                            <a class="d-flex" data-href="/news/{{url}}">
                                <div class="card card--second">
                                    <div class="image__container">
                                        <!-- <img class="card-img-top" width="500" height="320" data-src="/thumb/500x320/src/tpl/assets/img/widget-news.jpg" alt=""> -->
                                        <img class="card-img-top" width="500" height="320" data-src="/thumbc/500x320/src{{cover}}" alt="{{header}}">
                                    </div>

                                    <div class="card-body mt-1r">
                                        <h4 class="card-title">{{date}}</h4>
                                        <p class="card-text">{{header}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        {{/each}}
                    </div>
                    {{/if}} {{#if type == 'media'}}
                    <div class="row list" wb-if=" '{{_var.listtype}}' == 'list'" id="newsListMedia">
                        {{#each result}}
                        <div class="col-12 col-lg-6 mb-3r">
                            <div class="media">
                                <a class="d-flex" data-href="/news/{{url}}">
                                    <div class="image__container">
                                        <img class="card-img-top" width="255" height="118" data-src="/thumbc/255x118/src{{cover}}" alt="{{header}}">
                                    </div>

                                    <div class="media-body" style="margin-left: 15px;">
                                        <h4 class="card-title" style="margin-top: 0 !important;">{{date}}</h4>
                                        <p class="card-text">{{header}}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        {{/each}}
                    </div>
                    {{/if}} {{#~/pages }} {{#if ~/pages != 1 }}
                    <nav class="col-xs-12 col-12">
                        <ul class="pagination justify-content-center mb-40">
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
                                    {{/if}} {{#if .label != "prev"}}{{#if .label != "next"}} {{.label}} {{/if}} {{/if}}
                                </a>
                            </li>
                            {{/if}} {{/each}}
                        </ul>
                    </nav>
                    {{/if}} {{/pages}}

                </div>
            </div>
        </div>
    </section>
    <script wb-app remove>
        var base = '/api/v2/list/news?@size=12'
        if (!wbapp.data('news.filter')) {
            wbapp.data('news.filter', {
                active: 'on'
            });
            wbapp.data('news.sort', '_created:d');
            wbapp.data('news.type', 'grid');
        }

        var newsList = new Ractive({
            el: '#newsList',
            template: $('#newsList').html(),
            data: {
                result: {},
                type: wbapp.data('news.type')
            },
            on: {
                init() {
                    this.fire("loadPage")
                },
                update() {
                    setTimeout(function() {
                        $('#newsList').find('[data-href]').each(async function() {
                            $(this).attr('href', $(this).attr('data-href')).removeAttr(
                                'data-href');
                        })
                        $('#newsList').find('[data-src]').each(async function() {
                            $(this).attr('src', $(this).attr('data-src')).removeAttr('data-src');
                        })
                    }, 10)
                },
                loadPage(ev, page = 1) {
                    let sort = wbapp.data('news.sort')
                    let filter = wbapp.data('news.filter')
                    wbapp.post(`${base}&@page=${page}&@sort=${sort}`, {
                        filter: filter
                    }, function(data) {
                        newsList.set("result", data.result);
                        newsList.set("pagination", data.pagination);
                        newsList.set("page", data.page);
                        newsList.set("pages", data.pages);
                        newsList.update()
                    })
                },
                setPage(ev) {
                    let page = $(ev.node).attr("data-page");
                    newsList.fire("loadPage", page)
                    return false
                },
                setFilter(ev) {
                    let that = ev.node
                    let data = $(that).data();
                    wbapp.data('news.filter.' + data.prop, data.value)
                    switch (data.prop) {
                        case 'category':
                            $(that).parents('.custom-select-wrapper').find('.select-block').text($(that).text())
                            break;
                        case 'year':
                            $(that).parents('.custom-select-wrapper').find('.select-block').text($(that).text())
                            break;
                    }
                    newsList.fire("loadPage")
                },
                setSort(ev) {
                    let data = $(ev.node).data();
                    wbapp.data('news.sort', data.value);
                    newsList.fire("loadPage", newsList.get('page'))
                }
            },
            view(view) {
                wbapp.data('news.type', view);
                newsList.set('type', view)
                newsList.update()
            }
        })
    </script>

</view>