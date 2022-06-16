<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class User {
    private $dbcon = '';
    //accessible from anywhere
    public $version = '0.1';
    //accessible only from this class
    //private $name = 'Henna';
    private string $name = '';
    private string $address;
    private string $phone;
    private string $img;

    function __construct($newName, $address, $phone)
    {
        $this->dbcon = 'put your db connection string here';
        $this->name = $newName;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setImage($img)
    {
        $this->img = 'img/'.$img;
    }
    public function getImage()
    {
        return $this->img;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function getAddress()
    {
        return $this->address;
    }

}

?>