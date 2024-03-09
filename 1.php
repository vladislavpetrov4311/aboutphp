<?php

$name = "namespace.php";

try
{

    if(!file_exists($name))
    {
        throw new Exception ("not founf file");
    }

} catch (Exception $e)
{
    echo "исключение ".$e->getMessage();
}

?>