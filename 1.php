<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);



$sql = "SELECT *  FROM `plane` WHERE `vpp` LIKE 'р%!';";

$res = mysqli_query($connect , $sql);

while ($row = $res->fetch_assoc()) {
    echo $row['id']."<br>";
    echo $row['vpp']."<br>";
    echo $row['dlina']."<br>";
    echo $row['itog']."<br>";
    echo "<br>";

}



?>


