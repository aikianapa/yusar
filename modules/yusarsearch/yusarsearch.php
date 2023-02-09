<?php
class modYusarsearch
{
    public $app;
    public $dom;

    public function __construct(&$obj)
    {
        $obj = $obj;
        if ($obj instanceof wbDom) {
            $this->app = &$obj->app;
            $this->dom = &$obj;
            $this->initDom();
            return;
        } elseif ($obj instanceof wbApp) {
            $this->app = &$obj;
            $this->dom = $this->app->fromString("");
        } else {
            return;
        }
        $mode = $this->app->route->mode > '' ? $this->app->route->mode : 'init';
        $this->$mode();
        exit;
    }

    function init() {
        header("Content-type:application/json");
        $this->fields = ['header','title','text','descr','name','fullname'];
        $list = $this->app->itemList('_yonmap')['list'];



        $result = [];
        $find = mb_strtolower($this->app->vars('_post.find'));
        if ($find == '') {
            echo '[]';
            return;
        }
        $find = str_replace('ё', 'е', $find);
        $find = explode(' ', trim($find));
        $tables = [];
        foreach($list as &$l) {
            isset($tables[$l['f']]) ? null : $tables[$l['f']] = $this->app->itemList($l['f'],['filter'=>['active'=>'on']])['list'];
            //$item=$this->app->itemRead($l['f'], $l['i']);
            $item = $tables[$l['f']][$l['i']];
            $class=$this->app->formClass($l['f']);
            method_exists($class,'beforeItemShow') ? $class->beforeItemShow($item) : null;
            $l['header'] = $item['header'];
            $this->header = null;
            $context = $this->findContext($item);
            if ($this->inContext($context,$find)) {
                $cont = mb_substr($context, 0, 50);
                $context > $cont ? $cont.="..." : null;
                $result[] = [
                    'context' => $cont,
                    'header' => $this->header,
                    'url' => $l['u']
                ];
            }
        }
        echo json_encode($result);
    }

    function initDom() {
        $this->dom->addClass('mod-yusarsearch');
        $this->dom->attr('id') == '' ? $this->dom->attr('id',wbNewId()) : null;
        if (!isset($this->app->modYusarsearch)) {
            $this->app->modYusarsearch = true;
            $this->dom->after('<script wb-app src="/modules/yusarsearch/yusarsearch.js"></script>');
        } 
    }

    function inContext($context, $find) {
        $context = ' '.mb_strtolower($context);
        $context = str_replace('ё', 'е', $context);
        $result = true;
        foreach($find as $str) {
            strpos($context, $str) ? null : $result = false;
        }
        return $result;
    }


    function findContext($array)
    {
        $context = [];
        foreach ($array as $key=>$value) {
            if (in_array($key, $this->fields)) {
                if ($key == 'blocks') {
                    unset($value['header']);
                    unset($value['name']);
                }
                if ($this->header == null && in_array($key,['header','title'])) {
                    $this->header = $value;
                } else {
                    $context[] = $this->getValue($value);
                }
            } else if (is_array($value)) {
                $context[] = $this->findContext($value);
            }
        }
        return trim(strip_tags(implode(' ',$context)));
    }

    function getValue($value) {
        if (!is_array($value)) {
            return $value;
        }
        $result = [];
        $exc = ['img', 'images', 'cover', 'upload_url','link','video','width','height','active','blocks','id','form','widget'];
        foreach ($value as $key=>$val) {
            if (!in_array($key, $exc)) {
                if (is_array($val)) {
                    $result[] = $this->getValue($val);
                } else {
                    $result[] = $val;
                }
            }
        }
        return trim(strip_tags(implode(' ', $result)));
    }
}
?>