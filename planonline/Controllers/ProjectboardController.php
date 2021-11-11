<?php

declare(strict_types=1);

namespace Controllers;
use Core\Renderer;

class ProjectboardController
{
    public static function index(){
        Renderer::render("Projectboard");
    }
}