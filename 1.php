<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);



$sql = "SELECT `id` FROM `plane` LIMIT 1,3;";
//краткая форма записи, выводится строки с 1 по 3
$res = mysqli_query($connect , $sql);

while ($row = $res->fetch_assoc()) {
    echo $row['id']."<br>";

}



?>


