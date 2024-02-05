<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);


$sql = "DROP VIEW `my_pred`;";

$res = mysqli_query($connect , $sql);

/*
while ($row = $res->fetch_assoc()) {
    echo $row['res']."<br>";
    echo "<br>";

}
*/


?>


