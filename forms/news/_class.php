<?php
class newsClass extends cmsFormsClass {
    function beforeItemShow(&$item) {
        if (isset($item['date'])) $item['date'] = date('d.m.Y H:i',strtotime($item['date']));
        $item['video'] = 'news';
    }
}
?>
