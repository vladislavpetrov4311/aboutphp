<?php

class User
{
    private $name = "admin";
    private function getname()
    {
        return $this->name;
    }

    public function __call($met , $val)
    {
        if($met === "getname")
        {
            echo $this->getname();
        }
        else
        {
            echo "некорректное обращение к методу";
        }
    }
}


$user = new User();
$user->getname();



?>