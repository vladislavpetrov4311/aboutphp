<?php

class User 
{

    public $name = "имя";

    public function getname()
    {
         return "{$this->name}". "{$this->surname}";   
    }
}

$admin = new User();
$admin->name="Ivan";
$admin->surname="Ivanov";

echo "пользователь {$admin->getname()}";


?>