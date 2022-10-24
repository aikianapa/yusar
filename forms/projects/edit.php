<html>
<wb-include wb-form="common_modal">
    <wb-jq wb="prepend=.modal-header">
        <h6>Проект</h6>
    </wb-jq>
    <wb-jq wb="html=.modal-footer">
        <wb-include wb-form="common_formsave" />
    </wb-jq>
    <wb-jq wb="
    $dom->find('.modal')->addClass('effect-scale show removable');
    $dom->find('.modal-dialog')->addClass('modal-xxl');
    " />
</wb-include>
    <wb-jq wb="html=.modal-body">
                <div class="row">
                    <div class="col-5">
                        <form id="{{_form}}EditForm">
                            <div>
                                <div class="form-group row mb-1">

                                    <div class="col-12">
                                        <div class="divider-text my-0">Обложка</div>
                                        <wb-module wb="module=filepicker&mode=single&width=800&&height=300"
                                            wb-path="/uploads/projects" name="cover">
                                        </wb-module>
                                    </div>

                                    <div class="col">
                                        <input name="header" class="form-control" placeholder="Заголовок"
                                            wb="module=langinp" required>
                                    </div>
                                    <div class="col-auto">
                                        <input name="active" wb-module="swico" data-size="36">
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-12">
                                        <textarea name="text" rows="auto" class="form-control" placeholder="Текст" wb-module="langinp"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <label class="col-sm-6">Год проекта</label>
                                    <div class="col-sm-6">
                                        <input type="yearpicker" name="year" class="form-control" wb="module=datetimepicker">
                                    </div>
                                </div>
                                <div class="form-group row mb-1">
                                    <div class="col-sm-6">
                                        <label>Тип проекта</label>
                                        <select name="type" wb-select2>
                                            <option value="r">Российский</option>
                                            <option value="m">Международный</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Категория</label>
                                        <select name="category" wb-select2 wb-tree="dict=project_category&tpl=false">
                                            <option value="{{id}}">{{name}}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <wb-module wb="module=yonger&mode=structure&preset=projects" />
                        </form>
                    </div>

                    <div class="col-7">
                        <div id="yongerBlocksForm">
                            <form method="post">

                            </form>
                        </div>
                    </div>
                </div>

    </wb-jq>
</html>