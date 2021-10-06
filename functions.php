<?php
!isset($_COOKIE['listtype']) ? $_COOKIE['listtype'] = 'grid' : null;

//@include_once(__DIR__ . '/engine/modules/yonger/common/scripts/functions.php');

function getVideoList() {
    $app = &$_ENV['app'];
    $path = $app->vars('_env.path_app').'/tpl/assets/video/';
    $list = wbListFilesRecursive($path, true);
    $res = [];
    foreach($list as $video) {
        if (substr($video['file'],-4) == '.mp4') {
            $res[] = substr($video['file'],0,-4);
        }
    }
    return $res;

}
?>