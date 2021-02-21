<?php
class modListtype
{
    public function __construct($dom)
    {
        $this->init($dom);
    }
    public function init($dom)
    {
		$app = &$_ENV['app'];
		$p = $app->vars('_route.mode');
		in_array($p, ['list','grid']) ? $_SESSION["listtype"] = $p : $_SESSION["listtype"] = 'grid';
        $check=explode("/", $_SERVER["REQUEST_URI"]);
		session_write_close();
        Header("HTTP/1.0 200 OK");
        header("Refresh:0; url=".$_SERVER["HTTP_REFERER"]);
        exit;
    }
}
?>
