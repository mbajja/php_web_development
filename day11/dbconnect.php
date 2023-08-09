<?php
 $username="root";
 $password="";
 $hostname="localhost";
 $dbname="users";
 $dbconnect = new mysqli($hostname, $username, $password, $dbname);

 if($dbconnect->connect_error){
    die("Connection failed:". $dbconnect->connect_error);
 }
 echo "Connected succesfully to mysql";
$dbconnect->close();
 ?>

 
