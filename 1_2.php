<?php

require_once "1_1.php";

//управляющий класс
class get_strategy
{
    private $strategy;
    public function __construct($obj)
    {
        $this->strategy = $obj;
    }

    public function run_get_price()
    {
        $this->strategy->get_price();  
    }

    public function run_get_tur()
    {
        $this->strategy->get_tur();
    }
}



?>