<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);


$sql = "SELECT `res` FROM `my_pred` WHERE NOT `res` IS NULL;";

$res = mysqli_query($connect , $sql);


while ($row = $res->fetch_assoc()) {
    echo $row['res']."<br>";
    echo "<br>";

}



?>


