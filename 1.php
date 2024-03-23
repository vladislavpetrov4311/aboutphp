<?php
require_once "1_1.php";
require_once "1_2.php";

interface cruiz
{
    public function get_obj();
    public function obj_hostel();
}

class obj_ship implements cruiz
{
    public function get_obj()
    {
        return new ship();
    }

    public function obj_hostel()
    {
        return new hostel_ship();
    }
}


class obj_plane implements cruiz
{

    public function get_obj()
    {
        return new plane();
    }

    public function obj_hostel()
    {
        return new hostel_plane();
    }

}

?>