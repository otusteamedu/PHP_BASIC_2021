<?php

declare(strict_types=1);

namespace Controllers;
use Core\Renderer;

class TaskController
{
    public static function index(){
        Renderer::render("Task");
    }
}
