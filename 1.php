<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);


$sql = "ALTER TABLE `Q2` 
        ADD CONSTRAINT FOREIGN KEY (`new_test`) REFERENCES `Q1` (`id2`);";
$res = mysqli_query($connect , $sql);


/*
while ($row = $res->fetch_assoc()) {
    echo $row['new_test']."<br>";
    echo "<br>";

}
*/


?>


