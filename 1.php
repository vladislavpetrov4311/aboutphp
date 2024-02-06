<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);


$sql = "CALL `my_proc`(76 , @q);";

$res = mysqli_query($connect , $sql);


$sql2 = "SELECT `dlina` FROM `plane`
         WHERE `vpp` = @q;";

$res2 = mysqli_query($connect , $sql2);

while ($row = $res2->fetch_assoc()) {
    echo $row['dlina']."<br>";
    echo "<br>";

}



?>


