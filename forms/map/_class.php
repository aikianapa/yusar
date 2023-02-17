<?php
class mapClass extends cmsFormsClass {

    function afterItemRead(&$item) {
        $data = $this->app->dot($item);
        $item['country'] = $data->get('country') == '' ? 'Россия' : $data->get('country');
    }

}
?>