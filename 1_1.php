<?php
require_once "1.php";

class Factory_Method
{
    public function buy_ticket_ship()
    {
        return new in_ship();
    }

    public function buy_ticket_plane()
    {
        return new in_plane();
    }
}



?>