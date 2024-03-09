<?php

class classExceptions extends Exception
{
    public $text;
    public function __construct($text)
    {
        $this->text = $text;
    }
    public function gettext()
    {
        return $this->text;
    }
}




$name = "qwe.php";

try
{
    if(!file_exists($name))
    {
        throw new classExceptions("not founf file");
    }  

} catch (classExceptions $e)
     {
        echo "исключение ".$e->gettext();
     }
    






?>