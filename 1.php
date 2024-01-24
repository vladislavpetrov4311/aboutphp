<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);



$sql = "SELECT `id` , `vpp` , `itog` FROM `plane` WHERE `id` = 30 AND `vpp` = 'русский текст !!!';";

$res = mysqli_query($connect , $sql);

while ($row = $res->fetch_assoc()) {
    echo $row['id']."<br>";
    echo $row['vpp']."<br>";
    echo $row['itog']."<br>";
    echo "<br>";

}



?>


