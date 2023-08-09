<?php
 $username="root";
 $password="";
 $hostname="localhost";
 $dbname="registration";
 $dbconnect = mysqli_connect($hostname, $username, $password, $dbname);

 if($dbconnect->connect_error){
    die("Connection failed:". $dbconnect->connect_error);
 }
 echo "Connected succesfully to mysql";
$dbconnect->close();
 ?>
