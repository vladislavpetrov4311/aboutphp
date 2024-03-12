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
    public function __construct($user)
    {
        $this->obj = $user;
    }

    public function setname()
    {
        $this->obj->name = "admin";
        echo $this->obj->getname();
    }
}

$user = new User();

$admin = new Admin($user);
$admin->setname();


?>