<html>
<wb-include wb-form="common_modal">
    <wb-jq wb="prepend=.modal-header">
        <h6>Региональный представитель</h6>
    </wb-jq>
    <wb-jq wb="html=.modal-footer">
        <wb-include wb-form="common_formsave" />
    </wb-jq>
    <wb-jq wb="$dom->find('.modal')->addClass('effect-scale show removable');" />
</wb-include>
    <wb-jq wb="html=.modal-body">
        <form class="row" id="{{_form}}EditForm">
            <div class="col-sm-4">
            <div class="form-group">
                <wb-module wb="module=filepicker&mode=single&width=100&&height=100&button=@hide" wb-path="/uploads/dealers" name="image" />
                <input name="active" wb-module="swico" data-size="36">
            </div>                
            </div>
            <div class="col-sm-8">
            <div class="form-group">
                <label>Регион</label>
                <input class="form-control" type="text" name="region">
            </div>
            <div class="form-group">
                <label>Представитель</label>
                <input class="form-control" type="text" name="name">
            </div>
            <div class="form-group">
                <label>Эл.почта</label>
                <input class="form-control" type="email" name="email">
            </div>              
            </div>
            <div class="col-12">
                <input name="yamap" wb="module=yamap" height="300">
            </div>
        </form>
    </wb-jq>
</html>