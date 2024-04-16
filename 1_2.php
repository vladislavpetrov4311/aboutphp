<?php 

require_once "1_1.php";

class ticketTrue implements command
{
    private $ticket;
    public function __construct(ticket $ticket)
    {
        $this->ticket = $ticket;
    } 

    public function execute()
    {
        return $this->ticket->get_ticket();
    }
} 

class ticketFalse implements command
{
    private $ticket;
    public function __construct(ticket $ticket)
    {
        $this->ticket = $ticket;
    } 

    public function execute()
    {
        return $this->ticket->return_ticket();
    }
} 


?>