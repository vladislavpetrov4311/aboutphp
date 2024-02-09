<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);


$sql = "CREATE INDEX `my_ind` ON `Q1` (`itog`);";
$res = mysqli_query($connect , $sql);


/*
while ($row = $res->fetch_assoc()) {
    echo $row['new_test']."<br>";
    echo "<br>";

}
*/


?>


