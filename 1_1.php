<?php
require_once "1.php";

class strategy_plane implements cruiz
{
    public function get_price()
    {
        echo "цена за перелёт 200р ";
    }

    public function get_tur()
    {
        echo "перелёт на ИЛ-76 ";
    }
}

class strategy_ship implements cruiz
{
    public function get_price()
    {
        echo "цена за отплыв 100р ";
    }

    public function get_tur()
    {
        echo "переплыв через океан ";
    }
}



?>