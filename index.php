<?php

require_once('vendor/autoload.php');


$url = $_SERVER['REQUEST_URI'];

$url = explode('/', $url);

if (file_exists('Controllers/' . $url[2] . 'Controller.php')) {

    $url[2] = ucfirst($url[2]) . 'Controller';

    $c = "Controllers\\" . $url[2];
    if (class_exists($c)) {
        $c = new $c();
        if (isset($url[3])) {
            if (method_exists($c, $url[3])) {
                try {
                    if (isset($url[4])) {
                        $c->{$url[3]}($url[4]);
                    } else {
                        $c->{$url[3]}();
                    }
                } catch (ArgumentCountError $argc) {
                    $error = 'Ce Fonction a des parametres';
                    die($error);
                }
            } else {
                $error = "la methode " . $url[3] . " n'existe pas ";
                die($error);
            }
        } else {
            if (method_exists($c, "liste")) {
                $c->liste();
            } else {
                $error = "Pas de view correspondant";
                die($error);
            }
        }
    } else {
        $error = "La Class " . $url[2] . " n'existe pas";
        die($error);
    }
} else {
    die("error");;
}




?>