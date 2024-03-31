<?php

class Facade_company
{
    //класс для взаимодействия с более сложной системы
    private $level;
    private $logistic;

    public function __construct($logistic , $hotels)
    {
        $this->level = $hotels;
        $this->logistic = $logistic;
    }

    public function get_info_company1()
    {
        $lev = $this->level->level_hotel1();
        $logistic = $this->logistic->tur_in_plane();
        return "$lev\n$logistic";
    }

    public function get_info_company2()
    {
        $lev = $this->level->level_hotel2();
        $logistic = $this->logistic->tur_in_ship();
        return "$lev\n$logistic";
    }

}

class logistic
{
    public function tur_in_plane()
    {
        return "тур на самолёте";
    }

    public function tur_in_ship()
    {
        return "тур на корабле";
    }
}

class hotels
{
    public function level_hotel1()
    {
        return "у отеля 3 звезды";
    }

    public function level_hotel2()
    {
        return "у отеля 4 звезды";
    }
} 



?>