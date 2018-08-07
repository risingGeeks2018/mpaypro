
<?php
include "connect.php";

$Tdate=date('Y/m/d H:i:s') ; // this to get current date as text .
$date = "STR_TO_DATE(".$Tdate.", '%d/%m/%Y %H:%i:%s')"  ;  
include 'connect.php';

$name = $_POST['name'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$pnumber = $_POST['pnumber'];
$apid = $_POST['apaid'];
$grading = $_POST['grading'];
$date = $_POST['date'];
$message =$_POST['message'];

$pay = ("INSERT INTO `pay` (`id`,`name`, `mname`, `lname`, `pnumber`, `apaid`, `grading`, `date`, `message`) VALUES (NULL, '$name', '$mname', '$lname', '$pnumber', '$apaid', '$grading', '$Tdate', '$message')");

 mysqli_query($connect,$pay);


 echo "<script>alert('Successfully Added $name');window.location.href=('studentsRecord.php');</script>";

 ?>
