<?php
/**
 * Created by PhpStorm.
 * User: tomiiide
 * Date: 5/26/2017
 * Time: 12:10 PM
 */

namespace Controller;


class AdminController extends \Core\Controller
{
    public function index(){
        echo("You are at Admin/index");
    }

    public function login($username,$action){
        echo("You are at Admin/index <br/>");
    }


}