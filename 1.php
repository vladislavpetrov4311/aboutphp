<?php

class User
{
    protected $name;
    protected $pass;

    public function __construct($param , $password)
    {
        $this->name = $param;
        $this->pass = $password;
    }

    public function getname()
    {
        $res = "{$this->name}".' '."{$this->pass}";
        return $res;
    }
    
}


class Admin extends User
{
    
    protected $level;

    public function __construct($param , $password, $Mlevel)
    {
        parent::__construct($param, $password);
        $this->level = $Mlevel;
    }
        
    

    public function getname()
    {
         $main_res = parent::getname();
         $main_res.= " {$this->level}";
         return $main_res;
    }

    
}

$admin = new Admin("admin" , "root" , "main");
$inf = $admin->getname();
echo $inf;


?>