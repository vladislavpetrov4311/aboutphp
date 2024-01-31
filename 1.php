<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);



$sql = "SELECT `id`, `new_test`FROM `plane`, `new` WHERE `id` = `new_test` 
        UNION 
        SELECT `new_test`, `id` FROM `new`, `plane`;";

$res = mysqli_query($connect , $sql);


while ($row = $res->fetch_assoc()) {
    echo $row['id']."<br>";
    echo $row['new_test']."<br>";
    echo "<br>";

}



?>


