<?php

$host = 'my_bd';
$username = 'root';
$password = 'root';
$database = 'testDB';

$connect = mysqli_connect($host, $username , $password, $database);


$sql = "ALTER TABLE `new6`
                        
                         ADD `test4` TEXT (10) NULL,
                         ADD `test5` TEXT (10) NULL    
                        ;";

$res = mysqli_query($connect , $sql);

/*
while ($row = $res->fetch_assoc()) {
    echo $row['id']."<br>";
    echo $row['new_test']."<br>";
    echo "<br>";

}
*/


?>


