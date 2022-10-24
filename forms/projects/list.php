<html>
<div class="m-3" id="yongerProjects" wb-allow="admin">

    <nav class="nav navbar navbar-expand-md col">
        <h3 class="tx-bold tx-spacing--2 order-1">Проекты</h3>
        <button class="navbar-toggler order-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="wd-20 ht-20 fa fa-ellipsis-v"></i>
        </button>

        <div class="collapse navbar-collapse order-2" id="navbarSupportedContent">
            <form class="form-inline mg-t-10 mg-lg-0  ml-auto">
                <div class="form-group">
                    <input class="form-control mg-r-10 col-auto" type="search" placeholder="Поиск..." aria-label="Поиск..." data-ajax="{'target':'#{{_form}}List','filter_add':{'$or':[{ 'doc_num' : {'$like' : '$value'} }, { 'fullname': {'$like' : '$value'} }]} }">
                </div>
                <a href="#" data-ajax="{'url':'/cms/ajax/form/{{_form}}/edit/_new','html':'#yongerProjects modals'}" class="ml-2 btn btn-primary">
                    <img src="/module/myicons/item-select-plus-add.svg?size=24&stroke=FFFFFF" /> Добавить
                </a>
            </form>
        </div>
    </nav>

    <div id="{{_form}}List" wb-off>
        <ul class="list-group">
            {{#each result}}
            <li data-id="{{id}}" class="list-group-item d-flex align-items-center">
                <div>
                    <h6 class="tx-13 tx-inverse tx-normal mg-b-0">{{header}}</h6>
                    <div class="tx-12">
                        <span class="badge badge-info">{{year}}</span>
                        {{#if type=='r'}}
                        <span>Российский</span>
                        {{else}}
                        <span>Международный</span>
                        {{/if}}
                    </div>
                </div>
                <div class="tx-right pos-absolute t-5 r-10">

            {{#if ~/user.role == "admin"}} {{#if active == "on"}}
            <img src="/module/myicons/24/82C43C/power-turn-on-square.1.svg" width="24" height="24"
                class="cursor-pointer" on-click="switch"> {{else}}
            <img src="/module/myicons/24/FC5A5A/power-turn-on-square.svg" width="24" height="24" class="cursor-pointer"
                on-click="switch"> {{/if}}{{/if}}
                    <a href="javascript:" data-ajax="{'url':'/cms/ajax/form/projects/edit/{{.id}}','html':'#yongerProjects modals'}" class="d-inline">
                        <img src="/module/myicons/content-edit-pen.svg?size=24&stroke=323232">
                    </a>
                    {{#if ~/user.role == 'admin'}}
                    <div class="dropdown dropright d-inline">
                        <a class="cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="/module/myicons/trash-delete-bin.2.svg?size=24&stroke=dc3545" class="d-inline">
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" on-click="remove">
                                <span class="fa fa-trash tx-danger"></span> Удалить</a>
                            <a class="dropdown-item" href="#">
                                <span class="fa fa-close tx-primary"></span> Отмена</a>
                        </div>
                    </div>
                    {{/if}}
                </div>
            </li>
            {{/each}}
        </ul>
        {{#~/pages }} {{#if ~/pages != 1 }}
        <nav aria-label="Page navigation">
            <ul class="pagination mg-b-0 mg-t-10">
                {{#each pagination}} {{#if ~/page == .page}}
                <li class="page-item active">
                    <a class="page-link" data-page="{{.page}}" on-click="setPage" href="#">
                        {{.label}}
                    </a>
                </li>
                {{/if}} {{#if ~/page != .page}}
                <li class="page-item">
                    <a class="page-link" data-page="{{.page}}" on-click="setPage" href="#">
                        {{#if .label == "prev"}}
                        <img src="/module/myicons/interface-essential-181.svg?size=18&stroke=0168fa" class="d-inline">{{/if}} {{#if .label == "next"}}
                        <img src="/module/myicons/interface-essential-35.svg?size=18&stroke=0168fa" class="d-inline">{{/if}} {{#if .label != "prev"}}{{#if .label != "next"}}{{.label}}{{/if}}{{/if}}
                    </a>
                </li>
                {{/if}} {{/each}}
            </ul>
        </nav>
        {{/if}} {{/pages}}
    </div>
    <script>
        wbapp.loadScripts(['/engine/lib/js/nestable/nestable.min.js'])
        var api = "/api/v2"
        var form = "projects"
        var base = api + `/list/${form}?&@size=10&@sort=name`
        var list = new Ractive({
            el: "#{{_form}}List",
            template: $("#{{_form}}List").html(),
            data: {
                base: base,
                result: [],
                pagination: [],
                user: wbapp._session.user
            },
            on: {
                init() {
                    let base = this.get("base");
                    wbapp.post(`${base}`, {}, function(data) {
                        list.set("result", data.result);
                        list.set("pagination", data.pagination);
                        list.set("page", data.page);
                        list.set("pages", data.pages);
                    })
                },
                setData(ev, data) {
                    list.set("result", data.result);
                    list.set("pagination", data.pagination);
                    list.set("page", data.page);
                    list.set("pages", data.pages);
                },
                setPage(ev) {
                    let page = $(ev.node).attr("data-page");
                    this.fire("loadPage", page)
                    return false
                },
                remove(ev) {
                    let id = $(ev.node).parents('[data-id]').attr('data-id');
                    let result = list.get("result")
                    let page = list.get("page") * 1
                    let pages = list.get("pages") * 1
                    delete result[id]
                    if (Object.keys(result).length == 0 && pages > 0 && page >= pages) page--
                        wbapp.post(`${api}/delete/${form}/${id}`, {}, function(data) {
                            if (data.error == false) {
                                list.fire("loadPage", page)
                            }
                        });
                },
                switch (ev) {
                    let data = $(ev.node).parents('[data-id]').data();
                    let active = '';
                    ev.get('active') == 'on' ? active = '' : active = 'on';
                    wbapp.post('/api/v2/update/projects/' + data.id, {
                        active: active
                    }, function(res) {
                        if (res.active !== undefined) ev.set('active', res.active)
                    })
                },
                loadPage(ev, page) {
                    wbapp.post(`${base}&@page=${page}`, {}, function(data) {
                        list.fire("setData", null, data)
                    })
                }
            }
        })
        $(document).undelegate("#{{_form}}EditForm", 'wb-form-save');
        $(document).delegate("#{{_form}}EditForm", 'wb-form-save', function(ev, res) {
            if (res.params.item !== undefined && res.data !== undefined) {
                list.set("result." + res.data.id, res.data);
            }
        })
    </script>
    <modals></modals>
</div>

</html>