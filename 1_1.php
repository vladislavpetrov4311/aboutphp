<?php

require_once "1_2.php";

class company_1 implements tur_company
{
    private bool $status;
    public function check_status_ticket(visitor $client)
    {
        $this->status = $client->status_ticket();
    }

    public function get_tur()
    {
        return "тур проходит на самолёте ИЛ-76";
    }

    public function get_hotel()
    {
        return "ночёвка в отеле 4 звёзд";
    }

    public function get_info()
    {
        $info = [];
        if($this->status != false)
        {
            array_push($info , $this->get_tur());
            array_push($info , $this->get_hotel());
        }
        else
        {
            array_push($info , "недействительный билет");
        }
        return $info;
    }

} 


class company_2 implements tur_company
{
    private bool $status;
    public function check_status_ticket(visitor $client)
    {
        $this->status = $client->status_ticket();
    }

    public function get_tur()
    {
        return "тур проходит на корабле";
    }

    public function get_hotel()
    {
        return "ночёвка в отеле 5 звёзд";
    }

    public function get_lunch()
    {
        return "обед на корабле";
    }

    public function get_info()
    {
        $info = [];
        if($this->status != false)
        {
            array_push($info , $this->get_tur());
            array_push($info , $this->get_hotel());
            array_push($info , $this->get_lunch());
        }
        else
        {
            array_push($info , "недействительный билет");
        }
        return $info;
    }

} 


?>