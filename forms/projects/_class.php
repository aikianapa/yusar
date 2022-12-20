<?php
class projectsClass extends cmsFormsClass {
    function beforeItemShow(&$item) {
        $data = $this->app->Dot($item);
        if (isset($item['header'][$this->app->vars('_sess.lang')])) {
            $item['header'] = $item['header'][$this->app->vars('_sess.lang')];
        } else {
            @$item['header'] = $item['header']['ru'];
        }

        $item['text'] = $data->get('text.'.$this->app->vars('_sess.lang')) 
            ? $data->get('text.'.$this->app->vars('_sess.lang')) : $data->get('text.ru');
        @$item['cover'] = $item['cover'][0]['img'];
        @$item['url'] = '/projects/'.wbFurlGenerate(@$item['header']);
    }

    function afterItemSave(&$item) {
        $this->beforeItemShow($item);
        $this->app->vars('_route.mode') == 'save' ? $this->app->shadow('/module/yonger/yonmap') : null;
    }
}
?>