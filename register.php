
<?php
include "connect.php";

$Tdate=date('Y/m/d H:i:s') ; // this to get current date as text .
$date = "STR_TO_DATE(".$Tdate.", '%d/%m/%Y %H:%i:%s')"  ;  
include 'connect.php';

$name = $_POST['name'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$number = $_POST['number'];
$section = $_POST['section'];
$adviser = $_POST['adviser'];
$date = $_POST['date'];
$email = $_POST['email'];
$age = $_POST['age'];
$pname = $_POST['pname'];
$pnumber = $_POST['pnumber'];
$mon = $_POST['month'];
$day = $_POST['day'];
$year = $_POST['year'];

 $sql = ("INSERT INTO `regis` (`id`, `name`, `mname`, `lname`, `address`, `number`, `section`, `adviser`, `date`,`birthday`, `email`, `age`, `pname`, `pnumber`) VALUES (NULL, '$name', '$mname', '$lname', '$address', '$number', '$section', '$adviser','$Tdate','$mon $day $year', '$email', '$age', '$pname', '$pnumber');");

 mysqli_query($connect,$sql);


 echo "<script>alert('Successfully Added $name');window.location.href=('display.php');</script>";


// else{
//   echo "<script>alert('Incorrect Inputs');window.location.href=('insert.php');</script>";
//     } 
?>