<?php

abstract class User
{
    public $name;
}

abstract class User2 extends User
{
    abstract public function getinfo();
    //абстрактный класс позволяет реализовывать обычные методы
    public function test()
    {
        return $this->name = "123";
    }
}

class Admin extends User2
{

    public function getinfo()
    {
        return $this->name = 11;
    }

}

class Qwer extends User2
{
    //переопределяем абстрактный метод
    public function getinfo()
    {

    }
}



class Main extends User2
{

    private $my_test;
    public function getinfo()
    {
        return $this->name = "qwert";
    }

    public function getname()
    {
        return $this->name = 1+2;
    }

    public function test()
    {
        $this->my_test = parent::test();
        return $this->name = $this->my_test;
    }

}
$admin = new Admin();
echo $admin->getinfo();

$main = new Main();
echo $main->getinfo();
echo $main->getname();

echo $main->test();


?>