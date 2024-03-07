<?php

abstract class User
{
    public $name;

    abstract public function getinfo();
}


class Admin extends User
{

    public function getinfo()
    {
        return $this->name = 11;
    }

}


class Main extends User
{

    public function getinfo()
    {
        return $this->name = "qwert";
    }

}
$admin = new Admin();
echo $admin->getinfo();

$main = new Main();
echo $main->getinfo();


?>