<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);


$sql = "START TRANSACTION;";
$res = mysqli_query($connect , $sql);

$sql1 = "SAVEPOINT `A`;";
$res1 = mysqli_query($connect , $sql1);

$sql2 = "INSERT INTO `new` (`new_test`) VALUES (901);";
$res2 = mysqli_query($connect , $sql2);

$sql3 = "SELECT `new_test` FROM `new`;";
$res3 = mysqli_query($connect , $sql3);


while ($row = $res3->fetch_assoc()) {
    echo $row['new_test']."<br>";
    echo "<br>";

}


$sql4 = "ROLLBACK TO `A`;";
$res4 = mysqli_query($connect , $sql4);

$sql5 = "SELECT `new_test` FROM `new`;";
$res5 = mysqli_query($connect , $sql5);


while ($row = $res5->fetch_assoc()) {
    echo $row['new_test']."<br>";
    echo "<br>";

}



?>


