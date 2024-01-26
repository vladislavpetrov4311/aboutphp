<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);



$sql = "SELECT `itog`, SQRT(`itog`) AS `new_itog` FROM `plane`;";

$res = mysqli_query($connect , $sql);

while ($row = $res->fetch_assoc()) {
    echo $row['itog']."<br>";
    echo $row['new_itog']."<br>";
    echo "<br>";

}



?>


