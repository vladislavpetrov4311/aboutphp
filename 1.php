<?php

class user1
{

    private static $name;

    public static function setname($main)
    {
        self::$name=$main;
    }

    public static function getname()
    {
        echo self::$name;
    }
}

//доступ к методы через свойство класса, а не с использованием объекта
user1::setname("root");
echo user1::getname();

?>