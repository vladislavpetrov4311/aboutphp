<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);



$sql = "SELECT SUM(`itog`) AS `result` FROM `plane` WHERE `id` = 30;";

$res = mysqli_query($connect , $sql);

while ($row = $res->fetch_assoc()) {
    echo $row['result']."<br>";
    echo "<br>";

}



?>


