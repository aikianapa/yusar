<?php
class newsClass extends cmsFormsClass {

    function beforeItemShow(&$item) {
        $Item = $this->app->Dot($item);
        isset($item['lang']) ? $lang = $item['lang'][$this->app->vars('_sess.lang')] : $lang = [];
        $item = (array)$lang + (array)$item;
        isset($item['date']) ? $item['dateshort'] = date('d.m.Y',strtotime($item['date'])) : null;
        isset($item['date']) ? $item['date'] = datetext($item['date']) : null;
        if (isset($item['header'][$this->app->vars('_sess.lang')])) {
            $item['header'] = $item['header'][$this->app->vars('_sess.lang')];
        } else {
            @$item['header'] = $item['header']['ru'];
        }
        $item['cover'] = $Item->get('cover.0.img');
        @$item['url'] = '/news/'.wbFurlGenerate(@$item['header']);
    }

    function afterItemRead(&$item) {
        $item['year'] =  date('Y', strtotime($item['date']));
    }

    function afterItemSave(&$item) {
        $this->app->vars('_route.mode') == 'save' ? $this->app->shadow('/module/yonger/yonmap') : null;
    }
}
?>