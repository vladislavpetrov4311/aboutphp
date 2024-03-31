<?php

interface company
{
    public function get_level_hotel(): int;
    public function get_price(): int;
}

class simpl_tur_company implements company
{
    public function get_level_hotel(): int
    {
        return 3;
    }

    public function get_price(): int
    {
        return 100;
    }

}

class tur_company1 implements company
{
    private $main_company;
    public function __construct(company $company)
    {
        $this->main_company = $company;
    }

    public function get_level_hotel(): int
    {
        return $this->main_company->get_level_hotel() + 1;
    }

    public function get_price(): int
    {
        return $this->main_company->get_price() + 100;
    }

}


class tur_company2 implements company
{
    private $main_company;
    public function __construct(company $company)
    {
        $this->main_company = $company;
    }

    public function get_level_hotel(): int
    {
        return $this->main_company->get_level_hotel() + 2;
    }

    public function get_price(): int
    {
        return $this->main_company->get_price() + 200;
    }

}




?>