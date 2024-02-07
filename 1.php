<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);


$sql = "START TRANSACTION;";
$res = mysqli_query($connect , $sql);
$sql1 = "INSERT INTO `new` (`new_test`) VALUES (200);";
$res1 = mysqli_query($connect , $sql1);
$sql2 = "COMMIT;";
$res2 = mysqli_query($connect , $sql2);

/*
while ($row = $res->fetch_assoc()) {
    echo $row['dlina']."<br>";
    echo "<br>";

}
*/


?>


