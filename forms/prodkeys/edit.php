<html>
    <wb-include wb-form="common_modal">
        <wb-jq wb="prepend=.modal-header">
            <h6>Код продукта</h6>
        </wb-jq>
        <wb-jq wb="html=.modal-footer">
            <wb-include wb-form="common_formsave" />
        </wb-jq>
        <wb-jq wb="$dom->find('.modal')->addClass('effect-scale show removable');" />
    </wb-include>
    <wb-jq wb="$dom->find('.modal-dialog')->addClass('modal-xl')"/>
    <wb-jq wb="html=.modal-body">
        <form class="row" id="{{_form}}EditForm">
            <div class="col-sm-3 tx-center">
            <div class="form-group">
                <div>
                <input name="active" wb-module="swico" data-size="36">
                <label>Отображать</label>
                </div>
                <div>
                <a href="/form/prodkeys/qrcode/{{id}}" download>
                <img src="/form/prodkeys/qrcode/{{id}}" class="img-fluid">
                </a>
                </div>
                <div>
                    ID: {{id}}
                </div>
            </div>                
            </div>
            <div class="col-sm-9">
            <div class="form-group">
                <label>Клиент</label>
                <input class="form-control" type="text" name="name">
            </div>
            <div class="form-group">
                <label>Телефон</label>
                <input class="form-control" type="phone" wb-mask="+7 (999) 999-99-99" name="phone">
            </div>
            <div class="form-group">
                <label>Эл.почта</label>
                <input class="form-control" type="email" name="email">
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend cursor-pointer">
                        <span class="input-group-text genpass">
                            <svg class="mi mi-password-key size-20" wb-module="myicons"></svg>
                        </span>
                    </div>
                    <input class="form-control" type="text" name="pass">
                </div>
                <label>Пароль доступа</label>
                
            </div>

            <div class="form-group">
                <label>Файлы</label>
                <input name="specfiles" wb="module=filepicker&width=100&height=70" wb-path="/uploads/usr/{{id}}">
            </div>             
            </div>
        </form>
    </wb-jq>
                <script>
                    var generatePassword = function() {
                        let length = 8,
                            charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
                            retVal = "";
                            for (var i = 0, n = charset.length; i < length; ++i){
                                retVal += charset.charAt(Math.floor(Math.random() * n));
                            }
                        return retVal;
                    }

                    $('#{{_form}}EditForm .genpass').off('click')
                    $('#{{_form}}EditForm .genpass').on('click',function(){
                        let pass = generatePassword()
                        $('#{{_form}}EditForm .genpass').parents('.input-group').children('input').val(pass)
                    })
            </script>
</html>