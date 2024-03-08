<?php

class User
{
    private $level;
    private $status;
    
    public function __get($arg)
    {
        echo "попытка получить значение скрытого или несуществующего свойства ".$arg;
    }

    public function __set($arg , $val)
    {  
       echo "попытка придать значение ".$val." скрытому или несуществующему свойству ".$arg;
    }
}


$user = new User();
$user->level;
$user->level12 = 12;



?>