<?php

interface cruiz
{
    public function go();
}

class in_ship implements cruiz
{
    public function go()
    {
        echo "отправляемся в круиз на корабле ";
    }
}


class in_plane implements cruiz
{

    public function go()
    {
        echo "отправляемся в круиз на самолёте ";
    }

}

?>