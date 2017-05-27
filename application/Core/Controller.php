<?php

/**
 * @author tomiiide
 * @email ayotomiiide@gmail.com
 * @create date 2017-05-26 11:13:53
 * @modify date 2017-05-26 11:13:53
 * @desc Abstract Controller Class
*/
namespace Core;
use \Core\View;

 Class Controller{
     //use model
     protected function model($model){
         if($model){
             $modelObj = "\\Model\\".$model;
             return new $modelObj;
         }else return false;
     }
}
