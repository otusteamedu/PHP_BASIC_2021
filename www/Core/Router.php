<?php

declare(strict_types=1);

namespace Core;

use \Plan\Online\Controllers;


class Router
{
    public static function run()
    {
        // считываем таблицу сокращенных ссылок
        
        if (file_exists("routs.json")){
            $r = fopen("routs.json", "r");
        } else {
            echo "File with rout shortcuts not found!";
            exit();
        }
        $routs = json_decode(file_get_contents($r), true);

        fclose($r);

        $controllerToCall = "Plan\\Online\\Controllers\\Default";
        $actionToCall = "index";
        
        $path=trim();
    }
}
