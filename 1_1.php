<?php

class tur_company1
{
    private cruiz $tur;
    public function __construct(cruiz $obj)
    {
        $this->tur = $obj;
    }

    public function get_price()
    {
        $level = $this->tur->four_star();
        echo "$level"." "."- цена за бронь 100р\n";
    }
}


class tur_company2
{
    private cruiz $tur;
    public function __construct(cruiz $obj)
    {
        $this->tur = $obj;
    }

    public function get_price()
    {
        $level = $this->tur->five_star();
        echo "$level"." "."- цена за бронь 200р\n";
    }
}


?>