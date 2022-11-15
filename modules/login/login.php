<?php

use Adbar\Dot;

class modLogin
{
    public function __construct(&$obj)
    {
        if ($obj instanceof wbDom) {
            $app = $obj->app;
            $dom = $obj;
            if (!isset($dom->params->mode)) {
                $dom->params->mode = "signin";
            }
            $this->mode = $dom->params->mode;
            $this->embed = true;
        } elseif ($obj instanceof wbApp) {
            $app = $obj;
            $dom = $app->fromString("");
            $this->mode = $app->vars("_route.mode");
            $this->embed = false;
        } else {
            return;
        }
        $this->app = $app;
        $this->dom = $dom;
        $this->init($dom);
    }

    public function init(&$dom = null)
    {
        $out = "";
        $app = $this->app;
        if ($dom == null) {
            $dom = $this->dom;
        }
        $call = $this->mode;
        $this->sett = $app->vars("_sett.modules.login");
        if (method_exists($this, $call)) {
            $out = $this->$call($dom);
        }
        if (!is_string($out) && $this->embed == false) {
            echo $out->fetch();
            die;
        } else {
            $dom->before($out);
            $dom->remove();
        }
    }

    public function signup($dom)
    {
        $app = $this->app;
        $app->vars('_route.tpl') ? $out = $app->getTpl($app->vars('_route.tpl')) : $out = null;
        if (!$out) {
            $out = $app->fromFile(__DIR__."/signup.php", true);
        }
        $out->item = $app->vars("_post");
        $out->item["_dir_"] = $out->path;
        $out->fetch();
        if ($app->vars('_route.user') && $app->vars('_route.confirm')) {
            $out->find('form')->remove();
            $user = $app->itemRead('users', $app->vars('_route.user'));
            if (md5($user['password']) == $app->vars('_route.confirm')) {
                $user['active'] = 'on';
                $user = $app->itemSave('users', $user);
                $app->login($user);
                $out->find('.sign-up-success')->removeClass('d-none');
                $out->find('.sign-up-success .m2')->removeClass('d-none');
            } else {
                $out->find("#signup .signup-wrong")->removeClass("d-none");
                $out->find("#signup .signup-wrong .m2")->removeClass("d-none");
            }
        } elseif (count($app->vars("_post"))) {
            $fld = "login";

            if ($app->vars("_sett.modules.login.loginby") == "phone") {
                $fld = "phone";
            }
            if ($app->vars("_sett.modules.login.loginby") == "email") {
                $fld = "email";
            }
            if ($app->vars("_sett.modules.login.loginby") == "userid") {
                $fld = "login";
            }

            $user = $this->checkUser($app->vars("_post.{$fld}"));

            if ($user) {
                $out->find("#signup .signup-wrong")->removeClass("d-none");
                $out->find("#signup .signup-wrong .m1")->removeClass("d-none");
            } else if ($app->vars("_post.password") !== $app->vars("_post.password-confirm")) {
                $out->find("#signup .signup-wrong")->removeClass("d-none");
                $out->find("#signup .signup-wrong .m4")->removeClass("d-none");
            } else {
                $app->vars("_post.password", wbPasswordMake($app->vars("_post.password")));
                $user=array(
               "id"               => wbNewId()
              ,"active"           => ""
              ,"role"             => "user"
          );
                if ($app->vars("_sett.modules.login.loginby") == "userid") {
                    $user["id"] = $app->vars("_post.{$fld}");
                    unset($_POST["login"]);
                }
                if ($app->vars("_sett.modules.login.status")) {
                    $user["active"] = $app->vars("_sett.modules.login.status");
                }
                if ($app->vars("_sett.modules.login.group")) {
                    $user["role"] = $app->vars("_sett.modules.login.group");
                }
                unset($user['password-confirm']);
                $user['id'] = wbNewId();
                $user = $app->postToArray($user);
                $user = $app->itemSave("users", $user);
                $confirm = md5($user['password']);
                $link = $this->app->vars("_route.host")."/sign-up/{$user['id']}-{$confirm}";
                $msg="Ссылка для активации аккаунта: <a href='{$link}'>{$link}</a>";
                $res = $this->app->mail($app->vars->('_sett.email'), $user['email'], "Регистрация ЮСАР+", "<html>{$msg}</html>");
                if ($res['error']) {
                    $out->find('.sign-up-wrong')->removeClass('d-none');
                    $out->find('.sign-up-wrog .m3')->removeClass('d-none');
                } else {
                    $out->find('.sign-up-success')->removeClass('d-none');
                    $out->find('.sign-up-success .m1')->removeClass('d-none');
                }

            }
        }
        return $out;
    }

    public function signin($dom)
    {
        $app = $dom->app;
        $out = null;
        $app->vars('_route.tpl') ? $out = $app->getTpl($app->vars('_route.tpl')) : null;
        !$out ? $out = $app->fromFile(__DIR__."/signin.php", true) : null;

        $out->item = $app->vars("_post");
        $out->item["_dir_"] = $out->path;

        $out->fetch();
        if (count($app->vars("_post"))) {
            $user = $this->checkUser($app->vars("_post.l"), $app->vars("_post.p"));
            if ($user) {
                header('Location: '.$user->group->url_login);
            } else {
                $out->find("#signin .signin-error")->removeClass("d-none");
            }
        }
        return $out;
    }

