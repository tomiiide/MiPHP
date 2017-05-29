<?php
/**
 * Created by PhpStorm.
 * User: tomiiide
 * Date: 5/26/2017
 * Time: 12:10 PM
 */

namespace Controller;



use Core\Controller;
use Core\View;

class AdminController extends Controller
{
    public function index(){
        echo("You are at Admin/index");
    }

    public function login(){
      if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {

        $admin = $this->model("Admin");
        $admin->username = $_POST['username'];
        $admin->password = $_POST['password'];

        $admin->login();
      }
      View::render('admin/login');
    }


}