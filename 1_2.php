<?php 

require_once "1_1.php";

class company_1 implements tur_company
{
    private array $data = [];
    private array $sum = [];
    public function standart_ticket_transaction()
    {
        array_push($this->sum , 100); // закидываем в кассу 100р
        $this->attach(__METHOD__);
        return 100;
    }

    public function gold_ticket_transaction()
    {
        array_push($this->sum , 200); // закидываем в кассу 200р
        $this->attach(__METHOD__);
        return 200;
    }

    public function return_ticket($type_ticket)
    {
        //возврат билета
        $this->attach(__METHOD__);
        $this->detach($type_ticket);
    }


    public function get_all_salary()
    {
        return $this->sum;
    }


    
    public function attach($data)
    {
        array_push($this->data , "Вызов из ".$data);
    }

    public function detach($type_ticket)
    {
        $index = array_search($type_ticket, $this->sum);
        unset($this->sum[$index]);
    }

    public function notify()
    {
        return $this->data;
    }
}




class company_2 implements tur_company
{
    private array $data = [];
    private array $sum = [];
    public function standart_ticket_transaction()
    {
        array_push($this->sum , 50); // закидываем в кассу 50р
        $this->attach(__METHOD__);
        return 100;
    }

    public function return_ticket($type_ticket)
    {
        //возврат билета
        $this->attach(__METHOD__);
        $this->detach($type_ticket);
    }


    public function get_all_salary()
    {
        return $this->sum;
    }


    
    public function attach($data)
    {
        array_push($this->data , "Вызов из ".$data);
    }

    public function detach($item_price)
    {
        $index = array_search($item_price, $this->sum);
        unset($this->sum[$index]);
    }

    public function notify()
    {
        return $this->data;
    }
}


?>