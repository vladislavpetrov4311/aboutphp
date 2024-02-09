<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);


$sql = "ALTER TABLE `Q1` 
        ADD CONSTRAINT PRIMARY KEY (`id2`);";
$res = mysqli_query($connect , $sql);


/*
while ($row = $res->fetch_assoc()) {
    echo $row['new_test']."<br>";
    echo "<br>";

}
*/


?>


