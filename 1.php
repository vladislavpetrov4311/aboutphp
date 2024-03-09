<?php


try
{
    $name = 10/0;
} catch (Throwable $e)
{
    echo "исключение деление на ноль ".$e->getMessage();
}

?>