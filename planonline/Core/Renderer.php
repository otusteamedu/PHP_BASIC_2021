<?php

declare(strict_types=1);

namespace Core;

class Renderer
{
    static function render(string $view, array $data = []) {
        extract($data, EXTR_OVERWRITE);
        require_once implode(DIRECTORY_SEPARATOR, [$_SERVER['DOCUMENT_ROOT'], 'Views', "{$view}View.php"]);
        exit();
    }
}