    public function signout(&$dom)
    {
        $app = $dom->app;
        $user = wbArrayToObj($app->vars("_user"));
        $group = wbArrayToObj($app->itemRead("users", $user->role));
        $app->vars->set("_sess.user", null);
        $app->vars->set("_env.user", null);
        setcookie("user", "", time()-3600, "/");
        if ($group->url_logout > "") {
            header('Location: '.$group->url_logout);
        } else {
            header('Location: /');
        }
        die;
    }

    public function recovery(&$dom)
    {
        $app = $dom->app;
        $app->vars('_route.tpl') ? $out = $app->getTpl($app->vars('_route.tpl')) : null;
        $fld = $app->vars("_sett.modules.login.loginby");
        $out->fetch();
        $error = false;
        if (!$app->vars("_post") && !$app->vars('_route.user')) {
            echo $out;
            return;
        }
        $out->find("#recovery form")->remove();
        if ($app->vars('_route.user') && $app->vars('_route.confirm')) {
            $user = $app->itemRead('users', $app->vars('_route.user'));
            if (md5($user['password-confirm']) == $app->vars('_route.confirm')) {
                $user['password'] = $user['password-confirm'];
                $user['password-confirm'] = "";
                $user = $app->itemSave('users', $user, true);
                $app->login($user);
                $out->find('.sign-up-success')->removeClass('d-none');
                $out->find('.sign-up-success .m2')->removeClass('d-none');
            } else {
                $out->find("#recovery .signup-wrong")->removeClass("d-none");
                $out->find("#recovery .signup-wrong .m2")->removeClass("d-none");
            }
        } else {
            $user = $this->checkUser($app->vars("_post.{$fld}"));
            $user = (array)$user;
            if (!$user or $user['active']!=='on') {
                $error = '.m1';
            } elseif ($app->vars("_post.password") !== $app->vars("_post.password-confirm")) {
                $error = '.m4';
            } else {
                $user['password-confirm'] = wbPasswordMake($app->vars("_post.password"));
                $app->itemSave('users', $user, true);
                $confirm = md5($user['password-confirm']);
                $link = $this->app->vars("_route.host")."/password-recovery/{$user['id']}-{$confirm}";
                $msg="Ссылка для восстановления пароля: <a href='{$link}'>{$link}</a>";
                $res = $this->app->mail($app->vars->('_sett.email'),$user['email'], "Восстановление пароля ЮСАР+", "<html>{$msg}</html>");
                if ($res['error']) {
                    $error = '.m3';
                } else {
                    $out->find('.sign-up-success')->removeClass('d-none');
                    $out->find('.sign-up-success .m1')->removeClass('d-none');
                }
            }
        }
        if ($error) {
            $out->find("#recovery .signup-wrong")->removeClass("d-none");
            $out->find("#recovery .signup-wrong {$error}")->removeClass("d-none");
        }
        echo $out;
    }

    public function checkUser($login=null, $pass=null)
    {
        $app = $_ENV["app"];
        if ($app->vars("_sett.modules.login.loginby") == "phone" or $app->vars("_post._loginby") == "phone") {
            $fld = "phone";
            $login = preg_replace("/\D/", '', $login);
        } elseif ($app->vars("_sett.modules.login.loginby") == "email" or $app->vars("_post._loginby") == "email") {
            $fld = "email";
        } elseif ($app->vars("_sett.modules.login.loginby") == "userid" or $app->vars("_post._loginby") == "userid") {
            $fld = "id";
        } else {
            $fld = "email";
        }
        $users = wbItemList("users", ['filter' => [
            $fld => $login,
            'isgroup' => ['$ne'=>'on'],
            'active' => 'on'
        ]]);

        if (!count($users['list'])) {
            return false;
        }
        $user = wbArrayToObj(array_shift($users['list']));
        $group = wbArrayToObj($app->ItemRead("users", $user->role));
        $user->group = $group;
        if ($pass == null) {
            return $user;
        } elseif ($group->active == "on" and wbPasswordCheck($pass, $user->password)) {
            return $user;
        }
        return false;
    }

// вход сделан через JS
/*
    public function modLoginSuccess(&$app, $user)
    {
        if ($user->avatar > "") {
            if ($user->avatar->length) {
                $user->avatar = $user->avatar[0];
            }
            $user->avatar="/uploads/users/{$user->id}/{$user->avatar->img}";
        } else {
            $user->avatar = "/engine/tpl/img/person.svg";
        }
        if ($user->group->url_logout == "") {
            $user->group->url_logout = "/";
        }
        if ($user->group->url_login == "") {
            $user->group->url_login = "/";
        }

        unset($user->password);
        $app->vars("_sess.user", wbObjToArray($user));
        $app->vars("_env.user", wbObjToArray($user));
        setcookie("user", $user->id, time()+3600);
        $app->user = $user;
        return $user;
    }
    */
}