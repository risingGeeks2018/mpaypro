<?php
include "dbconnection.php";
session_start();

if
(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];

$username =stripcslashes($username);
$password =stripcslashes($password);

$query ="SELECT * FROM log_accounts WHERE username='$username' and password  ='$password'";

$result = mysqli_query($conn,$query) or die(mysql_error());
$rows=mysqli_num_rows($result);

if($rows =='1')
{
$_SESSION['username'] = $username;
?>
<script>alert('WELCOME BACK ADMIN!');window.location.href='../main.php';
</script>
<?php
}
else{
?>
<script>alert('Username and Password does not match'); window.location.href='../main.php';
</script>
<?php
}
}
?>
