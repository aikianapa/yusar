<?php
class modGmap
{
    public function __construct($dom)
    {
        $this->init($dom);
    }


    public function init(&$dom)
    {
        $out = $dom->app->fromFile(__DIR__ ."/gmap_ui.php");
        $field = $dom->attr("name");
        if ($dom->tag() !== "input") {
            $out->find(".gmap_editor")->remove();
            if ($field > "") {
                $out->find(".gmap_canvas")->inner(json_encode($dom->item[$field]));
            } else {
                if (!($dom->app->vars('_post._tid') > '' AND $dom->app->vars('_post._tid') == $dom->app->vars('_post.target') AND $dom->app->vars('_post.filter') > '') ) {
                    $dom->params->tpl = 'true';
                    $dom->addTpl();
                    $dom->fetch();
                }
                $out->find(".gmap")->append($dom->html());
                $out->find(".gmap")->append($dom->next('template'));
            }
        } else {
            if ($field > "") {
                $out->find("div.gmap .gmap_editor")->attr("name", $field);
            }
        }
        foreach ($dom->attributes() as $at => $val) {
            if (substr($at, 0, 2) !== "wb" and substr($at, 0, 5) !== "class") {
                $out->find(".gmap")->attr($at, $val);
            }
        }

        $out->fetch($dom->item);
		$dom->after($out)->remove();
    }
}
?>
