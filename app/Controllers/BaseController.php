<?php

namespace App\Controllers;
use Jenssegers\Blade\Blade;

class BaseController
{
    public function render($path, $data = []){
        $blade = new Blade('./resources/views/', "storage");
        echo $blade->make($path, $data)->render();
    }
}