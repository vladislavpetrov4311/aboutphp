<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);

//ПРЕДУПРЕЖДЕНИЕ !!! 
//транзакция с явной ошибкой на стороне клиента всё равно выполняется
//нужно использовать транзакции только на стороне сервера СУБД 
$sql = "START TRANSACTION;";
$res = mysqli_query($connect , $sql);

$sql2 = "INSERT INTO `new` VALUES (9090);";
$res2 = mysqli_query($connect , $sql2);

$sql3 = "INSERT INTO `new` VALUES ('qwert');";
$res3 = mysqli_query($connect , $sql3);

$sql4 = "COMMIT;";
$res = mysqli_query($connect , $sql4);


$sql5 = "SELECT `new_test` FROM `new`;";
$res5 = mysqli_query($connect , $sql5);

while ($row = $res5->fetch_assoc()) {
    echo $row['new_test']."<br>";
    echo "<br>";

}


?>


