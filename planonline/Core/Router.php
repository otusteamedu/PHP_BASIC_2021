<?php

declare(strict_types=1);

namespace Core;

class Router
{
    public static function run()
    {
        // считываем таблицу сокращенных ссылок
        $filename = "routs.json";
        if (file_exists($filename)) {
            $r = fopen($filename, "r");
        } else {
            echo "File with rout shortcuts not found!";
            exit();
        }
        $routs = json_decode(file_get_contents($filename), true);
        fclose($r);

        // блок инициализации MVC
        $controllerToCall = "\\Controllers\\";
        $actionToCall = "Default";
        $viewToCall = "Default";

        // считываем URL из строки браузера
        $path = trim(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), "/");

        if (empty($path)) {
            // TODO : сделать в дипломе дефолтный контроллер, который будет открывать дефолтную вью при воходе на сайт
            $controllerToCall = "DefaultController";
        } else {
            $path = explode("/", $path);
            $controller = mb_strtolower($path[0]);
            if (!empty($path[1])) {
                $actionToCall = mb_strtolower($path[1]);
            }

            if (array_key_exists($controller, $routs)) {
                $controllerToCall = $controllerToCall . "{$routs[$controller][0]}" . "Controller";
            }
        }

        if (!class_exists($controllerToCall, true)){
            Renderer::render('404');
        }

        // если не указана вью, пока вызовется общая дефолтная вью-заглушка в коде ниже
        // TODO : сделать в дипломе уникальные дефолтные вью для каждой из трех страниц

        if (!method_exists($controllerToCall, $actionToCall)){
            Renderer::render($viewToCall);
        }

        $rout = new ($controllerToCall);
        $rout->$actionToCall();
    }
}
