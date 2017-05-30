<?php
/**
 * Created by PhpStorm.
 * User: tomiiide
 * Date: 5/26/2017
 * Time: 11:46 AM
 */

namespace Controller;
use \Core\View;
use \Model\User;
class HomeController extends \Core\Controller
{
public function index(){

    View::render('index',["name" => "tomiiide"]);
}

public function register()
{
    $viewData =[];
    if(isset($_POST['register'])){
        $data = $_POST;
        $user = new User($data);
        if($user->register()){
            $viewData['message'] = "Registration successfull";
        }
        else{
            $viewData['message'] = "Error while Registering.Please try again";
        }
    }

    View::render('register',$viewData);
}
}