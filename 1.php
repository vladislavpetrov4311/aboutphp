<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);



$sql = "SELECT `id` , `itog` FROM `plane` WHERE `id` = 30 OR `vpp` IS NULL;";

$res = mysqli_query($connect , $sql);

while ($row = $res->fetch_assoc()) {
    echo $row['id']."<br>";
    echo $row['itog']."<br>";
    echo "<br>";

}



?>


