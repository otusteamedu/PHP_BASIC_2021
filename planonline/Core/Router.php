<?php

declare(strict_types=1);

namespace Core;

class Router
{
    public static function run()
    {
        // считываем таблицу сокращенных ссылок

        $filename = "routs.json";

        if (file_exists($filename)){
            $r = fopen($filename, "r");
        } else {
            echo "File with rout shortcuts not found!";
            exit();
        }
        $routs = json_decode(file_get_contents($filename), true);
        fclose($r);

        $controllerToCall = "Plan\\Online\\Controllers\\Default";
        $actionToCall = "index";

    }
}
