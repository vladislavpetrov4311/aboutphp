<?php

class User
{
    const qwer = 1;
    protected static $name;

    protected static function getinfo()
    {
        $main = self::$name = self::qwer;
        return $main;
    }
}

class Admin extends User
{

    public static function test()
    {
        $my_test = parent::getinfo();
        return $my_test;
    }

}

echo Admin::test();

?>