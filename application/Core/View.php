<?php
/**
 * Created by PhpStorm.
 * User: tomiiide
 * Date: 5/26/2017
 * Time: 3:32 PM
 */

namespace Core;
class View
{
    public static function render($view, $data = []){
        $viewFile = VIEWS.$view.'.php';
        if(file_exists($viewFile)){
            extract($data);
            require_once VIEWS.'_layout.php';
        }
    }
}