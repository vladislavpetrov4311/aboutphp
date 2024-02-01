<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);


$sql = "INSERT INTO `plane` (`vpp`,  `id` , `dlina` ) VALUES ('501' , '500' , '502');";

$res = mysqli_query($connect , $sql);

/*
while ($row = $res->fetch_assoc()) {
    echo $row['id']."<br>";
    echo $row['new_test']."<br>";
    echo "<br>";

}
*/


?>


