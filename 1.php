<?php

trait User
{
    public $name = "qwer";
    public function getname()
    {
        return $this->name;
    }
}

trait User2
{
    public $status;
    public function getstatus()
    {
        return $this->status;
    }
}

class Admin
{
    use User, User2;
    public function __construct()
    {
        $this->name = "user";
        $this->status = "root";
    }
}

$admin = new Admin();
echo $admin->getname().' '.$admin->getstatus();


?>