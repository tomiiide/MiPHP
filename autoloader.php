<?php 

/**
 * @author tomiiide
 * @email ayotomiiide@gmail.com
 * @create date 2017-05-26 10:34:26
 * @modify date 2017-05-26 10:34:26
 * @desc Auto class loader used in the php
*/

spl_autoload_register(function($classname){
    $classname = preg_replace('/\\\/',DIRECTORY_SEPARATOR,$classname);
    $classname = $classname.'.php';
    $classname = APP."/".$classname;
    if(file_exists($classname))require_once $classname;
});
