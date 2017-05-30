<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 5/29/17
 * Time: 4:05 PM
 */

namespace Model;


use Core\Model;

class Admin extends Model
{
  public $username;
  public $password;

  public function login()
  {
    echo "Logic for login.php " . $this->username . " with password: " . $this->password . ' in goes here...';
  }
}