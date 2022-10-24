<?php
class projectsClass extends cmsFormsClass {
    function beforeItemShow(&$item) {
        if (isset($item['header'][$this->app->vars('_sess.lang')])) {
            $item['header'] = $item['header'][$this->app->vars('_sess.lang')];
        } else {
            @$item['header'] = $item['header']['ru'];
        }
        @$item['cover'] = $item['cover'][0]['img'];
        @$item['url'] = '/projects/'.wbFurlGenerate(@$item['header']);
    }

    function afterItemSave(&$item) {
        $this->beforeItemShow($item);
    }
}
?>