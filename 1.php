<?php

class user
{

    public $name;
    public $password;
  
    public function  __construct($main_name, $main_pass)
    {
        $this->name=$main_name;
        $this->password = $main_pass;
    }

    public function getinfo()
    {
        return "{$this->name}".' '."{$this->password}";
    }

    public function __destruct()
    {
        $this->name;
        $this->password;
    }
}

$admin = new User("admin", "root");

echo $admin->getinfo();

?>