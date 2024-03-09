<?php

class User
{

    public $name;
    public function __construct($text)
    {
        $this->name = $text;
    }

    public function checkText()
    {

        try {
            if($this->name != "root12")
            {
                throw new Exception("неверный пароль");
            }
            else
            {
                echo "Ok !";
            }
        } catch (Exception $e) {
            echo "исключение ".$e->getMessage();
            echo "<br> в файле ".$e->getFile();
            echo "<br> на строке ".$e->getLine();
            echo "<br> ".$e->__toString();
        }
    }

}

$admin = new User("root1e2");
$admin->checkText();



?>