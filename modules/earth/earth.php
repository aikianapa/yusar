<?php
class modEarth
{
    public function __construct($dom)
    {
        $this->init($dom);
    }


    public function init(&$dom)
    {
        $out = $dom->app->fromFile(__DIR__ ."/earth_ui.php");
        $out->fetch($dom->item);
		$dom->after($out)->remove();
    }
}
?>