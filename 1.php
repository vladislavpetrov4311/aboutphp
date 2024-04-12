<?php

require_once "1_1.php";

class main_observer implements Observer
{
    private array $data;
    public function get_updata(tur_company $company)
    {
        return $company->notify();
    }
}


?>