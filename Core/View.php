<?php

namespace Core;

class View
{
    public function render($template, $params = [])
    {
        extract($params, EXTR_SKIP);
        $filePath = dirname(__DIR__) . "/App/Views/$template.html";
        if (is_readable($filePath)) {
            include($filePath);
        } else {
            echo " $filePath not found";
        }
    }
}
