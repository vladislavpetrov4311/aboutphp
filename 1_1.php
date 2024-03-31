<?php
require_once "1.php";

//узловой класс
class cruiz implements company
{
    private array $composite = [];
    public function add_list_company(company $item)
    {
        array_push($this->composite , $item);
    }

    public function about_functions_company(): string
    {
        $res = "";
        foreach($this->composite as $list)
        {
            $res .= $list->about_functions_company(); // из объекта листа обращаемся к его методу about_functions_company()
        }
        return $res;
    }


}


?>