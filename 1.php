<?php

class cruiz
{
    private $tur;
    private $logistic;

    public function __clone()
    {
        return $this;
    }

    public function get_tur($my_tur)
    {
        echo $this->tur = $my_tur;
    }

    public function get_logistic($my_logistic)
    {
        echo $this->logistic = $my_logistic;
    }
   
}




?>