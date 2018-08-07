<?php
$error='';
if(isset($_POST['submit'])){
	if(empty($_POST['user']) || empty($_POST['pass'])){
		$error = "Username or Password is invalid";
	}
	else
	{
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$conn = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($conn,"test");
		$query = "SELECT * FROM userpass WHERE pass='$pass' AND user='user'";
		$result = mysqli_query($conn, $query) or die (mysqli_error());
		$rows = mysqli_num_rows($result);
		if($rows == 1){
			$_SESSION['user'] = $user;
			header("Location: welcome.php");
		}
		else
		{
			$error = "Username or Password is invalid";
		}
		mysqli_close($conn);

	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
<style>
	
	body{
		background-color:gray;
	}
	h1{
		font-size: 40px;
		font-weight: bold;
		text-align: center;
		margin-top: 1px;
		background-color: #ccc;
		width: 100%;
}
	h2{
		float: right;
		font-size: 50px;
		margin-left: 4px;
		background-color: white;
	}
	label{
		font-size: 30px;
		font-weight: italic;
		text-align: center;
		font-weight: bold;
		color: black;
		margin-top: 2%;
	}
	img{
		border-radius: 5px;
		margin-left: 10px;
		margin-top: 20%;

	}
	input[type=text], input[type=password]{
		width: 100%;
		padding: 2%;
		margin-top: 8px;
		border: 2px solid #ccc;
		font-size: 20px;
		color: black;
	}
	input[type=submit]{
		width: 50%;
		background-color:transparent;
		margin-top: 10%;
		border: 2px solid black;
		padding: 10px;
		padding-left:10px;
		font-size: 25px;
		cursor: pointer;
		border-radius: 5px;
		margin-bottom: 15px;
		font-weight: bolder;

	}
	.form{
		border: 3px solid black;
		border-radius: 10px;
		text-align: center; 
		background: transparent;
		margin-top: 3%;
		padding: 2%;
		float: right;
		margin-right: 5%;
	}
	.head{
		background:url(enhs.jpg);
		background-repeat: no-repeat;
		background-size: cover;
		border-radius: 10px;
		height: 250px;
		width: 100%;
	}

</style>
<div class="head">
		
	
</div>

<div class="form">
<form id='login' action='login.php' method='post'>
<h1>LOG IN</h1>
<input type='hidden' name='submitted' id='submitted' value='1'/>

<label>UserName:</label>
<br>
<input type='text' name='username' id='username'  maxlength="50" required="" />
<br>
<label>Password:</label>
<br>
<input type="password" name="password" id="password" maxlength="50" required="" />
<br>
<input type="submit" name="Submit" value="Submit" />

</div>
</form>
</head>
</html>

