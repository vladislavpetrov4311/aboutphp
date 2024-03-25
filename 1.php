<?php

class cruiz
{
    private static $tur;
    private function __construct()
    {
        //запрет на создание экзампляра класса извне через оператор new
    }

    public static function gettur()
    {
        if(empty(self::$tur))
        {
            self::$tur = new cruiz();
        }
        return self::$tur;
    }



    public function tur_plane()
    {
        echo "полёт на самолёте ";
    }
}




?>