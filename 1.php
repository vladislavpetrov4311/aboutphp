<?php

class user 
{

public $name="имя";
public $password="пароль";
}

$admin = new user();
$simpUser = new user();

$admin->name="vlad";
$simpUser->name="simp";

echo $admin->name;
echo $simpUser->name;



?>