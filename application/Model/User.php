<?php 

/**
 * @author tomiiide
 * @email ayotomiiide@gmail.com
 * @create date 2017-05-26 07:55:30
 * @modify date 2017-05-26 07:55:30
 * @desc User model
*/


namespace Model;

use Core\Model;

Class User extends Model {
    public $fullname;
    public $email;
    public $password;
    public $id;

    public function __construct($data){
        parent::__construct();
        if(!empty($data)){
            foreach ($data as $key => $value) {
                if(!empty($value)){
                    $this->{$key} = $value;
                }
            }
            
        }
    }

    public function register(){
        $query = $this->db->prepare("INSERT INTO users VALUES(0,:fullname,:email,:password)");
        if(!$query->execute(array(":fullname" => $this->fullname,":email" => $this->email,":password" => md5($this->password))))
            return false;
        $this->id = $this->db->lastInsertId();
        return $this;
    }
}