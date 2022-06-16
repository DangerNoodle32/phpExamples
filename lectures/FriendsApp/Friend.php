<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include_once "users.php";

class Friend extends User {

    private $friends=[];
    //accessible from this/base/parent class and subclass/child class
    //protected
    function __construct($newName, $address, $phone)
    {
        parent::__construct($newName, $address, $phone);
    }

    

    public function setFriends($friend){
        // $this->friends = $friend;
        array_push($this->friends, $friend);
    }
    public function getFriends(){
        return $this->friends;
    }
}