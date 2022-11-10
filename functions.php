<?php

!isset($_COOKIE['listtype']) ? $_COOKIE['listtype'] = 'grid' : null;

@include_once(__DIR__ . '/engine/modules/yonger/common/scripts/functions.php');

setlocale(LC_ALL, 'ru_RU.utf8');

function datetext($date)
{
    return strftime('%e %B %Y', strtotime($date));
}

function beforeShow(&$out) {
    $app = $_ENV['app'];
    $map = json_decode(file_get_contents($_ENV['dba'].'/_yonmap.json'),true);
    $fr = $to = [];
    foreach($map as $m) {
        if ($m['f'] == 'pages') {
            $fr[] = urlencode('['.$m['n'].']');
            $to[] = $m['u'];
        }
    }
    $out = str_replace($fr, $to, $out);
    return $out;
}


function getVideoList()
{
    $app = &$_ENV['app'];
    $path = $app->vars('_env.path_app').'/tpl/assets/video/';
    $list = wbListFilesRecursive($path, true);
    $res = [];
    foreach ($list as $video) {
        if (substr($video['file'], -4) == '.mp4') {
            $res[] = substr($video['file'], 0, -4);
        }
    }
    return $res;
}
function headerByPath($path='/')
{
    $app = $_ENV['app'];
    $json = json_decode(file_get_contents($app->route->path_app.'/database/_yonmap.json'), true);
    $json = $app->json($json);
    $lang = $app->vars('_sess.lang');
    $res = $json->where('u', $path)->get();
    if (count($res)) {
        $res = array_pop($res);
    }
    $item = $app->itemRead($res['f'], $res['i']);
    $header = '';
    if ($item && isset($item['header'])) {
        if ((array)$item['header'] === $item['header']) {
            @$header = isset($item['header'][$lang]) ? $item['header'][$lang] : $item['header']['ru'];
        } else {
            @$header = $item['header'];
        }
    }
    return $header;
}

function fileinfo($file)
{
    $file = __DIR__ . $file;
    if (is_file($file)) {
        $ext=pathinfo($file, PATHINFO_EXTENSION);
        $modif = date("d.m.y H:i", filemtime($file));
        $size=filesize($file);
        if ($size>1024*1024*1024) {
            $size=sprintf("%u", $size/(1024*1024*1024))."Гб";
        } elseif ($size>1024*1024) {
            $size=sprintf("%u", $size/(1024*1024))."Мб";
        } elseif ($size>1024) {
            $size=sprintf("%u", $size/1024)."Кб";
        } else {
            $size.="";
        }
        $list = array("modif"=>$modif,"size"=>$size,"ext"=>strtoupper($ext),"name"=>basename($file));
    } else {
        $list = array("modif"=>'',"size"=>'0 Кб',"ext"=>'',"name"=>basename($file));
    }
    return $list;
}
