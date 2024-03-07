<?php

interface selectinf
{
    public function getname();
}

interface about
{
    public function getstatus();
}

//интерфейсы позволяют многократное наследование в отличие от абс.классов
interface second extends selectinf, about
{

}


class user implements second
{

    private $name;
    private $status;

    public function getname()
    {
        return $this->name = "Admin";
    }

    public function getstatus()
    {
        return $this->status = "root";
    }

}

$main_user = new user();
echo $main_user->getname();
echo $main_user->getstatus();

?>