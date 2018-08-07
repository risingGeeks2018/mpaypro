<!DOCTYPE html>
<html>
<head>
	<title>Records Display</title>
</head>
<body>

<style>

	h1{
		font-size: 30px;
		font-weight: bold;
		text-align: center;
	}
</style>

	<div>
		<h1> Registered Students Records </h1>

	</div>
	<table border="2px" cellpadding="3">
<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Middle Name</th>
				<th>Last Name</th>
				<th>Address</th>
				<th>Number</th>
				<th>Section</th>
				<th>Adviser</th>
				<th>Birthday</th>
				<th>Email</th>
				<th>Age</th>
				<th>Parent Name</th>
				<th>Parent Number</th>
				<th>Date</th>
			</tr>
		
<?php 
include 'connect.php';

$sql = mysqli_query($connect,"SELECT * from regis");

while ($row=mysqli_fetch_array($sql)) {
 ?>
<tr>
<td> <?php echo $row['id'] ?> </td>
<td> <?php echo $row['name'] ?> </td>
<td> <?php echo $row['mname'] ?> </td>
<td> <?php echo $row['lname'] ?> </td>
<td> <?php echo $row['address'] ?> </td>
<td> <?php echo $row['number'] ?> </td>
<td> <?php echo $row['section'] ?> </td>
<td> <?php echo $row['adviser'] ?> </td>
<td> <?php echo $row['birthday'] ?> </td>
<td> <?php echo $row['email'] ?> </td>
<td> <?php echo $row['age'] ?> </td>
<td> <?php echo $row['pname'] ?> </td>
<td> <?php echo $row['pnumber'] ?> </td>
<td> <?php echo $row['date'] ?> </td>
</td>
</tr>
<?php } ?>
	</table>
</body>
</html>
