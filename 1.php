<?php

class user
{

    public static $name;

    public static function getinfo()
    {
        return self::$name;
    }

}


$res = user::$name="admin";
echo $res;
$res2 = user::getinfo();
echo $res2;
?>