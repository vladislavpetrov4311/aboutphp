<?php

class User
{
    public function __clone()
    {
        echo "111";
    }

    public function test()
    {
        echo "222";
    }
}

$user = new User();
$user2 = clone $user;


?>