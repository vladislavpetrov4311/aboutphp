<?php


class User
{

    public $name;

    public function getname()
    {
        return $this->name;
    }

}


class Admin
{

    public $obj;
    public function __construct()
    {
        $this->obj = new User();
    }

    public function setname()
    {
        $this->obj->name = "admin";
        echo $this->obj->getname();
    }
}

$admin = new Admin();
$admin->setname();


?>