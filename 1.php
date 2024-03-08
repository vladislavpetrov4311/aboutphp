<?php

class User
{
    public static $name = "111";
    public static function test()
    {
        return self::$name;
    }

    public static function __callStatic($met, $args)
    {
        echo "попытка обрещения к несуществующему статическому методу";
    }
}

echo User::test2();





?>