<?php
class User {

    public function __construct() {
        echo "Construct Called";
    }
    public function register(){
        echo "User Registered";
    }
    public function login($username,$password){
        echo $username . "is now logged in";
        }

        public function __destruct(){
            echo "Destructor Called";
        }
}
$User=new User();

$User->register();
$User->login("Angel","1234");