<?php

declare(strict_types=1);

namespace Controllers;
use Core\Renderer;

class DashboardController
{
    public static function index(){
        Renderer::render("Dashboard");
    }
}
