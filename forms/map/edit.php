<html>
<wb-include wb-form="common_modal">
    <wb-jq wb="prepend=.modal-header">
        <h6>Карта присутствия</h6>
    </wb-jq>
    <wb-jq wb="html=.modal-footer">
        <wb-include wb-form="common_formsave" />
    </wb-jq>
    <wb-jq wb="$dom->find('.modal')->addClass('effect-scale show removable');
    $dom->find('.modal-dialog')->addClass('modal-lg');" />
</wb-include>
<wb-jq wb="html=.modal-body">
    <form id="{{_form}}EditForm" wb="module=bsform">
        <label>Отображать</label>
        <input name="active" wb-module="switch">
        <label>Наименование</label>
        <input class="form-control" type="text" name="name">
        <label>Ссылка</label>
        <input class="form-control" type="text" name="link" wb="module=yonger&mode=pageselect">
        <div class="row">
            <div class="col-12">
                <input name="yamap" wb="module=yamap" height="300">
            </div>
        </div>
    </form>
</wb-jq>

</html>