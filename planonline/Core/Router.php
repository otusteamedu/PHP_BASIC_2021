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

        $controllerToCall = "Controllers\\Default";
        $actionToCall = "index";

        // считываем URL из строки браузера

        $path = trim(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), "/");

        var_dump($path);
        var_dump($controllerToCall);

        if (empty($path)) {
            $controllerToCall = $controllerToCall . "Controller.php";
            var_dump($controllerToCall);
        } else {
        }
    }
}
