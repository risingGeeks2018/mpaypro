<?php
 $host ="localhost";
 $user = "root";
 $pass = "";
 $dbase="mpaypro";
 
 $conn= new mysqli($host,$user,$pass,$dbase);
 
 if($conn->connect_error){
 	
 	die("Connection failed" .$conn->connect_error);
 }else{
 	echo "Connected successfully";
 }
 
?>